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
        $this->call('TasksTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('ResponsiblesTableSeeder');
        $this->call('DirectorsTableSeeder');
        $this->call('StatusTableSeeder');
        $this->call('TaskStatuesTableSeeder');
    }
}

class TasksTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tasks')->insert(['name' => '1 Задача', 'description'=>'Описание 1', 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+1 days"))]);
        DB::table('tasks')->insert(['name' => '2 Задача', 'description'=>'Описание 2', 'id_role'=>2, 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+2 days"))]);
        DB::table('tasks')->insert(['name' => '3 Задача', 'description'=>'Описание 3', 'id_role'=>2, 'closed'=>1 , 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+2 days"))]);
        DB::table('tasks')->insert(['name' => '4 Задача', 'description'=>'Описание 4', 'id_role'=>3, 'closed'=>1, 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+3 days"))]);
        DB::table('tasks')->insert(['name' => '5 Задача', 'description'=>'Описание 5', 'id_role'=>3, 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+4 days"))]);
        DB::table('tasks')->insert(['name' => '6 Задача', 'description'=>'Описание 6', 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+7 days"))]);
        DB::table('tasks')->insert(['name' => '7 Задача', 'description'=>'Описание 7', 'closed'=>1, 'date_create'=>date('Y-m-d'), 'date_end'=>date('Y-m-d', strtotime("+7 days"))]);
	}

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert(['name' => 'user 1', 'email'=>'t1@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
        DB::table('users')->insert(['name' => 'user 2', 'email'=>'t2@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
        DB::table('users')->insert(['name' => 'user 3', 'email'=>'t3@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
        DB::table('users')->insert(['name' => 'user 4', 'email'=>'t4@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
        DB::table('users')->insert(['name' => 'user 5', 'email'=>'t5@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
        DB::table('users')->insert(['name' => 'user 6', 'email'=>'t6@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
        DB::table('users')->insert(['name' => 'user 7', 'email'=>'t7@mail.ru', 'password'=>'123', 'email_verified_at'=>date('Y-m-d'), 'created_at'=>date('Y-m-d'), 'updated_at'=>date('Y-m-d')]);
    }

}

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->insert(['name' => 'Не указан']);
        DB::table('roles')->insert(['name' => 'Плохой']);
        DB::table('roles')->insert(['name' => 'Хороший']);
    }

}

class ResponsiblesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('responsibles')->insert(['id_task' => 1, 'id_user' => 1]);
        DB::table('responsibles')->insert(['id_task' => 1, 'id_user' => 2]);
        DB::table('responsibles')->insert(['id_task' => 2, 'id_user' => 2]);
        DB::table('responsibles')->insert(['id_task' => 3, 'id_user' => 3]);
        DB::table('responsibles')->insert(['id_task' => 4, 'id_user' => 4]);
        DB::table('responsibles')->insert(['id_task' => 5, 'id_user' => 5]);
        DB::table('responsibles')->insert(['id_task' => 6, 'id_user' => 6]);
        DB::table('responsibles')->insert(['id_task' => 7, 'id_user' => 7]);
        DB::table('responsibles')->insert(['id_task' => 7, 'id_user' => 2]);
    }

}

class DirectorsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('directors')->insert(['id_task' => 1, 'id_user' => 1]);
        DB::table('directors')->insert(['id_task' => 1, 'id_user' => 2]);
        DB::table('directors')->insert(['id_task' => 2, 'id_user' => 2]);
        DB::table('directors')->insert(['id_task' => 3, 'id_user' => 3]);
        DB::table('directors')->insert(['id_task' => 4, 'id_user' => 4]);
        DB::table('directors')->insert(['id_task' => 5, 'id_user' => 5]);
        DB::table('directors')->insert(['id_task' => 6, 'id_user' => 6]);
        DB::table('directors')->insert(['id_task' => 7, 'id_user' => 7]);
        DB::table('directors')->insert(['id_task' => 7, 'id_user' => 2]);
    }

}

class StatusTableSeeder extends Seeder {

    public function run()
    {
        DB::table('status')->insert(['name' => 'Выполняется']);
        DB::table('status')->insert(['name' => 'Ждет выполнения']);
        DB::table('status')->insert(['name' => 'Завершен']);
    }

}


class TaskStatuesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('task_statues')->insert(['id_task' => 1, 'id_status' => 1]);
        DB::table('task_statues')->insert(['id_task' => 1, 'id_status' => 2]);
        DB::table('task_statues')->insert(['id_task' => 2, 'id_status' => 2]);
        DB::table('task_statues')->insert(['id_task' => 3, 'id_status' => 3]);
        DB::table('task_statues')->insert(['id_task' => 4, 'id_status' => 1]);
        DB::table('task_statues')->insert(['id_task' => 5, 'id_status' => 2]);
        DB::table('task_statues')->insert(['id_task' => 6, 'id_status' => 3]);
        DB::table('task_statues')->insert(['id_task' => 7, 'id_status' => 1]);
        DB::table('task_statues')->insert(['id_task' => 7, 'id_status' => 2]);
    }

}

