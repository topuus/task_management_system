<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">{{$page_title}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse float-right" id="navbarColor01">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <div class="panel-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>

                            </a>
                            <div class="dropdown-menu dropdown_custmargin">
                                <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                                <a class="dropdown-item" href="{{url('/setting')}}">Setting</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <li class="d-flex align-items-center">
                        <img src="resources/assets/img/prof_b.png" class="c_img_nav" alt=".....">
                        <a href="" class="text-white nounderline">{{ Auth::user()->name }}</a>

                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cogs"></i>

                                    </a>
                                    <div class="dropdown-menu dropdown_custmargin">
                                        <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                                        <a class="dropdown-item" href="{{url('/setting')}}">Setting</a>

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </div>
                                </li>
                            </ul>
                        </div>

                </a>
                </li>
                </a>
            </li>
        </ul>
    </div>
</nav>