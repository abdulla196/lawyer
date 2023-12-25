<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\ContactUs;
use App\Models\Services;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Services::all()->count();
        $messages = ContactUs::all()->count();
        $blogs = Blogs::all()->count();
        return view('dashboard',[
            'services_count' => $services,
            'messages_count' => $messages,
            'blogs_count' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.show');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function Achievements(){}
    public function Messages(){
        $user = auth()->user();
        $items       = ContactUs::get();
        return view('admin.messages.index', [
            'items' => $items,
            'total_rows' => count($items),
        ]);
    }
    public function ChangeStatus($id)
    {
        $contact = ContactUs::findOrFail($id);

        $contact->update([
            'status' => 'contacted',
        ]);
        return redirect()->route('messages')->with('success', 'تم التواصل بنجاح');
    }
    public function Profile(){
        return view('profile.show');
    }
}
