<template>
    <div class="flex flex-wrap w-full md:w-1/2 lg:w-1/3 mb-3">
        <div class="overflow-hidden relative w-full px-1">
            <input type="file" ref="input" @change="upload" name="photos[]" class="hidden">
            <a @click.prevent="$refs.input.click()" href="#" class="hover:bg-orange-darker text-white font-bold py-2 px-4 w-full inline-flex items-center rounded border-2 border-orange-darker bg-orange-dark">
                <template v-if="uploaded">
                    <svg fill="#fff" height="18" viewBox="0 0 24 24">
                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                    <span class="ml-2 pr-10">Caricato</span>
                </template>
                <template v-else>
                    <svg fill="#fff" height="18" viewbox="0 0 24 24" width="18">
                        <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
                    </svg>
                    <span class="ml-2">Carica la zucca</span>
                </template>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            uploaded: false,
        };
    },
    methods: {
        upload(e) {
            this.uploaded = e.target.files.length > 0;
        }
    }
}
</script>

<style>

</style>
