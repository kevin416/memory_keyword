<?php
namespace Yepos\Keyword\Http\Resources;


use Yepos\Keyword\Models\MemoryKeyword;
use Illuminate\Http\Resources\Json\JsonResource;


class KeywordResource extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $memory_keyword = MemoryKeyword::select('keyword')->where("created",$this->created)->orderBy('created_at', 'DESC')->pluck('keyword');

        return [
            'date' => $this->created,
            'keywords' => $memory_keyword,
        ];
    }
}
