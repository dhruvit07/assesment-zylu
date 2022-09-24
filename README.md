run : composer update

database used mysql

run : php artisan tinker 

then run this commands individually

1. \App\Models\WorkDepartment::factory()->create(['name' => "Sales"]);
2. \App\Models\WorkDepartment::factory()->create(['name' => "Finance"]);
3. \App\Models\WorkDepartment::factory()->create(['name' => "Information Technology"]);
4. \App\Models\WorkDepartment::factory()->create(['name' => "Human Resources"]);
5. \App\Models\Employee::factory()->count(200)->create();

open application
