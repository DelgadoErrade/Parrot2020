<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'password' => bcrypt('pass123')
        ]);

        DB::table('users')->insert([
            'usuario' => 'rat',
            'nombre' => 'Roosvelt',
            'password' => bcrypt('pass123')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);
        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);

    }
}
