<?php

namespace App;

use App\Answer;
use App\Section;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['title', 'description', 'button_text', 'type', 'order_by'];

    public function answers()
    {
    	return hasMany(Answer::class);
    }

    public function section()
    {
    	return belongsTo(Section::class);
    }

    public function createQuestion($request, $section)
    {
    	// Set the properties & persists via the section model)
    	$this->fill($request->all());
		$this->order_by = count($section->questions);
        $this->section_id = $section->id;
        $this->quiz_id = $section->quiz_id;

        return $section->questions()->save($this);
    }
}
