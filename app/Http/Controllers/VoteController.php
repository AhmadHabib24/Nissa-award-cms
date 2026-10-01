<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Nominee;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('vote.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $nominees = Nominee::where('category_id', $category->id)->where('status', 'approved')->get();
        return view('vote.show', compact('category', 'nominees'));
    }

    public function store(Request $request, $id)
    {
        $nominee = Nominee::findOrFail($id);

        $request->validate([
            'voter_email' => 'required|email',
        ]);

        $existingVote = Vote::where('voter_email', $request->voter_email)
            ->where('category_id', $nominee->category_id)
            ->where('edition_id', $nominee->edition_id)
            ->first();

        if ($existingVote) {
            return back()->with('error', 'You have already voted in this category using this email address.');
        }

        $vote = new Vote();
        $vote->nominee_id = $nominee->id;
        $vote->category_id = $nominee->category_id;
        $vote->edition_id = $nominee->edition_id;
        $vote->voter_email = $request->voter_email;
        $vote->ip_address = $request->ip();
        $vote->save();

        return back()->with('success', 'Your vote for ' . $nominee->name . ' has been recorded successfully!');
    }
}
