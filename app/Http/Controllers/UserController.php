<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
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
    public function store(Request $request)
    {
        //
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

    public function bulkDelete(Request $request)
    {
        $selectedIDs = $request->input('selectedIDs');
        $loggedInUser = auth()->user();
        $responseMessage = '';

        // if nothing is selected just return
        if ($selectedIDs == null) {
            return back();
        }

        foreach ($selectedIDs as $key => $id) {
            $user = User::find($id);

            if ($user) {
                if ($user->id == $loggedInUser->id) {
                    $responseMessage .= 'You cannot delete currently logged in account.';
                    $responseMessage .= '</br>';
                }else{
                    $user->delete();
                    $responseMessage .= 'User ' . $user->name . ' has been deleted.';
                    $responseMessage .= '</br>';
                }

            }else{
                $responseMessage .= 'User with ID: '. $id . 'is not found.';
                $responseMessage .= '</br>';
            }
        }

        return back()->with('responseMessage', $responseMessage);

    }

    public function bulkSuspend(Request $request)
    {
        $selectedIDs = $request->input('selectedIDs');
        $loggedInUser = auth()->user();
        $responseMessage = '';

        // if nothing is selected just return
        if ($selectedIDs == null) {
            return back();
        }

        foreach ($selectedIDs as $key => $id) {
            $user = User::find($id);

            if ($user) {
                if ($user->id == $loggedInUser->id) {
                    $responseMessage .= 'You cannot suspend currently logged in account.';
                    $responseMessage .= '</br>';
                }else{
                    // if user was already suspended then just do nothing
                    if ($user->permission == 0) {
                        $responseMessage .= 'User ' . $user->name . ' account was previously suspended.';
                        $responseMessage .= '</br>';
                    }else{
                        $user->previous_permission = $user->permission;
                        $user->permission          = 0;

                        $saved = $user->save();

                        if ($saved) {
                            $responseMessage .= 'User ' . $user->name . ' account has been suspended.';
                            $responseMessage .= '</br>';
                        }else{
                            $responseMessage .= 'Failed to suspend user account ' . $user->name . '. Please try again.';
                            $responseMessage .= '</br>';
                        }
                    }

                }

            }else{
                $responseMessage .= 'User with ID: '. $id . 'is not found.';
                $responseMessage .= '</br>';
            }
        }

        return back()->with('responseMessage', $responseMessage);

    }
}
