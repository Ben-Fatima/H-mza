<x-layout>
    <div class="home">
        <h1
            class="
                px-4
                py-8
                pt-32
                mx-auto
                text-center text-5xl text-orange-500
                uppercase
                bold
            "
        >
            Welcome to where student needs meet!
        </h1>
        <h1
            class="
                px-4
                py-8
                mx-auto
                text-center text-5xl text-white
                uppercase
                bold
            "
        >
            Register now
        </h1>
        <a href="/register" class="mx-auto block w-1/3"
            ><button
                class="
                    w-full
                    py-2
                    px-4
                    rounded-full
                    border border-orange-400
                    my-6
                    black
                    bg-orange-400
                "
            >
                Register
            </button></a
        >
    </div>
    <div class="w-10/12 mx-auto">
        <x-title>Latest offers</x-title>
        <div class="pb-4 grid grid-cols-3 mx-auto mt-8">
            @foreach ($offers as $offer)
            <div
                class="
                    border border-gray-200
                    rounded-xl
                    w-11/12
                    p-4
                    mx-auto
                    mb-4
                "
            >
                @if($offer->product == null)
                <a href="/offers/edit/{{$offer->id}}">
                    <button
                        class="
                            w-full
                            py-2
                            px-4
                            rounded-full
                            border border-orange-500
                            my-6
                            font-light
                            hover:text-orange-600
                            text-sm text-orange-500
                            bg-transparent
                        "
                        type="submit"
                    >
                        Associate your product
                    </button>
                </a>
                @endif
                <x-title>{{$offer->title}}</x-title>
                @if($offer->product != null)
                <img
                    src="/storage/{{$offer->product->picture}}"
                    class="w-1/2 rounded mx-auto"
                />
                @endif
                <p class="text-justify py-2 px-2">
                    {{$offer->description}}
                </p>
                <p class="text-justify py-2 px-2">
                    Puplished at {{$offer->date->format('Y-m-d')}}
                </p>
                @if($offer->product != null)
                <p class="text-justify py-2 px-2 italic text-gray-400">
                    Puplished by {{$offer->product->user->username}}
                </p>
                <a href="/offers/{{$offer->id}}">
                    <button
                        class="
                            w-full
                            py-2
                            px-4
                            rounded-full
                            border border-cyan-400
                            my-6
                            font-light
                            hover:text-cyan-500
                            text-sm text-cyan-400
                            bg-transparent
                        "
                        type="submit"
                    >
                        View product author & details
                    </button>
                </a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div>
        <footer class="h-80 backg-black">
            <h1
                class="
                    px-4
                    py-12
                    mx-auto
                    text-center text-3xl text-orange-400
                    uppercase
                    font
                "
            >
                Follow us
                <div
                    class="
                        flex
                        justify-center
                        space-x-12
                        py-16
                        text-white
                        mx-auto
                    "
                >
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </h1>
        </footer>
    </div>
</x-layout>
