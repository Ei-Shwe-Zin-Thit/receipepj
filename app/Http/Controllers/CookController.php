<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Recipe;
use App\Favourite;
//use Session;
use Illuminate\Support\Facades\Auth;

class CookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return "Hello";
        $reciped = Recipe::all();
        $user=Auth::user();
        $category=Category::all();
        $favourite=Favourite::where('user_id',$user->id)->get();
        $obj=new Controller();
        $result=$obj->result();
        return view('cook',compact('reciped','favourite','category','result'));
    }




    public function indexcook(Request $request,$id)
    {
        /*$cookkey = 'cooking/' . $id;
        $count=1;
        if (!Session::has($cookkey)) {
            Recipe::where('id', $id)->increment('count');
            Session::put($cookkey, '++1');
        }*/
        $reciped = Recipe::all();
        

        $user=Auth::user();
        $favourite=Favourite::where('user_id',$user->id)->get();
        //return $favourite;
        // Recipe::findOrfail($id)->update([
        //     'count'=>$count
        // ]);
        $result=0;    
        $count=$request->get('count');
        //return $count;
        $result=$count+1;
        Recipe::findOrfail($id)->update([
                'count'=>$result
            ]);
        $recipe = Recipe::find($id);
        $recipecat = Category::all();
        return view('searchcook.showcook',compact('reciped','recipe','recipecat','favourite'));
    }

    public function indexcount(Request $request,$id)
    {
        $result=0;    
        $count=$request->get('count');
        //return $count;
        $result=$count+1;
        Recipe::findOrfail($id)->update([
                'count'=>$result
            ]);
            return 'success';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function favourite(Request $request)
    {
        //return 'submit';
        $user=Auth::user();
        $recipe_id=$request->get('recipe_id');
        $user_id=$user->id;

        Favourite::create([
            'user_id'=>$user_id,
            'recipe_id'=>$recipe_id
        ]);

        return redirect()->back();

    }
}
