<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{


    /*
     * Author:          Daieber Gonzalez.
     * Description:     This method is used for get all task associates witch the user
     */
    public function getTasks($user_id)
    {
        $task = new Task();
        $tasks = $task->allAndState($user_id);

        if ($tasks)
        {
            return response()->json(
            [
                'tasks' => $tasks,
                'status' => 200
            ], 200);
        }

        return response()->json(['status' => 204]);
    }

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for save a task into the database.
     */
    public function store(Request $request)
    {
    	$task = Task::create($request->all());
    	
        return response()->json(
        [
            'task' => $task,
            'status' => 201
        ], 201);
    }

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for update a task into the database.
     */
    public function update(Request $request, $id)
    {
    	$task = Task::find($id);
    	
    	if ($task)
    	{
    		$task->update($request->all());

            return response()->json(
            [
                'task' => $task,
                'status' => 200
            ], 200);
    	}

    	return response()->json(['status' => 204]);
    }

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for delete a task into the database.
     */
    public function delete($id)
    {
        $task = Task::find($id);
        
        if ($task)
        {
        	$task->delete();
            return response()->json(['status' => 200]);
        }

        return response()->json(['status' => 204]);
    }
}
