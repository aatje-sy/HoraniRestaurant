<div>
    <h1>Product Bewerken</h1>
    <form id="editForm" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <input value="" type="text" name="product_name" id="edit_product_name"
                   class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <textarea name="product_description" id="edit_product_description" placeholder="Productbeschrijving"
                      class="border p-2 w-full" required></textarea>
        </div>
        <div class="mb-4">
            <input type="number" name="product_price" id="edit_product_price" placeholder="Prijs (€)"
                   class="border p-2 w-full" step="0.01" required>
        </div>
        <div class="mb-4">
            <select name="category_id" id="edit_category_id" class="border p-2 w-full" required>
                <option value="">Selecteer Categorie</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <button id="closeEdit" class="mt-2">Back</button>
        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded">Save</button>
    </form>
</div>
