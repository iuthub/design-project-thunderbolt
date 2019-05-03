@extends('adminmenu.menu_p')

@section('main')

<ul style="list-style: none;">
	<a href="{{ url('mcont') }}">
		<li>Menu</li>
	</a>
	<a href="{{url('fcont')}}">
		<li>Features</li>
	</a>
	<a href="{{url('feedcont')}}">
		<li>Feedbacks</li>
	</a>
	<a href="{{url('sctcont')}}">
		<li>Screenshots</li>
	</a>
	<a href="#">
		<li>Menu5</li>
	</a>
	<a href="#">
		<li>Menu6</li>
	</a>
</ul>
@endsection