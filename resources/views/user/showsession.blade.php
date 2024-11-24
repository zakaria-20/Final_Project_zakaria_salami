<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Session Details</title>
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="max-w-6xl mx-auto mt-20">
        <!-- Session Header -->
        <div class="bg-[#f9ac54] p-4 rounded-lg shadow-md text-center ">
            <h1 class="text-5xl font-bold text-white">{{ $session->name }}</h1>
            <p class="text-lg mt-4 text-gray-100">by <span class="font-semibold">{{ $session->trainer->name }}</span></p>
        </div>

        <!-- Main Content -->
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <!-- Image Section -->
            <div class="relative group">
                <img 
                    src="{{ asset('images/' . $session->image) }}" 
                    alt="Session Image" 
                    class="w-full h-96 object-cover rounded-lg shadow-md"
                >
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                    <p class="text-white text-xl font-medium">Session Image</p>
                </div>
            </div>

            <!-- Details Section -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-[#f9ac54]">Session Details</h2>
                <div class="mt-6 space-y-4">
                    <p><strong class="font-semibold">Day:</strong> {{ $session->day }}</p>
                    <p><strong class="font-semibold">Start Time:</strong> {{ \Carbon\Carbon::parse($session->start)->format('M d, Y h:i A') }}</p>
                    <p><strong class="font-semibold">End Time:</strong> {{ \Carbon\Carbon::parse($session->end)->format('M d, Y h:i A') }}</p>
                    <p><strong class="font-semibold">Description:</strong> {{ $session->description }}</p>
                    <p>
                        <strong class="font-semibold">Available Spots:</strong> 
                        <span class="text-green-400 font-bold">{{ $session->spots }}</span>
                    </p>
                    
        @role(["trainer"])
        <div x-data="{ openModal: false }" class="mt-12">
            <div class="pl-72">
                <button @click="openModal = true" class="py-3 px-6 bg-[#f9ac54] text-white rounded-lg shadow-md hover:bg-[#e88d3b]">
                    Create New Exercise
                </button>
            </div>
            <div 
                x-show="openModal" 
                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                @click.away="openModal = false" 
                @keydown.escape.window="openModal = false"
            >
                <div class="bg-gray-800 text-gray-200 p-8 rounded-lg shadow-md w-full max-w-lg" x-transition>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold text-white">Create New Exercise</h2>
                        <button @click="openModal = false" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
                    </div>
                    <form action="{{ route('exercises.store', ['session' => $session->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium">Exercise Name</label>
                            <input type="text" id="name" name="name" required class="w-full mt-1 p-3 bg-gray-700 text-gray-200 rounded-lg border-none focus:ring focus:ring-[#f9ac54]">
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium">Exercise Image</label>
                            <input type="file" id="image" name="image" accept="image/*" required class="w-full mt-1 p-3 bg-gray-700 text-gray-200 rounded-lg border-none focus:ring focus:ring-[#f9ac54]">
                        </div>
                        <div class="mb-4">
                            <label for="calories" class="block text-sm font-medium">Calories Burned</label>
                            <input type="number" id="calories" name="calories_burned" required class="w-full mt-1 p-3 bg-gray-700 text-gray-200 rounded-lg border-none focus:ring focus:ring-[#f9ac54]">
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="w-full py-3 bg-[#f9ac54] text-white rounded-lg hover:bg-[#e88d3b]">
                                Create Exercise
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endRole
                </div>
            </div>
        </div>
     
        <!-- Exercises Section -->
        {{-- <div class="mt-16">
            <h2 class="text-3xl font-semibold text-[#f9ac54] text-center">Exercises</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($session->exercises as $exercise)
                <div class="bg-gray-800 p-6 rounded-lg shadow-md flex flex-col items-center">
                    <img 
                        src="{{ asset('images/' . $exercise->image) }}" 
                        alt="{{ $exercise->name }}" 
                        class="w-32 h-32 rounded-lg object-cover mb-4"
                    >
                    <h3 class="text-xl font-semibold text-white">{{ $exercise->name }}</h3>
                    <p class="text-gray-400 mt-2">Calories Burned: {{ $exercise->calories }}</p>
                    <div class="mt-4 w-full">
                        <!-- Exercise Status -->
                        @if (auth()->user()->exercises->contains($exercise))
                            @php
                                $pivot = auth()->user()->exercises->find($exercise->id)->pivot;
                            @endphp
                            <p class="text-sm text-gray-300">
                                <strong>Status:</strong> 
                                <span class="{{ $pivot->is_done ? 'text-green-400' : 'text-red-400' }}">
                                    {{ $pivot->is_done ? 'Done' : 'Not Done' }}
                                </span>
                            </p>
                            <p class="text-sm text-gray-300">
                                <strong>Favorite:</strong> 
                                <span class="{{ $pivot->is_favorite ? 'text-yellow-400' : 'text-gray-400' }}">
                                    {{ $pivot->is_favorite ? 'Yes' : 'No' }}
                                </span>
                            </p>
                        @else
                            <p class="text-gray-500">No status available yet.</p>
                        @endif

                        <!-- Buttons -->
                        <div class="flex space-x-2 mt-4">
                            <form action="{{ route('exercises.updateStatusdone', ['exercise' => $exercise->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="py-2 px-4 bg-[#e88d3b] text-white rounded-lg ">
                                    Done
                                </button>
                            </form>
                            <form action="{{ route('exercises.updateStatusfavorite', ['exercise' => $exercise->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="py-2 px-4 border-2 border-[#f9ac54] text-white rounded-lg ">
                                    Favorite
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                    <p class="text-gray-400 text-center col-span-full">No exercises added yet.</p>
                @endforelse
            </div>
        </div> --}}
        <div class="mt-16">
            <h2 class="text-4xl font-bold text-[#f9ac54] text-center mb-12">Exercises</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($session->exercises as $exercise)
                       
                    <div class="bg-gray-900 p-8 rounded-xl shadow-lg flex flex-col items-center transform transition hover:scale-105 hover:shadow-2xl">
                        <!-- Exercise Image -->
                        <div class="relative w-40 h-40 rounded-full overflow-hidden mb-6 shadow-lg">
                            <img 
                                src="{{ asset('images/' . $exercise->image) }}" 
                                alt="{{ $exercise->name }}" 
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <!-- Exercise Details -->
                        <h3 class="text-2xl font-semibold text-white mb-2">{{ $exercise->name }}</h3>
                        <p class="text-gray-400 text-sm">Calories Burned: <span class="text-white">{{ $exercise->calories_burned }}</span></p>
                        <!-- Status Section -->
                        <div class="w-full mt-6">
                            @if (auth()->user()->exercises->contains($exercise))
                                @php
                                    $pivot = auth()->user()->exercises->find($exercise->id)->pivot;
                                @endphp
                                <div class="flex justify-between text-sm">
                                    <p>
                                        <strong>Status:</strong> 
                                        <span class="{{ $pivot->is_done ? 'text-green-400' : 'text-red-400' }}">
                                            {{ $pivot->is_done ? 'Done' : 'Not Done' }}
                                        </span>
                                    </p>
                                    <p>
                                        <strong>Favorite:</strong> 
                                        <span class="{{ $pivot->is_favorite ? 'text-yellow-400' : 'text-gray-400' }}">
                                            {{ $pivot->is_favorite ? 'Yes' : 'No' }}
                                        </span>
                                    </p>
                                </div>
                            @else
                                <p class="text-center text-gray-500 mt-2">No status available yet.</p>
                            @endif
                        </div>
                        <!-- Action Buttons -->
                        <div class="mt-6 flex space-x-4">
                            <form action="{{ route('exercises.updateStatusdone', ['exercise' => $exercise->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="py-2 px-6 bg-[#f9ac54] text-white rounded-lg hover:bg-[#e88d3b] transition">
                                    Mark as Done
                                </button>
                            </form>
                            <form action="{{ route('exercises.updateStatusfavorite', ['exercise' => $exercise->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="py-2 px-6 bg-[#f9ac54] text-white rounded-lg hover:bg-[#e88d3b] transition">
                                    Favorite
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400 text-center col-span-full">No exercises added yet.</p>
                @endforelse
            </div>
        </div>
       
   
        <!-- Back Button -->
        <div class="mt-10 text-center fixed bottom-0 right-0">
            <a 
                href="{{ route('sessions.index') }}" 
                class="py-3 px-6 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition"
            >
                Back to Sessions
            </a>
        </div>

        <!-- Modal for Trainers to Add Exercises -->
        {{-- @role(["trainer"])
        <div x-data="{ openModal: false }" class="mt-12">
            <div class="text-center">
                <button @click="openModal = true" class="py-3 px-6 bg-[#f9ac54] text-white rounded-lg shadow-md hover:bg-[#e88d3b]">
                    Create New Exercise
                </button>
            </div>
            <div 
                x-show="openModal" 
                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                @click.away="openModal = false" 
                @keydown.escape.window="openModal = false"
            >
                <div class="bg-gray-800 text-gray-200 p-8 rounded-lg shadow-md w-full max-w-lg" x-transition>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold text-white">Create New Exercise</h2>
                        <button @click="openModal = false" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
                    </div>
                    <form action="{{ route('exercises.store', ['session' => $session->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium">Exercise Name</label>
                            <input type="text" id="name" name="name" required class="w-full mt-1 p-3 bg-gray-700 text-gray-200 rounded-lg border-none focus:ring focus:ring-[#f9ac54]">
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium">Exercise Image</label>
                            <input type="file" id="image" name="image" accept="image/*" required class="w-full mt-1 p-3 bg-gray-700 text-gray-200 rounded-lg border-none focus:ring focus:ring-[#f9ac54]">
                        </div>
                        <div class="mb-4">
                            <label for="calories" class="block text-sm font-medium">Calories Burned</label>
                            <input type="number" id="calories" name="calories" required class="w-full mt-1 p-3 bg-gray-700 text-gray-200 rounded-lg border-none focus:ring focus:ring-[#f9ac54]">
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="w-full py-3 bg-[#f9ac54] text-white rounded-lg hover:bg-[#e88d3b]">
                                Create Exercise
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endRole --}}
    </div>
</body>
</html>
