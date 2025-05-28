<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\Index;
use App\Models\backend\Index_sliders;
use App\Models\backend\Index_news;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $index = Index::all();
        return view('backend.index',['index' => $index]);
        // return view('backend.index');
    }

    public function index_update(Request $request)
    {
        $index_images = Index::all();
        $fileInfo = $index_images[0]->page_image;
        $fileInfo_two = $index_images[0]->section_two_image_two;
        $fileInfo_three = $index_images[0]->section_four_image;
        $locale = $request->input('locale');
        $page_title = $request->input('page_title');
        $page_keywords = $request->input('page_keywords');
        $page_description = $request->input('page_description');
        $page_image = $request->input('page_image');
        $header_title = $request->input('header_title');
        $header_description = $request->input('header_description');
        $button_one = $request->input('button_one');
        $button_two = $request->input('button_two');
        $mini_header_one_title = $request->input('mini_header_one_title');
        $mini_header_one_description = $request->input('mini_header_one_description');
        $mini_header_two_title = $request->input('mini_header_two_title');
        $mini_header_two_description = $request->input('mini_header_two_description');
        $mini_header_three_title = $request->input('mini_header_three_title');
        $mini_header_three_description = $request->input('mini_header_three_description');
        $section_one_title = $request->input('section_one_title');
        $section_one_description = $request->input('section_one_description');
        $section_two_title_one = $request->input('section_two_title_one');
        $section_two_description_one = $request->input('section_two_description_one');
        $section_two_title_two = $request->input('section_two_title_two');
        $section_two_description_two = $request->input('section_two_description_two');
        $section_three_title = $request->input('section_three_title');
        $section_three_description = $request->input('section_three_description');
        $section_four_title = $request->input('section_four_title');
        $section_four_description = $request->input('section_four_description');
        $section_four_name = $request->input('section_four_name');
        $section_four_email = $request->input('section_four_email');
        $section_four_button = $request->input('section_four_button');
        $page_image = $request->file('page_image');
        $section_two_image_two = $request->file('section_two_image_two');
        $section_four_image = $request->file('section_four_image');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }
        if(!empty($section_two_image_two)) {
            $fileInfo_two = $section_two_image_two->getClientOriginalName();
            $section_two_image_two->move(public_path('uploads/'),$fileInfo_two);
        }
        if(!empty($section_four_image)) {
            $fileInfo_three = $section_four_image->getClientOriginalName();
            $section_four_image->move(public_path('uploads/'),$fileInfo_three);
        }

        $query = Index::where('locale', $locale)->first();

        if(empty($query->locale) || $query->locale != $locale ){
            // insert
            DB::table('index')->insert([
                [
                    'locale' => $locale, 
                    'page_title' => $page_title, 
                    'page_keywords' => $page_keywords, 
                    'page_description' => $page_description,
                    'header_title' => $header_title,
                    'header_description' => $header_description,
                    'button_one' => $button_one,
                    'button_two' => $button_two,
                    'mini_header_one_title' => $mini_header_one_title,
                    'mini_header_one_description' => $mini_header_one_description,
                    'mini_header_two_title' => $mini_header_two_title,
                    'mini_header_two_description' => $mini_header_two_description,
                    'mini_header_three_title' => $mini_header_three_title,
                    'mini_header_three_description' => $mini_header_three_description,
                    'section_one_title' => $section_one_title,
                    'section_one_description' => $section_one_description,
                    'section_two_title_one' => $section_two_title_one,
                    'section_two_description_one' => $section_two_description_one,
                    'section_two_title_two' => $section_two_title_two,
                    'section_two_description_two' => $section_two_description_two,
                    'section_three_title' => $section_three_title,
                    'section_three_description' => $section_three_description,
                    'section_four_title' => $section_four_title,
                    'section_four_description' => $section_four_description,
                    'section_four_name' => $section_four_name,
                    'section_four_email' => $section_four_email,
                    'section_four_button' => $section_four_button,
                    'page_image' => '/uploads/'.$fileInfo,
                    'section_two_image_two' => '/uploads/'.$fileInfo_two,
                    'section_four_image' => '/uploads/'.$fileInfo_three,
                    'created_at' => now(),
                ]
            ]);
        } else {
            // update
            DB::table('index')->where('locale', $locale)->update(
                [
                    'locale' => $locale,
                    'page_title' => $page_title,
                    'page_keywords' => $page_keywords,
                    'page_description' => $page_description,
                    'header_title' => $header_title,
                    'header_description' => $header_description,
                    'button_one' => $button_one,
                    'button_two' => $button_two,
                    'mini_header_one_title' => $mini_header_one_title,
                    'mini_header_one_description' => $mini_header_one_description,
                    'mini_header_two_title' => $mini_header_two_title,
                    'mini_header_two_description' => $mini_header_two_description,
                    'mini_header_three_title' => $mini_header_three_title,
                    'mini_header_three_description' => $mini_header_three_description,
                    'section_one_title' => $section_one_title,
                    'section_one_description' => $section_one_description,
                    'section_two_title_one' => $section_two_title_one,
                    'section_two_description_one' => $section_two_description_one,
                    'section_two_title_two' => $section_two_title_two,
                    'section_two_description_two' => $section_two_description_two,
                    'section_three_title' => $section_three_title,
                    'section_three_description' => $section_three_description,
                    'section_four_title' => $section_four_title,
                    'section_four_description' => $section_four_description,
                    'section_four_name' => $section_four_name,
                    'section_four_email' => $section_four_email,
                    'section_four_button' => $section_four_button,
                    'page_image' => '/uploads/'.$fileInfo,
                    'section_two_image_two' => '/uploads/'.$fileInfo_two,
                    'section_four_image' => '/uploads/'.$fileInfo_three,
                    'updated_at' => now(),
                ]
            );
        }

    return back()->withInput();
    
    }

    public function sliders()
    {
        //
        $index_sliders = Index_sliders::all()->sortByDesc("id");
        return view('backend.index_sliders',['index_slider' => $index_sliders]);
        // return view('backend.index_sliders');
    }

    public function slider_update(Request $request)
    {
        //
        $fileInfo = '';
        $slider_image = $request->file('slider_image');
        $slider_title = $request->input('slider_title');

        if(!empty($slider_image)) {
            $fileInfo = $slider_image->getClientOriginalName();
            $slider_image->move(public_path('uploads/'),$fileInfo);
        }
            // insert
            DB::table('index_sliders')->insert([
                [
                    'slider_image' => '/uploads/'.$fileInfo, 
                    'slider_title' => $slider_title,
                    'created_at' => now(),
                ]
            ]);

        return back()->withInput();
    }

    public function news()
    {
        //
        $index_news = Index_news::all()->sortByDesc('id')->take(3);
        return view('backend.index_news',['index_news' => $index_news]);
    }

    public function news_update(Request $request)
    {
        //
        $fileInfo = '';
        $news_image = $request->file('news_image');
        $news_image_title = $request->input('news_image_title');
        $news_content_title = $request->input('news_content_title');
        $news_content = $request->input('news_content');

        if(!empty($news_image)) {
            $fileInfo = $news_image->getClientOriginalName();
            $news_image->move(public_path('uploads/'),$fileInfo);
        }
            // insert
            DB::table('index_news')->insert([
                [
                    'news_image' => '/uploads/'.$fileInfo, 
                    'news_image_title' => $news_image_title,
                    'news_content_title' => $news_content_title,
                    'news_content' => $news_content,
                    'created_at' => now(),
                ]
            ]);
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
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(Index $index)
    {
        //
    }
}
