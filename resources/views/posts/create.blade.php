<x-app-layout>
    <div class="container m-2 flex">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" class="border p-2 m-2" required>
            <textarea name="content" placeholder="Content" class="border p-2 m-2" required></textarea>
            <button type="submit" class="bg-blue-500 text-white p-2 m-2">Create Post</button>
        </form>
    </div>
</x-app-layout>