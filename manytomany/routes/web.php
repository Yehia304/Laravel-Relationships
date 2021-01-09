<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/role/insert',function (){

    $user = User::find(1);

    $role = new Role(['name'=>'Sheriff']);

    $user->roles()->save($role);
//    $user = User::find(1);
//
//    foreach ($user->roles as $role){
//
//        echo $role->name."<br>";
//    }
});

Route::get('/user/role/update',function (){

    $user = User::find(1);

    foreach ($user->roles as $role){

        $role->update(['name'=>'Newrole from update']);
    }

});

Route::get('/user/role/delete',function (){

    $user = User::find(1);

    foreach ($user->roles as $role){

        $role->delete();

    }

});
