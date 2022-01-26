<x-layout>
    <x-title>Edit your profile</x-title>
    <form
        class="w-1/2 mx-auto border rounded mt-8 p-10"
        method="POST"
        action="/profile/edit"
        enctype="multipart/form-data"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Add about section</label
        >
        <textarea
            class="block w-full px-4 py-2 border rounded"
            name="about"
            required
        ></textarea>
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Add profile picture</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="profile_picture"
            type="file"
            required
        />
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
