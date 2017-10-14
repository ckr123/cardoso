@extends('layouts.app')

@section('content')
<div>
    <div class="container left-border">
        <photos header="Billeder"  :images="{{ $files }}" col="col-md-12"></photos>
    </div>
</div>
@endsection