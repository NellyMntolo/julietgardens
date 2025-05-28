<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\About_Us;
use App\Models\backend\About_Us_team;

class AboutUsController extends Controller
{
    public function aboutus()
    {

        $about_us = About_Us::all();
        return view('backend.about_us',['about_us' => $about_us]);
    }

    public function about_update(Request $request)
    {
        $about_images = About_Us::all();
        $fileInfo = $about_images[0]->page_image;
        $fileInfo_two = $about_images[0]->page_image_two;
        $locale = $request->input('locale');
        $page_title = $request->input('about_us_title');
        $page_keywords = $request->input('about_us_keywords');
        $page_description = $request->input('about_us_description');
        $header_title = $request->input('header_title');
        $header_description = $request->input('header_description');
        $header_title_two = $request->input('header_title_two');
        $header_description_two = $request->input('header_description_two');
        $header_description_three = $request->input('header_description_three');
        $farm_seeds = $request->input('farm_seeds');
        $farm_growth = $request->input('farm_growth');
        $farm_economy = $request->input('farm_economy');
        $farm_planting = $request->input('farm_planting');
        $section_quote = $request->input('section_quote');
        $header_title_four = $request->input('header_title_four');
        $header_description_four = $request->input('header_description_four');
        $page_image = $request->file('about_us_image');
        $page_image_two = $request->file('about_us_image_two');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }
        if(!empty($page_image_two)) {
            $fileInfo_two = $page_image_two->getClientOriginalName();
            $page_image_two->move(public_path('uploads/'),$fileInfo_two);
        }

            $query = About_Us::where('locale', $locale)->first();            

            if(empty($query->locale) || $query->locale != $locale ){
                // insert
                DB::table('about_us')->insert([
                    [
                        'locale' => $locale, 
                        'page_title' => $page_title, 
                        'page_keywords' => $page_keywords, 
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'header_title_two' => $header_title_two,
                        'header_description_two' => $header_description_two,
                        'header_description_three' => $header_description_three,
                        'farm_seeds' => $farm_seeds,
                        'farm_growth' => $farm_growth,
                        'farm_economy' => $farm_economy,
                        'farm_planting' => $farm_planting,
                        'section_quote' => $section_quote,
                        'header_title_four' => $header_title_four,
                        'header_description_four' => $header_description_four,
                        'page_image' => '/uploads/'.$fileInfo,
                        'page_image_two' => '/uploads/'.$fileInfo_two,
                        'created_at' => now(),
                    ]
                ]);
            } else {
                // update
                DB::table('about_us')->where('locale', $locale)->update(
                    [
                        'locale' => $locale,
                        'page_title' => $page_title,
                        'page_keywords' => $page_keywords,
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'header_title_two' => $header_title_two,
                        'header_description_two' => $header_description_two,
                        'header_description_three' => $header_description_three,
                        'farm_seeds' => $farm_seeds,
                        'farm_growth' => $farm_growth,
                        'farm_economy' => $farm_economy,
                        'farm_planting' => $farm_planting,
                        'section_quote' => $section_quote,
                        'header_title_four' => $header_title_four,
                        'header_description_four' => $header_description_four,
                        'page_image' => '/uploads/'.$fileInfo,
                        'page_image_two' => '/uploads/'.$fileInfo_two,
                        'updated_at' => now(),
                    ]
                );
            }
    return back()->withInput();
    }

    public function aboutus_team() {
        // retun view('backend.aboutus_team');
        $about_team = About_Us_team::all()->sortByDesc("id");
        return view('backend.aboutus_team',['about_team' => $about_team]);

    }

    public function about_update_team (Request $request){

        $about_tean_images = About_Us_team::all();
        $fileInfo = $about_tean_images[0]->about_us_team_image;
        $about_us_team_name = $request->input('about_us_team_name');
        $about_us_team_title = $request->input('about_us_team_title');
        $about_us_team_image = $request->file('about_us_team_image');
        $about_us_team_socials_one = $request->input('about_us_team_socials_one');
        $about_us_team_socials_two = $request->input('about_us_team_socials_two');
        $about_us_team_socials_three = $request->input('about_us_team_socials_three');

        if(!empty($about_us_team_image)) {
            $fileInfo = $about_us_team_image->getClientOriginalName();
            $about_us_team_image->move(public_path('uploads/'),$fileInfo);
        }
                // insert
                DB::table('about_us_team')->insert([
                    [
                        'about_us_team_name' => $about_us_team_name, 
                        'about_us_team_title' => $about_us_team_title, 
                        'about_us_team_image' => '/uploads/'.$fileInfo,
                        'about_us_team_socials_one' => $about_us_team_socials_one,
                        'about_us_team_socials_two' => $about_us_team_socials_two,
                        'about_us_team_socials_three' => $about_us_team_socials_three,
                        'created_at' => now(),
                    ]
                ]);

        return back()->withInput();

    }
}
