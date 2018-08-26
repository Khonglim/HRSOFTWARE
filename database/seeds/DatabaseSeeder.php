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
        $this->call(TestTableSeeder::class);
        $this->call(DiscTableSeeder::class);
        $this->call(InterviewTableSeeder::class);
        $this->call(Ngg_positionTableSeeder::class);
        $this->call(ScoreinterviewTableSeeder::class);
        $this->call(ThaiAddressTablesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(Inter_supTableSeeder::class);
        $this->call(EmployeetotestTableSeeder::class);
        $this->call(PartofTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(FormforTableSeeder::class);
        $this->call(Ngg_employeeTableSeeder::class);
       
    }
}
