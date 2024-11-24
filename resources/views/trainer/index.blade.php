<x-app-layout>
    <div class="flex justify-between space-x-8 bg-[#1f2937]">
        <div class="w-1/4">
            @include("layouts.sidebar")
        </div>
        <div class="flex-1">
           
           

            <!-- Trainer Requests Table -->
            {{-- <div class="py-12 w-full lg:w-[80vw]">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-2xl font-bold text-gray-800">Trainer Requests</h2>
                            </div>

                            <!-- Search and Filter Section -->
                            <div class="flex flex-col sm:flex-row gap-4 mb-6">
                                <div class="flex-1">
                                    <div class="relative">
                                        <input
                                            type="text"
                                            id="searchInput"
                                            placeholder="Search requests..."
                                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
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
                                <table class="min-w-full divide-y divide-gray-200" id="usersTable">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pay</th>

                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200" id="usersTbody">
                                        @forelse ($trainerRequests as $request)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $request->user->name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $request->created_at->format('M d, Y') }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $request->pay == 'false' ? 'bg-yellow-400' : ($request->pay == 'true' ? 'bg-green-500' : 'bg-red-500') }}">
                                                        {{ $request->pay == 'false' ? 'not pay': 'pay'}}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $request->status == 'Pending' ? 'bg-yellow-400' : ($request->status == 'Approved' ? 'bg-green-500' : 'bg-red-500') }}">
                                                        {{ $request->status }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <form action="{{ route('trainer-requests.approve', $request) }}" method="POST" class="inline-block">@csrf
                                                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Approve</button>
                                                    </form>
                                                    <form action="{{ route('trainer-requests.reject', $request) }}" method="POST" class="inline-block">@csrf
                                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Reject</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-6 py-4 text-center text-gray-500">No trainer requests available</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="py-12 w-full lg:w-[80vw]">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-[#1f2937] overflow-hidden shadow-xl sm:rounded-lg">
                        <!-- Header -->
                        <div class="p-6 bg-[#111827] border-b border-gray-600">
                            <div class="flex justify-between items-center">
                                <h2 class="text-3xl font-bold text-[#fbae55]">Trainer Requests</h2>
                            </div>
                        </div>
            
                        <!-- Search and Filter Section -->
                        <div class="p-6 bg-[#1f2937]">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <!-- Search Box -->
                                <div class="flex-1 relative">
                                    <input
                                        type="text"
                                        id="searchInput"
                                        placeholder="Search requests..."
                                        class="w-full pl-10 pr-4 py-2 border border-gray-600 rounded-lg bg-[#111827] text-white placeholder-gray-400 focus:ring-2 focus:ring-[#fbae55] focus:border-transparent"
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
                            <table class="min-w-full divide-y divide-gray-600" id="usersTable">
                                <thead class="bg-[#111827]">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-[#fbae55] uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-[#fbae55] uppercase tracking-wider">Request Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-[#fbae55] uppercase tracking-wider">Pay</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-[#fbae55] uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-[#fbae55] uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-[#1f2937] divide-y divide-gray-700" id="usersTbody">
                                    @forelse ($trainerRequests as $request)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-white">{{ $request->user->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-400">{{ $request->created_at->format('M d, Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $request->pay == 'false' ? 'bg-yellow-500 text-black' : 'bg-green-500 text-white' }}">
                                                    {{ $request->pay == 'false' ? 'Not Paid' : 'Paid' }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $request->status == 'Pending' ? 'bg-yellow-500 text-black' : ($request->status == 'Approved' ? 'bg-green-500 text-white' : 'bg-red-500 text-white') }}">
                                                    {{ $request->status }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <form action="{{ route('trainer-requests.approve', $request) }}" method="POST" class="inline-block">@csrf
                                                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">Approve</button>
                                                </form>
                                                <form action="{{ route('trainer-requests.reject', $request) }}" method="POST" class="inline-block">@csrf
                                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">Reject</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-6 py-4 text-center text-gray-400">No trainer requests available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       

    </div>
</x-app-layout>
