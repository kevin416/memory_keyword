<?php

namespace Yepos\Keyword\Http\Controllers;

use Yepos\Keyword\Models\MemoryKeyword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeywordController extends Controller
{

    public function index(){
        return view('keyword::keyword');
    }

    public function getKeywords(&$memory_date,&$memory_keyword){

        $memory_date = MemoryKeyword::selectRaw("DATE_FORMAT(created_at, '%d-%m-%Y') as date")->groupBy('date')->orderBy('date','desc')->get();
        $memory_keyword = MemoryKeyword::selectRaw("DATE_FORMAT(created_at, '%d-%m-%Y') as date,keyword,id")->orderBy('created_at', 'DESC')->get();

    }
    public function memory_keyword(){

        $this->getKeywords($memory_date,$memory_keyword);
        return view('keyword::memory_keyword', compact('memory_keyword','memory_date'));

    }

    public function store_memory_keyword(Request $request){
        MemoryKeyword::create(['user_id'=>$request->user_id,'keyword'=>$request->keyword]);
    }

    public function load_memory_keyword(){
        $this->getKeywords($memory_date,$memory_keyword);

        return view('keyword::load_memory_keyword', compact('memory_keyword','memory_date'));
    }

    public function delete_memory_keyword(Request $request){
        $keyword = MemoryKeyword::findOrFail($request->id);
        $keyword->delete();
        return response()->json([
            'action' => 'success',
            'message' => 'Successfully action.',
        ]);
    }
}
