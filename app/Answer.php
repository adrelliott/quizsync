<?php

namespace App;

use App\Question;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['answer', 'description', 'is_correct', 'score'];

    public function question()
    {
    	return belongsTo(Question::class);
    }
}
