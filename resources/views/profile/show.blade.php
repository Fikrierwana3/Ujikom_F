@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold text-gray-800">My Profile</h2>
            <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline">Edit</a>
        </div>

        <div class="flex flex-col items-center">
            <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://via.placeholder.com/100' }}" alt="Profile Picture" class="w-24 h-24 rounded-full mb-4">
            <h3 class="text-xl font-semibold">{{ $user->name }}</h3>
            <p class="text-gray-600">{{ $user->email }}</p>
            <span class="mt-2 px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">{{ ucfirst($user->role) }}</span>
        </div>

        <div class="mt-6">
            <h4 class="text-lg font-semibold text-gray-700 mb-2">Account Details</h4>
            <ul class="space-y-2">
                <li class="flex justify-between">
                    <span class="font-medium text-gray-600">Username:</span>
                    <span>{{ $user->username }}</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-gray-600">Email:</span>
                    <span>{{ $user->email }}</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-gray-600">Role:</span>
                    <span>{{ ucfirst($user->role) }}</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-gray-600">Joined:</span>
                    <span>{{ $user->created_at->format('F d, Y') }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
