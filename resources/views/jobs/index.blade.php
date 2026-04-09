<x-layout>
  <h1>Available Jobs right now</h1>
  <ul>
    @forelse($jobs as $job)
    <li><a href="{{ route('jobs.show', $job->id) }}">
        {{$job->title}}</a> – {{$job->description}}
    </li>
    @empty
    <li>No jobs were found.</li>
    @endforelse
  </ul>
</x-layout>
