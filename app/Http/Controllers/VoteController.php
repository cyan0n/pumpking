<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index() {
        return view('votes.index');
    }

    public function create()
    {
        if (auth()->user()->vote) {
            return redirect()->route('vote.index');
        }
        $users = User::where('id', '!=', auth()->id())->with('photos')->get();
        return view('votes.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'votes' => 'required|array',
            'votes.*' => 'exists:users,id',
        ]);

        $user = $request->user();

        if ($user->vote) {
            $user->vote->delete();
        }
        $user->vote()->create([
            'first' => $request->input('votes')[0],
            'second' => $request->input('votes')[1],
            'third' => $request->input('votes')[2],
        ]);

        $user->save();

        return redirect()->action([self::class, 'index'])->withSuccess('');
    }

    public function test()
    {
        $users = User::whereNotNull('submission_title')->get();
        $users = $users->sortBy(function ($user){
            return $user->score;
        });
        
        return $users;
    }
}
