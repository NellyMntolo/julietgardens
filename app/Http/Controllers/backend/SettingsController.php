<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\backend\Settings;


class SettingsController extends Controller
{


	public function settings()
    {

        $general_settings = DB::table('general_settings')->where('locale', 'en')->get();
        $smtp_settings = DB::table('smtp')->get();
        $ftp_settings = DB::table('ftp')->get();
        $social_media = DB::table('social_media')->where('soft_delete', '0')->orderBy('id', 'asc')->get();

        return view('backend.settings.settings', compact('general_settings', 'smtp_settings', 'ftp_settings', 'social_media'));

        // return view('backend.settings.settings');
    }

    public function employee_settings_return()
    {

		// return view('backend.settings/settings', ['rema_employees' => DB::table('rema_employees')->select('locale', 'employee_image', 'employee_account', 'employee_password', 'employee_name', 'employee_position', 'employee_number', 'employee_email', 'employee_cell_phone', 'employee_address', 'employee_relative_name', 'employee_relationship', 'employee_relative_email', 'employee_relative_cell_phone', 'employee_relative_address')->where('locale', 'en')->get()]);
    }


    public function general_settings(Request $request)
    {
        $setting_image = Settings::all();
        $fileInfo = $setting_image[0]->web_logo;
    	$locale = $request->input('locale');
    	$web_logo = $request->file('web_logo');
    	$web_name = $request->input('web_name');
    	$web_url = $request->input('web_url');
    	$web_keywords = $request->input('web_keywords');
    	$web_description = $request->input('web_description');
    	$web_meta_data = $request->input('web_meta_data');
    	$web_scripts = $request->input('web_scripts');
    	$web_auth = $request->input('web_auth');
    	$web_service_mail = $request->input('web_service_mail');
    	$web_return_mail = $request->input('web_return_mail');
    	$web_order_mail = $request->input('web_order_mail');
    	$web_default_smtp = $request->input('web_default_smtp');


        if(!empty($web_logo)) {
            $fileInfo = $web_logo->getClientOriginalName();
            $web_logo->move(public_path('uploads/'),$fileInfo);
        }


// ERROR
    	// if ($request->hasFile('web_logo')) {
    	// 	// echo "file is indeed web_logo detected";
		//     // $path = $request->photo->storeAs('uploads', $web_logo);

		//     $file = $request->file('web_logo');
		//     $name = time().$file->getClientOriginalName();		    
		//     // $file->move('images/client', $name);
		//     $file->move('uploads/', $name);

		//     // $data = array_merge(['web_logo' => "uploads/{$file}"], $request->all());

		//     // Settings::create($data);		    
		// }

    	DB::table('general_settings')->where('locale', $locale)->update(
    		[
    			'locale' => $locale,
    			'web_logo' => '/uploads/'.$fileInfo,
    			'web_name' => $web_name,
    			'web_url' => $web_url,
    			'web_keywords' => $web_keywords,
    			'web_description' => $web_description,
    			'web_meta_data' => $web_meta_data,
    			'web_scripts' => $web_scripts,
    			'web_auth' => $web_auth,
    			'web_service_mail' => $web_service_mail,
    			'web_return_mail' => $web_return_mail,
    			'web_order_mail' => $web_order_mail,
    			'web_default_smtp' => $web_default_smtp,
    			'updated_at' => now(),
    		]
    	);
        return back()->withInput();
    }

    public function employee_settings(Request $request)
    {
        $locale = $request->input('locale');
    	$employee_account = $request->input('employee_account');
    	$employee_password = $request->input('_token');
        $remember_token = $request->input('employee_name');
    	$employee_name = $request->input('employee_name');
    	$employee_position = $request->input('employee_position');
    	$employee_number = $request->input('employee_number');
    	$employee_email = $request->input('employee_email');
    	$employee_cell_phone = $request->input('employee_cell_phone');
    	$employee_address = $request->input('employee_address');

    	$employee_relative_name = $request->input('employee_relative_name');
    	$employee_relationship = $request->input('employee_relationship');
    	$employee_relative_email = $request->input('employee_relative_email');
    	$employee_relative_cell_phone = $request->input('employee_relative_cell_phone');
    	$employee_relative_address = $request->input('employee_relative_address');

    	if ($request->hasFile('employee_image')) {
    		// echo "file is indeed web_logo detected";
		    // $path = $request->photo->storeAs('uploads', $web_logo);

		    $file = $request->file('employee_image');
		    $name = time().$file->getClientOriginalName();		    
		    // $file->move('images/client', $name);
		    $file->move('uploads/', $name);

		    // $data = array_merge(['web_logo' => "uploads/{$file}"], $request->all());

		    // Settings::create($data);		    
		}
    	DB::table('employees')->updateOrInsert(
    		[
    			'locale' => $locale,
    			'employee_image' => '/uploads/'.$name,
    			'employee_account' => $employee_account,
    			'employee_password' => Hash::make($employee_password),
    			'employee_name' => $employee_name,
    			'employee_position' => $employee_position,
    			'employee_number' => $employee_number,
    			'employee_email' => $employee_email,
    			'employee_cell_phone' => $employee_cell_phone,
    			'employee_address' => $employee_address,
    			'employee_relative_name' => $employee_relative_name,
    			'employee_relationship' => $employee_relationship,
    			'employee_relative_email' => $employee_relative_email,
    			'employee_relative_cell_phone' => $employee_relative_cell_phone,
    			'employee_relative_address' => $employee_relative_address,
    			'updated_at' => now(),
    		]
    	)->where('employee_account',$employee_account);

        DB::table('users')->updateOrInsert(
            [
                'name' => $employee_account,
                'email' => $employee_email,
                'email_verified_at' => now(),
                'employee_password' => Hash::make($employee_password),
                'remember_token' => $remember_token,
                'updated_at' => now(),
            ]
        )->where('employee_account',$employee_account);

    	// return view('backend.settings/settings', ['rema_employees' => DB::table('rema_employees')->select('locale', 'employee_image', 'employee_account', 'employee_password', 'employee_name', 'employee_position', 'employee_number', 'employee_email', 'employee_cell_phone', 'employee_address', 'employee_relative_name', 'employee_relationship', 'employee_relative_email', 'employee_relative_cell_phone', 'employee_relative_address')->where('locale', 'en')->get()]);
        // return back()->withInput();
        return redirect('/admin/settings/return');
    }

