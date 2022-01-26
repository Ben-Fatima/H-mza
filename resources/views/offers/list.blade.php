<x-layout>
    <div class="">
        <div class="w-10/12 px-6 mx-auto">
            <div class="w-full m-auto">
                <h1
                    class="
                        bold
                        text-5xl
                        orange
                        py-8
                        leading-loose
                        uppercase
                        text-center
                    "
                >
                    Have something you want to sell to others? <br />
                    Post now!
                </h1>
                <a href="/offers/create">
                    <button
                        class="
                            ml-80
                            rounded-full
                            backg-black
                            text-orange-400
                            hover:text-gray-100
                            w-1/2
                            py-2
                            px-4
                        "
                    >
                        New offer
                    </button>
                </a>
            </div>
            <x-title>What's New</x-title>
            <div class="w-full h-px bg-black"></div>
            <form class="flex justify-around text-sm">
                @csrf
                <div>
                    <label class="block py-1 text-gray-800 font-light"
                        >Product name:</label
                    >
                    <input
                        name="days"
                        class="block px-4 py-2 border rounded"
                        placeholder="name"
                    />
                </div>
                <div>
                    <label class="block py-1 text-gray-800 font-light"
                        >Price range:</label
                    >
                    <select class="block w-full px-4 py-2 border rounded">
                        <option>Choose price range</option>
                        <option>100 &#60;</option>
                        <option>100 &#62; and 200 &#60;</option>
                        <option>200 &#62; and 500 &#60;</option>
                        <option>500 &#62;</option>
                    </select>
                </div>
                <div>
                    <label class="block py-1 text-gray-800 font-light"
                        >Category:</label
                    >
                    <select class="block w-full px-4 py-2 border rounded">
                        <option>Choose category</option>
                        @foreach($categories as $category)
                        <option>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block py-1 text-gray-800 font-light"
                        >Address:</label
                    >
                    <select class="block w-full px-4 py-2 border rounded">
                        <option>Choose address</option>
                    </select>
                </div>
            </form>
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
    </div>
</x-layout>
