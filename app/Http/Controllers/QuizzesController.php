<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizzesController extends Controller
{
    protected $quiz;

    public function __construct(Quiz $quiz)
    {
        $this->quiz = $quiz;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = $this->quiz->getQuizzes();
        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->quiz->createQuiz($request);
        return redirect('/app/quizzes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // @todo get all quiz
        return view('quizzes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Gets the value of quiz.
     *
     * @return mixed
     */
    protected function getQuizzes()
    {
        return $this->quiz;
    }
}
