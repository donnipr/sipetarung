<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cardpemdas;
use Pagination\Paginator;
use Storage;

class CardpemdaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cardpemdas::orderBy('created_at','DESC')->paginate(10);
        return view('panel.index', compact('data'));
        //return ($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/upload',$filename);        }

        $datas = new Cardpemdas();
        $datas->desa = $request->desa;
        $datas->kec = $request->kec;
        $datas->nosertf = $request->nosertf;
        $datas->hak = $request->hak;
        $datas->luas = $request->luas;
        $datas->penggunaan = $request->penggunaan;
        $datas->latlong = $request->latlong;
        $datas->alamat = $request->alamat;
        $datas->maprtrw = $request->maprtrw;
        $datas->image = $filename;

   // $request->featured_image->store('upload');


       /*if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $filename);
            Image::make($image)->resize(320, 210)->save($location);

            $products->image = $filename;
        } */
//            if($request->hasFile('featured_image')){
//            $photo = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
//            $destination = base_path().'/public/image';
//            $request->file('featured_image')->move($destination,$photo);
//        
//        $datas['image'] = $photo;
//        }

        $datas->save();
      flashMe()->success();
       return redirect()->route('certifi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cardpemdas::find($id);
        return view('panel.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cardpemdas::findOrFail($id);
        return view('panel.edit', compact('data'));
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
        $datas = Cardpemdas::findOrFail($id);
        $datas->desa = $request->input('desa');
        $datas->kec = $request->input('kec');
        $datas->nosertf = $request->input('nosertf');
        $datas->hak = $request->input('hak');
        $datas->luas = $request->input('luas');
        $datas->penggunaan = $request->input('penggunaan');
        $datas->latlong = $request->input('latlong');
        $datas->alamat = $request->input('alamat');
        $datas->maprtrw = $request->input('maprtrw');
        $datas->image = $request->input('image');

       /* if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $post->image;

            $products->image = $filename;

            Storage::delete($oldFilename);
        }*/
        if($request->hasFile('featured_image')){
        $photo = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
        $destination = base_path().'/public/image';
        $request->file('featured_image')->move($destination,$photo);
        $oldFilename = $datas->image;
        $datas['image'] = $photo;
        Storage::delete($oldFilename);
        }


        $datas->save();
        flashMe()->info();
        return redirect()->route('certifi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function delstock($id)
    {
        $data = Cardpemdas::findOrFail($id);
        Storage::delete($data->image);
        $data->delete();
        flashMe()->error();
        return redirect()->route('certifi.index');
    }
}
