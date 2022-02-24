@extends('layouts')
@section('page')Review @endsection
@section('main-content')
<h1>Formularul de introducere a recenziilor</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Introduceti email-ul" class="form-control"><br>
        <input type="text" name="subject" id="suubject" placeholder="Introduceti recenzia" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Introduceti mesajul" ></textarea><br>
        <button type="submit" class="btn btn-success">Trimite</button>
    </form>

    <h2 class="text-center">Toate recenziile</h2>
    @foreach ($reviews as $el)
        <div class="alert alert-warning">
            <h4>{{ $el->message }}</h4>
        </div>
    @endforeach
@endsection