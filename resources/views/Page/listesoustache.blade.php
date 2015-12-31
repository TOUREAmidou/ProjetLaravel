@extends('Template')
@section('body')
    @foreach($taches as $tache)
        {{$tache -> name }}
        {{$tache -> DateEcheance}}
        <a href="{!! url('/AfficheEditSousTache/'.$tache->id) !!}" type="button" class="btn btn-primary">Modifier</a>
        <a href="{!! url('/DeleteTache/'.$tache->id) !!}" type="button" class="btn btn-primary">Supprimer</a>
        <a href="{!! url('/TacheFinie/'.$tache->id) !!}" type="button" class="btn btn-primary">Finie</a>
        <br>


    @endforeach

@endsection
