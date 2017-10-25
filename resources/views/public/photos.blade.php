@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <photos header="De smukke billeder"  :images="{{ $photos }}" col="col-md-12"></photos>
    </div>
</div>
@endsection