<template>
    <div>
        <div :class="col">
            <div class="house__thumpnail">
                <h2 class="house__text__header" v-if="header">{{ header }}</h2>
                <img class="gallery" v-for="image in images" :src="image" @click="showPhotoModal(image)"/>
            </div>
            <div :class="['modal', photoModalOpen ? 'showModal' : '']">
                <span class="close" @click="closePhotoModal()">&times;</span>

                <img class="modal-content" :src="selectedImage">
                <div class="caption">Brug piletasterne til at navigere i billederne</div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'photos',
    
    props: {
        images: {
            type: Array,
            required: true
        },
        col: {
            type: String,
            default: 'col-md-6'
        },
        header: {
            type: String,
            required: false
        }
    },

    data() {
        return {
            photoModalOpen: false,
            selectedImage: ''
        }
    },

    methods: {
        addEventListener() {
            window.addEventListener('keyup', this.scroll);
        },

        removeEventListener() {
            window.removeEventListener('keyup', this.scroll);
        },

        showPhotoModal(image) {
            this.selectedImage = image;
            this.photoModalOpen = true;
            this.addEventListener();
        },

        closePhotoModal() {
            this.photoModalOpen = false;
            this.removeEventListener();
        },

        scroll(event) {
            if (event.keyCode === 39) { 
                this.scrollNext()
            }
            if (event.keyCode === 37) {
                this.scrollPrev()
            }
        },

        scrollNext() {
            let index = this.findImage();
            
            if (index >= (this.images.length - 1) || index === -1) {
                this.selectedImage = this.images[0];
                return
            }
            this.selectedImage = this.images[index + 1]
        },

        scrollPrev() {
            let index = this.findImage();

            if (index === 0 || index === -1) {
                this.selectedImage = this.images[this.images.length - 1];
                return
            }
            this.selectedImage = this.images[index - 1]
        },

        findImage() {
            if (!this.photoModalOpen) {
                return
            }
            const index = this.images.findIndex((image) => {
                return image === this.selectedImage
            })
            return index;
        },
    }
}
</script>

<style scoped>
.showModal {
    display: block;
}

.house__text__header {
    padding-left: 6px !important;
}
</style>