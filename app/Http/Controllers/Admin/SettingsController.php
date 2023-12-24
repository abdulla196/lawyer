<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setting     = Settings::first();

        return view('admin.setting', [
            'setting'    => $setting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|string',
            'whatsapp' => 'required|string',
            'address' => 'required|string',
            'consultation' => 'required|string',
        ];

        // Custom validation messages
        $messages = [

            'name.required' => 'The name is required.',
            'email.required' => 'The email is required.',
            'phone.required' => 'The phone is required.',
            'whatsapp.required' => 'The whatsapp is required.',
            'address.required' => 'The address is required.',
            'consultation.required' => 'The consultation is required.',
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

        if ($request->file('image')) {

            $recordedFile = $request->file('image');
            $input['filename'] = time() . '.' . $recordedFile->getClientOriginalExtension();

            $destinationPath = public_path('settings');
            $recordedFile->move($destinationPath, $input['filename']);

            $recordedFilePath = 'settings/' . $input['filename'];
        }

        // Create a new blog record in the database
        Settings::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'address' => $request->address,
            'consultation' =>  $request->consultation,
            'user_id' => $user->id,
            'logo' => $recordedFilePath,
            'token' => $request->_token,
        ]);

        // Set a success flash message
        $request->session()->flash('success', 'Setting created successfully');


        // Redirect to the index page for blogs
        return redirect(route('settings.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id , Settings $setting)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|string',
            'whatsapp' => 'required|string',
            'address' => 'required|string',
            'consultation' => 'required|string',
        ];

        // Custom validation messages
        $messages = [

            'name.required' => 'The name is required.',
            'email.required' => 'The email is required.',
            'phone.required' => 'The phone is required.',
            'whatsapp.required' => 'The whatsapp is required.',
            'address.required' => 'The address is required.',
            'consultation.required' => 'The consultation is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $setting = Settings::findOrFail($id);
        // Validation passed, continue with your logic
        $user = auth()->user();
        $recordedFilePath = null;

        if ($request->file('image')) {

            $recordedFile = $request->file('image');
            $input['filename'] = time() . '.' . $recordedFile->getClientOriginalExtension();

            $destinationPath = public_path('settings');
            $recordedFile->move($destinationPath, $input['filename']);

            $recordedFilePath = 'settings/' . $input['filename'];
        }

        // Create a new blog record in the database
        $setting->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'address' => $request->address,
            'consultation' =>  $request->consultation,
            'user_id' => $user->id,
            'logo' => $request->hasFile('image') ? $recordedFilePath : $setting->logo,
            'token' => $request->_token,
        ]);
        return redirect()->route('settings.index')->with('success', 'Settings updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
    public function SocialIndex(){
        $social     = Social::get();

        return view('admin.social', [
            'social'    => $social
        ]);
    }
    public function SocialStore(Request $request){
        $data = $request->all();

        Social::truncate();
        for ($i = 0; $i < count($data['name']); $i++) {
            $recordedFile = $data['image'][$i];

            // Use a custom filename based on the 'name' field
            $customFilename = $this->generateCustomFilename($data['name'][$i]);
            $filename = time() . '_' . $customFilename . '.' . $recordedFile->getClientOriginalExtension();

            $destinationPath = public_path('social');
            $recordedFile->move($destinationPath, $filename);

            $recordedFilePath = 'social/' . $filename;

            Social::create([
                'name'  => $data['name'][$i],
                'link'  => $data['link'][$i],
                'image' => $recordedFilePath,
            ]);
        }
        return redirect()->route('social.index')->with('success', 'Social media Added successfully');
    }
    private function generateCustomFilename($name)
    {
        // You can customize the logic for generating the filename based on the 'name' field
        // For example, you might want to remove spaces and convert to lowercase
        return strtolower(str_replace(' ', '_', $name));
    }
}
