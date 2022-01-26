@props(['to'])

<a
    href="{{ $to }}"
    class="
        cursor-pointer
        px-2
        mx-2
        text-orange-400
        hover:text-gray-100 hover:underline
    "
>
    {{ $slot }}
</a>
