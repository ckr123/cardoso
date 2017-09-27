<template>
    <div>
        <div class="banner" :style="{backgroundImage: 'url('+image+')'}">
        </div>
        <div class="container menu">
            <a href="/" class="menu__item">Forside</a>
            <a href="/billeder" class="menu__item">Billeder</a>
            <a href="/plantegninger" class="menu__item">Plantegninger</a>
            <div class="dropdown">
              <span>Området</span>
              <div class="dropdown-content">
                <a href="/byen" class="menu__item">Byen</a>
                <a href="/omraade" class="menu__item">Området</a>
              </div>
            </div>
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
                image: '/img/86.JPG',
            }
        },
    }
</script>