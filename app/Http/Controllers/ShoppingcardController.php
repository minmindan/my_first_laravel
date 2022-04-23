<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;



class ShoppingcardController extends Controller
{
    public function pay(){
        return view('pay');
    }

    public function login(){
        return view('login');
    }

    public function esnd(){
        return view('esnd');
    }

    public function found(){
        return view('found');
    }

    public function checkout(){
        return view('checkout');
    }

    public function save(Request $data){
        // $da = request->all;
        // dd($data->all());
        Comment::create([ // DB才用insert Model用create
            'email' => $data->name,
            'text' => $data->content,
            'author' => $data->title,
            'time' => '',
        ]);
        // DB::table('da')->insert([
        //     'email' => $data->name,
        //     'text' => $data->content,
        //     'author' => $data->title,
        //     'time' => '',
        // ]);
        return redirect('/img');
    }

    public function img_delete($target){
        Comment::where('id',$target)->delete();
        return redirect("/img");
        // DB::table('da')->where('id',$target)->delete();
        // return redirect("/img");
    }

    public function edit($id){
        // DB::table('da')->orderBy('id','desc')->take(5)->get();
        $alpha = Comment::where('id',$id)->first();
        // $alpha = DB::table('da')->where('id',$id)->first();//從符合條件的筆數中抓第一筆(結果為資料不是陣列) GET抓出來是陣列 直接丟上去會報錯  ,
        //->find() : find('id') 只能id
        // dd($alpha);
        // dd($alpha->id);
        return view('/edit',['alpha'=>$alpha]);
    }

    public function update($id,Request $request){
        Comment::where('id',$id)->update([
            'email' => $request->name,
            'text' => $request->content,
            'author' => $request->title,
            'time' => '',
        ]);
        // DB::table('da')->where('id',$id)->update([
        //     'email' => $request->name,
        //     'text' => $request->content,
        //     'author' => $request->title,
        //     'time' => '',
        // ]);
        return  ('/img');
    }

    public function april23(){
        $beta = DB::table('da')->get();
        return view('april23_upload',['beta'=>$beta]);
    }

    public function image_save(){
        //
    }
}
// DB::table -> Comment::
