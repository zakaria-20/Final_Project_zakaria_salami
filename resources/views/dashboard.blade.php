<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <div class="min-h-screen bg-[#111827] text-white shadow-lg">
            @include("layouts.sidebar")
        </div>

        <!-- Main Content -->
        <div class="layout-container flex  grow flex-col bg-[#1f2937] text-white pl-28 pb-3">
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <!-- Metrics Overview -->
                    <div class="flex flex-wrap gap-4 p-4">
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#111827] border border-[#f9ac54]">
                            <p class="text-[#f9ac54] text-base font-medium leading-normal">Members</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">+{{ $totalMember }}</p>
                            <p class="text-[#019863] text-base font-medium leading-normal">+2.1%</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#111827] border border-[#f9ac54]">
                            <p class="text-[#f9ac54] text-base font-medium leading-normal">Trainer</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">+{{ $trainerCount }}</p>
                            <p class="text-[#019863] text-base font-medium leading-normal">+1.8%</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#111827] border border-[#f9ac54]">
                            <p class="text-[#f9ac54] text-base font-medium leading-normal">Training Requests</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">{{ $pendingTrainerRequests }}</p>
                            <p class="text-[#019863] text-base font-medium leading-normal">+1.3%</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#111827] border border-[#f9ac54]">
                            <p class="text-[#f9ac54] text-base font-medium leading-normal">Sessions</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">{{ $Sessions }}</p>
                            <p class="text-[#019863] text-base font-medium leading-normal">+3.6%</p>
                        </div>
                    </div>

                    <!-- Analytics Section -->
                    <div class="flex flex-wrap gap-4 px-4 py-6">
                        {{-- <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl bg-[#111827] border border-[#f9ac54] p-6">
                            <p class="text-[#f9ac54] text-base font-medium leading-normal">Revenue Analytics</p>
                            <p class="text-white tracking-light text-[32px] font-bold leading-tight truncate">$564</p>
                            <div class="flex gap-1">
                                <p class="text-[#f9ac54] text-base font-normal leading-normal">April 2024</p>
                                <p class="text-[#019863] text-base font-medium leading-normal">+</p>
                            </div>
                            <div class="grid min-h-[180px] grid-flow-col gap-6 grid-rows-[1fr_auto] items-end justify-items-center px-3">
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 50%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">Jan</p>
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 60%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">Feb</p>
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 50%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">Mar</p>
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 20%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">Apr</p>
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 40%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">May</p>
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 60%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">Jun</p>
                                <div class="border-[#f9ac54] bg-[#1f2937] border-t-2 w-full" style="height: 80%;"></div>
                                <p class="text-[#f9ac54] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul</p>
                            </div>
                        </div> --}}
                        <div class="pt-18 w-[30vw]">
                            <canvas id="genderChart"></canvas>
                        </div>
                        {{-- <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl bg-[#111827] border border-[#f9ac54] p-6">
                            <p class="text-white tracking-light text-[32px] font-bold leading-tight truncate">$188</p>
                            <p class="text-[#C12929] text-base font-medium leading-normal">-</p>
                        </div> --}}
                        <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl bg-gray-800  shadow-md w-80 p-4">
                            <!-- Month and Year Header -->
                            <div class="flex justify-between items-center w-full mb-4 text-white">
                                <button class="text-gray-300 hover:text-f9ac54 transition duration-300" id="prev-month">
                                    <span>&lt;</span>
                                </button>
                                <h2 id="current-month" class="text-lg font-bold"></h2>
                                <button class="text-gray-300 hover:text-f9ac54 transition duration-300" id="next-month">
                                    <span>&gt;</span>
                                </button>
                            </div>
                        
                            <!-- Days of the Week -->
                            <div class="grid grid-cols-7 text-center text-sm text-gray-400 mb-2">
                                <span>S</span>
                                <span>M</span>
                                <span>T</span>
                                <span>W</span>
                                <span>T</span>
                                <span>F</span>
                                <span>S</span>
                            </div>
                        
                            <!-- Days -->
                            <div id="calendar-days" class="grid grid-cols-7 gap-2 text-center text-white">
                                <!-- Days will be dynamically inserted here -->
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-[68vw]">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                                <div class="p-6 bg-gray-900 border-b border-gray-700">
                                    <div class="flex justify-between items-center mb-6">
                                        <h2 class="text-2xl font-bold text-white">All Members</h2>
                                    </div>
                    
                                    <!-- Search Section -->
                                    <div class="flex flex-col sm:flex-row gap-4 mb-6 w-[18vw]">
                                        <div class="flex-1">
                                            <div class="relative">
                                                <input
                                                    type="text"
                                                    id="searchInput"
                                                    placeholder="Search users..."
                                                    class="w-full pl-10 pr-4 py-2 border border-gray-600 rounded-lg bg-gray-800 text-white focus:ring-2 focus:ring-f9ac54 focus:border-transparent"
                                                >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Users Table -->
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full divide-y divide-gray-700" id="usersTable">
                                            <thead class="bg-gray-800">
                                                <tr>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Member Name</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Expired Date</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Age</th>

                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Role</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-gray-900 divide-y divide-gray-700 text-white" id="usersTbody">
                                                @foreach ($users as $user)
                                                    <tr class="hover:bg-gray-800 transition duration-200">
                                                        <!-- User Information -->
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center space-x-4">
                                                                <!-- User Image -->
                                                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-gray-700">
                                                                    <img 
                                                                        src="{{ asset("/images/" . $user->image) }}" 
                                                                        alt="{{ $user->name }}" 
                                                                        class="object-cover w-full h-full"
                                                                    >
                                                                </div>
                                                                <!-- User Details -->
                                                                <div>
                                                                    <h1 class="font-bold text-lg text-white">{{ $user->name }}</h1>
                                                                    <p class="text-sm text-gray-400">{{ $user->email }}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                            
                                                        <!-- Expiration Date -->
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            @if ($user->expires_at)
                                                                <span class="text-sm font-medium text-green-400">
                                                                    {{ $user->expires_at->format('d-m-Y') }}
                                                                </span>
                                                            @else
                                                                <span class="text-sm font-medium text-gray-500">N/A</span>
                                                            @endif
                                                        </td>
                                            
                                                        <!-- User Age -->
                                                        <td class="px-6 py-4 whitespace-nowrap ">
                                                            <div class="text-sm font-medium text-gray-400">
                                                                {{ $user->age ?? 'N/A' }}
                                                            </div>
                                                        </td>
                                            
                                                        <!-- User Roles -->
                                                        <td class="px-6 py-4 whitespace-nowrap ">
                                                            @foreach ($user->roles as $role)
                                                                <span class="px-3 py-1 text-xs font-semibold rounded-full
                                                                    {{ $role->name === 'Trainer' ? 'bg-purple-500 text-white' : 
                                                                       ($role->name === 'Member' ? 'bg-blue-500 text-white' : 
                                                                       'bg-green-500 text-white') }}">
                                                                    {{ $role->name }}
                                                                </span>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                  
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarDays = document.getElementById('calendar-days');
            const currentMonthEl = document.getElementById('current-month');
            const prevMonthBtn = document.getElementById('prev-month');
            const nextMonthBtn = document.getElementById('next-month');
           
            let date = new Date();
    
            function renderCalendar() {
                const year = date.getFullYear();
                const month = date.getMonth();
    
                // Set current month and year
                currentMonthEl.textContent = date.toLocaleDateString('en-US', {
                    month: 'long',
                    year: 'numeric',
                });
    
                // Clear existing days
                calendarDays.innerHTML = '';
    
                // Get first and last day of the current month
                const firstDay = new Date(year, month, 1).getDay();
                const lastDate = new Date(year, month + 1, 0).getDate();
    
                // Add empty slots for days before the first day
                for (let i = 0; i < firstDay; i++) {
                    const emptySlot = document.createElement('div');
                    calendarDays.appendChild(emptySlot);
                }
    
                // Add days of the month
                for (let day = 1; day <= lastDate; day++) {
                    const dayElement = document.createElement('div');
                    dayElement.textContent = day;
                    dayElement.className =
                        'p-2 rounded-md hover:bg-blue-500 hover:text-white cursor-pointer';
                    
                    // Highlight today's date
                    const today = new Date();
                    if (
                        day === today.getDate() &&
                        month === today.getMonth() &&
                        year === today.getFullYear()
                    ) {
                        dayElement.classList.add('bg-blue-500', 'text-white');
                    }
    
                    calendarDays.appendChild(dayElement);
                }
            }
    
            // Event Listeners for Navigation
            prevMonthBtn.addEventListener('click', function () {
                date.setMonth(date.getMonth() - 1);
                renderCalendar();
            });
    
            nextMonthBtn.addEventListener('click', function () {
                date.setMonth(date.getMonth() + 1);
                renderCalendar();
            });
    
            // Initial Render
            renderCalendar();
        });
        const ctx = document.getElementById('genderChart').getContext('2d');

