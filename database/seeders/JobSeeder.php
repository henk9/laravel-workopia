<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Load job listings data from file:
    $jobListings = include database_path('seeders/data/job_listings.php');

    // Get all user IDs:
    $userIds = User::pluck('id')->toArray();

    foreach ($jobListings as &$jobListing) {
      // Assign a random user_id to each job listing:
      $jobListing['user_id'] = $userIds[array_rand($userIds)];
      // Add timestamps:
      $jobListing['created_at'] = now();
      $jobListing['updated_at'] = now();
    }
    unset($jobListing); // break the reference with the last element
    //^ https://www.php.net/manual/en/control-structures.foreach.php#:~:text=Warning

    // Insert job listings:
    DB::table('job_listings')->insert($jobListings);
    echo "JobSeeder: jobs created successfully!";
  }
}
