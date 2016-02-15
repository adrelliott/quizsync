<?php

namespace App;

use App\Quiz;
use App\Answer;
use App\Section;
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

    public function createQuestion($request, $quiz)
    {
    	// Set the properties & persists
    	$this->fill($request->all());
        $this->quiz_id = $quiz->id;
        $this->save();
        return $this;
    }

    public function updateQuestion(Request $request)
    {
        // Set the basic properties & persist
        $this->fill($request->all());
        $this->save();
        return $this;
    }
}
