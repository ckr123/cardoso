@extends('layouts.app')

@section('content')
<div>
    <div class="container left-border">
        <photos header="Plantegninger" :images="{{ $photos }}" col="col-md-12"></photos>
    </div>
</div>
@endsection

<style scoped>
.gallery {
    max-height: 300px !important;
}
</style>
