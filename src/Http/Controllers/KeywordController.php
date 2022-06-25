<?php

namespace Yepos\Keyword\Http\Controllers;

use Yepos\Keyword\Http\Requests\KeywordRequest;
use Yepos\Keyword\Http\Resources\KeywordResource;
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


}
