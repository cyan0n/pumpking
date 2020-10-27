@extends('layouts.base')

@section('content')
<div class="lg:container lg:mx-auto pt-16">
	<form class="w-8/12 mx-auto bg-orange-light p-8 flex flex-col" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
		@csrf


		<div class="flex flex-wrap -mx-3 mb-6">
			<div class="w-full px-3">
			  <label class="block uppercase tracking-wide text-orange-dark text-xl font-bold mb-2" for="title">
				Titolo
			  </label>
			  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-4/5 border-2 border-orange-dark" id="title" name="title" type="text" placeholder="">
			</div>
		  </div>

		<h2 class="text-orange-dark font-bold text-xl mb-4 tracking-wide uppercase">
			Sgancia qui le tue zucche🎃
		</h2>
		<div class="flex flex-row">
			<div class="flex flex-wrap mb-6 ml-6 mr-6">
				<div class="overflow-hidden relative">
					<div class="hover:bg-orange-darker text-white font-bold py-2 px-4 w-full inline-flex items-center rounded border-2 border-orange-darker bg-orange-dark">
						<svg fill="#fff" height="18" viewbox="0 0 24 24" width="18" xmlns="https://www.w3.org/2000/svg">
							<path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
						</svg>
						<span class="ml-2">Carica la zucca</span>
					</div>
					<input type="file" name="photos[]" class="cursor-pointer absolute block opacity-0 w-full h-full left-0 top-0">
				</div>
			</div>

			<div class="flex flex-wrap mb-6 mr-6">
				<div class="overflow-hidden relative">
					<div class="hover:bg-orange-darker text-white font-bold py-2 px-4 w-full inline-flex items-center rounded border-2 border-orange-darker bg-orange-dark">
						<svg fill="#fff" height="18" viewbox="0 0 24 24" width="18" xmlns="https://www.w3.org/2000/svg">
							<path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
						</svg>
						<span class="ml-2">Carica la zucca</span>
					</div>
					<input type="file" name="photos[]" class="cursor-pointer absolute block opacity-0 w-full h-full left-0 top-0">
				</div>
			</div>

			<div class="flex flex-wrap mb-6 mr-6">
				<div class="overflow-hidden relative">
					<div class="hover:bg-orange-darker text-white font-bold py-2 px-4 w-full inline-flex items-center rounded border-2 border-orange-darker bg-orange-dark">
						<svg fill="#fff" height="18" viewbox="0 0 24 24" width="18" xmlns="https://www.w3.org/2000/svg">
							<path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
						</svg>
						<span class="ml-2">Carica la zucca</span>
					</div>
					<input type="file" name="photos[]" class="cursor-pointer absolute block opacity-0 w-full h-full left-0 top-0">
				</div>
			</div>
		</div>
		<button type="submit" class="text-white text-xl font-bold rounded py-2 px-10 mt-6 mx-auto bg-orange-dark hover:bg-orange-darker">
			Invia
		</button>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		</div>
	</form>
</div>
@endsection