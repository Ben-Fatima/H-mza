<x-layout>
    <div class="flex">
        <div class="border rounded px-10 py-6 leading-10">
            <x-smallTitle>
                <i class="fas fa-filter text-sm"></i>
                Filters
            </x-smallTitle>
            <div>
                <h3 class="text-gray-800">
                    <i class="fas fa-box-open px-1 text-xs"></i>Product name
                </h3>
            </div>
            <div>
                <h3 class="text-gray-800">
                    <i class="fas fa-shapes px-1 text-xs"></i>Category
                </h3>
            </div>
            <div>
                <h3 class="text-gray-800">
                    <i class="fas fa-money-check-alt px-1 text-xs"></i>Price
                    range
                </h3>
            </div>
        </div>
        <div class="flex-grow">
            <x-title>offers list</x-title>
            @foreach ($offers as $offer)
            {{ $offer->accounts}}
            @endforeach
        </div>
    </div>
</x-layout>
