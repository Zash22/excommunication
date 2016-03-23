<?php

namespace App\Http\Controllers;

use Kodeine\Acl\Models\Eloquent\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use Kodeine\Acl\Models\Eloquent\Permission;
use Collective\Html;
use Illuminate\Contracts\Http;



//use Illuminate\Http;


class RoleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        //$permissions = Permission::all();
        $permissions = Permission::lists('name','id');

        $currentPermissions = 'superAdministrator';


        return view('roles.create', compact('permissions','currentPermissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role;

        $role->name = $request->get('name');
//        $role->label = $request->get('label');
        $permissions = $request->get('Permissions',[]);

        $role->save();

        $this->updatePermissions($role, $permissions);

//        Flash::success('Role has been saved');

        return redirect()->route('role.index');
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
        $role = Role::find($id);
        $permissions = Permission::lists('name','id');
        $currentPermissions = $role->permissions()->lists('permission_id')->toArray();
        return view('roles.edit', compact('role','permissions','currentPermissions'));
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

        $role = Role::find($id);
        $role->name = $request->get('name');
        $permissions = $request->get('Permissions',[]);


        $this->updatePermissions($role, $permissions);


        $role->save();





//        Flash::success('Role has been updated');

        return redirect()->route('role.index');
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

    public function updatePermissions(Role $role, array $permissionIds)
    {
        $role->permissions()->sync($permissionIds);
    }
}