    public function new_password(Request $request)
    {
    	$locale = $request->input('locale');
    	$employee_account = $request->input('employee_account');
    	$employee_new_password = $request->input('employee_new_password');
		$employee_password_confirm = $request->input('employee_password_confirm');

    	DB::table('rema_employees')->where('employee_account', $employee_account)->update(
    		[
    			'locale' => $locale,    			
    			'employee_account' => $employee_account,
    			'employee_password' => Hash::make($employee_password),
    			'updated_at' => now(),

    		]
    	);
        DB::table('users')->where('name', $employee_account)->update(
            [
                'locale' => $locale,                
                'name' => $employee_account,
                'password' => Hash::make($employee_password),
                'updated_at' => now(),

            ]
        );
        return back()->withInput();

        // return view('backend.settings/settings');
    }

    public function smtp_update(Request $request)
    {
        $smtp_id  = $request->input('smtp_id');
        $smtp_host = $request->input('smtp_host');
        $smtp_port = $request->input('smtp_port');
        $smtp_username = $request->input('smtp_username');
        $smtp_password = $request->input('smtp_password');

        DB::table('smtp')->where('id', $smtp_id)->update(
            [
                'smtp_host' => $smtp_host,
                'smtp_port' => $smtp_port,
                'smtp_username' => $smtp_username,
                'smtp_password' => $smtp_password,
                'updated_at' => now(),
            ]
        );
        return back()->withInput();
    }

    public function ftp_update(Request $request)
    {
        $ftp_id  = $request->input('ftp_id');
        $ftp_host = $request->input('ftp_host');
        $ftp_port = $request->input('ftp_port');
        $ftp_username = $request->input('ftp_username');
        $ftp_password = $request->input('ftp_password');

        DB::table('ftp')->where('id', $ftp_id)->update(
            [
                'ftp_host' => $ftp_host,
                'ftp_port' => $ftp_port,
                'ftp_username' => $ftp_username,
                'ftp_password' => $ftp_password,
                'updated_at' => now(),
            ]
        );
        return back()->withInput();
    }
    
    public function social_create(Request $request)
    {
        // $locale = $request->input('locale');
        $s_name = $request->input('s_name');
        $s_target = $request->input('s_target');
        $s_visibility = $request->input('s_visibility');
        $s_url = $request->input('s_url');

        // DB::table('social_media')->where('id', $s_id)->update(
        DB::table('social_media')->insert(
            [
                // 'locale' => $locale,
                's_name' => $s_name,
                's_target' => $s_target,
                's_visibility' => $s_visibility,
                's_url' => $s_url,
                'created_at' => now(),
            ]
        );
        return back()->withInput();
    }

    public function social_update(Request $request)
    {
        $s_id  = $request->input('s_id');
        $locale = $request->input('locale');
        $s_name = $request->input('s_name');
        $s_target = $request->input('s_target');
        $s_visibility = $request->input('s_visibility');
        $s_url = $request->input('s_url');

        DB::table('social_media')->where('id', $s_id)->update(
            [
                // 'locale' => $locale,
                's_name' => $s_name,
                's_target' => $s_target,
                's_visibility' => $s_visibility,
                's_url' => $s_url,
                'updated_at' => now(),
            ]
        );
        return back()->withInput();
    }

    public function social_delete(Request $request)
    {
        $s_id  = $request->input('s_id');

        DB::table('social_media')->where('id', $s_id)->update(
            [
                // 'locale' => $locale,
                'soft_delete' => '1',
                'updated_at' => now(),
            ]
        );
        return back()->withInput();
    }

    // public function settings(Request $request)
    // {
    //     return view('backend.settings/settings');
    // }

    // public function settings(Request $request)
    // {
    //     return view('backend.settings/settings');
    // }

    // public function settings()
    // {
    //     return view('backend.settings/settings');
    // }

    // public function settings()
    // {
    //     return view('backend.settings/settings');
    // }
}
