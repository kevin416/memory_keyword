<?php
namespace Yepos\Keyword;


use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Yepos\Keyword\Http\Controllers\KeywordController;
use Yepos\Keyword\Http\Controllers\LanguageController;
use Yepos\Keyword\Models\MemoryKeyword;
use Illuminate\Support\Facades\DB;
use Yepos\Keyword\Http\Resources\KeywordResource;
class YeposKeywords
{
    protected $config;
    protected $request;

    public function __construct(Config $config = null, Request $request = null)
    {
        $this->config = $config;
        $this->request = $request;
    }
    public function keywordsByDate(){
        $memory_date = MemoryKeyword::select('created')->groupBy('created')->orderBy('created','desc')->get();
        return $memory_date;
    }
    public function getKeywords(){
        $memory_date = MemoryKeyword::select('keyword','created')->orderBy('created','desc')->get();
        return $memory_date;
    }

    public function apiKeywords(){
        return KeywordResource::collection($this->keywordsByDate());
    }

}
