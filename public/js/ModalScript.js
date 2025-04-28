const createModal = document.getElementById('CreateProductModalcontainer');
const editModal = document.getElementById('EditProductModalcontainer');
const deleteModal = document.getElementById('DeleteProductModalcontainer');
const editForm = document.getElementById('editForm');

const editProductName = document.getElementById('edit_product_name');
const editProductDescription = document.getElementById('edit_product_description');
const editProductPrice = document.getElementById('edit_product_price');
const editCategoryId = document.getElementById('edit_category_id');
const closeEditButton = document.getElementById('closeEdit');


document.getElementById('closeCreate').addEventListener('click', () => {
    createModal.classList.remove('show');
});
document.getElementById('closeEdit').addEventListener('click', () => {
    editModal.classList.remove('show');
});
document.getElementById('closeDelete').addEventListener('click', () => {
    deleteModal.classList.remove('show');
});

function openCreateModal() {
    createModal.classList.add('show');
}

function openEditModal(id, name, description, price, categoryId) {
    editModal.classList.add('show');
    editForm.action = `/admin/dashboard/${id}`;

    editProductName.value = name;
    editProductDescription.value = description;
    editProductPrice.value = price;
    editCategoryId.value = categoryId;
}

function openDeleteModal(productId) {
    deleteModal.classList.add('show');
    const deleteForm = document.getElementById('deleteForm');
    deleteForm.action = `/admin/dashboard/${productId}`;
}
