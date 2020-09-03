@extends('layout')


@section('title')
Show Car
@endsection

@section('mainContent')
<h1>Show Car</h1>

<div style="color:{{ $car->color}}">
	<h1><strong>{{$car->name}}</strong> </h1>
	</div>

	<strong>{{$car->company}}</strong>
	<a href="{{$car->id}}/edit"> Edit Car</a>

@endsection