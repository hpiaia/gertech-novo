<?php

use App\Banner;
use App\Category;
use App\Contact;
use App\Customer;
use App\Job;
use App\Solution;
use App\User;
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
        User::query()->create([
            'name' => 'Humberto Piaia',
            'email' => 'betopiaia@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ]);

        factory(Banner::class, 5)->create();
        factory(Category::class, 5)->create();
        factory(Contact::class, 5)->create();
        factory(Customer::class, 15)->create();
        factory(Job::class, 10)->create();
        factory(User::class, 10)->create();

        Category::all()->each(function ($category) {
            factory(Solution::class, 5)->create([
                'category_id' => $category
            ]);
        });
    }
}
