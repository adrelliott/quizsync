<?php

namespace App;

use App\Section;
use App\Question;
use App\Traits\UserTrait;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	/**
	 * Adds a method to append the user_id and tenant_id onto a record
	 */
	use UserTrait;

	protected $fillable = ['title', 'description', 'is_public'];

    /*
    * Realtionship: one quiz can have many sections
     */
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    /**
     * Relationship: one quiz can have many questions
     * @return 
     */
    public function questions()
    {
    	return $this->hasMany(Question::class);
    }

    /**
     * A quiz can have many sections, and each section can have many questions
     * @return 
     */
    public function questionsBySection()
    {
        return $this->hasManyThrough(Question::class, Section::class);
    }

    /**
     * Get a list of quizzes paginates
     * @param  integer $limit The number pf quizzes to get (default 5)
     * @return collection         Collection of quizzes
     */
    public function getQuizzes($limit = 5)
    {
    	return $this->paginate($limit);
    }

    /**
     * Stores a new quiz row
     * @param  Request $request The request object
     * @return model Return s newly created quiz model
     */
    public function createQuiz(Request $request)
    {
 		// Set the basic properties
		$this->fill($request->all());

		// Set the user_id & tenant_id (from the Auth::user()) & persist
		$this->addUserAttributes();
		$this->save(); //sets the row id - rqd for the hash below

		// Set the quiz url & update the record
		$this->url = Hashids::encode($this->id);
 		$this->save();
        return $this;
    }

    /**
     * Updates an existing quiz row
     * @param  Request $request The user input
     * @return model           The updated quiz model
     */
    public function updateQuiz(Request $request)
    {
        // Set the basic properties
        $this->fill($request->all());
        $this->save();
        return $this;
    }


}
