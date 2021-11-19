<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate(); // Evita duplicar datos si no es bd relacionales

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@ues.edu.sv";
        $user->is_admin = "1";
        $user->password = Hash::make("admin");
        $user->save();

        $user = new User();
        $user->name = "Jorge";
        $user->email = "rg19041@ues.edu.sv";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Cristian";
        $user->email = "ge19008@ues.edu.sv";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Mauricio";
        $user->email = "vf19012@ues.edu.sv";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Azucena";
        $user->email = "ms19038@ues.edu.sv";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Clairé";
        $user->email = "am19089@ues.edu.sv";
        $user->password = Hash::make("Minerva.20");
        $user->save();
    }
}
