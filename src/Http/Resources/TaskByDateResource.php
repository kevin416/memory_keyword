<?php

namespace Yepos\Keyword\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Yepos\Keyword\Models\Tasks;
use Illuminate\Support\Facades\DB;
class TaskByDateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //现在还不知道怎么把完成的 tasks, 按完成日期分组输出
        $task = Tasks::query()

            ->whereDate("finished_date", $this->date)
            ->get();


        return [
//            'date' => $this->date,
//            'task' => $task
            'id' => $this->id,
            'title' => $this->title,
            'task' => $this->task,
            'user_id' => $this->author_id,
            'private' => $this->private,
            'finished' => $this->finished,
            'finished_date' => $this->finished_date ? Carbon::parse($this->finished_date)->format('Y-m-d') : null,
            'finished_time' => $this->finished_date ? Carbon::parse($this->finished_date)->format('H:m:s') : null,
        ];
    }
}
