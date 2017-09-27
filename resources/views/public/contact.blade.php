@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="col-md-12">
            <form>
              <div class="form-group">
                <label for="emailField">Email addresse</label>
                <input type="email" class="form-control" id="emailField" placeholder="example@example.dk">
              </div>
             <div class="form-group">
                <label for="phoneField">Telefon</label>
                <input type="text" class="form-control" id="phoneField" placeholder="8-cifre">
              </div>
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
@endsection