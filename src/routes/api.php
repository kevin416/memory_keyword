<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Models\MemoryKeyword;
use Yepos\Keyword\YeposKeywords;
use Yepos\Keyword\Http\Resources\KeywordResource;

Route::get('get_keywords',function(){
    $keywords = (new YeposKeywords)->keywordsByDate();

    return KeywordResource::collection($keywords);


});
