@extends('layouts.base')

@section('content')
<img src="https://pngimage.net/wp-content/uploads/2018/06/pumpkin-logo-png-3.png" alt="logo" class="w-40 pt-16 pb-5 mx-auto">

<div class="container mx-auto py-10">
	@if(session()->has('success'))
		<div class="font-bold text-center text-white mb-5 text-lg">
			{{ session()->get('success') }}
		</div>
	@endif

	<div class="rounded bg-orange-light p-4 relative">		
		<h1 class="text-white text-4xl mb-5 font-bold text-center">Campo di zucche</h1>
		<a href="{{  route('create') }}" class="btn absolute top-3 right-3">Reupload</a>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
			@each('submission.list-item', $users, 'user')
		</div>
		
	</div>
	
</div>
	
@endsection