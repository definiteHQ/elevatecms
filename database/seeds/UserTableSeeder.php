<?php
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $user           = new User();
        $user->email    = 'admin@demo.com';
        $user->password = bcrypt('demo12345');
        $user->save();
    }

}
