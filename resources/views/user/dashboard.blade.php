@include('user.layouts.header')
	@if(Auth::check())
		Hello
	@else
		Bye
	@endif
@include('user.layouts.footer')