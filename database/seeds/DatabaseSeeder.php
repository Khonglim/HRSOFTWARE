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
        $this->call(UsersTableSeeder::class);
        $this->call(Inter_supTableSeeder::class);
        $this->call(EmployeetotestTableSeeder::class);
        $this->call(PartofTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(FormforTableSeeder::class);
       // $this->call(Ngg_employeeTableSeeder::class);
        $this->call(provinceTableSeeder::class);
        $this->call(Ngg_evaluate_employeeTableSeeder::class);
        $this->call(Ngg_levelTableSeeder::class);
        $this->call(Ngg_sectorTableSeeder::class);
        $this->call(ScoreOperateTableSeeder::class);
        $this->call(OperateStaffTableSeeder::class);
        $this->call(OperateSupTableSeeder::class);
        $this->call(ManagerTableSeeder::class);
        $this->call(NationalityTableSeeder::class);
        $this->call(Partofv2TableSeeder::class);
        $this->call(Questionv2TableSeeder::class);
        $this->call(DescriptionTableSeeder::class);
        $this->call(Ngg_companyTableSeeder::class);
        $this->call(Ngg_departmentTableSeeder::class);

    }
}
