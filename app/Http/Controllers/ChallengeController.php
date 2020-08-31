<?php

namespace App\Http\Controllers;

use App\Category;
use App\Challenge;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = Challenge::all(['title','category_id','id','user_id']);
        return view('challenge.index', compact('challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'title']);
        return view('challenge.new-challenge', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('UTC');
        $date_start = $request->date;
        $date_end = DateTime::createFromFormat('Y-m-d', $date_start);
        $date_end->modify('+1 week');
        $challenge = array (
            'title' => $request->title,
            'desc' => $request->desc,
            'date_start' => $date_start,
            'date_end' =>  $date_end->format('Y-m-d'),
            'category_id' => $request->category,
            'user_id' => Auth::id(),
            'status' => false
        );

        Challenge::create($challenge);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $challenge = Challenge::find($id);
        $category = Category::find($challenge->category_id);
        return view('challenge.challenge', compact('challenge','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $challenge = Challenge::find($id);
        $categories = Category::all(['id', 'title']);
        return view('challenge.edit-challenge', compact('challenge','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('UTC');
        $date_start = $request->date;
        $date_end = DateTime::createFromFormat('Y-m-d', $date_start);
        $date_end->modify('+1 week');
        $challenge_update = array (
            'id' => $id,
            'title' => $request->title,
            'desc' => $request->desc,
            'date_start' => $date_start,
            'date_end' =>  $date_end->format('Y-m-d'),
            'category_id' => $request->category,
            'user_id' => Auth::id(),
            'status' => false
        );

        $challenge = Challenge::find($id);
        $challenge->update($challenge_update);


        return redirect()->route('challenges.index')
            ->with('success','Challenge updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $challenge = Challenge::find($id);
        $challenge->delete();

        return redirect()->route('challenges.index')
            ->with('success','Challenge updated successfully');
    }

    public function myChallenges()
    {
        $challenges = DB::table('challenges')->where('user_id', Auth::id())->get();
        return view('challenge.your-challenges', compact('challenges'));
    }
}
