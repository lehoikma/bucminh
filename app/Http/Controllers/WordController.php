<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Word;
use App\Models\WordAnswer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\WordCreateRequest;

class WordController extends Controller
{
    public function getCreate()
    {
        $listCategory = Category::all();
        return view('admin.word_add', ['listCate' => $listCategory ]);
    }

    public function postCreate(WordCreateRequest $request)
    {
        $idWord = Word::createWord($request);
        WordAnswer::createWordAnswer($request, $idWord);
//        return redirect()->action('WordController@getListWord');
    }

    public function getListWord()
    {
        echo "day la get list word";
    }
}
