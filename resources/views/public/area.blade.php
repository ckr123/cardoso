@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="col-md-6">
            
            <div class="house__text__facts">
                <h1 class="house__text__header">Fakta om området</h1>
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