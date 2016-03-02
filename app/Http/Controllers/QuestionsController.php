<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Section;
use App\Question;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    protected $question;
    protected $quiz;

    public function __construct(Question $question, Quiz $quiz)
    {
        $this->question = $question;
        $this->quiz = $quiz;
    }


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
        $question = $this->question->createQuestion($request, $quiz);
        return redirect()->route('answers.create', ['question' => $question->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz, Question $question)
    {
        return view('questions.edit', compact('quiz', 'question'));
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
        $question->updateQuestion($request);
        return redirect()->route('questions.edit', ['quiz' => $question->quiz->id, 'question' => $question->id]);
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
}
