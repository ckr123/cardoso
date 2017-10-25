@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="col-md-6">
            <h1 class="house__text__header">Hus til salg - Toscansk idyl</h1>
            <div class="house__text">
                <p>Går du med drømmen om at købe et hus i italien? Dette italienske hus er til salg.</p> Det ældste af huset er ca. 200 år gammelt, men er i 2007-08 istandsat til en hyggelig og funktionel bolig.
                Huset er i 2 plan med et boligareal på ca. 160 m2.
                Der er 3 soveværelser (det ene er pt. indrettet som dagligstue) og 3 badeværelser. Det store køkkenalrum er indrettet med spiseplads til 8-10 personer. Herfra er der udgang til en overdækket terrasse. 
                Via en trappe i haven er der adgang til en højtliggende åben terrasse med 180 graders udsigt over dalen og bjergene.
                Der er et lille bryggers med vaskemaskine, fryser og ekstra køleskab. Desuden et lille kælderrum med plads til haveredskaber, træpiller osv.
                Huset opvarmes med pillefyr, som også fungerer som brændeovn i køkkenalrummet og forsyner de øvrige rum med varme via radiatorer (centralvarme). Huset ventileres af et Solarventianlæg. Huset har energimærket ”E”.
                Byen forsynes med kildevand fra bjergene, så vandet i vandhanerne kan drikkes uden problemer.
                Alt inventar medfølger.
                Prisoplæg: 210.000 Euro
            </div>
        </div>
        <h2 class="house__text__header"></h2>
        <photos :images="{{ $photos }}"></photos>
    </div>
</div>
@endsection