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
    	return hasMany(Answer::class);
    }

    public function section()
    {
        return belongsTo(Section::class);
    }

    public function quiz()
    {
    	return belongsTo(Quiz::class);
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


    	// // Set the main properties
    	// $this->fill($request->all());

     //    // Set question order (add to end) and persist
     //    $this->order_by = count($quiz->questions) + 1;
     //    $this->save();

        // return $this;
    }



    public function updateQuestion(Request $request)
    {
        // Set the basic properties
        $this->fill($request->all());

        // Save & return the model
        $this->save();
        return $this;
    }
}
