<?php

namespace Yepos\Keyword\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Yepos\Keyword\Http\Requests\KeywordRequest;
use Yepos\Keyword\Http\Resources\KeywordResource;
use Yepos\Keyword\Models\MemoryKeyword;
use Yepos\Keyword\YeposKeywords;
class KeywordController extends Controller
{
    protected $keywords;

    public function __construct(YeposKeywords $yeposKeywords)
    {
        $this->keywords = $yeposKeywords;
    }

    public function index(){
        return $this->keywords->apiKeywords();
    }

    public function store(KeywordRequest $request){
        if($request->keyword !=Null){
            $keyword = $request->validated();
            $keyword['created'] = date('Y-m-d');
            MemoryKeyword::create($keyword);
            return $this->keywords->apiKeywords();
        }
    }
    public function show($id)
    {
        $keyword = MemoryKeyword::findOrFail($id);
        return $keyword;
    }

    public function destroy($id){
        $keyword = MemoryKeyword::findOrFail($id);
        $keyword->delete();
        return response()->noContent();
    }
}
