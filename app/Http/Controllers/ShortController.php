<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortModel;


class ShortController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $data = ShortModel::all();
        return response($data);
    }

    public function show($id){

        $post = ShortModel::where('id',$id)->get();
        if(! $post){
            return response()->json([
                'message'=>'post not found'
            ]);
        }
        return response ($post);
    }

    public function store(Request $request){
        $this->validate($request, [
            'judul'=>'required',
            'penulis'=>'required',
            'isi'=>'required'
        ]);
        return ShortModel::create($request->all());
    }

    public function update(Request $request, $id){
        $post = ShortModel::where('id',$id)->first();

        if($post){
            $post->judul = $request->input('judul');
            $post->penulis = $request->input('penulis');
            $post->isi = $request->input('isi');
            $post->save();

            return response()->json([
                'message'=>'Post has been update'
            ]);
        }
        return response()->json([
            'message'=>'Post has not exits'
        ]);


    }

    public function delete(Request $request, $id){
        $post=ShortModel::where('id',$id)->first();
        if($post){
            $post->delete();

            return response()->json([
                'massage'=>'Post has been deleted'
            ]);
        }
        return response()->json([
            'massage'=>'Post not found'
        ]);
    }

}
