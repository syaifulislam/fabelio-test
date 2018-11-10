<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
use App\Comment;
use Carbon\Carbon;

class SubmitController extends Controller
{
    public function create(Request $request){
        $params = $request->all();
        $params['created_at'] = Carbon::now()->timezone('Asia/Jakarta');
        $params['updated_at'] = Carbon::now()->timezone('Asia/Jakarta');
        $create = Submit::insertGetId($params);
        return redirect('/detail/'.$create);
    }

    public function show(){
        $data = Submit::all();
        return view('ViewListPage',compact('data'));
    }
}
