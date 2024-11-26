{{-- <nav class="bg-white text-[#f9ac54] shadow-xl h-screen fixed left-0 min-w-[250px] font-sans overflow-auto">
    <div class="relative flex flex-col h-full">
      <!-- Logo Section -->
      <a href="javascript:void(0)" class="text-center py-6">
        <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class="w-[160px] inline" />
      </a>
    
      <!-- Sidebar Links -->
      <div class="space-y-4 mt-8 px-4">
        <!-- Trainers Link -->
        <div class="flex items-center gap-4 px-6 py-3 rounded-md hover:bg-[#f9ac54] hover:text-white transition-all ease-in-out duration-200">
          <div class="text-[#f9ac54] text-lg">
            <!-- Icon for Trainers -->
            <i class="fas fa-users"></i>
          </div>
          <p class="text-[#f9ac54] text-sm font-medium">Trainers</p>
        </div>
    
        <!-- Users Link -->
        <div class="flex items-center gap-4 px-6 py-3 rounded-md hover:bg-[#f9ac54] hover:text-white transition-all ease-in-out duration-200">
          <div class="text-[#f9ac54] text-lg">
            <!-- Icon for Users -->
            <i class="fas fa-user"></i>
          </div>
          <p class="text-[#f9ac54] text-sm font-medium">Users</p>
        </div>
    
        <!-- Sessions Link -->
        <div class="flex items-center gap-4 px-6 py-3 rounded-md hover:bg-[#f9ac54] hover:text-white transition-all ease-in-out duration-200">
          <div class="text-[#f9ac54] text-lg">
            <!-- Icon for Sessions -->
            <i class="fas fa-calendar-alt"></i>
          </div>
          <p class="text-[#f9ac54] text-sm font-medium">Sessions</p>
        </div>
    
        <!-- Session Types Link -->
        <div class="flex items-center gap-4 px-6 py-3 rounded-md hover:bg-[#f9ac54] hover:text-white transition-all ease-in-out duration-200">
          <div class="text-[#f9ac54] text-lg">
            <!-- Icon for Session Types -->
            <i class="fas fa-dumbbell"></i>
          </div>
          <p class="text-[#f9ac54] text-sm font-medium">Session Types</p>
        </div>
    
        <!-- Payments Link -->
        <div class="flex items-center gap-4 px-6 py-3 rounded-md hover:bg-[#f9ac54] hover:text-white transition-all ease-in-out duration-200">
          <div class="text-[#f9ac54] text-lg">
            <!-- Icon for Payments -->
            <i class="fas fa-credit-card"></i>
          </div>
          <p class="text-[#f9ac54] text-sm font-medium">Payments</p>
        </div>
      </div>
    
      <!-- Bottom User Profile -->
      <div class="mt-auto px-6 py-4 flex items-center gap-4">
        <div class="w-10 h-10 bg-[#f9ac54] rounded-full flex justify-center items-center text-white">
          <i class="fas fa-user"></i>
        </div>
        <div>
          <p class="text-[#f9ac54] text-sm font-medium">John Doe</p>
          <p class="text-[#f9ac54] text-xs">Admin</p>
        </div>
      </div>
    </div>
  </nav>
   --}}
   {{-- <nav class="bg-gray-900 shadow-xl h-screen fixed top-0 left-0 min-w-[250px] py-6 font-[sans-serif] overflow-auto">
    <div class="relative flex flex-col h-full">
      <a href="javascript:void(0)" class="text-center"><img src="{{ asset('images/logo.png') }}" alt="logo"
        class='w-[160px] inline' />
      </a>

      <ul class="space-y-3 my-8 flex-1">
        <li>
          <a href="javascript:void(0)"
            class="text-sm flex items-center text-[#f9ac54] border-r-[5px] border-[#f9ac54] bg-gray-100 px-8 py-4 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
              viewBox="0 0 512 512">
              <path
                d="M197.332 170.668h-160C16.746 170.668 0 153.922 0 133.332v-96C0 16.746 16.746 0 37.332 0h160c20.59 0 37.336 16.746 37.336 37.332v96c0 20.59-16.746 37.336-37.336 37.336zM37.332 32A5.336 5.336 0 0 0 32 37.332v96a5.337 5.337 0 0 0 5.332 5.336h160a5.338 5.338 0 0 0 5.336-5.336v-96A5.337 5.337 0 0 0 197.332 32zm160 480h-160C16.746 512 0 495.254 0 474.668v-224c0-20.59 16.746-37.336 37.332-37.336h160c20.59 0 37.336 16.746 37.336 37.336v224c0 20.586-16.746 37.332-37.336 37.332zm-160-266.668A5.337 5.337 0 0 0 32 250.668v224A5.336 5.336 0 0 0 37.332 480h160a5.337 5.337 0 0 0 5.336-5.332v-224a5.338 5.338 0 0 0-5.336-5.336zM474.668 512h-160c-20.59 0-37.336-16.746-37.336-37.332v-96c0-20.59 16.746-37.336 37.336-37.336h160c20.586 0 37.332 16.746 37.332 37.336v96C512 495.254 495.254 512 474.668 512zm-160-138.668a5.338 5.338 0 0 0-5.336 5.336v96a5.337 5.337 0 0 0 5.336 5.332h160a5.336 5.336 0 0 0 5.332-5.332v-96a5.337 5.337 0 0 0-5.332-5.336zm160-74.664h-160c-20.59 0-37.336-16.746-37.336-37.336v-224C277.332 16.746 294.078 0 314.668 0h160C495.254 0 512 16.746 512 37.332v224c0 20.59-16.746 37.336-37.332 37.336zM314.668 32a5.337 5.337 0 0 0-5.336 5.332v224a5.338 5.338 0 0 0 5.336 5.336h160a5.337 5.337 0 0 0 5.332-5.336v-224A5.336 5.336 0 0 0 474.668 32zm0 0"
                data-original="#000000" />
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/users"
            class="text-black text-sm flex items-center hover:text-black hover:border-r-[5px] border-[#f9ac54] hover:bg-gray-100 px-8 py-4 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                ></path>
              </svg>
            <span class="text-[#f9ac54]">Users</span>
          </a>
        </li>
        <li>
          <a href="/index"
            class="text-black text-sm flex items-center hover:text-[#f9ac54] hover:border-r-[5px] border-[#f9ac54] hover:bg-gray-100 px-8 py-4 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"
                ></path>
              </svg>
            <span class="text-[#f9ac54]">Trainers</span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)"
            class="text-black text-sm flex items-center hover:text-[#f9ac54] hover:border-r-[5px] border-[#f9ac54] hover:bg-gray-100 px-8 py-4 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                ></path>
              </svg>
            <span class="text-[#f9ac54]">Sessions</span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)"
            class="text-black text-sm flex items-center hover:text-[#f9ac54] hover:border-r-[5px] border-[#f9ac54] hover:bg-gray-100 px-8 py-4 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M248,120h-8V88a16,16,0,0,0-16-16H208V64a16,16,0,0,0-16-16H168a16,16,0,0,0-16,16v56H104V64A16,16,0,0,0,88,48H64A16,16,0,0,0,48,64v8H32A16,16,0,0,0,16,88v32H8a8,8,0,0,0,0,16h8v32a16,16,0,0,0,16,16H48v8a16,16,0,0,0,16,16H88a16,16,0,0,0,16-16V136h48v56a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16v-8h16a16,16,0,0,0,16-16V136h8a8,8,0,0,0,0-16ZM32,168V88H48v80Zm56,24H64V64H88V192Zm104,0H168V64h24V175.82c0,.06,0,.12,0,.18s0,.12,0,.18V192Zm32-24H208V88h16Z"
                ></path>
              </svg>
            <span class="text-[#f9ac54]">Session Types</span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)"
            class="text-black text-sm flex items-center hover:text-[#f9ac54] hover:border-r-[5px] border-[#f9ac54] hover:bg-gray-100 px-8 py-4 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"
                ></path>
              </svg>
            <span class="text-[#f9ac54]">Payments</span>
          </a>
        </li>
      </ul>

     
    </div>
  </nav> --}}
  <nav class="bg-[#1f2937] shadow-xl h-screen fixed top-0 left-0 min-w-[250px] py-6 font-[sans-serif] overflow-auto">
    <div class="relative flex flex-col h-full">
      <a href="javascript:void(0)" class="text-center">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-[160px] inline" />
      </a>
  
      <ul class="space-y-3 my-8 flex-1">
        <li>
          <a href="/dashboard"
             class="text-sm flex items-center text-[#f9ac54] border-l-[5px] border-[#f9ac54] bg-[#111827] px-8 py-4 rounded-lg hover:bg-[#1f2937] transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                 viewBox="0 0 512 512">
              <path
                d="M197.332 170.668h-160C16.746 170.668 0 153.922 0 133.332v-96C0 16.746 16.746 0 37.332 0h160c20.59 0 37.336 16.746 37.336 37.332v96c0 20.59-16.746 37.336-37.336 37.336zM37.332 32A5.336 5.336 0 0 0 32 37.332v96a5.337 5.337 0 0 0 5.332 5.336h160a5.338 5.338 0 0 0 5.336-5.336v-96A5.337 5.337 0 0 0 197.332 32zm160 480h-160C16.746 512 0 495.254 0 474.668v-224c0-20.59 16.746-37.336 37.332-37.336h160c20.59 0 37.336 16.746 37.336 37.336v224c0 20.586-16.746 37.332-37.336 37.332zm-160-266.668A5.337 5.337 0 0 0 32 250.668v224A5.336 5.336 0 0 0 37.332 480h160a5.337 5.337 0 0 0 5.336-5.332v-224a5.338 5.338 0 0 0-5.336-5.336zM474.668 512h-160c-20.59 0-37.336-16.746-37.336-37.332v-96c0-20.59 16.746-37.336 37.336-37.336h160c20.586 0 37.332 16.746 37.332 37.336v96C512 495.254 495.254 512 474.668 512zm-160-138.668a5.338 5.338 0 0 0-5.336 5.336v96a5.337 5.337 0 0 0 5.336 5.332h160a5.336 5.336 0 0 0 5.332-5.332v-96a5.337 5.337 0 0 0-5.332-5.336zm160-74.664h-160c-20.59 0-37.336-16.746-37.336-37.336v-224C277.332 16.746 294.078 0 314.668 0h160C495.254 0 512 16.746 512 37.332v224c0 20.59-16.746 37.336-37.332 37.336zM314.668 32a5.337 5.337 0 0 0-5.336 5.332v224a5.338 5.338 0 0 0 5.336 5.336h160a5.337 5.337 0 0 0 5.332-5.336v-224A5.336 5.336 0 0 0 474.668 32zm0 0"
                data-original="#000000" />
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
  
        <li>
          <a href="/users"
             class="text-sm flex items-center hover:text-[#f9ac54] hover:border-l-[5px] border-[#f9ac54] hover:bg-[#111827] px-8 py-4 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor"
                 viewBox="0 0 256 256">
              <path
                d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
              ></path>
            </svg>
            <span class="text-[#f9ac54]">Users</span>
          </a>
        </li>
  
        <li>
          <a href="/index"
             class="text-sm flex items-center hover:text-[#f9ac54] hover:border-l-[5px] border-[#f9ac54] hover:bg-[#111827] px-8 py-4 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor"
                 viewBox="0 0 256 256">
              <path
                d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176Z"
              ></path>
            </svg>
            <span class="text-[#f9ac54]">Trainers</span>
          </a>
        </li>
  
        <li>
          <a href="/sessions"
             class="text-sm flex items-center hover:text-[#f9ac54] hover:border-l-[5px] border-[#f9ac54] hover:bg-[#111827] px-8 py-4 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor"
                 viewBox="0 0 256 256">
              <path
                d="M104,144a8,8,0,0,1-8,8H72V224a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V56a8,8,0,0,1,8-8h32a8,8,0,0,1,8,8V136h24a8,8,0,0,1,8,8Z"
              ></path>
            </svg>
            <span class="text-[#f9ac54]">Sessions</span>
          </a>
        </li>
  
        <li>
          <a href="javascript:void(0)"
             class="text-sm flex items-center hover:text-[#f9ac54] hover:border-l-[5px] border-[#f9ac54] hover:bg-[#111827] px-8 py-4 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] mr-4 text-[#f9ac54]" fill="currentColor"
                 viewBox="0 0 256 256">
              <path
                d="M224,136h-40V88a8,8,0,0,0-8-8h-56a8,8,0,0,0-8,8v48H32a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8h56v48a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V136a8,8,0,0,0-8-8ZM120,88h16v48H120ZM56,168V136H200v32H56Z"
              ></path>
            </svg>
            <span class="text-[#f9ac54]">Settings</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  