<?php

namespace Yepos\Keyword\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
use Yepos\Keyword\Models\Tasks;
use Illuminate\Support\Facades\DB;
class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        $task = Tasks::where('finished',$this->finished)->orderBy('created_at','DESC')->get();
        $finished_task = Tasks::query()
            ->where('finished',1)
            ->orderBy('updated_at','desc')
            ->get();
        $doing_task = Tasks::query()
            ->where('finished',0)
            ->get();


        return [
            'finished' => $this->finished,
            'tasks' => $this->finished == 1 ? TaskByDateResource::collection($finished_task) : TaskByDateResource::collection($doing_task),
//
        ];
    }
}
