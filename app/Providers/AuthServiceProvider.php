<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Schema;
use Kodeine\Acl\Models\Eloquent\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $roles = $this->getRoles();

        foreach ($roles as $key => $role) {

            $gate->define($role['name'], function ($user) use ($role) {

                $userRoles = $user->getRoles()->toArray();

                foreach ($userRoles as $key => $userRole) {
                    if ($role['name'] == $userRole) {
                        return true;
                    }
                }
            });
        }

        //
    }

    protected function getRoles()
    {
        if (Schema::hasTable('roles')) {

            $roles = Role::all('*');

            return $roles;
        }

        return [];
    }

}
