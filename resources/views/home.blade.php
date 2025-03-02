<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project CRUD</title>

    @vite('resources/css/app.css')

</head>
<body class="flex justify-center  bg-gray-200">
    <div class="w-full max-w-md">

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
        action="{{url('/add_product')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <h1 class="text-5xl content-center">Add Product</h1>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title"> Title</label>
            <input type="text" name="title"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  >
        </div>
        <div>
            <label for="description">Product Description</label>
            <textarea name="description"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            ></textarea>
        </div>
        <div>
            <label for="image">Product Image</label>
            <input type="file" name="image">
        </div>
        <div>
            <input type="submit" value="Add Product"
            class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        </div>
    </form>
    </div>
</body>
</html>
