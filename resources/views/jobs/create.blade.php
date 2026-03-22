<x-layout>
  <x-slot name="title">Create x-slot Job</x-slot>
  <h1>Create h1 Job</h1>
  <form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" />
    <input type="text" name="description" placeholder="Description" />
    <button type="submit">Submit</button>
  </form>
</x-layout>

{{-- @extends('layout')

@section('title')
Create Job
@endsection

@section('content')
<h1>Create Job Ad</h1>
<form action="/jobs" method="POST">
  @csrf
  <input type="text" name="title" placeholder="Title" />
  <input type="text" name="description" placeholder="Description" />
  <button type="submit">Submit</button>
</form>
@endsection --}}