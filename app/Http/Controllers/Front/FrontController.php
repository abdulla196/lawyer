<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Blogs;
use App\Models\ContactUs;
use App\Models\Faqs;
use App\Models\Services;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services    = Services::orderBy('id','asc')->whereNull('deleted_at')->limit(6)->get();
        $blogs       = Blogs::orderBy('id','desc')->whereNull('deleted_at')->limit(6)->get();
        $faqs        = Faqs::orderBy('id','desc')->get();

        return view('welcome', [
            'services'    => $services,
            'blogs'       => $blogs,
            'faqs'          => $faqs,
        ]);
    }

    public function Blogs()
    {
        $blogs       = Blogs::orderBy('id','desc')->whereNull('deleted_at')->get();
        return view('blogs',[
            'blogs'       => $blogs
            ]);
    }
    public function BlogDetails($bolg)
    {

        $blog = Blogs::where('url',$bolg)->first();
        return view('blogs-details',compact('blog'));
    }
    public function Services(){
        return view('our-services');
    }
    public function ServicesDetails($service)
    {

        $service = Services::where('url',$service)->first();
        return view('service-details',compact('service'));
    }
    public function ContactUs()
    {
        return view('contact-us');
    }
    public function StoreContact(ContactFormRequest $request)
    {
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'token' => $request->_token,
        ]);
        return redirect(route('contactUs'))->with('success', 'Your message was sent, thank you!');;
    }
    public function AboutUS(){
        return view('about');
    }
}
