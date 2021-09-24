@extends('layouts.main')


@section('title', 'Modifier personnage')

@section('index-content')

    <h1 class="title">Modifier le personnage</h1>
    <div>
        <form action="/editCharacter/{{ $character->id }}" method="POST">
            @csrf
            
                <label for="name" >Nom du personnage</label>
                <input type="text" name="name" value="{{ $character->name }}">

                <label for="date">Date de création</label>
                <input type="number" name="date"value="{{ $character->creation_date }}">                        
                 
                <label for="mangaN">Manga</label>               
                <input type="text" name="mangaN" value="{{ $character->manga_name}}">
                
                <label for="Cname">Nom de créateur</label>
                <input type="text" name="Cname" value="{{ $character->drawer }}">
            
                <button type="submit">Envoyer !</button>

        </form>
    </div>
@endsection