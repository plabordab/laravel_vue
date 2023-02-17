<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class Roles extends Controller
{

    public function index()
    {
        //Creo un rol de creacion
        //Vamos a obtener todos los roles
        $roles = Role::all();
        $permisos = Permission::all();
        $usuarios = User::all();


        return view("roles", ["roles" => $roles,
            "permisos" => $permisos,
            "usuarios" => $usuarios]);
    }
    public function asigna_roles(Request $request){
        $usuario = $request->usuario;

        $roles = $request->rol;

//        dd($usuario);
//        dd($roles);
        //Obtenemos un usuario
        $user = User::where("name",$usuario)->first();
        foreach ($roles as $rol){
            $user->assignRole($rol);
        }
        return redirect()->route("main");


    }
    //
}
