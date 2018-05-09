@include('partials.head')
	@include('partials.left_nav')
		<div class="c_nav_margin">
    	@include('partials.nav',['page_title'=>'Task'])
        @include('partials.content')
		@include('partials.footer')