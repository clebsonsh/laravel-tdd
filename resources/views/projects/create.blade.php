<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Project') }}
        </h2>
    </x-slot>
    <form method="POST" action="/projects">
        @csrf
        <div>
            <label for="title">Title</label>

            <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Project title">
        </div>

        <div>
            <label for="description">Description</label>

            <textarea id="description" name="description" placeholder="Project description">{{ old('description') }}</textarea>
        </div>

        <div>
            <button class="button" type="submit">Create Project</button>
            <a class="button" href="/projects">Cancel</a>
        </div>
    </form>
</x-app-layout>
