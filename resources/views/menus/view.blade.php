@extends('menus.parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('mcont.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
    <!--  <img src="{{'/images/'.$data->image}}"> -->
     <!-- <img src="{{asset('images/'.$data->image)}}"> -->
<!--      <img src="{{ asset('images/210757719.jpg') }}"> -->
  <div class="test">
	<h3>Title - {{ $data->first_name }} </h3>
	<h3>Body - {{ $data->last_name }}</h3>

	</div>
</div>
@endsection
