<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\str;
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
$info = "hi, let's learn Laravel";
//$info=str::ucfirst($info);
//$info=str::replaceFirst('Hi','hello',$info);
//$info=str::camel($info);
$info = Str::of($info)->ucfirst()->replaceFirst('Hi','hello',$info)->camel($info);
echo $info;
Route::get('/', function () {
    return view('welcome');
});
