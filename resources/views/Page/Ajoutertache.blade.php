
@extends('Template')
@section('body')


    <form method="POST" action="{!! url('/SaveTache/'.$id) !!}" accept-charset="UTF-8"  role="form" style="width: 30%;margin-left: auto;margin-right: auto">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <div class="form-group">

            <label >Nom de la tache</label>
            <input  class="form-control" id="name" name="nom" required>
        </div>
        <div class="form-group">
            <label >Date d'echeance</label>
            <input  type="date" id="Description" name="date" required>
        </div>



        <button type="submit" class="btn btn-default">Enregistrer</button>
    </form>

@endsection