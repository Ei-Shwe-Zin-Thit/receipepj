<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url('style1.css')}}">
    
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('font/flaticon.css')}}">
    
    <title>All Receipes</title>
</head>


<body>
    
    <div class="container p-5">
        <header class="header">
            <img src="{{url('images/logo.png')}}" alt="Logo" class="header__logo">
            <a href="{{url('/')}}" class="" style="text-decoration: none;margin-left:-308px;margin-top: 70px;color:  #ff3064;"><h3 class="">Go To Home</h3></a>
            <form class="search" action="{{url('cook/search')}}">
                @csrf
                <input type="text" name="cat_name" class="search__field" placeholder="Search over 1,000,000 recipes...">
                {{--<select name="cat_id" id="" class="search__field">
                    @foreach($category as $item)
                    <option value="{{$item['id']}}">{{$item['cat_name']}}</option>
                    @endforeach
                </select>--}}
                
                <button type="submit" class="btn search__btn">
                    <span>Search</span>
                </button>
            </form>
            <div class="likes">
                <div class="likes__field">
                    
                    {{-- <img src="{{url('images/heart.png')}}" style="width: 30px;height: 30px;margin-left: -20px;" alt=""> --}}
                    
                </div>
                <div class="likes__panel">
                    <ul class="likes__list">
                        @foreach($favourite as $value)
                        <li>
                            <a class="likes__link" href="{{url('cooking/'.$value->id)}}">
                                <figure class="likes__fig">
                                    <img src="{{asset('image/'.$value->img)}}" alt="Test">
                                </figure>
                                <div class="likes__data">
                                    <h4 class="likes__name" ct-sequence="cool53">{{$value->name}}</h4>
                                    <p class="likes__author">{{$value->publisher}}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </header>