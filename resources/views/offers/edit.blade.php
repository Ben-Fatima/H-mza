<x-layout>
    <x-title>Choose one from your products</x-title>
    <form
        method="POST"
        action="/offers/edit/{{$offer->id}}"
        class="w-10/12 mx-auto"
    >
        @csrf
        <div class="pb-4 grid grid-cols-3 gap-4 mx-auto mt-4">
            @foreach(auth()->user()->products as $product)
            <div
                class="
                    border border-gray-100
                    rounded-xl
                    w-full
                    p-4
                    mx-auto
                    mb-4
                "
            >
                <input
                    type="checkbox"
                    name="product"
                    value="{{$product->id}}"
                    class="
                        form-check-input
                        appearance-none
                        h-4
                        w-4
                        border border-gray-300
                        rounded-sm
                        bg-white
                        checked:bg-red-500 checked:border-red-600
                        focus:outline-none
                        transition
                        duration-100
                        mt-1
                        align-top
                        bg-no-repeat bg-center bg-contain
                        float-left
                        mr-2
                        cursor-pointer
                    "
                />
                <h1 class="pb-2 text-2xl text-center blue uppercase font-bold">
                    {{$product->name}}
                </h1>
                <img
                    src="/storage/{{$product->picture}}"
                    class="w-1/2 rounded mx-auto"
                />
                <p class="py-2">
                    This product has been used for {{$product->life_time}} years
                </p>
                <p class="py-2">Price: {{$product->price}} MDH</p>
                <p class="py-2">Weight: {{$product->price}} Kg</p>
                <p class="py-2">
                    Dimensions: {{$product->height}}cm x{{$product->width}}cm
                    x{{$product->depth}}cm
                </p>
                <button
                    class="
                        py-2
                        px-4
                        rounded-full
                        hover:bg-cyan-400 hover:text-white
                        border border-cyan-400
                        my-6
                        text-cyan-400 text-xs
                        bg-transparent
                    "
                >
                    {{$product->category}}
                </button>
            </div>
            @endforeach
        </div>
        <button
            type="submit"
            class="
                py-2
                px-4
                w-full
                rounded-full
                bg-orange-500
                text-white
                border border-orange-500
                my-6
                hover:text-orange-500
                text-xs
                hover:bg-transparent
            "
        >
            Confirm
        </button>
    </form>
</x-layout>
