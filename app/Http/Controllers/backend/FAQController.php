<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\backend\FAQ;

class FAQController extends Controller
{
    public function faq()
	    {
	    	//	from Model	
	    	// $query = FAQ::where('locale', 'en')->first();
	    	// print_r($query);

	        // return view('backend.single_pages.faq');
	        return view('backend.single_pages.all_faq', ['faq' => DB::table('faq')->select('id', 'locale', 'faq_title', 'faq_question', 'faq_answer')->where('soft_delete', '0')->get()]);
	    }

  	// public function faq_new()
	  //   {
	  //   	return view('backend.single_pages.new_faq');
   //  	}

   //  public function faq_insert(Request $request)
	  //   {
			// $locale = $request->input('locale');
			// $faq_title = $request->input('faq_title');
   //  		$faq_question = $request->input('faq_question');
   //  		$faq_answer = $request->input('faq_answer');
			// // insert
	  //   	DB::table('faq')->insert([
	  //   		['locale' => $locale, 'faq_title' => $faq_title, 'faq_question' => $faq_question, 'faq_answer' => $faq_answer, 'created_at' => now()]
			// ]);    		
   //      return back()->withInput();
   //  }

   //  public function faq_view(Request $request, $faq_id)
	  //   {
	  //   	// print_r($faq_id);
			
   //  		// $faq_id = $request->input('faq_id');

   //  		// $query = FAQ::where('id', $faq_id)->first();

   //  		return view('backend.single_pages.faq', ['faq' => DB::table('faq')->select('id', 'locale', 'faq_title', 'faq_question', 'faq_answer')->where('soft_delete', '0')->orWhere('id', $faq_id )->get()]);
   //      // return back()->withInput();
   //  }

   //  public function faq_update(Request $request)
	  //   {
			// $locale = $request->input('locale');
   //  		$faq_question = $request->input('faq_question');
   //  		$faq_answer = $request->input('faq_answer');
   //  		$faq_id = $request->input('faq_id');

   //  		$query = FAQ::where('locale', $locale)->first();

   //  		// print_r($query->locale);
   //  		// echo $locale;

   //  		if(empty($query->locale) || $query->locale != $locale ){
   //  			// insert
		 //    	DB::table('faq')->insert([
		 //    		['id' => 1, 'locale' => $locale, 'faq_question' => $faq_question, 'faq_answer' => $faq_answer, 'created_at' => now()]
			// 	    // ['id' => 1, 'locale' => $locale, 'faq_editor' => $faq_editor, 'created_at' => now(), 'updated_at' => '', 'deleted_at' => '']
			// 	]);
   //  		} else {
   //  			// update
   //  			DB::table('faq')->where('id', $faq_id)->update(
		 //    		[
		 //    			'locale' => $locale,
		 //    			'faq_question' => $faq_question,
		 //    			'faq_answer' => $faq_answer,
		 //    			'updated_at' => now(),

		 //    		]
		 //    	);
   //  		}
   //      return back()->withInput();
   //  }

   //  public function faq_delete(Request $request)
	  //   {
			// $locale = $request->input('locale');
			// $faq_id = $request->input('faq_id');
   //  		$faq_question = $request->input('faq_question');
   //  		$faq_answer = $request->input('faq_answer');

   //  		$query = FAQ::where('locale', $locale)->first();

   //  			// update
   //  			DB::table('faq')->where('id', $faq_id)->update(
		 //    		[
		 //    			'soft_delete' => '1',
		 //    			'updated_at' => now(),

		 //    		]
		 //    	);
   //      return back()->withInput();
   //  }
}
