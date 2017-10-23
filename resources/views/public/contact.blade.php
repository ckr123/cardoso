@extends('layouts.app')
<meta name='robots' content='noindex'>
@section('content')
<div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="contact__header">Kontakt</h1>
            <form method="POST" action="{{ route('email') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="from">Email addresse</label>
                <input type="email" name="email" class="form-control" id="from" placeholder="din@email.dk">
              </div>
              <div class="form-group">
                <label for="phone">Telefon</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Dit telefon nummer">
              </div>
              <div class="form-group">
                <label for="message">Besked</label>
                <textarea class="form-control" name="text" id="message" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kontakt</button>
            </form>
            <p></p>
        </div>
      </div>
    </div>
</div>
@endsection