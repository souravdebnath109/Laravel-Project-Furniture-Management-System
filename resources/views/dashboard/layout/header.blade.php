<div class="nav-header">
    <a href="index.html" class="brand-logo">
        {{-- <img class="logo-abbr" src="{{config('app.url')}}/Admin/images/logo.png" alt="">
        <img class="logo-compact" src="{{config('app.url')}}/Admin/images/logo-text.png" alt="">
        <img class="brand-title" src="{{config('app.url')}}/Admin/images/logo-text.png" alt=""> --}}
        @if(Auth::user() && Auth::user()->role==1)
        <p>Admin's Dashboard</p>
        @endif

        @if(Auth::user() && Auth::user()->role==2)
        <p>User's Dashboard</p>
        @endif
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
  Nav header end
***********************************-->

<!--**********************************
  Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    {{-- <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div> --}}
                </div>

                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown header-profile">
                             <a href="{{url('/logout')}}" class="dropdown-item">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="ml-2">Logout </span>
                            </a> 
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a href="{{url('/logout')}}" class="dropdown-item">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="ml-2">Logout </span>
                            </a> --}}

                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="{{url('/index')}}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>

            </div>
            </li>
            </ul>
    </div>
    </nav>
</div>
</div>