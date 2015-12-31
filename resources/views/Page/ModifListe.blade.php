
@extends('Template')
@section('body')


    <form method="POST" action="{!! url('/ModifierTache/'.$id) !!}" accept-charset="UTF-8"  role="form" style="width: 30%;margin-left: auto;margin-right: auto">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <div class="form-group">

            <label >Nom de la tache</label>
            <input  class="form-control" id="name" name="nom" required>
        </div>
        <div class="form-group">
            <label >Description</label>
            <input  type="texte" id="Description" name="Description" required>
        </div>



        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection