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
        showPhotoModal(image) {
            this.selectedImage = image;
            this.photoModalOpen = true;
        },
        closePhotoModal() {
            this.photoModalOpen = false;
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