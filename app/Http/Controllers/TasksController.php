<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for save a task into the database.
     */
    public function store(Request $request)
    {
    	$task = Task::create($request->all());
    	return response()->json($task, 201);
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
    	}

    	return response()->json($task, 200);
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
        }

        return response()->json(null, 204);
    }
}
