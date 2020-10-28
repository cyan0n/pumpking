@extends('layouts.base')

@section('content')
<img src="https://pngimage.net/wp-content/uploads/2018/06/pumpkin-logo-png-3.png" alt="logo" class="w-40 pt-16 pb-5 mx-auto">

<div class="lg:container lg:mx-auto">
	<form class="w-8/12 mx-auto bg-orange-light p-8 flex flex-col rounded" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
		@csrf


		<div class="flex flex-wrap -mx-3 mb-6">
			<div class="w-full px-3">
			  <label class="block uppercase tracking-wide text-orange-dark text-xl font-bold mb-2" for="title">
				Titolo
			  </label>
			  <input class="appearance-none block bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full border-2 border-orange-dark" id="title" name="title" type="text" placeholder="">
			</div>
		  </div>

		<h2 class="text-orange-dark font-bold text-xl mb-4 tracking-wide uppercase">
			Sgancia qui le tue zucche🎃
		</h2>
		<div class="flex flex-row justify-between flex-wrap">
		<upload></upload>
		<upload></upload>
		<upload></upload>
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
