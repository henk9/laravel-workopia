@props(['url' => '/', 'active' => false, 'icon' => null])
{{-- @props(['url' => '/', 'active' => false]) --}}

<a href="{{ $url }}"
  class="text-white hover:underline py-2 {{ $active ? 'text-yellow-400 font-bold' : '' }}">
  {{-- <i class="fa fa-user mr-1"></i> {{$slot}} --}}
  @if($icon)
  <i class="fa fa-{{ $icon }} mr-1"></i>
  @endif {{$slot}}
</a>