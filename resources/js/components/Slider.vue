<template>
	<div @click="next" class="relative h-64">
		<transition-group name="list" tag="div">
			<img v-for="(photo, i) in photos" :key="photo.id" v-show="index % 3 == i" :src="photo.uri" alt="" class="h-64 w-full object-cover absolute cursor-pointer">
		</transition-group>
	</div>
</template>

<script>
export default {
	props: ['photos'],
	data() {
		return {
			index: 0,
			media: [],
			timer: 0,
			time: 6000,
		};
	},
	mounted() {
		this.media = this.photos.map(photo => {
			console.log(photo)
			return {
				thumb: photo.uri,
				src: photo.uri
			}
		});
		this.timer = setTimeout(this.next, this.time)
	},
	methods: {
		next() {
			if (this.photos.length > 1) {
				this.index++
			}
			clearTimeout(this.timer);
			this.timer = setTimeout(this.next, this.time)
		}
	}
}
</script>

<style>
.list-enter-active, .list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-to /* .list-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
