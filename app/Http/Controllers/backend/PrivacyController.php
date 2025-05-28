<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\Privacy;

class PrivacyController extends Controller
{
    public function privacy()
	    {
	    	//	from Model	
	    	// $query = Privacy::where('locale', 'en')->first();
	    	// print_r($query);

	        // return view('backend.single_pages.privacy');
	        return view('backend.single_pages.privacy', ['privacy' => DB::table('privacy')->select('locale', 'privacy_editor', 'terms_conditions')->where('locale', 'en')->get()]);
	    }

    public function privacy_update(Request $request)
	    {
			$locale = $request->input('locale');
    		$privacy_editor = $request->input('privacy_editor');
    		$terms_conditions = $request->input('terms_conditions');

    		$query = Privacy::where('locale', $locale)->first();

    		// print_r($query->locale);
    		// echo $locale;

    		if(empty($query->locale) || $query->locale != $locale ){
    			// insert
		    	DB::table('privacy')->insert([
		    		['id' => 1, 'locale' => $locale, 'privacy_editor' => $privacy_editor,'terms_conditions' => $terms_conditions, 'created_at' => now()]
				]);
    		} else {
    			// update
    			DB::table('privacy')->where('locale', $locale)->update(
		    		[
		    			'locale' => $locale,
		    			'privacy_editor' => $privacy_editor,
		    			'terms_conditions' => $terms_conditions,
		    			'updated_at' => now(),

		    		]
		    	);
    		}
        return back()->withInput();
	    }
}
