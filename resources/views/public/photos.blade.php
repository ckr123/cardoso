@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <photos  :images="{{ $files }}" col="col-md-12" :border="true"></photos>
    </div>
</div>
@endsection

<style scoped>
.left-border {
    border-left: thick double rgb(15, 116, 150) !important;
}
</style>