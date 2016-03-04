<?php

namespace App;

use App\Quiz;
use App\Answer;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['title', 'description', 'button_text', 'type', 'order_by', 'section_id'];

    /**
     * The Relationships
     */

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }


    /**
     * The Methods
     */
    
    public function updateQuestion(Request $request)
    {
        // Set the basic properties
        $this->fill($request->all());

        // Save & return the model
        $this->save();
        return $this;
    }

    public function syncAnswers($request)
    {
        // Delete any existing answers for this question
        $this->answers()->delete();

        // Take the request and create new answers
        $newAnswers = [];
        foreach($request->answers as $key => $answer)
            $newAnswers[$key] = new Answer($answer);

        // Now set a correct answer, if passed
        if($request->has('is_correct'))
            $newAnswers[$request->is_correct]->is_correct = true;

        // Save the new questions via the answers() method on Question, & return Question
        $this->answers()->saveMany($newAnswers);
        return $this->fresh();
    }
}
