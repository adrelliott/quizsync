<?php

namespace App;

use App\Question;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	use SoftDeletes;

	protected $fillable = ['answer', 'description', 'is_correct', 'score'];

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }

    
}
