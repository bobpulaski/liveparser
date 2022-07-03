<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Laravel 9 Livewire CRUD Demo</h2>
</x-slot>

<div>

    @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
             role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <table class="table-fixed w-full">
        <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2 w-20">id</th>
            <th class="px-4 py-2">title</th>
            <th class="px-4 py-2">body</th>
            <th class="px-4 py-2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="border px-4 py-2">{{ $post->id }}</td>
                <td class="border px-4 py-2">{{ $post->title }}</td>
                <td class="border px-4 py-2">{{ $post->body}}</td>
                <td class="border px-4 py-2">
                    <button wire:click="edit({{ $post->id }})"
                            class="flex px-4 py-2 bg-gray-500 text-gray-900 cursor-pointer">Edit
                    </button>

                    <button onclick="Livewire.emit('openModal', 'hello-world')">Open Modal</button>

                    {{--<button wire:click="delete({{ $post->id }})"
                            class="flex px-4 py-2 post-red-100 text-gray-900 cursor-pointer">Delete
                    </button>--}}



                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>