@props(['to'])

<a
    href="{{ $to }}"
    class="
        cursor-pointer
        px-2
        mx-2
        text-blue-900
        hover:text-blue-700 hover:underline
    "
>
    {{ $slot }}
</a>
