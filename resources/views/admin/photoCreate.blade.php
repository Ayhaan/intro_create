@extends('layouts.index')

@section('content')
    <h1>PHOTO CREATE</h1>
    <form method="POST" action={{route('photos.store')}}>
        @csrf
        <label for="nom">NOM</label>
        <input type="text" name="nom">

        <br><br>

        <label for="path">PATH</label>
        <input type="text" name="path">

        <button type="submit">Valider</button>
    </form>
@endsection

