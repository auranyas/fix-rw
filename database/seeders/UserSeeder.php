<?php

namespace Database\Seeders;

use App\Models\Rt;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_rw = User::create([
            'name' => 'adminrw',
            'email' => 'adminrw@gmail.com',
            'password' => bcrypt('password'),

        ]);

        $admin_rw->assignRole('admin_rw');

        $admin_rt = User::create([
            'name' => 'adminrt',
            'email' => 'adminrt@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin_rt->assignRole('admin_rt');

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '1',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '2',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '3',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '4',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '5',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '6',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '7',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '8',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '9',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '10',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '11',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '12',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '13',
            'foto' => null
        ]);

        Rt::create([
            'nama_rt' => 'Marhasan',
            'rt' => '14',
            'foto' => null
        ]);

        Warga::create([
            'nama' => 'Najwa Aura',
            'usia' => '17',
            'nik' => '87644364',
            'jk' => 'perempuan',
            'rt_id' => '1'
        ]);

        Warga::create([
            'nama' => 'Najwa',
            'usia' => '17',
            'nik' => '87644364',
            'jk' => 'perempuan',
            'rt_id' => '2'
        ]);
    }
}
