<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FilesController;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Banners= Banners::get();
        // dd($Banners);
        return view('april23',['Banners'=> $Banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $beta = DB::table('da')->get();
        return view('april23_upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request->all());
        $newimg = Storage::disk('local')->put('public/banner',$request->image_upload);
        $newimg = str_replace('public','storage',$newimg);
        Banners::create([
            'image'=>$newimg,
            'weight'=>$request->weight,
            'opacity'=>$request->opacity,
        ]);
        return redirect('/april23');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Banners= Banners::where('id',$id)->first();
        // dd($Banners->all());
        return view('april23_edit',['Banners'=> $Banners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($id. 'image');
        $Banner = Banners::find($id);
        // dd($Banner,$Banner->image);
        if ($request->hasFile('image_upload')) {
            // Storage必須要記得dd確定變數名稱

            $path = Storage::disk('local')->put(
                'public/banner',
                //這裡要記得確定變數名稱 不一定是 $request->img
                //也可能是 $request-> dd出來的變數
                $request->image_upload
            );

            // dd($path);
            $path = str_replace('public', 'storage', $path);

            $target = str_replace('/storage', '/public', $Banner->image);
            // dd($target);
            Storage::Disk('local')->delete($target);
            // dd(Disk('local').delete($target));

            $Banner->image = '/' . $path;
        }
        $Banner->weight = $request->weight;
        $Banner->opacity = $request->opacity;
        $Banner -> save();
        return redirect('april23');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Banner = Banners::find($id);
        $target = str_replace('storage', '/public', $Banner->image);
        // dd($target);
        Storage::Disk('local')->delete($target);
        Banners::where('id',$id)->delete();

        return redirect('april23');
    }
}
