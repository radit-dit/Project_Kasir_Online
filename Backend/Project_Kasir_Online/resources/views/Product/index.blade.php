@extends ('dashboard')


@section('content')

<h1 class="text-xl font-bold ps-80 pt-20 text-blue-900">Produk</h1>

<form action="/product" method="POST"
      class="bg-white p-6 rounded-lg shadow-md max-w-md ms-80 mt-10 space-y-4">
    @csrf

    <!-- Product Name -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Product Name
        </label>
        <input type="text" name="name"
               placeholder="Input your product name"
               class="w-full rounded-md border-2 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
    </div>

    <!-- Description -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Description
        </label>
        <input type="text" name="description"
               placeholder="Input your description"
               class="w-full rounded-md border-2 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
    </div>

    <!-- Price -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Price
        </label>
        <input type="number" name="price"
               placeholder="Input your price"
               class="w-full rounded-md border-2 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
    </div>

    <!-- Status -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Status
        </label>
        <select name="status"
                class="w-full rounded-md border-2 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
            <option value="">Select status</option>
            <option value="available">available</option>
            <option value="unavailable">unavailable</option>
        </select>
    </div>

    <!-- Category -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Category
        </label>
        <input type="text" name="category"
               placeholder="Input your category"
               class="w-full rounded-md border-2 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
    </div>

    <!-- Submit Button -->
    <div class="pt-2">
        <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-md font-semibold hover:bg-green-700 transition">
            Save Product
        </button>
    </div>
</form>

<div class="bg-white ps-80 px-10 mt-10 pb-40 shadow lg:col-span-2">
    <table class="min-w-full border border-black">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-3 text-left text-sm font-semibold">No</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Product Name</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Description</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Price</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Status</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Category</th>
                <th class="px-4 py-3 text-center text-sm font-semibold">Action</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @foreach ($products as $product)
            <tr>
                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                <td class="px-4 py-3">{{ $product->name }}</td>
                <td class="px-4 py-3">{{ $product->description }}</td>
                <td class="px-4 py-3">{{ $product->price }}</td>
                <td class="px-4 py-3">{{ $product->status }}</td>
                <td class="px-4 py-3">{{ $product->category }}</td>
                <td class="px-4 py-3">
                    <div class="flex justify-center gap-2 mt-4">
                        <a href="/product/{{ $product->id }}/edit"
                           class="px-3 py-1 mb-4 bg-blue-900 text-white rounded hover:bg-blue-950">
                            Edit
                        </a>
                        <form action="/product/{{ $product->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 </div>
