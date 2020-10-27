@extends('layouts.base')

@section('content')
<div class="container mx-auto py-10">
	@if(session()->has('success'))
		<div class="bg-orange-light text-white">
			{{ session()->get('success') }}
		</div>
	@endif

	<div class="rounded bg-orange-light p-4">		
		<h1 class="text-white">Galleria</h1>
		@each('submission.list-item', $users, 'user')
	</div>
	
</div>
	
@endsection