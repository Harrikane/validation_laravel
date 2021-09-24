@extends('layouts.main')

@section('title', 'Ajout')



@section('index-content')


    <form border="1" class="tableauAdd" action="/addCharacter" method="POST">
        @csrf
        <label for="name">Nom du personnage </label><br>
        <input type="text" id="name" name="name" placeholder="Saitama..." >

        <label for="date">Date de création</label><br>
        <input type="text" id="date" name="date" placeholder="1989..." >

        <label for="mangaN">Manga </label><br>
        <input type="text" id="mangaN" name="mangaN" placeholder="Jhonny deep.." >

        <label for="Cname">Nom du créateur </label><br>
        <input type="text" id="Cname" name="Cname" placeholder="Jhonny deep.." >


        <input type="submit" value="Envoyer">


    </form>
@stop