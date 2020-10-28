<div class="bg-orange-dark pt-3 rounded shadow-2xl overflow-hidden flex flex-col justify-between ">
	<div class="px-5 mb-3">
		<!--CHECKBOX TO VOTE FROM FIRST TO THIRD-->
		<h2 class="text-xl font-bold text-white">{{ $user->submission_title }}</h2>
		<h3 class="text-white text-lg">di {{ $user->name }}</h3>
	</div>
	<slider :photos='{!! json_encode($user->photos) !!}'/>
</div>