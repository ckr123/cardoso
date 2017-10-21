@extends('layouts.app')

@section('content')
<div>
    <div class="container left-border">
        <div class="col-md-6">
            <h2 class="house__text__header">Fakta</h2>
            <div class="house__text">
                <ul>
                    <li>30 km. til Lucca – ad god landevej (SP20)</li>
                    <li>Ca. 1 time til lufthavnen i Pisa</li>
                    <li>10 min. til indkøb i stort supermarked (Bilkastørrelse)</li>
                    <li>4 km. fra landevejen til Cardoso – ad god bred vej</li>
                    <li>Cardoso ligger i 400 m. højde</li>
                </ul>
            </div>
        </div>
        <photos :images="{{ $photos }}"></photos>
    </div>
</div>
@endsection
<style scoped>
.house__thumpnail img {
    max-height: 250px !important;
}
</style>