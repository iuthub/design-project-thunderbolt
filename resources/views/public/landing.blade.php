@extends('public.landingp')

@section('main')

<h2>fskfdsksdfj</h2>

@foreach($menus as $item)

<h4>{{ $item->first_name }}</h4>
@endforeach 

@foreach($feedbacks as $item)

<h4>{{ $item->first_name }}</h4>
@endforeach 


@foreach($features as $item)

<h4>{{ $item->first_name }}</h4>
@endforeach 

@foreach($screenshots as $item)

<h4>{{ $item->first_name }}</h4>
@endforeach 



@endsection