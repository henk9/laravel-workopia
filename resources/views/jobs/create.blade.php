<x-layout>
  <x-slot name="title">Create x-slot Job</x-slot>
  <h1>Create h1 Job17</h1>
  <form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" />
    <input type="text" name="description" placeholder="Description" />
    <button type="submit">Submit</button>
  </form>
</x-layout>
