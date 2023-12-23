<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items          = Faqs::orderBy('id','desc')->get();

        return view('admin.faq.index', [
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faqs::create([
            'question'  => $request->question,
            'answer'    => $request->answer,
        ]);

        session()->flash('success', 'FAQ Added successfully');
        return redirect(route('faq.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Faqs::where('id',$id)->first();

        return view('admin.faq.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id,Faqs $faq)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);
        $faq = Faqs::findOrFail($id);
        // Ensure the $id matches the $faq model
        if (!$faq) {
            abort(404); // or handle the mismatch as appropriate for your application
        }
        // Update the FAQ with the validated data
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the FAQ by ID
            $faq = Faqs::findOrFail($id);

            // Soft delete the FAQ
            $faq->delete();

            // Redirect with success message
            return Redirect::route('faq.index')->with('success', 'FAQ soft-deleted successfully');
        } catch (ModelNotFoundException $e) {
            // Handle the case where FAQ with the given ID is not found
            return Redirect::route('faq.index')->with('error', 'FAQ not found');
        } catch (\Exception $e) {
            // Handle other exceptions or errors
            return Redirect::route('faq.index')->with('error', 'Failed to soft-delete FAQ');
        }
    }
}
