<template>
    <div>
        <div class="banner" :style="{backgroundImage: 'url('+image+')'}">
        </div>
        <div class="container menu">
            <a href="/" class="frontpage">Forside</a>
        </div>
    </div>
</template>

<script>

    export default {
        name: 'top-bar',
        
        prop: {
            image: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                image: '/img/index_header.JPG',
            }
        },
    }
</script>