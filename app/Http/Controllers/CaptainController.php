<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class CaptainController extends Controller
{
    //
    public function show($captain_slug)
    {
        $captain = \App\Captain::where('slug', $captain_slug)->first();

        if (!$captain) {
            abort(404, 'Captain not found');
        }

        $view = view('captain/show');
        $view->captain = $captain;
        return $view;
    }

    public function index()
    {
        $captains = DB::table('captains')->orderBy('name', 'asc')->get();

        return view('captain/index', compact('captains'));

        
    }

    public function save(Request $request, $captain_slug)
    {
        $captain = \App\Captain::where('slug', $captain_slug)->first();

        $assignment = new \App\Assignment;
        $assignment->captain_id = $captain->id;
        if(Auth::user() == null)
        {
            $assignment->user_id = null;
        }
        else
        {
            $assignment->user_id = Auth::user()->id;
        };
        $assignment->subject = $request->subject;
        $assignment->description = $request->description;
        $assignment->save();

        return redirect(action('CaptainController@index'));
    }
}
