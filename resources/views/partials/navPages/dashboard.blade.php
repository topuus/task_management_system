@include('partials.head')
@include('partials.left_nav')
<div class="c_nav_margin">
@include('partials.nav',['page_title'=>'Dashboard'])
@include('partials.content')
	    <div class="panel panel-default dropleft">
            <div class="panel-heading">adsfasdf</div>

                <div class="panel-body">
					<ul class="nav nav-tabs">
					  <li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="#">Action</a>
					      <a class="dropdown-item" href="#">Another action</a>
					      <a class="dropdown-item" href="#">Something else here</a>
					      <div class="dropdown-divider"></div>
					      <a class="dropdown-item" href="#">Separated link</a>
					    </div>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#">Link</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link disabled" href="#">Disabled</a>
					  </li>
					</ul>
                </div>
            </div>
    </div>

@include('partials.footer')