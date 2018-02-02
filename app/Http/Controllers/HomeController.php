<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Services\QuestionService;

/**
 * @property QuestionService question
 */
class HomeController
{
    private $question;

    public function __construct()
    {
        $this->question = new QuestionService();
    }

    public function index() {
        $question = $this->question->get();

        return view('home', compact('question'));
    }

    public function show(Question $question) {
        return view('home', compact('question'));
    }

    public function random() {
        $question = $this->question->get();

        if(is_null($question)) {
            return view('question.reset');
        }


        return view('question.markup', compact('question'));
    }

    public function snusk() {
        $this->question->toggleSnusk();
        return redirect()->route('home.index');
    }

    public function clear() {
        $this->question->clear();
        return redirect()->route('home.index');
    }
}
