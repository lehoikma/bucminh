<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class WordAnswer extends Model
{
    protected $table = 'word_answers';

    public static function createWordAnswer($request, $id)
    {
        $wordAnswerCreateInput = $request->input('word');
//        var_dump($wordAnswerCreateInput); exit();
//        var_dump($wordAnswerCreateInput);
        //var_dump($response);
        foreach($wordAnswerCreateInput as $key => $test) {
            foreach($wordAnswerCreateInput as $test => $item) {
                var_dump($item);
        }
        }
//        foreach($wordAnswerCreateInput['word'] as $key => $test) {
//            var_dump($test);
////            $newWordAnswer = new WordAnswer;
////            $newWordAnswer->word_id = $id;
////            $newWordAnswer->content = $test['number'];
////            $newWordAnswer->status = $test['correct'];
//////            Log::debug($newWordAnswer);
////            $newWordAnswer->save();
//            }
    }
}
