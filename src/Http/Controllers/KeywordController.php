<?php

namespace Yepos\Keyword\Http\Controllers;

use Yepos\Keyword\Models\MemoryKeyword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yepos\Keyword\YeposKeywords;
class KeywordController extends Controller
{
    protected $keywords;

    public function __construct(YeposKeywords $yeposKeywords)
    {
        $this->keywords = $yeposKeywords;
    }


    public function index(){
        return view('keyword::keyword');
    }


    public function memory_keyword(){
        $memory_date = (new YeposKeywords)->keywordsByDate();
        $memory_keyword = (new YeposKeywords)->getKeywords();
        return view('keyword::memory_keyword',compact('memory_date','memory_keyword'));

    }

    public function store_memory_keyword(Request $request){
        if($request->keyword !=Null){
            MemoryKeyword::create(['user_id'=>$request->user_id,'keyword'=>$request->keyword,'created'=>date('Y-m-d')]);
        }
    }

    public function load_memory_keyword(){
        $memory_date = (new YeposKeywords)->keywordsByDate();
        $memory_keyword = (new YeposKeywords)->getKeywords();
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
