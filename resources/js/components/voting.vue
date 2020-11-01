<template>
	<div class="flex flex-col">
		<form ref="form" method="POST" :action="action" class="hidden">
			<input type="hidden" name="_token" :value="csrf">

			<input type="hidden" name="votes[]" :value="votes[0]">
			<input type="hidden" name="votes[]" :value="votes[1]">
			<input type="hidden" name="votes[]" :value="votes[2]">
		</form>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
			<div v-for="pumpkin in pumpkins" :key="pumpkin.id" class="text-center">
				<slider :photos="pumpkin.photos" />
				<div @click="vote(pumpkin)" class="h-20 cursor-pointer text-white font-bold">
					<div v-if="votes.includes(pumpkin.id)" class="bg-green-600 h-full w-full text-2xl font-bold pt-4">
						<span v-if="votes[0] == pumpkin.id">1°</span>
						<span v-if="votes[1] == pumpkin.id">2°</span>
						<span v-if="votes[2] == pumpkin.id">3°</span>
					</div>
					<div v-else class="bg-orange-dark h-full w-full">
						<p class="text-xl pt-3">{{ pumpkin.submission_title }}</p>
						<h3 class="text-sm">{{ pumpkin.name }}</h3>
					</div>
				</div>
			</div>
		</div>
		<button v-show="votes.length == 3" ref="submit" @click.prevent="submit" class="btn mt-5 mx-auto">VOTA!</button>
		<p ref="scroll" class="mt-5"></p>
	</div>
</template>

<script>
export default {
	props: [
		'pumpkins',
		'action',
	],
	data() {
		return {
			votes: [],
			csrf: document.head.querySelector('meta[name="csrf-token"]').content,
		}
	},
	methods: {
		vote(pumpkin) {
			if (this.votes.includes(pumpkin.id)) {
				this.votes.splice(this.votes.indexOf(pumpkin.id), 1)
			} else if (this.votes.length < 3) {
				this.votes.push(pumpkin.id)
				if (this.votes.length == 3) {
					// confirm
					this.$refs.scroll.scrollIntoView()
				}
			}
		},
		submit() {
			this.$refs.form.submit();
		}
	},
}
</script>

<style>

</style>