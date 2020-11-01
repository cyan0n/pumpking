@extends('layouts.base')

@section('content')
<img src="https://pngimage.net/wp-content/uploads/2018/06/pumpkin-logo-png-3.png" alt="logo" class="w-40 pt-16 pb-5 mx-auto">

<div class="container mx-auto py-10">
	@if(session()->has('success'))
		Grazie per il tuo voto
	@endif
	<div class="rounded bg-orange-light p-4 realative">
		<h1 class="text-white font-bold text-4xl mb-5 text-center">Risultati</h1>
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-15">
			<div class="lg:order-2 order-3">
				<slider :photos='@json($users[0]->photos)'></slider>
				<div class="rounded-b bg-orange-dark text-white text-center">
					<h1 class="text-4xl">Primo posto</h1>
					<p>{{ $users[0]->name }}</p>
				</div>
			</div>
			<div class="lg:order-1 lg:mt-15">
				<slider :photos='@json($users[1]->photos)'></slider>
				<div class="rounded-b bg-orange-dark text-white text-center">
					<h1 class="text-4xl">Secondo posto</h1>
					<p>{{ $users[1]->name }}</p>
				</div>
			</div>
			<div class="lg:order-3 lg:mt-24 order-1">
				<slider :photos='@json($users[2]->photos)'></slider>
				<div class="rounded-b bg-orange-dark text-white text-center">
					<h1 class="text-4xl">Terzo posto</h1>
					<p>{{ $users[2]->name }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection