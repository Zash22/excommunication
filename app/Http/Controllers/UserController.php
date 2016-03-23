<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Repositories;
use Kodeine\Acl\Models\Eloquent\Role;

use Auth;

use Kodeine\Acl;
use Kodeine\Acl\AclServiceProvider;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        // $clients = Client::ofType(auth::user()->client_rec_id)->get();

        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param AclService $aclService
     *
     * @return Response
     */
    public function create()
    {

        $roles = Role::lists('name','id');



        $currentRoles = [];

//        $clients = Client::lists('CompanyName', 'rec_id')->all();

        return view('users.create', compact('roles', 'currentRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->has('password')) {
            $user->password = bcrypt($request->get('password'));
        }

//        $user->client_rec_id = $request->get('id');

        $user->save();

        $this->updateRoles($user, $request->get('Roles', []));



//        Flash::success('User has been saved');

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int       $id
     * @param AclService $aclService
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::lists('name','id');
        $currentRoles = $user->roles()->lists('role_id')->toArray();

        return view('users.edit', compact('user', 'roles', 'currentRoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int    $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->has('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        $this->updateRoles($user, $request->get('Roles', []));

        $user->save();

//        Flash::success('User has been updated');

        return redirect()->route('user.index');
    }

    /**
     * @param User  $user
     * @param array $rolesIds
     *
     * @internal param Employee $employee
     */
    public function updateRoles(User $user, array $rolesIds)
    {
        $user->roles()->sync($rolesIds);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->destroy();

        $user->save();

        Flash::danger('User has been deleted');

        return redirect()->route('user.index');

    }
}
