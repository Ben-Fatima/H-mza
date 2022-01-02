@props(['to'])

<a
    href="{{ $to }}"
    class="
        cursor-pointer
        px-2
        mx-2
        text-cyan-800
        hover:text-cyan-600 hover:underline
    "
>
    {{ $slot }}
</a>
