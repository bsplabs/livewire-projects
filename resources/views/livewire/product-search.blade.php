<div class="container px-8 py-16 mx-auto">
    <div class="mb-4">
        <input type="text" wire:model.lazy="search" placeholder="Search for Products">
    </div>
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="px-3 py-2 text-left bg-gray-100 border-b-2">ID</th>
                <th class="px-3 py-2 text-left bg-gray-100 border-b-2">Image</th>
                <th class="px-3 py-2 text-left bg-gray-100 border-b-2">Title</th>
                <th class="px-3 py-2 text-left bg-gray-100 border-b-2">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="px-3 py-2 border-b">{{$product->id}}</td>
                    <td class="px-3 py-2 border-b"><img class="w-16" src="{{$product->image}}" /></td>
                    <td class="px-3 py-2 border-b">{{$product->title}}</td>
                    <td class="px-3 py-2 border-b">{{$product->price}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>
