<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use App\Models\User;
use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use Illuminate\Support\Facades\DB;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_user = DB::table('users')
            ->join('user_infos', 'users.id', '=', 'user_infos.user_id')
            ->select('user_infos.*', 'users.status', 'users.role')
            ->get();
        //$list_user = UserInfo::get();
        return view('users',['list_user'=>$list_user]);
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
     * @param  \App\Http\Requests\StoreUserInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $list_user = DB::table('users')
            ->join('user_infos', 'users.id', '=', 'user_infos.user_id')
            ->select('user_infos.*', 'users.status', 'users.role')
            ->orderBy('user_infos.score','DESC') 
            ->get();
        //$list_user = UserInfo::get();
        return view('global-leaderboard',['list_user'=>$list_user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(UserInfo $userInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserInfoRequest  $request
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserInfoRequest $request, UserInfo $userInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        
    }
}
