<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $_UserService;

    public function __construct()
    {
        $this->_UserService = new UserService();
    }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskDown17  $taskDown17
     * @return \Illuminate\Http\Response
     */
    public function show(TaskDown17 $taskDown17)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskDown17  $taskDown17
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskDown17 $taskDown17)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskDown17  $taskDown17
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskDown17 $taskDown17)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskDown17  $taskDown17
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskDown17 $taskDown17)
    {
        //
    }
}
