<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('slug','super-admin')->first();
        if(!$role){
        	Role::create([
        		'name' => 'Super Admin',
        		'slug' => 'super-admin',
        		'permissions' => [
        			'read-admin' =>true,
        			'create-admin' =>true,
        			'update-admin' =>true,
        			'delete-admin' =>true,
        		],
        	]);
        }

        $role = Role::where('slug','admin')->first();
        if(!$role){
        	Role::create([
        		'name' => 'Admin',
        		'slug' => 'admin',
        		'permissions' => [
        			'read-admin' =>true,
        			'create-admin' =>true,
        			'update-admin' =>true,
        			'delete-admin' =>true,

        			'read-user' =>true,
        			'create-user' =>true,
        			'update-user' =>true,
        			'delete-user' =>true,
        		],
    		]);
		}

        $role = Role::where('slug','author')->first();
        if(!$role){
        	Role::create([
        		'name' => 'Author',
        		'slug' => 'author',
        		'permissions' => [
        			'read-post' => true,
        			'write-post' => true,
        			'update-post' => true,
        			'delete-post' => true,
        		],
    		]);
		}

        $role = Role::where('slug','editor')->first();
        if(!$role){
        	Role::create([
        		'name' => 'Editor',
        		'slug' => 'editor',
        		'permissions' => [
        			'read-post' => true,
        			'publish-post' =>true,
        			'unpublish-post' => true,
        		],
    		]);
		}

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }

  //       $role = Role::where('slug','')->first();
  //       if(!$role){
  //       	Role::create([
  //       		'name' => '',
  //       		'slug' => '',
  //       		'permissions' => [

  //       		],
  //   		]);
		// }
    }
}
