<x-app-layout>
    <div class="container">
        @forelse ($posts as $post)
            <div>
                <h2>{{$post->title}}</h2>
            </div>
        @empty
            <h2>No posts!!</h2>
        @endforelse
    </div>
</x-app-layout>