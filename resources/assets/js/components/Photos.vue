<template>
    <div>
        <div :class="col">
            <div v-bind:class="[border ? 'house__thumpnail left-border': 'house__thumpnail']">
                <img v-for="image in images" :src="image" @click="showPhotoModal(image)"/>
            </div>
            <modal :open="photoModalOpen" @close="closePhotoModal">
                <div slot="body">
                    <img :src="selectedImage" class="modal__image"/>
                </div>
            </modal>
        </div>
    </div>
</template>

<script>
import IsModal from '../mixins/IsModal';
export default {
    mixins: [IsModal],

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
.left-border {
    border-left: thick double rgb(15, 116, 150);
}
</style>