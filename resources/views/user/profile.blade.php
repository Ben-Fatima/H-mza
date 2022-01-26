<x-layout>
    <div class="w-11/12 mx-auto">
        <x-title
            >Welcome
            <p class="inline orange">{{auth()->user()->username}}</p>
            , we wish you good luck!</x-title
        >
        <div class="flex mt-8">
            <div class="w-1/4">
                <img
                    src="/storage/{{auth()->user()->profile_picture}}"
                    class="rounded-full w-9/12 mx-auto"
                />
                <p class="text-2xl font-bold text-center py-2">
                    {{auth()->user()->username}}
                </p>
                <p class="py-2 px-8 text-justify">{{auth()->user()->about}}</p>
                <a href="/profile/edit">
                    <button
                        class="
                            mx-8
                            py-2
                            px-4
                            rounded-full
                            hover:bg-orange-500 hover:text-white
                            border border-orange-500
                            my-6
                            text-orange-500 text-sm
                            bg-transparent
                        "
                    >
                        Edit your profile
                    </button>
                </a>
                <p class="px-8 py-2">
                    <i class="fas fa-map-marker-alt px-1"></i
                    >{{auth()->user()->address}}
                </p>
                <p class="px-8 py-2">
                    <i class="fas fa-phone px-1"></i>
                    {{auth()->user()->phone_number}}
                </p>
                <p class="px-8 py-2">
                    <i class="fas fa-envelope-open-text px-1"></i>
                    {{auth()->user()->email}}
                </p>
            </div>
            <div class="flex-grow">
                <a href="/profile/product">
                    <button
                        class="
                            mx-8
                            py-2
                            px-4
                            rounded-full
                            bg-orange-500
                            text-white
                            border border-orange-500
                            my-6
                            hover:text-orange-500
                            text-sm
                            hover:bg-transparent
                        "
                    >
                        Add new product
                    </button>
                </a>
                <h1 class="mx-10 text-xl blue font">Your product list</h1>
                <div class="pb-4 grid grid-cols-1 mx-auto mt-4">
                    @foreach(auth()->user()->products as $product)
                    <div
                    class="
                        border border-gray-100
                        rounded-xl
                        w-full
                        p-4
                        mx-auto
                        mb-4
                    ">
                    <form method="POST" action="/profile/{{$product->id}}">
                       @csrf @method('DELETE') 
                        <button
                        type="submit"
                        class="
                            mx-8
                            py-2
                            px-4
                            rounded-full
                            hover:bg-red-400
                            hover:text-white
                            border border-red-400
                            my-6
                            text-red-400
                            text-xs
                            bg-transparent
                        "
                    >
                    <i class="far fa-trash-alt px-1"></i>Delete product
                    </button>
                    </form>
                    <div class="flex">
                        <img src="/storage/{{$product->picture}}" class="w-1/4 rounded"/>
                        <div class="mx-10 ">
                            <h1 class="pb-2 text-2xl blue uppercase font-bold">{{$product->name}}</h1>
                            <p class="py-2">This product has been used for {{$product->life_time}} years</p>
                            <p class="py-2">Price: {{$product->price}} MDH</p>
                            <p class="py-2">Weight: {{$product->price}} Kg</p>
                            <p class="py-2">Dimensions: {{$product->height}}cm x{{$product->width}}cm x{{$product->depth}}cm</p>
                            <button
                                class="
                                    py-2
                                    px-4
                                    rounded-full
                                    hover:bg-cyan-400
                                    hover:text-white
                                    border border-cyan-400
                                    my-6
                                    text-cyan-400
                                    text-xs
                                    bg-transparent
                                "
                            >
                {{$product->category}}
                </button>
                        </div> 
                </div>
                    
                </div>
                 @endforeach
            </div>
        </div>
    </div>
</x-layout>
