@extends('layout')


@section('mainContent')
<h1>Car list</h1>

<table class="table table-striped">
	<thead><tr><td>Name</td></tr></thead>
	<tbody>

	@foreach($cars as $car)
		<tr><td> <a href="http://localhost:8000/cars/{{$car->id}}"> {{$car->name}}  </a></td></tr>
		@endforeach
	
	</tbody>
</table>

<a href="http://localhost:8000/cars/create"><button class="btn btn-success"> Create Car</button> </a>
@endsection
