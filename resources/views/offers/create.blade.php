<x-layout
    ><x-title>Post now</x-title>
    <form
        method="POST"
        action="/offers/create"
        enctype="multipart/form-data"
        class="w-1/2 mx-auto mt-8 p-4 border rounded"
    >
        @csrf
        <label class="block py-4 text-gray-800">Offer title</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            name="title"
            required
        />
        <label class="block py-4 text-gray-800">Publication date</label>
        <input
            class="block w-full px-4 py-2 border rounded"
            type="date"
            name="date"
            required
        />
        <label class="block py-4 text-gray-800">Offer description</label>
        <textarea
            class="block w-full px-4 py-2 border rounded"
            name="description"
            required
        ></textarea>

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
    </form>
</x-layout>
