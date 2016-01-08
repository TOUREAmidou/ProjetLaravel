@extends('Template')
@section('body')
@foreach($taches as $tache)
    <div style="margin-left:auto;margin-right: auto;width: 700px;">
    {{$tache -> name }}
    {{$tache -> Description}}
    {{$tache->created_at}}

    <a href="{!! url('/AfficheEdit/'.$tache->id) !!}" type="button" class="btn btn-primary">Modifier</a>
    <a href="{!! url('/DeleteSousTache/'.$tache->id) !!}" type="button" class="btn btn-primary">Supprimer</a>
    <a href="{!! url('/VoirTache/'.$tache->id) !!}" type ="button" class="btn btn-primary">Voirsoustaches</a>
    <a href="{!! url('/Ajoutache/'.$tache->id) !!}" type="button" class="btn btn-primary">Ajouter taches</a>
    <p>  {{$list -> where('Accomplie',1)->where('ListId',$tache->id)->count() }} {{"/".$list -> where('ListId',$tache->id)->count() }}</p>
    <br>
    </div>


    @endforeach

    @endsection
