@extends('Admin.layout.app')

@section('main-content')

	@foreach($image as $item)

	<img src="/{{$item->image}}" alt="{{$item->image}}" style="height: 250px; width: 400px;">

	@endforeach

@endsection