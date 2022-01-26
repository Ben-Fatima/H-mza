<x-layout>
    <x-title>Add new product</x-title>
    <form
        class="w-1/2 mx-auto border rounded mt-8 p-10"
        method="POST"
        action="/profile/product"
        enctype="multipart/form-data"
    >
        @csrf
        <label class="block py-4 text-gray-800">Product name</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="name"
            required
        />
        <label class="block py-4 text-gray-800">Product price (Dirham)</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="price"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800"
            >Product life time (Years)</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="life_time"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800">Product weight (Kg)</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="weight"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800">Product height (cm)</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="height"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800">Product width (cm)</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="width"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800">Product depth (cm)</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="depth"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800">Product picture</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="picture"
            type="file"
            required
        />
        <label class="block py-4 text-gray-800">Product category</label>
        <select
            class="block w-full px-4 py-2 border rounded"
            name="category"
            type="text"
            required
        >
            <option>Choose a category</option>
            @foreach($categories as $category)
            <option>{{$category->name}}</option>
            @endforeach
        </select>
        <button
            class="
                w-1/3
                py-2
                px-4
                rounded-full
                bg-orange-500
                border border-orange-500
                my-6
                font-medium
                shadow
                text-white
                hover:text-orange-500 hover:bg-transparent
            "
            type="submit"
        >
            submit
        </button>
    </form></x-layout
>
