<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShoppingcardController;
use Illuminate\Http\Request;
use App\Models\Comment;


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
Route::get('/test', function () {
    return view('facebook');
});
// Route::get('/microsoft', function () {
//     return view('microsoft');
// });
Route::get('/say', function () {
    $news = DB::table('news')->get();//抓取資料 並定義資料
    $news2 = DB::table('news')->take(3)->get();//抓最舊3筆
    $news3 = DB::table('news')->orderBy('id','desc')->take(3)->get();//抓最新3筆,要先改排序再抓orderBy('參考目標','選擇升序或降序')
    $news4 = DB::table('news')->inRandomOrder()->take(3)->get();//抓隨機3筆
    // $news=[];
    // $news= news::get('title','content','img');
    dd($news,$news2,$news3,$news4);
    // return ('尼豪');
});
Route::get('/microsoft', [Controller::class, "microsoft"]);

Route::get('bt', function () {
    $title = DB::table('news')->take(3)->get( );
    $beta = DB::table('da')->get();
    // dd($beta);
    // return $title;
    return view('index',['title'=>$title]);
});

Route::get('/img',function () {
    // $title = DB::table('news')->take(3)->get( );
    // $beta = DB::table('da')->orderBy('id','desc')->take(5)->get();
    $title = Comment::take(3)->get( );
    $beta = Comment::orderBy('id','desc')->take(5)->get();
    // dd($beta);
    // return $title;
    return view('img',['beta'=>$beta],['title'=>$title]);
});
// Route::get('/img/delete/{target}',function ($target) {
//     // $title = DB::table('news')->take(3)->get( );
//     $beta = DB::table('da')->orderBy('id','desc')->where('id',$target)->get();
//     dd($beta);
//     // return $title;
//     return view('img',['beta'=>$beta],['title'=>$title]);
// });

Route::get('/img/edit/{id}',[ShoppingcardController::class,'edit']);

Route::get('/img/update/{id}',[ShoppingcardController::class,'update']);

Route::get('/img/delete/{id}',[ShoppingcardController::class,'img_delete']);

Route::get('/pay',[ShoppingcardController::class,'pay']);

Route::get('/login',[ShoppingcardController::class,'login']);

Route::get('/esnd',[ShoppingcardController::class,'esnd']);

Route::get('/found',[ShoppingcardController::class,'found']);

Route::get('/checkout',[ShoppingcardController::class,'checkout']);

Route::get('/img/save',[ShoppingcardController::class,'save']);

