<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a href="{{route('homepage')}}" class="navbar-brand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if(url()->current()==route('dept-list', 'csc')){{__('active')}}@endif"><a href="{{route('dept-list', 'csc')}}" class="nav-link"><i class="fa fa-"></i> Computer Science</a></li>
            <li class="nav-item @if(url()->current()==route('dept-list', 'chemistry')){{__('active')}}@endif"><a href="{{route('dept-list', 'chemistry')}}" class="nav-link"><i class="fa fa-"></i> Chemistry</a></li>
            <li class="nav-item @if(url()->current()==route('dept-list', 'geology')){{__('active')}}@endif"><a href="{{route('dept-list', 'geology')}}" class="nav-link"><i class="fa fa-"></i> Geology</a></li>
            <li class="nav-item @if(url()->current()==route('dept-list', 'maths')){{__('active')}}@endif"><a href="{{route('dept-list', 'maths')}}" class="nav-link"><i class="fa fa-"></i> Mathematics</a></li>    
            <li class="nav-item @if(url()->current()==route('dept-list', 'physics')){{__('active')}}@endif"><a href="{{route('dept-list', 'physics')}}" class="nav-link"><i class="fa fa-"></i> Physics</a></li>
           
        </ul>
        <div class="dropdown-divider"></div>

        <form action="{{route('search-files')}}" method="get" class="form-inline my-2 my-lg-0">
            @csrf
            @method('get')
            <input name="search" required class="form-control mr-sm-2" type="search" placeholder="Search" value="{{request()->get('search')}}" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="dropdown-divider"></div>
        <ul class="navbar-nav mr-3">
                @auth
                <li class="nav-item">
                    <a href="{{route('upload-form')}}" class="nav-link  @if(url()->current()==route('upload-form')){{__('active')}}@endif"><i class="fa fa-upload"></i> Upload File</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown">
                        @if(auth()->user()->profile()->exists())
                        Hello, {{ucfirst(auth()->user()->profile->first_name)}}
                        @else
                        Hello, User
                        @endif
                    </a>
                    <div class="dropdown-menu">
                        @if(auth()->check() && auth()->user()->role->name=='admin')
                        <a class="dropdown-item" href="{{route('dashboard')}}">Admin Dashboard</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('change-password')}}">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('my-files')}}" class="dropdown-item">My Files</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('profile')}}" class="dropdown-item">Profile</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </li>
                @endguest
                @guest
                  <li class="nav-item">
                      <a class="nav-link @if(url()->current()==route('login-form')){{__('active')}}@endif" href="{{route('login-form')}}">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @if(url()->current()==route('register-form')){{__('active')}}@endif" href="{{route('register-form')}}">Sign Up</a>
                  </li>
                @endguest
        </ul>

    </div>
</nav>
<div style="margin-top: 70px;"></div>