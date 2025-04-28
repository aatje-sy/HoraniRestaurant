<table class="min-w-full bg-white dark:bg-gray-800">
    <thead>
    <tr>
        <th class="px-4 py-2 border-b">ID</th>
        <th class="px-4 py-2 border-b">Naam</th>
        <th class="px-4 py-2 border-b">Beschrijving</th>
        <th class="px-4 py-2 border-b">Prijs</th>
        <th class="px-4 py-2 border-b">Categorie ID</th>
        <th class="px-4 py-2 border-b">Acties</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
            <td class="px-4 py-2 border-b">{{ $product->id }}</td>
            <td class="px-4 py-2 border-b">{{ $product->product_name }}</td>
            <td class="px-4 py-2 border-b">{{ $product->product_description }}</td>
            <td class="px-4 py-2 border-b">€ {{ number_format($product->product_price, 2, ',', '.') }}</td>
            <td class="px-4 py-2 border-b">{{ $product->category_id }}</td>
            <td class="px-4 py-2 border-b">
                <button onclick="openEditModal({{ $product->id }}, '{{ $product->product_name }}', '{{ $product->product_description }}', '{{ $product->product_price }}', {{ $product->category_id }})" class="text-blue-600 hover:underline">Edit</button>
                <button onclick="openDeleteModal({{ $product->id }})" class="text-red-600 hover:underline">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


