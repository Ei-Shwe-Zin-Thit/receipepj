@include('searchcook.header')

@include('searchcook.sidebar')
<div class="recipe" >
    @yield('cookcontent')
</div>
<div class="shopping float-right">
    <h2 class="heading-2">Alogorithm Applied Result</h2>
    <!-- <h4>PASTA WITH TOMATO CREAM SAUCE</h4>
        <div class="form-control">
            <h4 class="text-success">Viewer 100</h4>
        </div> -->
        {{-- <div class="results">
            <h2 style="text-decoration: underline">Relevant Result</h2>
            <ul class="results__list">
                
                @if(Session::get('relevant_res')!='')
                @foreach (Session::get('relevant_res') as $value)
                <li>
                    <form action="{{url('cooking/'.$value['id'])}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$value['count']}}" name="count">
                        
                        <button type="submit" style="padding: 0; border:none; background:none;">
                            <a class="results__link results__link--active" href="">
                                <figure class="results__fig">
                                    <img src="{{asset('image/'.$value['img'])}}" alt="Test">
                                </figure>                
                                <div class="results__data">
                                    {{-- {{Session::get('reciped')}} --}}
                                    {{-- <h4 class="results__name">{{$value['name']}}</h4>
                                    <p class="results__author">{{$value['publisher']}}</p>
                                </div>
                            </a>    
                        </button>
                        
                    </form>
                    
                </li>
                
                @endforeach      
                @endif
            </ul>
        </div> --}} 
        {{-- <div class="results">
            <h2 style="text-decoration: underline">Non_Relevant Result</h2>
            <ul class="results__list">
                
                @if(Session::get('non_relevant_res')!='')
                @foreach (Session::get('non_relevant_res') as $value)
                <li>
                    <form action="{{url('cooking/'.$value['id'])}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$value['count']}}" name="count">
                        
                        <button type="submit" style="padding: 0; border:none; background:none;">
                            <a class="results__link results__link--active" href="">
                                <figure class="results__fig">
                                    <img src="{{asset('image/'.$value['img'])}}" alt="Test">
                                </figure>                
                                <div class="results__data">
                                    {{-- {{Session::get('reciped')}} --}}
                                    {{-- <h4 class="results__name">{{$value['name']}}</h4>
                                    <p class="results__author">{{$value['publisher']}}</p>
                                </div>
                            </a>    
                        </button>
                        
                    </form>
                    
                </li>
                
                @endforeach      
                @endif
            </ul>
            
            
            
        </div> --}} 
        <div class="results">
            <h2 style="text-decoration: underline">Final Result</h2>
            <ul class="results__list">
                
                @if(Session::get('final_result')!='')
                @foreach (Session::get('final_result') as $value)
                <li>
                    <form action="{{url('cooking/'.$value['id'])}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$value['count']}}" name="count">
                        
                        <button type="submit" style="padding: 0; border:none; background:none;">
                            <a class="results__link results__link--active" href="">
                                <figure class="results__fig">
                                    <img src="{{asset('image/'.$value['img'])}}" alt="Test">
                                </figure>                
                                <div class="results__data">
                                    {{-- {{Session::get('reciped')}} --}}
                                    <h4 class="results__name">{{$value['name']}}</h4>
                                    <p class="results__author">{{$value['publisher']}}</p>
                                </div>
                            </a>    
                        </button>
                        
                    </form>
                    
                </li>
                
                @endforeach      
                @endif
            </ul>
            
            
            
        </div>
        
        
        
        
        
        
        
        
        <div class="div">
            <h2 style="text-decoration: underline">Accuracy Rate</h2>
            <ol style="font-size: 15px">
                {{$result['performance']}}
            </ol>
        </div>
        
        
    </div>
    
    
    <!-- <script  src="js/bundle.js"></script> -->
    @include('searchcook.footer')