<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function contact_us()
    {
        $contact_us = Contact::all();
        return view('backend.contact',['contact' => $contact_us]);
    }

    public function contact_update(Request $request)
    {
        $contact_images = Contact::all();
        $fileInfo = $contact_images[0]->page_image;
        $fileInfo_two = $contact_images[0]->ceo_image;
        $locale = $request->input('locale');
        $page_title = $request->input('contact_us_title');
        $page_keywords = $request->input('contact_us_keywords');
        $page_description = $request->input('contact_us_description');
        $header_title = $request->input('header_title');
        $header_description = $request->input('header_description');
        $content_header_title = $request->input('content_header_title');
        $content_header_description = $request->input('content_header_description');

        $contact_name =  $request->input('contact_name');
        $contact_email =  $request->input('contact_email');
        $contact_subject =  $request->input('contact_subject');
        $contact_message =  $request->input('contact_message');
        $contact_button =  $request->input('contact_button');
        $contact_ceo_title =  $request->input('contact_ceo_title');
        $contact_ceo_description =  $request->input('contact_ceo_description');
        $contact_follow =  $request->input('contact_follow');
        $contact_mail_us =  $request->input('contact_mail_us');
        $contact_mail_us_details =  $request->input('contact_mail_us_details');
        $contact_address =  $request->input('contact_address');
        $contact_address_details =  $request->input('contact_address_details');
        $contact_phone =  $request->input('contact_phone');
        $contact_phone_details =  $request->input('contact_phone_details');
        $contact_map_lat =  $request->input('contact_map_lat');
        $contact_map_long =  $request->input('contact_map_long');
        $page_image =  $request->file('page_image');
        $ceo_image =  $request->file('ceo_image');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }
        if(!empty($ceo_image)) {
            $fileInfo_two = $ceo_image->getClientOriginalName();
            $ceo_image->move(public_path('uploads/'),$fileInfo_two);
        }

            $query = Contact::where('locale', $locale)->first();
            
            if(empty($query->locale) || $query->locale != $locale ){
                // insert
                DB::table('contact_us')->insert([
                    [
                        'locale' => $locale, 
                        'page_title' => $page_title, 
                        'page_keywords' => $page_keywords, 
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'content_header_title' => $content_header_title,
                        'content_header_description' => $content_header_description,
                        'contact_name' => $contact_name,
                        'contact_email' => $contact_email,
                        'contact_subject' => $contact_subject,
                        'contact_message' => $contact_message,
                        'contact_button' => $contact_button,
                        'contact_ceo_title' => $contact_ceo_title,
                        'contact_ceo_description' => $contact_ceo_description,
                        'contact_follow' => $contact_follow,
                        'contact_mail_us' => $contact_mail_us,
                        'contact_mail_us_details' => $contact_mail_us_details,
                        'contact_address' => $contact_address,
                        'contact_address_details' => $contact_address_details,
                        'contact_phone' => $contact_phone,
                        'contact_phone_details' => $contact_phone_details,
                        'contact_map_lat' => $contact_map_lat,
                        'contact_map_long' => $contact_map_long,
                        'page_image' => '/uploads/'.$fileInfo,
                        'ceo_image' => '/uploads/'.$fileInfo_two,
                        'created_at' => now(),
                    ]
                ]);
            } else {
                // update
                DB::table('contact_us')->where('locale', $locale)->update(
                    [
                        'locale' => $locale,
                        'page_title' => $page_title,
                        'page_keywords' => $page_keywords,
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'content_header_title' => $content_header_title,
                        'content_header_description' => $content_header_description,
                        'contact_name' => $contact_name,
                        'contact_email' => $contact_email,
                        'contact_subject' => $contact_subject,
                        'contact_message' => $contact_message,
                        'contact_button' => $contact_button,
                        'contact_ceo_title' => $contact_ceo_title,
                        'contact_ceo_description' => $contact_ceo_description,
                        'contact_follow' => $contact_follow,
                        'contact_mail_us' => $contact_mail_us,
                        'contact_mail_us_details' => $contact_mail_us_details,
                        'contact_address' => $contact_address,
                        'contact_address_details' => $contact_address_details,
                        'contact_phone' => $contact_phone,
                        'contact_phone_details' => $contact_phone_details,
                        'contact_map_lat' => $contact_map_lat,
                        'contact_map_long' => $contact_map_long,
                        'page_image' => '/uploads/'.$fileInfo,
                        'ceo_image' => '/uploads/'.$fileInfo_two,
                        'updated_at' => now(),
                    ]
                );
            }
    return back()->withInput();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
