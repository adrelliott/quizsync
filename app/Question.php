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

    public function createQuestion(Request $request, Quiz $quiz)
    {
        // Set the basic properties
        $this->fill($request->all());

        // Make sure order_by isn't blank
        if( ! isset($request->order_by)) 
            $this->order_by = count($quiz->questions) + 1;

        // Save (using the relationship on quiz & return the model
        $quiz->questions()->save($this);
        return $this;
    }

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
        foreach($request->answers as $answer)
            $newAnswers[] = new Answer($answer);

        // Save the new questions via the answers() method on Question, & return Question
        $this->answers()->saveMany($newAnswers);
        return $this->fresh();
    }
}
