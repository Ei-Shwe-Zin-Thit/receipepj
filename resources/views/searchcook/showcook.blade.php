@extends('searchcook.master')

@section('cookcontent')


        <div class="recipe">

            
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

                    {{-- <div class="recipe__info-buttons">
                               <a href="" style="text-decoration: none;"><i class="flaticon-add-interface-circular-symbol-with-plus-sign"></i></a> 
                                <a href="" style="text-decoration: none;"><i class="flaticon-remove"></i>
                                </a>
                    </div> --}}

                </div>
            <form action="{{url('favourite')}}" method="POST"> 
                @csrf  
            <input type="hidden" value="{{$recipe['id']}}" name="recipe_id">             
                <button class="flaticon-heart heartbutton" type="submit" style="padding: 0; border: none; background: none;"></button>
            </form>

            </div>

           <hr class="new4">



            <div class="recipe__ingredients">
                {{-- <ul class="recipe__ingredient-list">
                    <li class="recipe__item">
                        <svg class="recipe__icon">
                            <use href="img/icons.svg#icon-check"></use>
                        </svg>
                        <div class="recipe__count">1000</div>
                        <div class="recipe__ingredient">
                            <span class="recipe__unit">g</span>
                            pasta
                        </div>
                    </li>

                    <li class="recipe__item">
                        <svg class="recipe__icon">
                            <use href="img/icons.svg#icon-check"></use>
                        </svg>
                        <div class="recipe__count">1/2</div>
                        <div class="recipe__ingredient">
                            <span class="recipe__unit">cup</span>
                            ricotta cheese
                        </div>
                    </li>

                    <li class="recipe__item">
                        <svg class="recipe__icon">
                            <use href="img/icons.svg#icon-check"></use>
                        </svg>
                        <div class="recipe__count">1</div>
                        <div class="recipe__ingredient">
                            <span class="recipe__unit"></span>
                            can of tomatoes, whole or crushed
                        </div>
                    </li>


                    <li class="recipe__item">
                        <svg class="recipe__icon">
                            <use href="img/icons.svg#icon-check"></use>
                        </svg>
                        <div class="recipe__count">1</div>
                        <div class="recipe__ingredient">
                            <span class="recipe__unit"></span>
                            can tuna packed in olive oil
                        </div>
                    </li>

                    <li class="recipe__item">
                        <svg class="recipe__icon">
                            <use href="img/icons.svg#icon-check"></use>
                        </svg>
                        <div class="recipe__count">1/2</div>
                        <div class="recipe__ingredient">
                            <span class="recipe__unit">cup</span>
                            grated parmesan cheese
                        </div>
                    </li>

                    <li class="recipe__item">
                        <svg class="recipe__icon">
                            <use href="img/icons.svg#icon-check"></use>
                        </svg>
                        <div class="recipe__count">1/4</div>
                        <div class="recipe__ingredient">
                            <span class="recipe__unit">cup</span>
                            fresh basil, chopped or torn
                        </div>
                    </li>
                </ul> --}}

                <div>
                    <h1 class="display-3"><u>Ingredient</u></h1>
                    <p>{!! $recipe['ingredient'] !!}</p>                    
                </div>
            </div>
                <hr class="new4">

            <div class="recipe__ingredients">
                <div>
                    <h1 class="display-3"><u>How To Cook</u></h1>
                    <p>{{$recipe['howtocook']}}</p>
                </div>
            </div>

       
            
        </div>

        <div class="shopping">
            <h2 class="heading-2">Viewer Count</h2>
            <h4>PASTA WITH TOMATO CREAM SAUCE</h4>
            <div class="form-control">
                <h4 class="text-success">Viewer {{$recipe['count']}}</h4>
            </div>
        </div>
    
@endsection