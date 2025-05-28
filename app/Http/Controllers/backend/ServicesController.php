<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\Services;
use App\Models\backend\Service_testimonials;
use App\Models\backend\Services_we_do;

class ServicesController extends Controller
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

    public function services()
    {
        $services = Services::all();
        return view('backend.services',['services' => $services]);
    }

    public function services_update(Request $request)
    {
        $service_image = Services::all();
        $fileInfo = $service_image[0]->page_image;
        $fileInfo_two = $service_image[0]->page_image_two;
        $locale = $request->input('locale');
        $page_title = $request->input('services_title');
        $page_keywords = $request->input('services_keywords');
        $page_description = $request->input('services_description');
        $header_title = $request->input('header_title');
        $header_description = $request->input('header_description');
        $services_featured_title = $request->input('services_featured_title');
        $services_featured_description = $request->input('services_featured_description');
        $services_we_do_title = $request->input('services_we_do_title');
        $services_we_do_description = $request->input('services_we_do_description');
        $services_testimonials_title = $request->input('services_testimonials_title');
        $services_testimonials_description = $request->input('services_testimonials_description');
        $page_image = $request->file('services_image');
        $page_image_two = $request->file('services_image_two');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }


            $query = Services::where('locale', $locale)->first();

            if(empty($query->locale) || $query->locale != $locale ){
                // insert
                DB::table('services')->insert([
                    [
                        'locale' => $locale, 
                        'page_title' => $page_title, 
                        'page_keywords' => $page_keywords, 
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'services_featured_title' => $services_featured_title,
                        'services_featured_description' => $services_featured_description,
                        'services_we_do_title' => $services_we_do_title,
                        'services_we_do_description' => $services_we_do_description,
                        'services_testimonials_title' => $services_testimonials_title,
                        'services_testimonials_description' => $services_testimonials_description,
                        'page_image' => '/uploads/'.$fileInfo,
                        'page_image_two' => '/uploads/'.$fileInfo_two, 
                        'created_at' => now(),
                    ]
                ]);
            } else {
                // update
                DB::table('services')->where('locale', $locale)->update(
                    [
                        'locale' => $locale,
                        'page_title' => $page_title,
                        'page_keywords' => $page_keywords,
                        'page_description' => $page_description,
                        'header_title' => $header_title,
                        'header_description' => $header_description,
                        'services_featured_title' => $services_featured_title,
                        'services_featured_description' => $services_featured_description,
                        'services_we_do_title' => $services_we_do_title,
                        'services_we_do_description' => $services_we_do_description,
                        'services_testimonials_title' => $services_testimonials_title,
                        'services_testimonials_description' => $services_testimonials_description,
                        'page_image' => '/uploads/'.$fileInfo,
                        'page_image_two' => '/uploads/'.$fileInfo_two,
                        'updated_at' => now(),

                    ]
                );
            }
        
    return back()->withInput();
    }

    public function services_testimonials(Request $request)
    {
        $services_testimonials = DB::table('services_testimonials')->get();
        return view('backend.services_testimonials',['services_testimonials' => $services_testimonials]);
        // return back()->withInput();
    }

    public function services_featured(Request $request)
    {
        $services_featured = DB::table('services_featured')->get();
        return view('backend.services_featured',['services_featured' => $services_featured]);
        // return back()->withInput();
    }

    public function services_featured_update(Request $request)
    {
        $fileInfo = '';
        $page_title = $request->input('services_featured_title');
        $page_description = $request->input('services_featured_description');
        $page_image = $request->file('services_featured_image');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }
        // insert
        DB::table('services_featured')->insert([
            [
                'service_featured_title' => $page_title, 
                'service_featured_description' => $page_description, 
                'service_featured_image' => '/uploads/'.$fileInfo, 
                'created_at' => now()
            ]
        ]);
        return back()->withInput();
    }

    public function services_we_do(Request $request)
    {
        $services_we_do = Services_we_do::all();
        return view('backend.services_we_do',['services_we_do' => $services_we_do]);
    }

    public function services_we_do_update(Request $request)
    {
        $fileInfo = '';
        $page_title = $request->input('services_we_do_title');
        $page_description = $request->input('services_we_do_description');
        $page_image = $request->file('services_we_do_image');

        if(!empty($page_image)) {
            $fileInfo = $page_image->getClientOriginalName();
            $page_image->move(public_path('uploads/'),$fileInfo);
        }
        // insert
        DB::table('services_we_do')->insert([
            [
                'service_we_do_title' => $page_title, 
                'service_we_do_description' => $page_description,
                'service_we_do_image' => '/uploads/'.$fileInfo,
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
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
