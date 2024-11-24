<nav class="bg-gray-800 text-white shadow-lg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Logo Section -->
        <div class="flex items-center">
          {{-- <a href="#" class="text-2xl font-bold text-[#f9ac54]">GymApp</a> --}}
          <a href="javascript:void(0)" class="text-center"><img src="{{ asset('images/logo.png') }}" alt="logo"
            class='w-[160px] inline' />
          </a>        
        </div>
  
        <!-- Navigation Links -->
        <div class="flex justify-between gap-6">
          <a href="/homeuser" class="hover:text-[#f9ac54]">Home</a>
          <a href="/calendar" class="hover:text-[#f9ac54]">Session</a>
          <a href="/reservations" class="hover:text-[#f9ac54]">Reservation</a>
        </div>
  
        <!-- Profile Dropdown -->
        <div class="relative" x-data="{ openMenu: false }">
          <button 
            class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-[#f9ac54]" 
            @click="openMenu = !openMenu"
          >
            <img 
              class="h-8 w-8 rounded-full" 
              src="{{ asset('/images/'.Auth::user()->image) }}"
              alt="Profile Picture"
            />
          </button>
          
          <!-- Dropdown -->
          <div 
            x-show="openMenu" 
            @click.away="openMenu = false"
            x-transition:enter="transition ease-out duration-150" 
            x-transition:enter-start="opacity-0 scale-95" 
            x-transition:enter-end="opacity-100 scale-100" 
            x-transition:leave="transition ease-in duration-100" 
            x-transition:leave-start="opacity-100 scale-100" 
            x-transition:leave-end="opacity-0 scale-95" 
            class="absolute right-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-gray-300 focus:outline-none"
          >
            <a 
              href="/profile/user" 
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
            >
              Your Profile
            </a>
            <form method="POST" action="{{ route('logout') }}" class="block">
              @csrf
              <button 
                type="submit" 
                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
              >
                Sign out
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  