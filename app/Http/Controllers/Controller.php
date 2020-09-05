<?php

namespace App\Http\Controllers;
use App\Category;
use App\Favourite;
use App\Http\Controllers\MyClass\Rocchio;
use App\Recipe;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function result(){
        #array data section
      #name data and original array for each iteams
  //        $name = array('Cake','Pizza','Pie','Apple','Hot Dog');
          $receipe = Recipe::all();
          $name=Rocchio::getArray($receipe,'name');
  //        return $name;
          $original=Rocchio::getArray($receipe,'fav');
  //        $original = array(0,1,2,3);
  
          #fav and count data for each items
  //        $fav = array('',1,2,2);
           $fav=Rocchio::getArray($receipe,'fav');
           $count=Rocchio::getArray($receipe,'count');
  //        $count = array(1,0,4,4,3);
  //return $count;
          #black array for relevant and non_relevant
          $relevant = array();
          $non_relevant = array();
  
          $x = array();
          $y = array();
  
          #filter relevant or non_relevant accroding fav & count
          $length = count($original);
          for ($i = 0; $i < $length; $i++){
              if(!$count[$i]){
                  if(!$fav[$i]){
                      $a = $original[$i];
                      array_push($non_relevant,$a);
                      array_push($x,$name[$i]);
                  }
                  else{
                      $a = $original[$i];
                      array_push($non_relevant,$a);
                      array_push($x,$name[$i]);
                  }
              }else{
                      $a = $original[$i];
                      array_push($relevant,$a);
                      array_push($y,$name[$i]);
              }
          }
  
  //        return $non_relevant;
          #echo relevant and non_relevant result
          #array
  //
  //        echo "<br> Relevant  <br>";
  //        print_r($relevant);
  //        echo "<br>";
  //        print_r($y);
  //
  //        echo "<br>";
  //        echo "<br> Non_Relvevant  <br>";
  //        print_r($non_relevant);
  //        echo "<br>";
  //        print_r($x);
  //        echo "<br>";
  //
  //        #non array
  //        echo "<br> Relevant Result <br>";
          $relevant_res=[];
          foreach ($y as $key => $value){
              array_push($relevant_res,$value);
          }
          $non_relevant_res=[];
          foreach ($x as $key => $value){
              array_push($non_relevant_res,$value);
          }
  
          #function call to calcu Centriod Vector value for each
          $rel = Rocchio::calcu1($relevant);
          $nrel = Rocchio::calcu1($non_relevant);
  
          #final calculation
          #Calcu New Query
          $length2 = count($relevant);
  //        echo "<br>Final result is:<br>";
          $final_result=[];
          for ($i = 0; $i < $length2; $i++){
               $a = $relevant[$i];
  
              $b = 0;
              $b = $rel * count($relevant);
  
              $c = 0;
              $c = $nrel * count($non_relevant);
  
              #New Query function call
              $modified = Rocchio::calc($a,$b,$c);
              array_push($final_result,$y[$i]);
  //            echo "<br>".$y[$i]. ":".$modified ."</br>";
          }
          $performance=(count($relevant_res)/count($receipe))/count($receipe);
  
            return [
              'relevant_res'=>$relevant_res,
              'non_relevant_res'=>$non_relevant_res,
              'final_result'=>$final_result,
                'performance'=>$performance
              ];
      }
  
      function search(Request $request){
          $id=$request->get('cat_id');
          $reciped=Recipe::where('cat_id',$id)->get();
          $user=Auth::user();
          $category=Category::all();
          $favourite=Favourite::where('user_id',$user->id)->get();
  
          $obj=new Controller();
          $result=$obj->result();
          return view('cook',compact('reciped','favourite','category','result'));
      }
  
  
  
}
