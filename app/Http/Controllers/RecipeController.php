<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Category;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipecat = Category::all();
        return view('adminlayout.recipe',compact('recipecat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->hasFile('img')){
            $img = $request->file('img');
            $image_name = uniqid().'_'.$img->getClientOriginalName();
            //return $image_name;
            $img->move(public_path('image'),$image_name);
            //$photo->move(public_path()."/images/",$image_name);

            Recipe::create([
                'img'=>$image_name,
                'name'=>$request->get('name'),
                'time'=>$request->get('time'),
                'ingredient'=>$request->get('ingredient'),
                'howtocook'=>$request->get('howtocook'),
                'serving'=>$request->get('serving'),
                'publisher'=>$request->get('publisher'),
                'cat_id'=>$request->get('cat_id')
            ]);
            return redirect('showrecipe');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('img')){
            $img = $request->file('img');
            $image_name = uniqid().'_'.$img->getClientOriginalName();
            //return $image_name;
            $img->move(public_path('image'),$image_name);
            //$photo->move(public_path()."/images/",$image_name);

            Recipe::create([
                'img'=>$image_name,
                'name'=>$request->get('name'),
                'time'=>$request->get('time'),
                'ingredient'=>$request->get('ingredient'),
                'howtocook'=>$request->get('howtocook'),
                'serving'=>$request->get('serving'),
                'publisher'=>$request->get('publisher'),
                'cat_id'=>$request->get('cat_id')
            ]);
            return redirect('showrecipe');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $recipe = Recipe::all();
        $recipecat = Category::all();
        return view('adminlayout.show_recipe',compact('recipe','recipecat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        $recipecat = Category::all();
        return view('adminlayout.edit_recipe',compact('recipe','recipecat'));
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
        if($request->hasFile('img')){
            $img = $request->file('img');
            $image_name = uniqid().'_'.$img->getClientOriginalName();
            $img->move(public_path('image'),$image_name);

            $image = Recipe::find($id);
            $image_path = public_path().'/image/'.$image->img;
            if(file_exists($image_path)){
                unlink($image_path);
            }

            Recipe::findOrfail($id)->update([
                'img'=>$image_name,
                'name'=>$request->get('name'),
                'time'=>$request->get('time'),
                'ingredient'=>$request->get('ingredient'),
                'howtocook'=>$request->get('howtocook'),
                'serving'=>$request->get('serving'),
                'publisher'=>$request->get('publisher'),
                'cat_id'=>$request->get('cat_id')
            ]);
        }else{
            Recipe::findOrfail($id)->update([
                'img'=>$image_name,
                'name'=>$request->get('name'),
                'time'=>$request->get('time'),
                'ingredient'=>$request->get('ingredient'),
                'howtocook'=>$request->get('howtocook'),
                'serving'=>$request->get('serving'),
                'publisher'=>$request->get('publisher'),
                'cat_id'=>$request->get('cat_id')
            ]);            
        }
        return redirect ('showrecipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        unlink(public_path().'/image/'.$recipe->img);
        $recipe->delete();
        return redirect()->back();
    }

    public function main()
    {
        $recipe = Recipe::orderBy('id','desc')->limit(4)->get();
        return view('index',compact('recipe'));
    }
}
