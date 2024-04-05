@extends('layouts.app')

@section('title', 'Contact Details')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-4">Contact Details</h2>

            <div class="mb-4">
                <p class="text-sm font-medium text-gray-700">Name:</p>
                <p class="text-lg font-semibold">{{ $contact->name }}</p>
            </div>

            <div class="mb-4">
                <p class="text-sm font-medium text-gray-700">Email:</p>
                <p class="text-lg font-semibold">{{ $contact->email }}</p>
            </div>

            <div class="mb-4">
                <p class="text-sm font-medium text-gray-700">Phone:</p>
                <p class="text-lg font-semibold">{{ $contact->phone }}</p>
            </div>

            <!-- Add more details as needed -->

            <div class="mt-6">
                <a href="{{ route('contacts.edit', $contact) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Delete</button>
                </form>
                <a href="{{ route('contacts.index') }}" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-gray-700 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Back</a>
            </div>
        </div>
    </div>
@endsection
