<template>
    <div>
        <div class="banner" :style="{backgroundImage: 'url('+image+')'}">
        </div>
        <div class="container menu">
            <a href="/" class="frontpage">Forside</a>
            <a href="/billeder" class="photos">Billeder</a>
            <a href="/plantegninger" class="plan">Plantegninger</a>
            <div class="dropdown">
              <span>Området</span>
              <div class="dropdown-content">
                <a href="/byen" class="plan">Byen</a>
                <a href="#" class="plan">Området</a>
              </div>
            </div>
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