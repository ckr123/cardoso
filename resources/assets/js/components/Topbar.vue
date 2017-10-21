<template>
    <div>
        <div class="banner" :style="{backgroundImage: 'url('+image+')'}">
        </div>
        <div class="container menu">
            <a href="/" class="menu__item">Forside</a>
            <a href="/billeder" class="menu__item">Billeder</a>
            <a href="/plantegninger" class="menu__item">Plantegninger</a>
            <a href="/byen" class="menu__item">Byen</a>
            <a href="/fakta" class="menu__item">Fakta</a>
            <a href="/kontakt" class="menu__item">Kontakt</a>
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
                image: '/img/topbar/IMG_2290.JPG',
            }
        },
    }
</script>