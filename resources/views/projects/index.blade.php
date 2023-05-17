<!DOCTYPE html>
<html lang="en">

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-500 leading-tight">
                {{ __('Birdboard') }}
            </h2>
            <a class="button" href="/projects/create">New
                Project</a>
        </div>
    </x-slot>

    <div class="flex flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="w-1/3 px-3 pb-6">
                <a href="{{ $project->path() }}">
                    <div class="bg-white rounded-lg shadow-default p-4" style="height: 200px;">
                        <div class="border-l-4 -ml-4 border-blue-300 ">
                            <h3 class="py-4 font-normal text-xl ml-3 mb-4">
                                {{ str($project->title)->limit(20) }}</h3>
                        </div>
                        <div class="text-gray-500">{{ str($project->description)->limit(140) }}</div>
                    </div>
                </a>
            </div>
        @empty
            <span>No projects yet.</span>
        @endforelse
    </div>
</x-app-layout>
