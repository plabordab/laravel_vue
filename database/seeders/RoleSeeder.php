<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

    use Spatie\Permission\Models\Role;
    use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Creo los roles que necesito
        $rol_administrador= Role::create(['name'=>"administrador"]); //todos
        $rol_comercial=Role::create(['name'=>"comercial"]); //Clientes
        $rol_contable=Role::create(['name'=>"contable"]); //facturas
        $rol_personal=Role::create(['name'=>"personal"]); //facturas

        //Facturas


        Permission::create(["name"=>"factura.index"])->syncRoles([$rol_administrador,$rol_contable]);//listar;
        Permission::create(["name"=>"factura.create"])->syncRoles([$rol_administrador,$rol_contable]);//crear;
        Permission::create(["name"=>"factura.destroy"])->syncRoles([$rol_administrador,$rol_contable]);//borrar;
        Permission::create(["name"=>"factura.edit"])->syncRoles([$rol_administrador,$rol_contable]);//modificar;

        Permission::create(["name"=>"empleado.index"])->syncRoles([$rol_administrador,$rol_personal]);//listar
        Permission::create(["name"=>"empleado.create"])->syncRoles([$rol_administrador,$rol_personal]);//crear
        Permission::create(["name"=>"empleado.destroy"])->syncRoles([$rol_administrador,$rol_personal]);//borrar
        Permission::create(["name"=>"empleado.edit"])->syncRoles([$rol_administrador,$rol_personal]);//modificar

        Permission::create(["name"=>"cliente.index"])->syncRoles([$rol_administrador,$rol_comercial]);//listar
        Permission::create(["name"=>"cliente.create"])->syncRoles([$rol_administrador,$rol_comercial]);//crear
        Permission::create(["name"=>"cliente.destroy"])->syncRoles([$rol_administrador,$rol_comercial]);//borrar
        Permission::create(["name"=>"cliente.edit"])->syncRoles([$rol_administrador,$rol_comercial]);//modificar


        //
    }
}
