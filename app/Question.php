<?php

namespace App;

use App\Answer;
use App\Section;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['question_title', 'question_description', 'order_by'];

    public function answers()
    {
    	return hasMany(Answer::class);
    }

    public function section()
    {
    	return belongsTo(Section::class);
    }
}
