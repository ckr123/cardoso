<template>
    <div>
        <div :class="col">
            <div v-bind:class="[border ? 'house__thumpnail left-border': 'house__thumpnail']">
                <img v-for="image in images" :src="image" @click="showPhotoModal(image)"/>
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
        border: {
            type: Boolean,
            default: false
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
.left-border {
    border-left: thick double rgb(15, 116, 150);
}
</style>