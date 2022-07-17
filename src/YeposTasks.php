<?php
namespace Yepos\Keyword;
use Yepos\Keyword\Http\Resources\TaskResource;
use Yepos\Keyword\Models\Tasks;

class YeposTasks
{
    public function apiGetTasks(){
        $tasks = Tasks::select('finished')->groupBy('finished')->orderBy('finished')->orderBy('finished_date','desc')->get();
        return TaskResource::collection($tasks);
    }
}
