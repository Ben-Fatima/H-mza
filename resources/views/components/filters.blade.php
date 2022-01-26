<form class="flex justify-around text-sm">
    @csrf
    <div>
        <label class="block py-1 text-gray-800 font-light">Product name:</label>
        <input
            name="days"
            class="block px-4 py-2 border rounded"
            placeholder="name"
        />
    </div>
    <div>
        <label class="block py-1 text-gray-800 font-light">Price range:</label>
        <select class="block w-full px-4 py-2 border rounded">
            <option>Choose price range</option>
            <option>100 &#60;</option>
            <option>100 &#62; and 200 &#60;</option>
            <option>200 &#62; and 500 &#60;</option>
            <option>500 &#62;</option>
        </select>
    </div>
    <div>
        <label class="block py-1 text-gray-800 font-light">Category:</label>
        <select class="block w-full px-4 py-2 border rounded">
            <option>Choose category</option>
        </select>
    </div>
    <div>
        <label class="block py-1 text-gray-800 font-light">Address:</label>
        <select class="block w-full px-4 py-2 border rounded">
            <option>Choose address</option>
        </select>
    </div>
</form>
