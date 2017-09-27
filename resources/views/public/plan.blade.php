@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <photos  :images="{{ $files }}" col="col-md-12" :border="true"></photos>
    </div>
</div>
@endsection

<style scoped>
.gallery {
    max-height: 300px !important;
}
</style>
