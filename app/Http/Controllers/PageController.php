<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key"=>"home"]);
    }

    public function movies() 
    {
        $movies = Movies::orderBy('id','desc')->get();
      //  return $movies;
        return view("movies", ["key"=>"movies", "mv" => $movies]);
    }

    public function formaddmovies() {
        return view("form-add", ["key" => "movies"]);
    }

    public function savemovies(Request $request){
        $file_name = time().'-'. $request -> file('poster')->getClientOriginalName();
       $path= $request-> file('poster')->storeAs('poster',$file_name,'public');
       movies::create([
        'title' => $request->title,
        'genre' => $request -> genre,
        'year'=> $request -> year,
        'poster' => $path
       ] );

       
       return redirect('/movies')-> with('alert', 'Data Berhasil disimpan');

    }

    public function formeditmovies($id){
        
        $movies = Movies:: find($id);
        return view ("form-edit", ["key"=>"movies","mv" => $movies]);
    }

    public function updatemovies ($id, request $request){
        $movies = Movies::find($id);

        $movies-> title= $request->title;
        $movies-> genre= $request->title;
        $movies-> year= $request->year;

        if($request->poster)
        {
            if ($movies->poster)
            {
                Storage::disk('public')-> delete($movies->poster);
                $file_name = time().'-'. $request -> file('poster')->getClientOriginalName(); //mengubah nama
                $path= $request-> file('poster')->storeAs('poster',$file_name,'public'); //menyimpan gambar
                $movies->poster=$path; //mengubah nama dalam database
            }
        }
        $movies->save();
        return redirect("/movies")->with('alert','Data berhasil diubah');
        
    }

    public function deletemovies($id){

        $movies = Movies :: find($id);
        
        if($movies->poster)
        {
            Storage::disk('public')->delete($movies->poster);
        }

        $movies->delete();
        return redirect("/movies")->with('alert','Data berhasil dihapus');
        
    }

    public function login (){

        return view("login");
    }

    public function formedituser(){
        return view("formedituser", ["key"=>" "]);
    }

    public function  updateuser(request $request){

        if ($request->password_baru = $request -> konfirmasi_password)
        {
            $user=Auth::user(); //perintah untuk mengambil session yang login
            $user-> password = bcrypt ($request-> password_baru);
            $user->save();
            
            return redirect("/user")-> with("info", "password berhasil diubah");
        }

        else 
        {
            return redirect("/user")-> with("info", "password berhasil diubah");
        }
    }


}
