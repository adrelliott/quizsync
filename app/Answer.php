<?php

namespace App;

use App\Question;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['answer', 'answer_description', 'is_correct', 'score'];

    public function question()
    {
    	return belongsTo(Question::class);
    }
}
