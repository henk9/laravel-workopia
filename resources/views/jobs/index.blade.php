@extends('layout')

@section('content')
<h1>{{ $title }}</h1>
<ul>
  @forelse($jobs as $job)
  <li>{{ $job }}</li>
  @empty
  <span>No Jobs Found</span>
  @endforelse
</ul>
@endsection