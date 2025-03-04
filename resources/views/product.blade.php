<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project CRUD</title>
    @vite(entrypoints: 'resources/css/app.css')

</head>

<body class="flex justify-center mt-10 bg-gray-200">
    <div class="w-full max-w-5xl bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

    <h1 class="text-5xl mb-10"> Product List </h1>
    <table class="border-separate border-spacing-3 border border-gray-400 bg-white mb-4">
        <tr>
            <th class="text-base border border-gray-400 p-2">Title</th>
            <th class="text-base border border-gray-400 p-2">Description</th>
            <th class="text-base border border-gray-400 p-2">Image</th>
            <th class="text-base border border-gray-400 p-2">Delete</th>
            <th class="text-base border border-gray-400 p-2">Update</th>

        </tr>
        @foreach ( $data as $product )
        <tr>
            <td class="text-base border border-gray-400 p-2">{{$product->title }}</td>
            <td class="text-sm border border-gray-400 p-2">{{$product->description }}</td>
            <td class="border border-gray-400 p-2"><img src="product/{{$product->image }}" alt="" height="200" width="200">
            </td>
            <td class=" border border-gray-400 p-2">
                <a onclick="return confirm('are you sure to delete this?')"
                href="{{url('/delete_product', $product->id)}}"
                class="py-2 px-3 rounded-md bg-red-700 text-white"
                >Delete</a>
            </td>
            <td class=" border border-gray-400 p-2">
                <a href="{{url('/update_product',$product->id)}}"
                class="py-2 px-3 rounded-md bg-blue-700 text-white"
                >Update</a>
            </td>
        </tr>
        @endforeach

    </table>

    <a href="{{url('/')}}"
    class="py-2 px-3 bg-blue-700 text-white rounded-md "
    >Add Product</a>
    </div>
</body>
</html>
