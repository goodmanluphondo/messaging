<a href="{{$href}}"
@if ($active)
class="bg-gray-900 text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg"
@else
class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg"
@endif
>
    {{ $slot }}
</a>
