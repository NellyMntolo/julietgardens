<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\Gallery;
use App\Models\backend\Galleries;

class GalleryController extends Controller
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

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('backend.gallery',['gallery' => $gallery]);
    }

    public function gallery_update(Request $request)
    {
        $gallery_images = Gallery::all();
        $fileInfo = $gallery_images[0]->page_image;
        $locale = $request->input('locale');
        $page_title = $request->input('gallery_title');
        $page_keywords = $request->input('gallery_keywords');
        $page_description = $request->input('gallery_description');
        $header_title = $request->input('header_title');
        $header_description = $request->input('header_description');
        $content_header_title = $request->input('content_header_title');
        $content_header_description = $request->input('content_header_description');
        $page_image = $request->file('gallery_image');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }

            $query = Gallery::where('locale', $locale)->first();            

            if(empty($query->locale) || $query->locale != $locale ){
                // insert
                DB::table('gallery')->insert([
                    [
                        'locale' => $locale, 
                        'page_title' => $page_title, 
                        'page_keywords' => $page_keywords, 
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'content_header_title' => $content_header_title,
                        'content_header_description' => $content_header_description,
                        'page_image' => '/uploads/'.$fileInfo,
                        'created_at' => now(),
                    ]
                ]);
            } else {
                // update
                DB::table('gallery')->where('locale', $locale)->update(
                    [
                        'locale' => $locale,
                        'page_title' => $page_title,
                        'page_keywords' => $page_keywords,
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'content_header_title' => $content_header_title,
                        'content_header_description' => $content_header_description,
                        'page_image' => '/uploads/'.$fileInfo,
                        'updated_at' => now(),
                    ]
                );
            }
    return back()->withInput();
    }

    public function all_galleries () {
        $galleries = Galleries::all();
        return view('backend.all_galleries', ['galleries' => $galleries]);
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
