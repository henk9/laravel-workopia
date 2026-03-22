<x-layout>
  <h1>Available Jobs</h1>
  <ul>
    @forelse($jobs as $job)
    <li>{{ $job }}</li>
    @empty
    <li>No jobs found</li>
    @endforelse
  </ul>
</x-layout>

{{-- @extends('layout')

@section('title')
Available Jobs
@endsection

@section('content')
<h1>{{ $title }}</h1>
<ul>
  @forelse($jobs as $job)
  <li>{{ $job }}</li>
  @empty
  <span>No Jobs Found</span>
  @endforelse
</ul>
@endsection --}}