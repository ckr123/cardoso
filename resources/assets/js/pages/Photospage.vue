<template>
    <div>
        <div class="container">
            <photos  :images="images" col="col-md-12" :border="true"></photos>
        </div>
    </div>
</template>
<script>

import Photos from '../components/Photos.vue'

export default {
    name: 'photos-page',
    
    components: {
        Photos
    },

    data() {
        return {
            images: []
        }
    },

    mounted() {
        this.loadImages();
    },

    methods: {
        loadImages() {
            for (var i = 1; i < 86; i++) {
                this.images.push('/img/' + i +'.JPG');
            }
        }
    }
}
</script>