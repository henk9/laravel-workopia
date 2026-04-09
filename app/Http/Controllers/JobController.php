<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;

// https://saasykit.com/blog/how-to-generate-documentation-for-your-laravel-project
class JobController extends Controller
{
  /**
   * @desc   Shows all jobs.
   * 
   * @route  GET /jobs
   */
  public function index(): View
  {
    $jobs = Job::all();
    return view('jobs/index')->with('jobs', $jobs);
  }
  /**
   * @desc   Shows the create job ad form.
   * 
   * @route  GET /jobs/create
   */
  public function create(): View
  {
    return view('jobs/create');
  }
  /**
   * @desc   Stores a new job ad.
   * 
   * @route  POST /jobs
   */
  public function store(Request $request): string
  {
    $title = $request->input('title');
    $description = $request->input('description');
    return "Title: $title, Description: $description";
  }
  /**
   * @desc   Shows a single job.
   * 
   * @route  GET /jobs/{id}
   */
  public function show(string $id): View
  {
    return view('jobs/show');
  }
  /**
   * @desc   Shows the form for editing a job ad.
   * 
   * @route  GET /jobs/{id}/edit
   */
  public function edit(string $id): string
  {
    return "Edit job $id";
  }
  /**
   * @desc   Updates a job ad.
   * 
   * @route  PUT /jobs/{id}
   */
  public function update(Request $request, string $id): string
  {
    return "Update job $id";
  }
  /**
   * @desc   Deletes a job ad.
   * 
   * @route  DELETE /jobs/{id}
   */
  public function destroy(string $id): string
  {
    return "Delete job $id";
  }
  /**
   * @desc   Saves a job ad to favorites.
   * 
   * @route  POST /jobs/{id}/save
   */
  public function save(string $id): string
  {
    return "Save job $id";
  }
}
