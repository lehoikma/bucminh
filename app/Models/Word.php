<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';

    public function categori()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function wordAnswers()
    {
        return $this->hasMany('Appp\Models\WordAnswer');
    }

    public static function createWord($request)
    {
        $wordCreateInput = $request->only('category', 'content');
        $newWord = new Word;
        $newWord->category_id = $wordCreateInput['category'];
        $newWord->content = $wordCreateInput['content'];
        $newWord->save();
        return $idWord = $newWord->id;
    }
}
