@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <h1 class="house__text__header">Plantegninger over bygningen</h1>
        <photos :images="{{ $photos }}" col="col-md-12"></photos>
    </div>
</div>
@endsection

<style scoped>
.gallery {
    max-height: 300px !important;
}
</style>
