@include('partials.head')
@include('partials.left_nav')
<div class="c_nav_margin">
@include('partials.nav',['page_title'=>'Profile'])
@include('partials.content')


<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="card-header">Mr. {{ Auth::user()->name }}</h3>
            <img style="height: 450px; width: 450px; " src="resources/assets/img/prof_b.png" class="img-responsive mx-auto" alt=".....">
        </div>

        <div class="col">
        	<h3 class="card-header">Informations</h3>
            <div class="card mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        ID: {{ Auth::user()->id }}
                    </li>
                    <li class="list-group-item">
                        Name: {{ Auth::user()->name }}
                    </li>
                    <li class="list-group-item">
                        Email: {{ Auth::user()->email }}
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>


@include('partials.footer')