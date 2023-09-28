<?php

namespace App\Providers;
use App\Models\Cliente;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('admin-listar',function(Cliente $cliente){
            return $cliente->perfil_id==1;
        });

        Gate::define('artista-listar',function(Cliente $cliente){
            return $cliente->perfil_id>1;
        });


        Gate::define('visitante',function(Cliente $cliente){
            return $cliente->perfil_id == null;
        });
    }
}
