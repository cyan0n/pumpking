@extends('layouts.base')

@section('content')
<img src="https://pngimage.net/wp-content/uploads/2018/06/pumpkin-logo-png-3.png" alt="logo" class="w-40 pt-16 pb-5 mx-auto">

<div class="container mx-auto py-10">
	<div class="rounded bg-orange-light p-4 relative">
		<h1 class="text-white text-4xl mb-5 font-bold text-center">Choose your champion</h1>
		<voting :pumpkins='@json($users)' action="{{ route('vote.store') }}"/>
	</div>
</div>
@endsection