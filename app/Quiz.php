<?php

namespace App;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	protected $fillable = ['quiz_title', 'quiz_description', 'quiz_url', 'is_public'];


    public function sections()
    {
    	return hasMany(Section::class);
    }

    public function createQuiz(Request $request)
    {
 		// Set the basic properties
		$this->quiz_title = $request->quiz_title;
		$this->quiz_description = $request->quiz_description;
		$this->is_public = $request->is_public;

		// Set the user_id & tenant_id (from the Auth::user()) & persist
		$this->addUserAttributes();
		$this->save();

		// Set the quiz url
		$this->setQuizUrl();
 		// Perisist   	
    }

    private function addUserAttributes()
    {
    	$this->user_id = 2;
    	$this->tenant_id = 33;
    }

    private function setQuizUrl()
    {
    	$unHiddenUrl = join('_', [$this->tenant_id, $this->user_id]);
    	$this->quiz_url = $unHiddenUrl;
    	dd($this->quiz_url);
    }


    /**
     * Gets the value of fillable.
     *
     * @return mixed
     */
    public function getFillable()
    {
        return $this->fillable;
    }
}
