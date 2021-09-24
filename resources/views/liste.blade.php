@extends('layouts.main')

@section('title', 'Personnages')

@section('index-content')


{{-- <h1 class="title">Liste des Personnages</h1> --}}

<div class="list">
    <h1 class="title">Liste des Personnages</h1>
    <table border="1" class="tableau1">
        <thead> 
            <tr  class="tableau">
                <th>ID du personnage</th>
                <th>Nom du personnage</th>
                <th>Manga</th>
                <th>Dessinateur</th>
                <th>Date de creation</th>               
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <td>{{ $character->id }}</td>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->manga_name }}</td>
                    <td>{{ $character->drawer }}</td>
                    <td>{{ $character->creation_date }}</td>

                    <td>
                        <a href="/edit/{{ $character->id }}">MAJ</a>
                    </td>
                    <td>
                        <form action="/delete/{{$character->id}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input type="submit" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop