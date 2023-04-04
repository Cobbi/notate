<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('notes.create') }}" class="btn btn-lg mb-2">+New Note</a>
            @forelse($notes as $note)
                <div class="my-6 p-6 border-b bg-white border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        {{ $note->title }}
                    </h2>
                    <p class="mt-5">
                        {{ Str::limit($note->content, 200) }}
                    </p>
                    <span class="block mt-4 text-sm opacity-70">Updated: {{ $note->updated_at->diffForHumans() }}</span>
                </div>
                @empty
                <p>
                    You have no notes yet
                </p>
            @endforelse
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>