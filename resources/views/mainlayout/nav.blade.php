<nav class="navbar navbar-expand-lg navbar-light mb-0 fixed-top">
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="{{url('/')}}"><img  src="images/logo.png" style="width: 65px;height: 50px;margin-left: : 0;" alt=""></a>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      
      <ul class="navbar-nav " style="margin-right: -100px;">
        <li class="nav-item  mr-5 font-weight-bold">
          <a class="nav-link" href="{{url('/')}}">Home </a>
        </li>
        <li class="nav-item mr-5 font-weight-bold">
          <a class="nav-link m-menu" href="#menus">Menu</a>
        </li>
        <li class="nav-item mr-5 font-weight-bold">
          <a class="nav-link" href="#abouts">About</a>
        </li>
        <li class="nav-item mr-5 font-weight-bold">
          <a class="nav-link" href="#gallery"  data-aos-delay="600">Gallery</a>
        </li>
         <li class="nav-item mr-5 font-weight-bold">
          <a class="nav-link" href="#contact"  data-aos-delay="600">Contact</a>
        </li>
        <li class="nav-item mr-5 font-weight-bold">
          <a class="nav-link" href="{{url('cook')}}">Cook Receipes</a>
        </li>
        <li>
          <div class="dropdown ml-5" style="margin-right: -200px;">
            {{-- <a class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user mr-3"></i> Your Account
            </a> --}}
           {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
           <button class="dropdown-item" type="button">Favourite</button>
           <div class="dropdown-divider"></div>
           <button class="dropdown-item" type="button">Log Out</button>
          </div> --}}
          <ul class="btn btn-light">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}">{{ __('Login') }} <span class="caret"></span></a>
                    @if (Route::has('register'))
                    <ul>
                    <li class="dropdown-menu dropdown-menu-right">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                  </ul>
                </li>
                
                @endif
            @else
                <li class="nav-item">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
          </div>
         </div>
        </li>
      </ul>
  
    </div>
  
  
     
  </nav>