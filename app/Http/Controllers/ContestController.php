<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;
use Auth;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($name,$num_problems,$level)
    {
        //
        $levels = ['easy', 'medium','hard'];
        // return !in_array($level, $levels);

        if (!in_array($level, $levels))
        {
            return "Not accepted level";
        }

         $record = Contest::where('name',$name)->first();
        if($record)
        {
            return "name already taken";
        }

        $contest = new Contest;
        $contest->name = $name;
        $contest->num_problems = $num_problems;
        $contest->level = $level;
        $contest->user_id = Auth::id();
        $contest->save();

        return "Record saved";
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
