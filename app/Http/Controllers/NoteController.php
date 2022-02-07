<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function create(Request $request)
    {
    //     $uid = session('uid');
    //     $users = User::join('notes', 'users.uid', 'notes.uid')
    //     ->get(['notes.note', 'notes.uid', 'notes.img'])
    //     ->where('notes.uid', session('uid'));

    // echo "<pre>";
    // print_r($users->toArray());
    $note = new Note;
    $note->note=$request['n'];
    $note->uid=session('uid');
    $note->img='ss';
    $note->save();
    echo "Sicess";  

    }
}
