<!-- Include Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<form method="POST" action="{{ route('add.post') }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
        <input type="text" name="title" placeholder="Enter Title..." class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
        <input type="text" name="description" placeholder="Enter description..." class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline">
    </div>
    <div class="flex items-center justify-between">
        <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </div>
</form>

@foreach ($posts as $post)
    <div class="max-w-lg mx-auto mt-8 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>
        <p class="text-gray-700">{{ $post->description }}</p>
    </div>
@endforeach
