@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="col-md-6">
            <h2 class="house__text__header">Byen</h2>
            <div class="house__text">
                Cardoso er en aktiv og levende landsby med ca. 200 fastboende. Om sommeren suppleres indbyggertallet med turister fra især Storbritannien og de nordiske lande. Nogle bor i b&b eller i byens refugium, andre i egne boliger. I Cardoso findes 2 barer. Den ene med en lille alimentari, hvor man også kan købe frisk brød hver morgen.
                Hvert år i juli holdes byfesten ”Cardoso con gusto” (Smag på Cardoso). Et tilløbsstykke for både italienere og turister. Sommeren igennem er der ofte levende musik i byen, fælles middage og andre aktiviteter. Området byder i det hele taget på et væld af kulturelle aktiviteter, lige fra klassiske koncerter til middelalderfester og markeder.
                Garfagnana er et yndet område for vandrere. Fra Cardoso udgår også en række afmærkede stier, både til vandring og mountainbike.
                Der er busforbindelse mellem Cardoso og Gallicano flere gange dagligt. Desuden er der kun 15 min. kørsel til togstationen i Mologno med forbindelse til Lucca.
                På varme dage er det nemt at køre til friluftsbade i Barga, Bagni di Lucca og Gallicano. Visse steder er det også muligt at bade i floden Serchio.
            </div>
        </div>
        <div class="col-md-6">
          <div id="map"></div>
        </div>
        <photos :images="{{ $photos }}"></photos>
    </div>
</div>
@endsection
<style>
   #map {
    margin-top: 70px;
    height: 200px;
   }
</style>