<x-layout>
    <div class="flex">
        <div
            class="border px-10 py-6 leading-10 bg-cyan-900 text-gray-100 w-1/5"
        >
            <h3>
                <i class="fas fa-filter text-sm"></i>
                Filters
            </h3>
            <div>
                <h3 class="">
                    <i class="fas fa-box-open px-1 text-xs"></i>Product name
                </h3>
            </div>
            <div>
                <h3 class="">
                    <i class="fas fa-shapes px-1 text-xs"></i>Category
                </h3>
            </div>
            <div>
                <h3 class="">
                    <i class="fas fa-money-check-alt px-1 text-xs"></i>Price
                    range
                </h3>
            </div>
        </div>
        <div class="w-4/5 px-6">
            <x-title>offers list</x-title>
            <form>
                <h3 class="px-2 mx-4 py-6 text-lg text-left text-cyan-900">
                    Add new offer:
                </h3>
                <textarea
                    class="
                        px-4
                        py-6
                        pb-4
                        mx-4
                        w-1/2
                        italic
                        text-gray-500
                        border
                        rounded
                    "
                    placeholder="post description"
                ></textarea>
                <label class="block my-4 mx-4 italic text-cyan-900">
                    <i class="fas fa-image px-1"></i>
                    Add thumbnail
                </label>
                <input
                    type="file"
                    class="mx-4 my-4 block underline cursor-pointer"
                />
                <button
                    type="submit"
                    class="
                        block
                        mx-4
                        mt-4
                        py-2
                        px-8
                        rounded
                        bg-red-800
                        hover:bg-red-900
                        text-gray-100
                    "
                >
                    Post
                </button>
            </form>
            <div class="pb-4 grid grid-cols-3 mx-auto mt-4">
                @foreach ($offers as $offer)
                <div
                    class="
                        border border-gray-100
                        rounded-xl
                        shadow-sm
                        w-11/12
                        p-4
                        mx-auto
                        mb-4
                    "
                >
                    <h2
                        class="
                            text-center text-lg
                            px-2
                            py-6
                            uppercase
                            font-semibold
                            text-red-700
                        "
                    >
                        {{$offer->title}}
                    </h2>
                    <p class="text-justify px-4 text-cyan-900">
                        <i class="fas fa-feather-alt px-1 text-xs"></i>Offer
                        description:
                    </p>
                    <p class="text-justify py-2 px-4 text-gray-800 italic">
                        {{$offer->description}}
                    </p>
                    <p class="text-justify px-4 text-cyan-900">
                        <i class="fas fa-clock px-1 text-xs"></i>Posted at:
                    </p>
                    <p class="text-justify py-2 px-4 text-gray-800 italic">
                        {{$offer->date}}
                    </p>
                    <p class="text-justify px-4 text-gray-700">
                        <i class="fas fa-user px-1 text-xs"></i>Posted by:
                    </p>
                    <p class="text-justify py-2 px-4 text-gray-800 italic">
                        {{$offer->account->user->username}}
                    </p>
                    <p class="text-justify px-4 text-gray-700">
                        <i class="fas fa-map-marker-alt px-1 text-sm"></i> Offer
                        address:
                    </p>
                    <p class="text-justify py-2 px-4 text-gray-800 italic">
                        {{$offer->adress}}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
