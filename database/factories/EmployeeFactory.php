<?php

namespace Database\Factories;

use App\Models\WorkDepartment;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = \App\Models\Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $dt = $this->faker->dateTimeBetween($startDate = '-50 years', $endDate = '-20 years');
        $birthDate = $dt->format("Y-m-d");
        $dt2 = $this->faker->dateTimeBetween($startDate = $dt, $endDate = 'now');
        $hireDate = $dt2->format("Y-m-d");
        return [
            'first_name' => $this->faker->firstName($gender = null | 'male' | 'female'),
            'last_name' => $this->faker->lastName(),
            'phone_no' => $this->faker->phoneNumber(),
            'work_dept' => $this->faker->randomElement(\App\Models\WorkDepartment::pluck('id')),
            'job' => $this->faker->jobTitle(),
            'sex' => $this->faker->randomElement(['M', 'F', 'O']),
            'birth_date' => $birthDate,
            'salary' => $this->faker->numberBetween($min = 10000, $max = 50000),
            'hire_date' => $hireDate,
            'is_active' => $this->faker->randomElement([true, false]),
        ];
    }
}
