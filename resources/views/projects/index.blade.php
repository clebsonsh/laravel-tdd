<!DOCTYPE html>
<html lang="en">

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="mr-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Birdboard') }}
            </h2>
            <a href="/projects/create">New Project</a>
        </div>
    </x-slot>
    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{ $project->path() }}">{{ $project->title }}</a>
            </li>
        @empty
            <li>No projects yet.</li>
        @endforelse
    </ul>
</x-app-layout>
