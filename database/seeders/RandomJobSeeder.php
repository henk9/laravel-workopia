<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class RandomJobSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Generate 10 job listings using the factory:
    Job::factory(10)->create();
    echo "Ten jobs created successfully!";
  }
}
