<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;

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

Route::get('/user/address',function (){

    return User::find(1)->address->address;


});

Route::get('/insert', function () {

    $user = User::find(1);

    $address = new Address(['address'=>'18 Grin street moharram bek alexandria egypt','name'=>'Address1']);

    $user ->address()->save($address);


});

Route::get('/updateaddress',function (){

    $user = User::find(1);

    



});
