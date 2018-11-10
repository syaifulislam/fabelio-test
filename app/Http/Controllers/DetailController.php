<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
use App\Comment;

class DetailController extends Controller
{
    public function show($id){
        $getData = Submit::find($id);
        $getDataComments = Comment::where('submit_id',$id)->get();
        return view('DetailPage',compact('getData','getDataComments'));
    }

    public function comment(Request $request,$id){
        $params = $request->only('name','comments');
        if($request->post('vote') == 1){
            $params['likes'] = 1;
            $params['dislikes'] = 0;
        }else{
            $params['likes'] = 0;
            $params['dislikes'] = 1;
        }
        $params['submit_id'] = $id;
        Comment::insert($params);
        return redirect()->back();
    }
}
