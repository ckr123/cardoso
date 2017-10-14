@extends('layouts.app')

@section('content')
<div>
    <div class="container left-border">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2 class="contact__header">Kontakt</h2>
            <form>
              <div class="form-group">
                <label for="emailField">Email addresse</label>
                <input type="email" class="form-control" id="emailField" placeholder="din@email.dk">
              </div>
              <div class="form-group">
                <label for="phoneField">Telefon</label>
                <input type="text" class="form-control" id="phoneField" placeholder="12 34 56 78">
              </div>
              <div class="form-group">
                <label for="message">Besked</label>
                <textarea class="form-control" id="message" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kontakt</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection