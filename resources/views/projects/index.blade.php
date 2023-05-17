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

    <div class="flex space-x-4">
        @forelse ($projects as $project)
            <a href="{{ $project->path() }}" class="w-1/3">
                <div class="bg-white rounded shadow-default p-5" style="height: 200px;">
                    <h3 class="font-normal text-xl mb-4">{{ $project->title }}</h3>
                    <div class="text-gray-500">{{ str($project->description)->limit(140) }}</div>
                </div>
            </a>
        @empty
            <span>No projects yet.</span>
        @endforelse
    </div>
</x-app-layout>
