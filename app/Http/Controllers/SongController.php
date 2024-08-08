<?php

namespace App\Http\Controllers;

use App\Models\ImageModel;
use App\Models\MusicModel;
use App\Models\SongModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function index(){
        $data['songs'] = DB::table('songs')
            ->join('musics','songs.id','=','musics.sid')
            ->join('images','songs.id','=','images.iid')
            ->select('*')
            ->get();
        $data['header_title'] = 'SongDB | Home';
        $data['auth_check'] = Auth::check();
        return view('songs',$data);
    }
    public function add(){
        $data['header_title'] = 'Add New Song';
        return view('add-songs',$data);
    }

public function insert(Request $req){
    $songs = new SongModel;
    $songs->song = trim($req->song);
    $songs->artist= trim($req->artist);
    $songs->save();

    if(!empty($req->file('image'))){
        $image = $req->file('image');
                $ext = $image->getClientOriginalExtension();
                $randomName = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomName).'.'.$ext;
                $image->move('cover/',$filename);
                $imageUpload = new ImageModel;
                $imageUpload->iid = $songs->id;
                $imageUpload->image_name = $filename;
                $imageUpload->image_ext = $ext;
                $imageUpload->save();
    }

    if(!empty($req->file('audio'))){
        $music = $req->file('audio');
                $ext = $music->getClientOriginalExtension();
                $randomName = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomName).'.'.$ext;
                $music->move('songs/',$filename);
                $musicUpload = new MusicModel;
                $musicUpload->sid = $songs->id;
                $musicUpload->music = $filename;
                $musicUpload->music_ext = $ext;
                $musicUpload->save();
        }
        return redirect()->route('song');
    }
    // dd($req->all());
    public function search(Request $req,$keyword='null'){
        $keyword = $req->search;
        $data['header_title'] = 'SongBD | Signin';
        $data['song'] = DB::table('songs')
            ->join('musics','songs.id','=','musics.sid')
            ->join('images','songs.id','=','images.iid')
            ->where('song','=',$keyword)
            ->select('*')
            ->get();
        $song = $data['song'][0];
        // dd($song);
        return view('search',compact('song'),$data);
    }

}
