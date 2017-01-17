<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Input;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::get();

        return view('dashboard.settings.index', compact( 'settings' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $settings = new Setting;

        foreach ( $data as $key => $value ) {
            $settings->key = $key;
            $settings->value = $value;

            if ( ( !empty($data['site_logo']) AND $key == 'site_logo' ) || ( !empty($data['site_default_image']) AND $key == 'site_default_image' ) ) {
                $currentImage = $settings->where('key', $key)->first();

                $file = Input::file($key);
                $path = 'dashboard/images/settings/';

                deleteFile($path.$currentImage->value);
                $upload = upload($file, $path);

                $settings->value = $path.$upload;
            }

            if ( $settings->where('key', $key)->count() > 0 ) {
                $settings->where('key', $key)->update([
                    'value' => $settings->value
                ]);
            } else {
                $settings->save();
            }
        }

        return redirect()->back()->with('message', 'Settings successfully saved!');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
