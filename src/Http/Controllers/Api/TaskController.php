<?php

namespace Yepos\Keyword\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Yepos\Keyword\Http\Requests\TaskRequest;
use Yepos\Keyword\Models\Tasks;
use Yepos\Keyword\YeposTasks;

class TaskController extends Controller
{
    //
    protected $tasks;

    public function __construct(YeposTasks $yeposTasks){
        $this->tasks = $yeposTasks;
    }
    public function index(){
        return $this->tasks->apiGetTasks();
    }

    public function store(TaskRequest $request){
        if($request->title !=Null){
            $task = $request->validated();
            Tasks::create($task);
            return $this->tasks->apiGetTasks();
        }
    }

    public function update($id){
        $task = Tasks::findOrFail($id);
        if($task->finished ==1){
            $check =0;
        }else{
            $check =1;
        }

        $task->update(['finished'=>$check,'finished_date'=>now()]);
        return $this->tasks->apiGetTasks();
    }
    public function destroy($id){
        $task = Tasks::findOrFail($id);
        $task->delete();
        return response()->noContent();
    }
}
