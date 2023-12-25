<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PricingController extends Controller
{
    //
    public function index()
    {
        $items          = Pricing::orderBy('id','desc')->get();

        return view('admin.pricing.index', [
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Pricing::create([
            'documents'  => $request->documents,
            'charges'    => $request->charges,
            'requirements'    => $request->requirements,
            'type'    => $request->type,
        ]);

        session()->flash('success', 'Pricing Added successfully');
        return redirect(route('pricing.index'));
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
        $item = Pricing::where('id',$id)->first();

        return view('admin.pricing.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id,Pricing $price)
    {
        $request->validate([
            'documents' => 'required|string',
            'charges' => 'required|string',
            'requirements' => 'required|string',
            'type' => 'required|string',
        ]);
        $price = Pricing::findOrFail($id);
        // Ensure the $id matches the $price model
        if (!$price) {
            abort(404); // or handle the mismatch as appropriate for your application
        }
        // Update the Pricing with the validated data
        $price->update([
            'documents'  => $request->documents,
            'charges'    => $request->charges,
            'requirements'    => $request->requirements,
            'type'    => $request->type,
        ]);

        return redirect()->route('pricing.index')->with('success', 'Pricing updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the Pricing by ID
            $price = Pricing::findOrFail($id);

            // Soft delete the Pricing
            $price->delete();

            // Redirect with success message
            return Redirect::route('pricing.index')->with('success', 'Pricing soft-deleted successfully');
        } catch (ModelNotFoundException $e) {
            // Handle the case where Pricing with the given ID is not found
            return Redirect::route('pricing.index')->with('error', 'Pricing not found');
        } catch (\Exception $e) {
            // Handle other exceptions or errors
            return Redirect::route('pricing.index')->with('error', 'Failed to soft-delete Pricing');
        }
    }
}
