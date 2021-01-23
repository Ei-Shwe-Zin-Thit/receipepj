@extends('searchcook.master')

@section('cookcontent')


      

            
            <figure class="recipe__fig">
                <img src="{{asset('image/'.$recipe['img'])}}" alt="Tomato" class="recipe__img">
                <h1 class="recipe__title text-dark">
                    <span>{{$recipe['name']}}</span>                    
                </h1>

                
            </figure>
            <div class="recipe__details">
                <div class="recipe__info">
                    <svg class="recipe__info-icon">
                        <i class="flaticon-alarm-clock" style="margin-right: 5px;color: #ff3064;"></i>
                    </svg>
                    <span class="recipe__info-data recipe__info-data--minutes">{{$recipe['time']}}</span>
                    {{-- <span class="recipe__info-text"> minutes</span> --}}
                </div>
                <div class="recipe__info">
                    <svg class="recipe__info-icon">
                        <i class="flaticon-group" style="margin-right: 5px;color: #ff3064;"></i>
                    </svg>
                    <span class="recipe__info-data recipe__info-data--people">{{$recipe['serving']}}</span>
                    <span class="recipe__info-text"> servings</span>

                </div>
            <form action="{{url('favourite')}}" method="POST"> 
                @csrf  
            <input type="hidden" value="{{$recipe['id']}}" name="recipe_id">             
                <button class="flaticon-heart heartbutton" type="submit" style="padding: 0; border: none; background: none;"></button>
            </form>

            </div>

           <hr class="new4">



            <div class="recipe__ingredients">
                <div>
                    <h1 class="display-3"><u>Ingredient</u></h1>
                    <p>{!! $recipe['ingredient'] !!}</p>                    
                </div>
            </div>
                <hr class="new4">

            <div class="recipe__ingredients">
                <div>
                    <h1 class="display-3"><u>How To Cook</u></h1>
                    <p>{!! $recipe['howtocook'] !!}</p>
                </div>
            </div>

       
            
        

       


        
@endsection