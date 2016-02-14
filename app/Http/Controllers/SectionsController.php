<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Section;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{
    protected $section;

    public function __construct(Section $section)
    {
        $this->section = $section;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quiz $quiz)
    {
        return view('sections.create', compact('quiz'));
    }

    /**
     * POST to app/quizzes/{quiz}/sections
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quiz $quiz)
    {
        $this->section->createSection($request, $quiz);
        return redirect('/app/quizzes/' . $quiz->id);
    }

    

    /**
     * route: sections.edit
     * url: GET app/quizzes/{quiz}/sections/{section}/edit
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz, Section $section)
    {
        return view('sections.edit', compact('quiz', 'section'));
    }


    /**
     * route: sections.update
     * url: PUT app/quizzes/{quiz}/sections/{section}
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $this->section->updateSection($request, $section);
        return redirect('/app/quizzes/' . $section->quiz_id);
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
