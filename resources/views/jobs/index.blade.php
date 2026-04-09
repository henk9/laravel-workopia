<x-layout>
  <h1>{{ $jobsPageTitle }}</h1>
  <ul>
    @forelse($jobs as $job)
    <li>{{$job['title']}} – {{$job['description']}}</li>
    @empty
    <li>No jobs were found.</li>
    @endforelse
  </ul>
</x-layout>
