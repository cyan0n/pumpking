<template>
	<div @click="index++">
		<img :src="photos[index%photos.length].uri" alt="" >
	</div>
</template>

<script>
import LightBox from 'vue-image-lightbox'
export default {
	components: {
		LightBox,
	},
	props: ['photos'],
	data() {
		return {
			index: 0,
			media: []
		};
	},
	mounted() {
		this.media = this.photos.map(photo => {
			console.log(photo)
			return {
				thumb: photo.uri,
				src: photo.uri
			}
		})
	}
}
</script>

<style>

</style>
