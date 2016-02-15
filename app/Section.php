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
     * A section must belong to a quiz
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
     * @return Model           The new section object 
     */
    public function createSection(Request $request, Quiz $quiz)
    {
        // Set the basic properties
		$this->fill($request->all());
        // Make sure order_by isn't blank
        if(empty($request->order_by)) 
            $this->order_by = count($quiz->sections) + 1;

        // Save (using the relatonship on quiz & return the model
        $quiz->sections()->save($this);
        return $this;
    }

    /**
     * Create a new section, by saving via an existing Quiz model
     * @param  Request $request The input 
     * @param  Quiz    $quiz    The quiz object
     * @return model           The updated section model
     */
    public function updateSection(Request $request)
    {
        // Set the basic properties
        $this->fill($request->all());

        // Save & return the model
        $this->save();
        return $this;
    }

}
