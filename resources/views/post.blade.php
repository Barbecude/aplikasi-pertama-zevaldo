<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>








    <article class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-2xl font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-600 mb-4">
            {{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>


        <p class="mb-4">
            {{ $post['body'] }}
        </p>


        <a href="/posts">
            <button
                class="flex items-center bg-purple-200 text-purple-900 font-medium px-4 py-2 rounded-lg hover:bg-purple-100 transition ">
                <span class="material-symbols-outlined pe-2">arrow_back</span>
                Back to blog
            </button>
        </a>
    </article>









</x-layout>
