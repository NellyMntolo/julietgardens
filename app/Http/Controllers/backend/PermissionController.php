<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Permission;
use App\Role;
use App\User;

class PermissionController extends Controller
{
    public function Permission(Request $request)
    {   
    	$dev_permission = Permission::where('slug','create-tasks')->first();
		$manager_permission = Permission::where('slug', 'edit-users')->first();

		//RoleTableSeeder.php
		$dev_role = new Role();
		$dev_role->slug = 'developer';
		$dev_role->name = 'Front-end Developer';
		$dev_role->save();
		$dev_role->permissions()->attach($dev_permission);

		$manager_role = new Role();
		$manager_role->slug = 'manager';
		$manager_role->name = 'Assistant Manager';
		$manager_role->save();
		$manager_role->permissions()->attach($manager_permission);

		// Define Roles
		$dev_role = Role::where('slug','developer')->first();
		$manager_role = Role::where('slug', 'manager')->first();

		//	current older roles
		// 會員類型設置
		// 會員模組參數設置
		// 會員查詢管理
		// 會員資料查詢
		// 會員資料修改
		// 會員郵件傳送
		// 會員權限管理
		// 會員公告管理
		// 模擬會員登錄
		// 會員信箱認證
		// 會員刪除權限
		// 會員區域設置
		// 會員行業分類
		// 積分規則設置
		// 會員轉移類型
		// 重設會員密碼
		// 積分寫入權限
		// 財務收款入帳
		// 會員帳務查詢
		// 付款方式設置
		// 帳務查詢統計

		$createTasks = new Permission();
		$createTasks->slug = 'create-tasks';
		$createTasks->name = 'Create Tasks';
		$createTasks->save();
		$createTasks->roles()->attach($dev_role);

		$editUsers = new Permission();
		$editUsers->slug = 'edit-users';
		$editUsers->name = 'Edit Users';
		$editUsers->save();
		$editUsers->roles()->attach($manager_role);

		$dev_role = Role::where('slug','developer')->first();
		$manager_role = Role::where('slug', 'manager')->first();
		$dev_perm = Permission::where('slug','create-tasks')->first();
		$manager_perm = Permission::where('slug','edit-users')->first();

		$developer = new User();
		$developer->name = 'trip twenty';
		$developer->email = 'tripples@gmail.com';
		$developer->password = bcrypt('tripple');
		$developer->save();
		$developer->roles()->attach($dev_role);
		$developer->permissions()->attach($dev_perm);

		$manager = new User();
		$manager->name = 'dude wela';
		$manager->email = 'dudes@gmail.com';
		$manager->password = bcrypt('dude');
		$manager->save();
		$manager->roles()->attach($manager_role);
		$manager->permissions()->attach($manager_perm);

		
		return redirect()->back();

			// $user = $request->user();
			// dd($user->hasRole('developer')); //will return true, if user has role
			// dd($user->givePermissionsTo('create-tasks'));// will return permission, if not null
			// dd($user->can('create-tasks')); // will return true, if user has permission
    }
}
