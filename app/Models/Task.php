<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    // Add fillable property into product model
    protected $fillable = ['name', 'priority', 'expiration', 'state_id', 'user_id'];

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for get all task associated with the user.
     */
    public function allAndState($user_id)
    {
    	return $this->select('tasks.id', 'name', 'priority', 'expiration', 'state_id', 'states.description', 'user_id')
					->join('states', 'tasks.state_id', '=', 'states.id')
					->where('user_id', '=', $user_id)
					->get();
    }
}
