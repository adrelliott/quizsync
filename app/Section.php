<?php

namespace App;

use App\Quiz;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $fillable = ['title', 'description', 'button_text', 'order_by'];

    /**
     * A quiz can have many sections
     */
    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }

    /**
     * A section has many questions
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * Create a new section, by saving via an existing Quiz model
     * @param  Request $request The input 
     * @param  Quiz    $quiz    The quiz object
     * @return Quiz           The quiz object with the new section added
     */
    public function createSection(Request $request, Quiz $quiz)
    {
        // Set the basic properties
		$this->title = $request->title;
		$this->description = $request->description;
		$this->button_text = $request->button_text;

		// Set the order_by to the last (order_by starts at 0) & persist
		$this->order_by = count($quiz->sections);
        return $quiz->sections()->save($this);
    }

    /**
     * Create a new section, by saving via an existing Quiz model
     * @param  Request $request The input 
     * @param  Quiz    $quiz    The quiz object
     * @return Quiz           The quiz object with the new section added
     */
    public function updateSection(Request $request, Section $section)
    {
        // Set the basic properties & persist
        $section->title = $request->title;
        $section->description = $request->description;
        $section->button_text = $request->button_text;
        $section->order_by = $request->order_by;
        return $section->save();
    }

}
