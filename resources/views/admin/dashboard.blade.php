<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/ModalScript.js') }}" defer></script>
        <title>Admin Dashboard</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Admin Panel') }}
                </h2>

                <button onclick="openCreateModal()" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md transition duration-300">
                    + Add Category
                </button>
                <button onclick="openCreateModal()" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md transition duration-300">
                    + Add Product
                </button>
            </div>
        </x-slot>

        <div id="CreateProductModalcontainer" class="modal-container">
            <div class="modal">
                @include('components.CreateProductModal')
            </div>
        </div>

        <div id="EditProductModalcontainer" class="modal-container">
            <div class="modal">
                @include('components.EditProductModal')
            </div>
        </div>

        <div id="DeleteProductModalcontainer" class="modal-container">
            <div class="modal">
                @include('components.DeleteProductModal')
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if ($products->isEmpty())
                            <p class="text-center mt-6 text-gray-500">Nog geen producten toegevoegd.</p>
                        @else
                            @include('components.adminDashboard-menuTable')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</html>
