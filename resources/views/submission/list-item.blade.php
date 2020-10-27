<div class="bg-orange-dark pt-3 rounded shadow-2xl overflow-hidden">
	<div class="px-3 mb-3">
		<h2 class="text-white font-bold text-xl">{{ $user->name }}</h2>
		<h4 class="text-white">{{ $user->submission_title }}</h4>
	</div>
	<slider :photos='{!! json_encode($user->photos) !!}'/>
</div>