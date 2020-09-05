@extends('searchcook.master')

@section('cookcontent')

        <div class="recipe">


            <figure class="recipe__fig">
                <img src="images/s1.jpg" alt="Tomato" class="recipe__img">
                <h1 class="recipe__title text-dark">
                      <span>Pasta with tomato cream sauce</span>

                </h1>


            </figure>
            <div class="recipe__details">
                <div class="recipe__info">
                    <svg class="recipe__info-icon">
                        <i class="flaticon-alarm-clock" style="margin-right: 5px;color: #ff3064;"></i>
                    </svg>
                    <span class="recipe__info-data recipe__info-data--minutes">45</span>
                    <span class="recipe__info-text"> minutes</span>
                </div>
                <div class="recipe__info">
                    <svg class="recipe__info-icon">
                        <i class="flaticon-group" style="margin-right: 5px;color: #ff3064;"></i>
                    </svg>
                    <span class="recipe__info-data recipe__info-data--people">4</span>
                    <span class="recipe__info-text"> servings</span>

                    {{-- <div class="recipe__info-buttons">
                               <a href="" style="text-decoration: none;"><i class="flaticon-add-interface-circular-symbol-with-plus-sign"></i></a>
                                <a href="" style="text-decoration: none;"><i class="flaticon-remove"></i>
                                </a>
                    </div> --}}

                </div>

                   <i class="flaticon-heart" style="margin-left: auto;margin-right: auto;"></i>

            </div>

           <hr class="new4">



            <div class="recipe__ingredients">
                <div>
                    <h1 class="display-3"><u>Ingredient</u></h1>
                    <ul class="recipe__ingredient-list">
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
                    </ul>
                </div>
            </div>
            <hr class="new4">

            <div class="recipe__ingredients">
                <div>
                    <h1 class="display-3"><u>How To Cook</u></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

        </div>

        <div class="shopping">
            <h2 class="heading-2">Viewer Count</h2>
            <!-- <h4>PASTA WITH TOMATO CREAM SAUCE</h4>
            <div class="form-control">
                <h4 class="text-success">Viewer 100</h4>
            </div> -->


                <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Relevant Result</h2>
                    <ol style="font-size: 15px">
                       @foreach ($result['relevant_res'] as $item)
                           <ul>{{$item}}</ul>
                       @endforeach
                    </ol>
                </div>


                  <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Non-Relevant Result</h2>
                    <ol style="font-size: 15px">
                       @foreach ($result['non_relevant_res'] as $item)
                           <ul>{{$item}}</ul>
                       @endforeach
                    </ol>
                </div>


                  <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Final Result</h2>
                    <ol style="font-size: 15px">
                       @foreach ($result['final_result'] as $item)
                           <ul>{{$item}}</ul>
                       @endforeach
                    </ol>
                </div>

                <br><br>
              <div class="div">
                    <h2 style="text-decoration: underline">Accuracy Rate</h2>
                    <ol style="font-size: 15px">
                        {{$result['performance']}}
                    </ol>
                </div>


        </div>



@endsection
