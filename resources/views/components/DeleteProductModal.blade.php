<div>
    <h1>Confirm Delete</h1>
    <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')
        <button id="closeDelete" class="mt-2">Back</button>
        <button type="submit" class="bg-red-600 text-black px-4 py-2 rounded mt-4">Confirm</button>
    </form>
</div>