const genderChart = new Chart(ctx, {
    type: 'pie', // Pie chart for ratios
    data: {
        labels: ['Hommes', 'Femmes'], // Chart labels
        datasets: [{
            data: [{{ $hommes }}, {{ $femmes }}], // Data from controller
            backgroundColor: [
                'rgba(54, 162, 235, 0.7)', // Blue for hommes
                'rgba(255, 99, 132, 0.7)'  // Pink for femmes
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            }
        }
    }
});
      
    </script>
    
</x-app-layout>

{{-- 
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Galileo Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#FFFFFF] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
     
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#E9DFCE]">
                <p class="text-[#1C160C] text-base font-medium leading-normal">Revenue</p>
                <p class="text-[#1C160C] tracking-light text-2xl font-bold leading-tight">$4,53K</p>
                <p class="text-[#019863] text-base font-medium leading-normal">+2.1%</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#E9DFCE]">
                <p class="text-[#1C160C] text-base font-medium leading-normal">Members</p>
                <p class="text-[#1C160C] tracking-light text-2xl font-bold leading-tight">+89</p>
                <p class="text-[#C12929] text-base font-medium leading-normal">-1.8%</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#E9DFCE]">
                <p class="text-[#1C160C] text-base font-medium leading-normal">Visited</p>
                <p class="text-[#1C160C] tracking-light text-2xl font-bold leading-tight">56</p>
                <p class="text-[#C12929] text-base font-medium leading-normal">-1.3%</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#E9DFCE]">
                <p class="text-[#1C160C] text-base font-medium leading-normal">Trainer</p>
                <p class="text-[#1C160C] tracking-light text-2xl font-bold leading-tight">12</p>
                <p class="text-[#019863] text-base font-medium leading-normal">+3.6%</p>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 px-4 py-6">
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#E9DFCE] p-6">
                <p class="text-[#1C160C] text-base font-medium leading-normal">Revenue Analytics</p>
                <p class="text-[#1C160C] tracking-light text-[32px] font-bold leading-tight truncate">$564</p>
                <div class="flex gap-1">
                  <p class="text-[#A18249] text-base font-normal leading-normal">April 2024</p>
                  <p class="text-[#019863] text-base font-medium leading-normal">+</p>
                </div>
                <div class="grid min-h-[180px] grid-flow-col gap-6 grid-rows-[1fr_auto] items-end justify-items-center px-3">
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 50%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">Jan</p>
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 60%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">Feb</p>
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 50%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">Mar</p>
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 20%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">Apr</p>
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 40%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">May</p>
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 60%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">Jun</p>
                  <div class="border-[#A18249] bg-[#F4EFE6] border-t-2 w-full" style="height: 80%;"></div>
                  <p class="text-[#A18249] text-[13px] font-bold leading-normal tracking-[0.015em]">Jul</p>
                </div>
              </div>
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-[#E9DFCE] p-6">
                <p class="text-[#1C160C] tracking-light text-[32px] font-bold leading-tight truncate">$188</p>
                <p class="text-[#C12929] text-base font-medium leading-normal">-</p>
              </div>
            </div>
           
           
           
           
           
        
          </div>
        </div>
    
      </div>
    </div>
  </body>
</html> --}}

