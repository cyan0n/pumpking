@extends('layouts.base')

@section('content')
<img src="https://pngimage.net/wp-content/uploads/2018/06/pumpkin-logo-png-3.png" alt="logo" class="w-40 pt-16 pb-5 mx-auto">

<div class="container mx-auto py-10">
	@if(session()->has('success'))
		Grazie per il tuo voto
	@endif
	<div class="rounded bg-orange-light p-4 realative">
		<h1 class="text-white text-2xl font-bold text-center">
			I risultati sarannò rilasciati preso!
		</h1>
	</div>
</div>
@endsection