<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project CRUD</title>
    @vite(entrypoints: 'resources/css/app.css')

</head>
<body>



<body class="flex justify-center mt-10 bg-gray-200">
    <div class="w-full max-w-xl">

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
        action="{{url('/edit_product',$product->id)}}" method="Post" enctype="multipart/form-data">
        @csrf
        <a href="{{url('/show_product')}}"
        class="py-2 px-3 bg-blue-700 text-white rounded-md"
        >Show Product</a>
        <a href="{{url('/')}}"
        class="py-2 px-3 bg-blue-700 text-white rounded-md"
        >Add Product</a>
        <h1 class="text-5xl content-center mt-5 mb-6">Update Product</h1>


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title"> Title</label>
            <input type="text" name="title" value="{{$product->title}}"
                class="shadow appearance-none border rounded
                w-full py-2 px-3 text-gray-700 leading-tight
                focus:outline-none focus:shadow-outline"  >
        </div>

        <div>
            <label for="description">Product Description</label>
            <textarea name="description"
                class="shadow appearance-none border rounded w-full
                py-2 px-3 text-gray-700 leading-tight
                focus:outline-none focus:shadow-outline"
            >{{$product->description}}</textarea>
        </div>
        <div class="mt-4">
            <label for="image" >Update Image</label>
            <br>
            <img src="/product/{{$product->image}}" alt="" width="200" height="200">

        </div>
        <div class="mt-4">
            <label for="image">Update image</label>
            <br>
            <input type="file" name="image"
            class="file:bg-blue-700 file:text-white
            file:py-2 file:px-3 file:rounded-md
            hover:file:bg-gray-200"
            >

        </div>
        <div class="mt-4">
            <input type="submit" value="Update Product"
            class="inline-flex items-center rounded-md
            bg-indigo-600 px-3 py-2 text-sm font-semibold
            text-white shadow-xs hover:bg-indigo-500
            focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-indigo-600">
        </div>
    </form>
    </div>
</body>

</html>
