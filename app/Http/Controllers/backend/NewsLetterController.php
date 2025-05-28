<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\NewsLetter;

class NewsLetterController extends Controller
{
    public function newsletter_new(Request $request)
    {

        // return view('backend.newsletter', ['newsletters' => DB::table('newsletter')->select('id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'updated_at')->where('locale', 'en')->get()]);
                    //echo $about->locale;
        
            // $locale = $request->input('locale');
            // $nl_classification = $request->input('nl_classification');
            // $nl_title = $request->input('nl_title');
            // $nl_content = $request->input('nl_content');
            // $nl_author = $request->input('nl_author');
            // $nl_release = $request->input('nl_release');
            // $nl_update = $request->input('nl_update');

            //     DB::table('newsletter')->insert([
            //         ['locale' => $locale, 'nl_classification' => $nl_classification, 'nl_title' => $nl_title, 'nl_content' => $nl_content, 'nl_author' => $nl_author, 'nl_release' => $nl_release, 'nl_update' => $nl_update, 'created_at' => now()]
            //     ]);
        return view('backend.newsletter.new_newsletter');
    }

    public function all_newsletters()
    {
        return view('backend.newsletter.all_newsletters', ['newsletters' => DB::table('newsletter')->select('id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'created_at', 'updated_at')->where('locale', 'en')->orderByDesc('id')->get()]);

        return view('backend.newsletter.all_newsletters');
    }

    public function view_newsletter($id)
    {
        return view('backend.newsletter.view_newsletter', ['newsletters' => DB::table('newsletter')->select('id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'updated_at')->where('id', $id)->get()]);

        // return view('backend.newsletter.view_newsletter');
    }

    public function newsletter_update(Request $request)
        {
            $id = $request->input('id');
            $locale = $request->input('locale');
            $nl_classification = $request->input('nl_classification');
            $nl_title = $request->input('nl_title');
            $nl_content = $request->input('nl_content');
            $nl_author = $request->input('nl_author');
            $nl_release = $request->input('nl_release');
            $nl_update = $request->input('nl_update');

            // echo $id;

            // $query = NewsLetter::where('locale', $locale, 'id', $id)->first(); // limit 1 error
            $query = NewsLetter::where('id', $id)->first();
            // $query = NewsLetter::where('locale', $locale, 'id', $id)->first();  // ->where('COLUMN_NAME', 'OPERATOR', 'VALUE')->where('COLUMN_NAME', 'OPERATOR', 'VALUE')

            // print_r($query->locale);
            // echo $locale;

            // echo $query->id;

            if(empty($query->locale) || $query->locale != $locale || $query->id != $id ){
                // insert
                DB::table('newsletter')->insert([
                    // ['id' => 1, 'locale' => $locale, 'nl_classification' => $nl_classification, 'nl_title' => $nl_title, 'nl_content' => $nl_content, 'nl_author' => $nl_author, 'nl_release' => $nl_release, 'nl_update' => $nl_update, 'created_at' => now()] //   doesn't work using ID also/ inserts during update ID
                    ['locale' => $locale, 'nl_classification' => $nl_classification, 'nl_title' => $nl_title, 'nl_content' => $nl_content, 'nl_author' => $nl_author, 'nl_release' => $nl_release, 'nl_update' => $nl_update, 'created_at' => now()]
                ]);
            } else {
                // update
                DB::table('newsletter')->where('id', $id)->update(
                    [
                        'locale' => $locale,
                        'nl_classification' => $nl_classification,
                        'nl_title' => $nl_title,
                        'nl_content' => $nl_content,
                        'nl_author' => $nl_author,
                        'nl_release' => $nl_release,
                        'nl_update' => $nl_update,
                        'updated_at' => now(),

                    ]
                );
            }
        return back()->withInput();
        }

        public function all_subscribers()
        {
            // return view('backend.newsletter.all_newsletters', ['newsletters' => DB::table('newsletter')->select('id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'created_at', 'updated_at')->where('locale', 'en')->orderByDesc('id')->get()]);

            return view('backend.newsletter.all_subscribers');
        }


        public function module_settings()
        {
            // return view('backend.newsletter.all_newsletters', ['newsletters' => DB::table('newsletter')->select('id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'created_at', 'updated_at')->where('locale', 'en')->orderByDesc('id')->get()]);

            return view('backend.newsletter.module_settings');
        }

        public function batch_mailing()
        {
            // return view('backend.newsletter.all_newsletters', ['newsletters' => DB::table('newsletter')->select('id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'created_at', 'updated_at')->where('locale', 'en')->orderByDesc('id')->get()]);

            return view('backend.newsletter.batch_mailing');
        }
}
