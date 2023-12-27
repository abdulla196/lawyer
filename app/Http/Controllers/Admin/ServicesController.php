<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $items       = Services::orderBy('id','desc')->get();
        return view('admin.services.index', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {// Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ];

        // Custom validation messages
        $messages = [
            'name.required' => 'Services name is required',
            'title.required' => 'Services title is required',
            'description.required' => 'description name is required',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $url = $request->title;
        $string = str_replace(' ', '-', $url);

        $modifiedText = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        $modifiedText = preg_replace('/-+/', '-', $modifiedText);

        // Create a new blog record in the database
        Services::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content_service,
            'navbar' => $request->navbar ? $request->navbar : 0,
            'url' => $modifiedText,
        ]);

        // Set a success flash message
        $request->session()->flash('success', 'Services created successfully');


        // Redirect to the index page for blogs
        return redirect(route('services.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $service = Services::where('id',$id)->first();

        return view('admin.services.create',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Services $service)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ];

        // Custom validation messages
        $messages = [
            'name.required' => 'Services name is required',
            'title.required' => 'Services title is required',
            'description.required' => 'description name is required',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $serivce = Services::findOrFail($id);
        // Ensure the $id matches the $faq model
        if (!$serivce) {
            abort(404); // or handle the mismatch as appropriate for your application
        }

        $user = auth()->user();
        $url = $request->name;
        $string = str_replace(' ', '-', $url);

        $modifiedText = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        $modifiedText = preg_replace('/-+/', '-', $modifiedText);

        // Update the FAQ with the validated data
        $serivce->update([
            'name' => $request->name ? $request->name : $serivce->name,
            'title' => $request->title ? $request->title : $serivce->title,
            'description' => $request->description? $request->description:$serivce->description,
            'content' => $request->content_service? $request->content_service:$serivce->content,
            'navbar' => $request->navbar ? $request->navbar : 0,
            'url' => $modifiedText
        ]);

        return redirect()->route('services.index')->with('success', 'Blog updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the FAQ by ID
            $blog = Services::findOrFail($id);

            // Soft delete the FAQ
            $blog->delete();

            // Redirect with success message
            return Redirect::route('services.index')->with('success', 'FAQ soft-deleted successfully');
        } catch (ModelNotFoundException $e) {
            // Handle the case where FAQ with the given ID is not found
            return Redirect::route('services.index')->with('error', 'FAQ not found');
        } catch (\Exception $e) {
            // Handle other exceptions or errors
            return Redirect::route('services.index')->with('error', 'Failed to soft-delete FAQ');
        }
    }
}
