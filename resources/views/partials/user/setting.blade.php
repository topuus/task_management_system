@include('partials.head')
@include('partials.left_nav')
<div class="c_nav_margin">
@include('partials.nav',['page_title'=>'Settings'])
@include('partials.content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<img src="resources/assets/img/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; margin-right:25px; border-radius:50%;"><br>
				<h2>{{$user->name}}'s Setting</h2>

				<form enctype="multipart/form-data" action="{{url('/profile_up')}}" method="POST">
					<label>Update Profile Picture</label><br>
					<input type="file" name="avatar">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<input type="submit" value="Update" class="pull-right btn btn-sm btn-primary">
					
				</form>
			</div>			
		</div>

		<hr id="navbarColor01">
	</div>

@include('partials.footer')