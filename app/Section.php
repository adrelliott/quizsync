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
		$this->fill($request->all());
        $quiz->sections()->save($this);
        return $this;
    }

    /**
     * Create a new section, by saving via an existing Quiz model
     * @param  Request $request The input 
     * @param  Quiz    $quiz    The quiz object
     * @return Quiz           The quiz object with the new section added
     */
    public function updateSection(Request $request)
    {
        // Set the basic properties & persist
        $this->fill($request->all());
        $this->save();
        return $this;
    }

}
