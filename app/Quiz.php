<?php

namespace App;

use App\Section;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	// use Traits\UserTrait;
	
	protected $fillable = ['quiz_title', 'quiz_description', 'quiz_url', 'is_public'];


    public function sections()
    {
    	return hasMany(Section::class);
    }

    public function getQuizzes()
    {
    	return $this->paginate(5);
    }

    public function createQuiz(Request $request)
    {
 		// Set the basic properties
		$this->quiz_title = $request->quiz_title;
		$this->quiz_description = $request->quiz_description;
		$this->is_public = $request->is_public;

		// Set the user_id & tenant_id (from the Auth::user()) & persist
		$this->addUserAttributes();
		$this->save(); //sets the row id - rqd for the hash below

		// Set the quiz url & update the record
		$this->quiz_url = Hashids::encode($this->id);
 		$this->save();
    }

    protected function addUserAttributes()
    {
    	$this->user_id = 2;
    	$this->tenant_id = 33;
    }


}
