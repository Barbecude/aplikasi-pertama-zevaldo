<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>





    @foreach ($posts as $post)
        <article class="bg-white rounded-lg shadow-md p-6 mb-6">
            <a href="/posts/{{ $post['slug'] }}">
                <h2 class="text-2xl font-bold hover:underline">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-600 mb-4">
                <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="mb-4">
                {{ Str::limit($post['body'], 100) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}">
                <button
                    class="flex items-center bg-purple-200 text-purple-900 font-medium px-4 py-2 rounded-lg hover:bg-purple-100 transition">Read
                    more <span class="material-symbols-outlined ml-1">arrow_forward</span></button>
            </a>
        </article>
    @endforeach







</x-layout>
