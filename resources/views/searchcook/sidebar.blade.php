<div class="results">
    <ul class="results__list">
        @if(Session::get('reciped')!='')
        @foreach (Session::get('reciped') as $value)
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
            {{-- <a class="results__link results__link--active" href="{{url('cooking/'.$value['id'])}}"> --}}
                {{-- <figure class="results__fig">
                    <img src="{{asset('image/'.$value['img'])}}" alt="Test">
                </figure>
                <div class="results__data">
                    <h4 class="results__name">{{$value['name']}}</h4>
                    <p class="results__author">{{$value['publisher']}}</p>
                </div>
            </a> --}}
        </li>
       
        @endforeach      
    
    </ul>

    <div class="results__pages">
        
        <div class="row justify-content-between">
            <button class="btn-inline results__btn--prev">
           
            <span>Page 1</span>
        </button>
        <button class="btn-inline results__btn--next">
            <span>Page 2</span>
        </button>
        </div>
        
    </div>
    @endif
</div>