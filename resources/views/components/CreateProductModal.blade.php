<form method="POST" action="{{ route('admin.dashboard.store') }}">
    @csrf
    <div class="mb-4">
        <input type="text" name="product_name" placeholder="Productnaam" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <textarea name="product_description" placeholder="Productbeschrijving" class="border p-2 w-full" required></textarea>
    </div>
    <div class="mb-4">
        <input type="number" name="product_price" placeholder="Prijs (€)" class="border p-2 w-full" step="0.01" required>
    </div>
    <div class="mb-4">
        <select name="category_id" class="border p-2 w-full" required>
            <option value="">Selecteer Categorie</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>
    <button id="closeCreate">Back</button>
    <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded">Opslaan</button>
</form>
