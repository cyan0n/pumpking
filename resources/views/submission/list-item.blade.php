<div>
	<h2 class="text-white font-bold">{{ $user->name }}</h2>
	<h4 class="text-white">{{ $user->submission_title }}</h4>
	<slider :photos='{!! json_encode($user->photos) !!}'/>
	@foreach ($user->photos as $photo)
		<img src="{{ $photo->uri }}" alt="" class="w-20">
	@endforeach
</div>