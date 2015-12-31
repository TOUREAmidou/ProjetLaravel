<?php
namespace App\Http\Controllers;
use App\ListTache;
use Illuminate\Http\Request;
use App\Links;
use App\Tache;
use Auth;

class MyController extends Controller
{
    public function home()
    {
        return view('Page/Home');
    }

    public function inscription()
    {
        return view('auth/register');
    }

    public function connexion(){
        return view('auth/login');
    }

    public function administration(){
        return view('Page/Administration');
    }

    public function inventaire(){

        if(Auth::user())
        {
            $id = Auth::user()->id;



        }


        $taches = Tache::all()->where('UserId',$id);//select where userid=$id
        $list = ListTache::all()->where('UserId',$id);
        return view('Page/Inventaire',compact('taches','list'));

    }

    public function createTache(Request $request){

        if(Auth::user())
        {
            $id = Auth::user()->id;


        }

        $tache = new Tache();
        $tache -> UserId=$id;
        $tache -> name=$request->input('nom');
        $tache -> Description=$request->input('Description');
        $tache -> save();

        return redirect()->back();

    }


    public function Ajoutache($id){
        $id = $id;
        return view('Page/Ajoutertache',array('id'=>$id));

    }

    public function SaveTache(Request $request,$list){

        if(Auth::user())
        {
            $id = Auth::user()->id;


        }

        $tache = new ListTache();
        $tache -> UserId=$id;
        $tache -> ListId=$list;
        $tache -> name=$request->input('nom');
        $tache -> DateEcheance=$request->input('date');
        $tache -> save();

        return redirect()->back();

    }


    public function Voirtache($list){

        if(Auth::user())
        {
            $id = Auth::user()->id;



        }


        $taches = ListTache::where('UserId',$id)->where('ListId',$list)->get();//select where userid=$id
        return view('Page/listesoustache',array('taches'=>$taches));

    }


    public function DeleteTache($list){
        if(Auth::user())
        {
            $id = Auth::user()->id;



        }

        $tache = new ListTache();
       $tache = ListTache::where('UserId',$id)->where('id',$list);//select where userid=$id
        $tache->delete();
        return redirect('/');
    }

    public function ModifierTache(Request $request,$list){
        if(Auth::user())
        {
            $id = Auth::user()->id;



        }

        $tache = new Tache();
        $tache = Tache::find($list);
        $tache -> name=$request->input('nom');
        $tache -> Description=$request->input('Description');
        $tache->update();
        return redirect('/');
    }

  public function AfficheEdit($id){

      $user = Auth::user()->id;
      $tache = ListTache::where('UserId',$id)->where('id',$id);
      $id = $id;
      return view('Page/ModifListe',compact('id'));

  }

    public function DeleteSousTache($list){
        if(Auth::user())
        {
            $id = Auth::user()->id;



        }

        $tache = new ListTache();
        $soutache = new Tache();
        $soustache = Tache::where('UserId',$id)->where('id',$list);//select where userid=$id
        $tache = ListTache::where('UserId',$id)->where('ListId',$list);
        $soustache->delete();
        $tache->delete();
        return redirect('/');
    }

    public function ModifierSousTache(Request $request,$list){
        if(Auth::user())
        {
            $id = Auth::user()->id;



        }

        $tache = new ListTache();
        $tache = ListTache::find($list);
        $tache -> name=$request->input('nom');
        $tache -> DateEcheance=$request->input('date');
        $tache->update();
        return redirect('/');
    }

    public function AfficheEditSousTache($id){

        $user = Auth::user()->id;
        $tache = Tache::where('UserId',$id)->where('id',$id);
        $id = $id;
        return view('Page/ModifierSousTache',compact('id'));

    }

    public function  TacheFinie($id){



        $tache = new ListTache();
        $tache = ListTache::find($id);
        $tache ->Accomplie=1;
        $tache->update();
        return redirect('/');

    }

}