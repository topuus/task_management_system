@include('partials.head')
@include('partials.left_nav')
<div class="c_nav_margin">
@include('partials.nav',['page_title'=>'Profile'])
@include('partials.content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="resources/assets/img/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; margin-right:25px; border-radius:50%;">
            <br>
            <h2>MD {{$user->name}}'s Profile</h2>

<ul class="list-group list-group-flush">
  <li class="list-group-item bg-transparent p-0"> ID: {{ Auth::user()->id }} <hr class="m-0"></li>
  <li class="list-group-item bg-transparent p-0 mt-2"> Name: {{ Auth::user()->name }}</li>
  <li class="list-group-item bg-transparent p-0"> Email: {{ Auth::user()->email }}</li>
</ul>

        </div>
    </div>
</div>



@include('partials.footer')