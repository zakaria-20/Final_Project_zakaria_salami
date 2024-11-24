<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Lexend%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Document</title>
</head>
<body>
  @include("layouts.navbar")
   <div class=" flex flex-col bg-gradient-to-b from-[#1f2937] to-[#111827] text-white font-['Lexend']">
      <!-- Header Section -->
 
    
      <!-- Content Section -->
      <main class="flex-1 container mx-auto px-6 py-8">
        <!-- Profile Card -->
        <div class="flex p-4 gap-6 items-center justify-between">
          <div class="flex items-center gap-4">
            <div class="aspect-square bg-cover bg-center rounded-full h-32 w-32 overflow-hidden">
              <img src="{{ asset('/images/'.$user->image) }}" alt="User Image" class="object-cover w-full h-full">
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#f9ac54] text-2xl font-bold">{{ $user->name }}</p>
              <p class="text-white text-base">{{ $user->height }} cm • {{ $user->weight }} kg</p>
              <p class="text-white text-base">{{ $user->email }}</p>
            </div>
          </div>
          <a 
          href="{{ route('profile.edit') }}" 
        >
        <button class="bg-[#f9ac54] text-[#111827] text-sm font-bold py-2 px-4 rounded-lg hover:bg-[#d98b45]">
        Edit Profile
        </button>
        </a>
          
        </div>
    
        <!-- Personal Info Section -->
        <div class="flex gap-x-28">
        <section class="mt-11">
          <h2 class="text-xl font-bold mb-4 border-b border-gray-600 pb-2">Personal Info</h2>
          <div class="flex gap-x-8 flex-wrap">
            <div class="bg-[#1f2937] p-4 rounded-lg shadow-md flex items-center space-x-4 w-[18vw]">
              <div class="bg-[#f9ac54] p-4 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M235.32,73.37,182.63,20.69a16,16,0,0,0-22.63,0L20.68,160a16,16,0,0,0,0,22.63l52.69,52.68a16,16,0,0,0,22.63,0L235.32,96A16,16,0,0,0,235.32,73.37Z"></path>
                </svg>
              </div>
              <div>
                <p class="text-lg font-semibold">Height</p>
                <p class="text-gray-300">{{ $user->height }} cm</p>
              </div>
            </div>
            <div class="bg-[#1f2937] p-4 rounded-lg shadow-md flex items-center space-x-4 w-[18vw]">
              <div class="bg-[#f9ac54] p-4 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M239.43,133l-32-80h0a8,8,0,0,0-9.16-4.84L136,62V40a8,8,0,0,0-16,0V65.58L54.26,80.19A8,8,0,0,0,48.57,85h0v.06L16.57,165a7.92,7.92,0,0,0-.57,3c0,23.31,24.54,32,40,32s40-8.69,40-32a7.92,7.92,0,0,0-.57-3L66.92,93.77,120,82V208H104a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16H136V78.42L187,67.1,160.57,133a7.92,7.92,0,0,0-.57,3c0,23.31,24.54,32,40,32s40-8.69,40-32A7.92,7.92,0,0,0,239.43,133Z"></path>
                </svg>
              </div>
              <div>
                <p class="text-lg font-semibold">Weight</p>
                <p class="text-gray-300">{{ $user->weight }} kg</p>
              </div>
            </div>
            <div class="bg-[#1f2937] p-4 rounded-lg shadow-md flex items-center space-x-4 w-[18vw] mt-4">
              <div class="bg-[#f9ac54] p-4 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M143.92,29.38l6.8,34.16,31.68,2.4a16,16,0,0,1,8.24,29.44l-24.16,23.52,6.4,31.84a16,16,0,0,1-23.36,16.48l-28.96-15.52-28.96,15.52a16,16,0,0,1-23.36-16.48l6.4-31.84-24.16-23.52a16,16,0,0,1,8.24-29.44l31.68-2.4,6.8-34.16a16,16,0,0,1,31.36,0Z"></path>
                </svg>
              </div>
              <div>
                <p class="text-lg font-semibold">Total Exercises</p>
                <p class="text-gray-300">{{ $totalexrcice }} exercises</p>
              </div>
            </div>
            <div class="bg-[#1f2937] p-4 rounded-lg shadow-md flex items-center space-x-4 w-[18vw] mt-4">
              <div class="bg-[#f9ac54] p-4 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M108.28,51.31a8,8,0,0,1,10.07,4.68L136,92.51a8,8,0,0,1-6.76,11.49H126l-9.51,60.52,21.7,21.7a8,8,0,0,1-11.32,11.31l-27-27a8,8,0,0,1-1.92-6.49L118,122.85l4.76-29.06a8,8,0,0,1,3.94-5.76L118.27,51.31A8,8,0,0,1,108.28,51.31Z"></path>
                </svg>
              </div>
              <div>
                <p class="text-lg font-semibold">Total Joined Sessions</p>
                <p class="text-gray-300">{{ $usersessionjoin }} sessions</p>
              </div>
            </div>
          </div>
        </section>

        <section class="mt-10">
          <h2 class="text-2xl font-bold mb-6 text-white border-b border-gray-600 pb-2">Calorie Burn Goal</h2>
          <div class="w-[40vw] flex  items-center bg-[#1f2937] pt-2   rounded-lg shadow-lg ">
              <!-- Circular Progress -->
              <div class="relative w-48 h-48 mx-auto mb-6">
                  <div class="absolute inset-0 rounded-full border-8 border-gray-600"></div>
                  <div class="absolute inset-0 rounded-full border-8 border-[conic-gradient(var(--progress) 0%, #4b5563 0%)]" style="--progress: {{ $progressPercentage }}%;"></div>
                  <div class="absolute inset-0 flex items-center justify-center">
                      <span class="text-3xl font-bold text-white">{{ $progressPercentage }}%</span>
                  </div>
              </div>

              <!-- Calorie Info -->
              <div class="text-center mt-4">
                  <p class="text-lg text-gray-300">
                      Total Goal: <span class="font-bold text-[#f9ac54]">{{ $goalCalories }}</span> calories
                  </p>
                  <p class="text-lg text-gray-300">
                      Burned: <span class="font-bold text-green-500">{{ $burnedCalories }}</span> calories
                  </p>
                  <p class="text-lg text-gray-300">
                      Remaining: <span class="font-bold text-red-500">{{ $remainingCalories }}</span> calories
                  </p>
              </div>
          </div>
        </section>
        </div>
        <!-- Completed Exercises Section -->
        <section class="mt-8">
          <h2 class="text-xl font-bold mb-4 border-b border-gray-600 pb-2">Completed Exercises</h2>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($exersisesdonee as $exercise)
            <div class="bg-[#1f2937] rounded-lg shadow-md p-4">
              <div class="aspect-square bg-center bg-cover rounded-lg overflow-hidden">
                <img src="{{ asset('/images/'.$exercise->image) }}" alt="{{ $exercise->name }}">
              </div>
              <div class="mt-2">
                <h3 class="text-lg font-semibold">{{ $exercise->name }}</h3>
                <p class="text-gray-300">{{ $exercise->calories_burned }} calories</p>
              </div>
            </div>
            @endforeach
          </div>
        </section>
    
        <!-- Favorite Exercises Section -->
        <section class="mt-8">
          <h2 class="text-xl font-bold mb-4 border-b border-gray-600 pb-2">Favorite Exercises</h2>
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($exersisesfavoritee as $exercise)
            <div class="bg-[#1f2937] rounded-lg shadow-md p-4">
              <div class="aspect-square bg-center bg-cover rounded-lg overflow-hidden">
                <img src="{{ asset('/images/'.$exercise->image) }}" alt="{{ $exercise->name }}">
              </div>
              <div class="mt-2">
                <h3 class="text-lg font-semibold">{{ $exercise->name }}</h3>
                <p class="text-gray-300">{{ $exercise->calories_burned }} calories</p>
              </div>
            </div>
            @endforeach
          </div>
        </section>
      </main>
    </div>
</body>
</html>