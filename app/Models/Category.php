<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public static function createCategory($request)
    {
            $path = public_path('uploads/category');
            $imageData = $request->file('images');
            $imageName = time() . "." . $imageData->getClientOriginalExtension();
            $uploadImage = $imageData->move($path, $imageName);
            if (empty($uploadImage)) {
                throw new Exception(trans('category/messages.move_folder_failed'));
            }
            $categoryCreateInput = $request->only('name', 'description', 'number');
            $newCategory = new Category;
            $newCategory->name = $categoryCreateInput['name'];
            $newCategory->image = $imageName;
            $newCategory->description = $categoryCreateInput['description'];
            $newCategory->number_of_word_lesson = $categoryCreateInput['number'];
            return $newCategory->save();
    }

    public static function editCategory($id, $request)
    {
        $listCate = $request->all();
        $name = $listCate['name'];
        $description = $listCate['description'];
        $number = $listCate['number'];
        $newCategory = new Category();
        $listCatebyId = $newCategory->find($id);
        if (empty($listCatebyId)) {
            return false;
        }
        $listCatebyId->name = $name;
        $listCatebyId->description = $description;
        $listCatebyId->number_of_word_lesson = $number;
        return $listCatebyId->save();
    }

    public static function deleteCategory($id)
    {
        $deleteCate = Category::find($id);
        if (empty($deleteCate)) {
            return false;
        }
        return $deleteCate->delete();
    }

    public function words()
    {
        return $this->hasMany('App\Modles\Word');
    }
}
