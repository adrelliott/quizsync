<?php

namespace App\Http\Controllers;

use App\Question;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswersController extends Controller
{

    /**
     * Show the form for creating new questions.
     * As we sync() the answers (and delete all existing ones) 
     * this also doubles as the edit form).
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Question $question)
    {
        return view('answers.create', compact('question'));
    }

    /**
     * Store a number of new answers
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMultiple(Request $request, Question $question)
    {
        $question = $question->syncAnswers($request);
        return redirect()->route('questions.edit', ['question' => $question->id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  public function edit(Question $question)
    // {
    //     return view('answers.edit', compact('question'));
    // }

}
