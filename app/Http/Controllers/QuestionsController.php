<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Question;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{

    /**
     * route: questions.create
     * URL: app/sections/{section}/questions/create
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quiz $quiz)
    {
        return view('questions.create', compact('quiz'));
    }

    /**
     * route: questions.store
     * url: POST app/quizzes/{quiz}/questions
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quiz $quiz)
    {
        // Use the relationship on the quiz model to attach a new question
        $question = $quiz->createQuestion($request);

        // Does this question type need us to provide answers?
        if($question->type == 'multichoice' || $question->type == 'diagnostic')
            return redirect()->route('answers.create', ['question' => $question->id]);
        
        return redirect()->route('questions.edit', ['question' => $question->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    /**
     * route: questions.update
     * urL: PUT app/questions/{question}
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question = $question->updateQuestion($request);

        // Do we need to update the answers too?
        if($this->answerUpdateRequired($request))
            return redirect()->route('answers.create', ['question' => $question->id]);

        return redirect()->route('questions.edit', ['question' => $question->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function answerUpdateRequired($request)
    {
        // Has the question type changed? 
        if($request->type == $request->original_question_type)
            return false;

        // Has it changed to diagnosis or mutlichoice?
        if($request->type == 'diagnostic' || $request->type == 'multichoice')
            return true;

        return false;
    }
}
