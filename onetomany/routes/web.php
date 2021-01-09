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

Route::get('/user/addresses',function (){

    $user = User::find(1);

    foreach ($user->addresses as $address){

        echo $address;
    }
});

Route::get('/user/add/address',function (){

    $user = User::find(1);

    $address = new Address(['address'=>'address3']);

    $user->addresses()->save($address);

});

//Route::get('/user/address/update',function (){
//
//    $address = User::find(1)->addresses->where('address','address3');
//
//    $address->address = 'New edited address';
//
//    $address->save();
//});
Route::get('/user/address/update',function (){

   $user= User::find(1);

   //return $user->addresses;

   foreach ($user->addresses as $address){

       $address->update(['address'=> 'newly updated address']);

   }







//
//       foreach($address->address as $add){
//
//           $add = 'New address';
//           $add ->save();
//       }

});

//Route::get('/user/address/update',function (){
//
//    $address = Address::find(3);
//
//    $address->address = 'New edited address';
//
//    $address->save();
//});

Route::get('/user/address/delete',function (){

    $user = User::find(1);

    foreach ($user->addresses as $address){

        $address->delete();
    }



});
