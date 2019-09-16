<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //PERMISOS
        DB::table('permisos')->insert([
            'nombre' => 'Administrador',            
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'Funcionario',            
        ]);
        
        
        //USERS
        DB::table('users')->insert([
            'name' => 'Ley',
            'email'=>'ley@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'1',            
        ]);
        DB::table('users')->insert([
            'name' => 'Joy',
            'email'=>'joy@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'1',
        ]);
        DB::table('users')->insert([
            'name' => 'Maria',
            'email'=>'maria@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'2',            
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email'=>'jose@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'2',
        ]);
        DB::table('users')->insert([
            'name' => 'Alejandra',
            'email'=>'alejandra@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'2',
        ]);
        DB::table('users')->insert([
            'name' => 'Mario',
            'email'=>'mario@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'2',
        ]);
        DB::table('users')->insert([
            'name' => 'Liz',
            'email'=>'liz@live.com',
            'password'=> bcrypt('123123'),
            'permiso_id'=>'2',
        ]);

        ///PARTIDOS
        DB::table('partidos')->insert([
            'nombre' => 'Azul',
            'codigo'=>'A10Z',
        ]);
        DB::table('partidos')->insert([
            'nombre' => 'Verde',
            'codigo'=>'V10Z',
        ]);
        DB::table('partidos')->insert([
            'nombre' => 'Rojo',
            'codigo'=>'R10Z',
        ]);
        DB::table('partidos')->insert([
            'nombre' => 'Purpura',
            'codigo'=>'P10Z',
        ]);

        //NIVELES
        DB::table('nivels')->insert([
            'nombre' => 'Presidencial',
        ]);
        DB::table('nivels')->insert([
            'nombre' => 'Departamental',
        ]);
        DB::table('nivels')->insert([
            'nombre' => 'Provincial',
        ]);

        //TIPOS
        DB::table('tipos')->insert([
            'nombre' => 'Jurado',
        ]);
        DB::table('tipos')->insert([
            'nombre' => 'Delegado',
        ]);

        //DPOTOS
        DB::table('departamentos')->insert([
            'nombre' => 'La Paz',
            'sigla' => 'LP',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Santa Cruz',
            'sigla' => 'SC',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Cochabamba',
            'sigla' => 'CBBA',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Sucre',
            'sigla' => 'SCR',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Beni',
            'sigla' => 'BN',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Tarija',
            'sigla' => 'TRJ',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Potosi',
            'sigla' => 'PTS',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Oruro',
            'sigla' => 'OR',
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Pando',
            'sigla' => 'PD',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'Nuflo de Chavez',
            'sigla' => 'NFl',
            'departamento_id' => 2,
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'Warnes',
            'sigla' => 'WR',
            'departamento_id' => 2,
        ]);

        //RECINTOS
        DB::table('recintos')->insert([
            'nombre' => 'La salle',
            'sigla' => 'Ls10',
            'ubicacion' => 'C/ Rene moreno',
            'provincia_id' => 1,
        ]);
        DB::table('recintos')->insert([
            'nombre' => 'Cristo Rey',
            'sigla' => 'CR20',
            'ubicacion' => 'C/ Rene moreno',
            'provincia_id' => 1,
        ]);
        DB::table('recintos')->insert([
            'nombre' => 'Elvira Castedo',
            'sigla' => 'EC50',
            'ubicacion' => 'C/ Rene moreno',
            'provincia_id' => 2,
        ]);
        DB::table('recintos')->insert([
            'nombre' => 'Kolping',
            'sigla' => 'KP60',
            'ubicacion' => 'C/ Rene moreno',
            'provincia_id' => 2,
        ]);

        //PARTIDO NIVEL
        DB::table('partido_nivels')->insert([
            'partido_id' => 1,
            'nivel_id' => 1,
        ]);
        DB::table('partido_nivels')->insert([
            'partido_id' => 1,
            'nivel_id' => 2,
        ]);
        DB::table('partido_nivels')->insert([
            'partido_id' => 1,
            'nivel_id' => 3,
        ]);
        DB::table('partido_nivels')->insert([
            'partido_id' => 2,
            'nivel_id' => 1,
        ]);

        DB::table('partido_nivels')->insert([
            'partido_id' => 2,
            'nivel_id' => 2,
        ]);
        DB::table('partido_nivels')->insert([
            'partido_id' => 2,
            'nivel_id' => 3,
        ]);
        DB::table('partido_nivels')->insert([
            'partido_id' => 3,
            'nivel_id' => 1,
        ]);

        ///MESAS
        DB::table('mesas')->insert([
            'codigo' => 'm101',
            'apellido_inicial' => 'Aliaga',
            'apellido_final' => 'Cepeda',
            'recinto_id' => 1,
        ]);
        DB::table('mesas')->insert([
            'codigo' => 'm102',
            'apellido_inicial' => 'Centeno',
            'apellido_final' => 'Machado',
            'recinto_id' => 1,
        ]);
        DB::table('mesas')->insert([
            'codigo' => 'm103',
            'apellido_inicial' => 'Aliaga',
            'apellido_final' => 'Cepeda',
            'recinto_id'=> 1,
        ]);
        
        //ENCARGADOS
        DB::table('encargados')->insert([
            'nombres' => 'Jose',
            'apellidos' => 'Aliaga',
            'genero' => 'Masculino',
            'celular'=> '79856652',
            'ci'=> '8451656',
            'partido_id'=> 1,
            'user_id'=> 4,
        ]);

        DB::table('encargados')->insert([
            'nombres' => 'Alejandra',
            'apellidos' => 'Velez',
            'genero' => 'Femenino',
            'celular'=> '6498556',
            'ci'=> '415663',
            'partido_id'=> 2,
            'user_id'=> 5,
        ]);




    }
}
