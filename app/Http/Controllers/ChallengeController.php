<?php

namespace App\Http\Controllers;

use App\Category;
use App\Challenge;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = Challenge::all(['title','category_id']);
        $categories = Category::all(['id', 'title']);
        return view('challenge.index', compact('challenges', 'categories'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
