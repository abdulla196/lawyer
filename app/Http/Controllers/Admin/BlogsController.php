<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $items       = Blogs::orderBy('id','desc')->get();
        return view('admin.blogs.index', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validation rules
            $rules = [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'content_blog' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the mime types and size as needed
            ];

            // Custom validation messages
            $messages = [
                'image.image' => 'The uploaded file must be an image.',
                'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
                'image.max' => 'The image must not be greater than 2MB.',
            ];

            // Validate the request
            $validator = Validator::make($request->all(), $rules, $messages);

            // Check for validation failure
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Validation passed, continue with your logic
            $user = auth()->user();
            $recordedFilePath = null;

            if ($request->hasFile('image')) {
                $recordedFile = $request->file('image');
                $input['filename'] = time() . '.' . $recordedFile->getClientOriginalExtension();

                $destinationPath = public_path('blogs');
                $recordedFile->move($destinationPath, $input['filename']);

                $recordedFilePath = 'blogs/' . $input['filename'];
            }

            $url = $request->title;
            $string = str_replace(' ', '-', $url);

            $modifiedText = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            $modifiedText = preg_replace('/-+/', '-', $modifiedText);
            Blogs::create([
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content_blog,
                'navbar' => $request->navbar ? $request->navbar : 0,
                'home_page' => $request->home_page ? $request->home_page : 0,
                'user_id' => $user->id,
                'image' => $recordedFilePath,
                'token' => $request->_token,
                'url' => $modifiedText,
            ]);

            // Set a success flash message
            $request->session()->flash('success', 'Blog created successfully');


            // Redirect to the index page for blogs
        return redirect(route('blogs.index'));
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
        $blog = Blogs::where('id',$id)->first();

        return view('admin.blogs.create',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id , Blogs $blog)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content_blog' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the mime types and size as needed
        ];

        // Custom validation messages
        $messages = [
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image must not be greater than 2MB.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = Blogs::findOrFail($id);
        // Ensure the $id matches the $faq model
        if (!$blog) {
            abort(404); // or handle the mismatch as appropriate for your application
        }

        $recordedFilePath = null;

        if ($request->hasFile('image')) {
            $recordedFile = $request->file('image');
            $input['filename'] = time() . '.' . $recordedFile->getClientOriginalExtension();

            $destinationPath = public_path('blogs');
            $recordedFile->move($destinationPath, $input['filename']);

            $recordedFilePath = 'blogs/' . $input['filename'];
        }
        $user = auth()->user();
        $url = $request->title;
        $string = str_replace(' ', '-', $url);

        $modifiedText = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        $modifiedText = preg_replace('/-+/', '-', $modifiedText);
        // Update the FAQ with the validated data
        $blog->update([
            'title' => $request->title ? $request->title : $blog->title,
            'description' => $request->description? $request->description:$blog->description,
            'content' => $request->content_blog? $request->content_blog : $blog->content_blog,
            'user_id' => $user->id,
            'navbar' => $request->navbar ? $request->navbar : 0,
            'home_page' => $request->home_page ? $request->home_page : 0 ,
            'image' => $request->hasFile('image') ? $recordedFilePath : $blog->image,
            'token' => $request->_token,
            'url' => $modifiedText,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the FAQ by ID
            $blog = Blogs::findOrFail($id);

            // Soft delete the FAQ
            $blog->delete();

            // Redirect with success message
            return Redirect::route('blogs.index')->with('success', 'FAQ soft-deleted successfully');
        } catch (ModelNotFoundException $e) {
            // Handle the case where FAQ with the given ID is not found
            return Redirect::route('blogs.index')->with('error', 'FAQ not found');
        } catch (\Exception $e) {
            // Handle other exceptions or errors
            return Redirect::route('blogs.index')->with('error', 'Failed to soft-delete FAQ');
        }
    }
}
