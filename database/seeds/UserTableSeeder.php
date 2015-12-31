<?php
use Illuminate\Database\Seeder;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2015/12/31
 * Time: 16:37
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class, 50)->create();
    }
}
