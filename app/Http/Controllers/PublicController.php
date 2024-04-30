<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\BecomeLessonMail;
use App\Mail\BecomeLessorMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){

        return view('welcome');
    }

    public function becomeLessore(){

        return view('become_lessor');
    }

    public function becomeLessorSubmit(Request $request){

        Mail::to('hack142@admin.it')->send(new BecomeLessonMail($request->name, $request->email, $request->textMessage));

        Auth::user()->is_lessor = NULL;
        Auth::user()->save();

        return redirect()->back()->with('message', 'Richiesta inoltrata');
    }

    function dashboard() {

        $pendings = User::where('is_lessor', NULL) // Con il metodo where sto richiedendo al DB dei record con una specifica condizione
                ->get(); // Sto chiedendo alla query di recuperare i dati nel DB

        // dd($pendings);
        return view('admin.dashboard', compact('pendings'));

    }

    function acceptRequest(User $user) {

        $user-> is_lessor = true;
        $user->save();

        return redirect()->back();
    }
}
