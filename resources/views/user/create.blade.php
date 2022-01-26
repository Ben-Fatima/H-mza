<x-layout>
    <div class="w-10/12 mx-auto">
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
            Register now
        </h1>
        <h3 class="font-light text-center">
            Did you know? When you create a H'mza account, you get access to
            cool stuff like:
        </h3>
        <div class="w-1/2 h-px bg-black mx-auto my-2"></div>
        <ul class="text-sm font-light w-1/5 mx-auto">
            <li>✨ Quick access to orders & tracking</li>
            <li>✨ Great opportunity with a decent price</li>
        </ul>
        <div class="w-1/2 h-px bg-black mx-auto my-2"></div>
    </div>
    <form
        class="w-1/2 mx-auto border rounded mt-8 p-10"
        method="POST"
        action="/register"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Username</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="username"
            required
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Email</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="email"
            type="email"
            required
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Password</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="password"
            type="password"
            required
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Phone number</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="phone_number"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Address</label
        >
        <input
            class="block w-full px-4 py-2 border rounded"
            name="address"
            type="text"
            required
        />
        <label class="block py-4 text-gray-800 text-lg font-medium">Role</label>
        <select
            class="block w-full px-4 py-2 border rounded"
            name="role"
            type="text"
            required
        >
            <option>Choose a role</option>
            <option>Seller</option>
            <option>Buyer</option>
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
    </form>
</x-layout>
