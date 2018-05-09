<body>
    <div class="container-fluid left_nav">
        <div class="jumbotron left_nav_cont">
            <div class="left">
                <ul class="list-group">
                    <li class="list-group-item d-flex align-items-center cdiv">
                        <img src="resources/assets/img/prof_b.png" class="c_img" alt=".....">
                        <div class="flex-column c_user align-items-center">
                            <a href="" class="text-info">{{ Auth::user()->name }}</a>
                            <p><span class="dot"></span>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                online
                            </p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-cust">
                        Navigations
                    </li>

                    <li class="list-item d-flex align-items-center">
                        <a href="{{ url('dashboard') }}" class="list-group-item list-group-item-action"> Dashboard
                                        <span class="badge badge-primary badge-pill float-right">14</span>
                                    </a>

                    </li>

                    <li class="list-item d-flex align-items-center">
                        <a href="{{ url('tasks') }}" class="list-group-item list-group-item-action">Tasks
                                        <span class="badge badge-primary badge-pill float-right">14</span></a>
                    </li>

                    <li class="list-item d-flex align-items-center">
                        <a href="{{ url('mytasks') }}" class="list-group-item list-group-item-action">My Tasks
                                        <span class="badge badge-primary badge-pill float-right">14</span>
                                    </a>
                    </li>

                    <li class="list-item d-flex align-items-center">
                        <a href="{{ url('clients') }}" class="list-group-item list-group-item-action">Clients
                                        <span class="badge badge-primary badge-pill float-right">14</span>
                                    </a>
                    </li>

                    <li class="list-item d-flex align-items-center">
                        <a href="{{ url('projects') }}" class="list-group-item list-group-item-action">Projects
                                        <span class="badge badge-primary badge-pill float-right">14</span>
                                    </a>
                    </li>

                    <li class="list-item d-flex align-items-center">
                        <a href="{{ url('priority') }}" class="list-group-item list-group-item-action">Priority
                                        <span class="badge badge-primary badge-pill float-right">14</span>
                                    </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>