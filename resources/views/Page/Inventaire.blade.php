@extends('Template')
@section('body')
@foreach($taches as $tache)
    {{$tache -> name }}
    {{$tache -> Description}}
    <a href="{!! url('/AfficheEdit/'.$tache->id) !!}" type="button" class="btn btn-primary">Modifier</a>
    <a href="{!! url('/DeleteSousTache/'.$tache->id) !!}" type="button" class="btn btn-primary">Supprimer</a>
    <a href="{!! url('/VoirTache/'.$tache->id) !!}" type ="button" class="btn btn-primary">Voirsoustaches</a>
    <a href="{!! url('/Ajoutache/'.$tache->id) !!}" type="button" class="btn btn-primary">Ajouter taches</a>
    <p>  {{$list -> where('Accomplie',1)->where('ListId',$tache->id)->count() }} {{"/".$list -> where('ListId',$tache->id)->count() }}</p>
    <br>


    @endforeach

    @endsection
