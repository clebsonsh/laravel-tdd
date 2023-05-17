<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; align-items: center">
            <h2 style="margin-right: auto" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $project->title }}
            </h2>
            <a href="/projects/create">New Project</a>
        </div>
    </x-slot>
    <div>{{ $project->description }}</div>
    <a href="/projects">Go Back</a>
</x-app-layout>
