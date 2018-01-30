<?php namespace App\Services;

use App\Models\Question;

class QuestionService
{
    private $request;
    private $snusk;

    public function __construct()
    {

    }

    public function request() {
        if(!is_null($this->request)) {
            return $this->request;
        }

        $this->request = request();
        $this->snusk = $this->request->session()->get('snusk');

        return $this->request;
    }

    public function toggleSnusk() {
        $this->snusk = 1 - (int) $this->request()->session()->get('snusk');
        $this->request()->session()->put('snusk', $this->snusk);
    }

    public function get() {
        $request = $this->request();
        $question_ids = $request->session()->get('question_id');

        $question = Question::inRandomOrder()
            ->where('isActive', 1)
            ->where('isDirty',  (int) $this->snusk)
            ->when(is_array($question_ids), function($query) use ($question_ids) {
                $query->whereNotIn('id', $question_ids);
            })
            ->first();

        if(is_null($question)) {
            return null;
        }

        $question_ids = is_array($question_ids) ? $question_ids : [];
        $request->session()->put('question_id', array_merge([$question->id], $question_ids));

        return $question;
    }

    public function clear() {
        $this->request()->session()->forget('question_id');
    }

}
