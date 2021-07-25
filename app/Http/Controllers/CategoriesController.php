<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use App\Models\EventsModel;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = CategoriesModel::orderBy('id','asc')->get();
        return $categories;
    }
    public function createCategory(Request $request){
        $category = $request->input('category');
        $count = CategoriesModel::Where('category',$category)->count();
        if($count==0){
            $result = CategoriesModel::insert([
                'category'=> $category,
            ]);
            return $result;           
        }
        else{
            return 0;
        }
    }
    public function updateCategory(Request $request, $id)
    {
        $category = CategoriesModel::find($id);
        $reqCategory = $request->input('category');

        $count = CategoriesModel::Where('category',$reqCategory)->count();
        if($count==0){
            $events = EventsModel::all();
            foreach($events as $events) {
                if($category->category == $events->category){
                    $events->category = $request->input('category');
                    $events->save();
                }
            }
            $category->category=$request->input('category');
            $category->save();
            return $category;
        }
        else{
            return 0;
        }
    }
    public function deleteCategory($id)
    {
        $category = CategoriesModel::find($id);
        $events = EventsModel::all();
        foreach($events as $events) {
            if($category->category == $events->category){
                $events->delete();
            }
        }
        $category->delete();
        return $category;
    }
}
