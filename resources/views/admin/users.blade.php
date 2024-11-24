<x-app-layout>
    <div class="flex justify-between bg-[#1f2937]">
        <div>
            @include("layouts.sidebar")
        </div>
        <div class="">
            {{-- <div class="py-12 w-[80vw]">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-2xl font-bold text-gray-800">Users Management</h2>
                            </div>
            
                            <!-- Search and Filter Section -->
                            <div class="flex flex-col sm:flex-row gap-4 mb-6">
                                <div class="flex-1">
                                    <div class="relative">
                                        <input
                                            type="text"
                                            id="searchInput"
                                            placeholder="Search users..."
                                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </div>
                                </div>
                                <div class="relative">
                                    <select
                                        id="roleSelect"
                                        class="pl-10 pr-8 py-2 border border-gray-300 rounded-lg appearance-none bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    >
                                        <option value="">All Roles</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Trainer">Trainer</option>
                                        <option value="Member">Member</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                </div>
                            </div>
            
                            <!-- Users Table -->
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200" id="usersTable">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200" id="usersTbody">
                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                            </td>
                                            @foreach($user->roles as $role) <!-- Access roles as a property -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    {{ $role->name === 'Trainer' ? 'bg-purple-100 text-purple-800' : 
                                                       ($role->name === 'Member' ? 'bg-blue-100 text-blue-800' : 
                                                       'bg-green-100 text-green-800') }}">
                                                    {{ $role->name }} <!-- Display the role name -->
                                                </span>
                                            </td>
                                            @endforeach
                                        
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <button
                                                     onclick="editUser()"
                                                    class="text-blue-600 hover:text-blue-900 mr-4"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    onclick="deleteUser()"
                                                    class="text-red-600 hover:text-red-900"
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="py-12 w-[80vw]">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-[#1f2937] shadow-xl sm:rounded-lg overflow-hidden">
                        <!-- Header -->
                        <div class="p-6 bg-[#111827] text-white border-b border-gray-700">
                            <div class="flex justify-between items-center">
                                <h2 class="text-3xl font-bold">Users Management</h2>
                            </div>
                        </div>
            
                        <!-- Search and Filter Section -->
                        <div class="p-6 bg-[#1f2937]">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <!-- Search Input -->
                                <div class="flex-1 relative">
                                    <input
                                        type="text"
                                        id="searchInput"
                                        placeholder="Search users..."
                                        class="w-full pl-12 pr-4 py-2 rounded-lg border border-gray-600 bg-[#111827] text-gray-300 placeholder-gray-500 focus:ring-2 focus:ring-[#fbae55] focus:outline-none"
                                    />
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
            
                                <!-- Role Filter -->
                                <div class="relative">
                                    <select
                                        id="roleSelect"
                                        class="pl-12 pr-8 py-2 rounded-lg border border-gray-600 bg-[#111827] text-gray-300 focus:ring-2 focus:ring-[#fbae55] focus:outline-none"
                                    >
                                        <option value="">All Roles</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Trainer">Trainer</option>
                                        <option value="Member">Member</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </div>
            
                        <!-- Users Table -->
                        <div class="overflow-x-auto bg-[#1f2937]">
                            <table class="min-w-full divide-y divide-gray-700 text-gray-300">
                                <thead class="bg-[#111827]">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-[#fbae55]">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-[#fbae55]">Email</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-[#fbae55]">Role</th>
                                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-[#fbae55]">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-700">
                                    @forelse ($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium">{{ $user->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm">{{ $user->email }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @foreach($user->roles as $role)
                                            <span class="px-2 inline-flex text-xs font-semibold rounded-full
                                                {{ $role->name === 'Trainer' ? 'bg-purple-100 text-purple-800' :
                                                   ($role->name === 'Member' ? 'bg-blue-100 text-blue-800' :
                                                   'bg-green-100 text-green-800') }}">
                                                {{ $role->name }}
                                            </span>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                                            <button onclick="editUser()" class="text-[#fbae55] hover:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </button>
                                            <button onclick="deleteUser()" class="text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                            </button>
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
            
            {{-- <div id="editModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="relative bg-white rounded-lg max-w-lg w-full">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">Edit User</h3>
                            <form id="editForm" class="mt-4 space-y-4">
                                @csrf
                                @method('PUT')
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                    <select name="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="Admin">Admin</option>
                                        <option value="Trainer">Trainer</option>
                                        <option value="Member">Member</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Status</label>
                                    <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button" onclick="submitEdit()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Save Changes
                            </button>
                            <button type="button" onclick="closeEditModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div id="editModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <!-- Background Overlay -->
                    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
            
                    <!-- Modal Content -->
                    <div class="relative bg-[#1f2937] rounded-lg max-w-lg w-full shadow-lg">
                        <!-- Header -->
                        <div class="p-6 bg-[#111827] rounded-t-lg">
                            <h3 class="text-2xl font-bold text-[#fbae55]">Edit User</h3>
                        </div>
            
                        <!-- Form -->
                        <div class="p-6">
                            <form id="editForm" class="space-y-6">
                                @csrf
                                @method('PUT')
            
                                <!-- Name Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-300">Name</label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        class="mt-1 block w-full rounded-md border border-gray-600 bg-[#111827] text-gray-300 shadow-sm focus:ring-[#fbae55] focus:border-[#fbae55] placeholder-gray-500"
                                        placeholder="Enter user name"
                                    >
                                </div>
            
                                <!-- Role Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-300">Role</label>
                                    <select 
                                        name="role" 
                                        class="mt-1 block w-full rounded-md border border-gray-600 bg-[#111827] text-gray-300 shadow-sm focus:ring-[#fbae55] focus:border-[#fbae55]"
                                    >
                                        <option value="Admin">Admin</option>
                                        <option value="Trainer">Trainer</option>
                                        <option value="Member">Member</option>
                                    </select>
                                </div>
            
                                <!-- Status Field -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-300">Status</label>
                                    <select 
                                        name="status" 
                                        class="mt-1 block w-full rounded-md border border-gray-600 bg-[#111827] text-gray-300 shadow-sm focus:ring-[#fbae55] focus:border-[#fbae55]"
                                    >
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </form>
                        </div>
            
                        <!-- Footer -->
                        <div class="bg-[#111827] px-4 py-3 sm:px-6 flex justify-end gap-4 rounded-b-lg">
                            <!-- Save Button -->
                            <button 
                                type="button" 
                                onclick="submitEdit()" 
                                class="inline-flex justify-center rounded-md px-4 py-2 bg-[#fbae55] text-white font-medium hover:bg-[#f9ac54] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#fbae55]"
                            >
                                Save Changes
                            </button>
            
                            <!-- Cancel Button -->
                            <button 
                                type="button" 
                                onclick="closeEditModal()" 
                                class="inline-flex justify-center rounded-md px-4 py-2 border border-gray-600 bg-[#1f2937] text-gray-300 hover:bg-[#111827] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#fbae55]"
                            >
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <div id="deleteModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="relative bg-white rounded-lg max-w-lg w-full">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">Delete User</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Are you sure you want to delete this user? This action cannot be undone.
                            </p>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Delete
                                </button>
                            </form>
                            
                            <button type="button" onclick="closeDeleteModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div id="deleteModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <!-- Background Overlay -->
                    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
            
                    <!-- Modal Content -->
                    <div class="relative bg-[#1f2937] rounded-lg max-w-lg w-full shadow-lg">
                        <!-- Modal Header -->
                        <div class="p-6 bg-[#111827] rounded-t-lg">
                            <h3 class="text-2xl font-bold text-[#fbae55]">Delete User</h3>
                        </div>
            
                        <!-- Modal Body -->
                        <div class="p-6">
                            <p class="text-sm text-gray-300">
                                Are you sure you want to delete this user? This action cannot be undone.
                            </p>
                        </div>
            
                        <!-- Modal Footer -->
                        <div class="bg-[#111827] px-4 py-3 flex justify-end gap-4 rounded-b-lg">
                            <!-- Delete Button -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button 
                                    type="submit" 
                                    class="inline-flex justify-center rounded-md px-4 py-2 bg-red-600 text-white font-medium hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                >
                                    Delete
                                </button>
                            </form>
            
                            <!-- Cancel Button -->
                            <button 
                                type="button" 
                                onclick="closeDeleteModal()" 
                                class="inline-flex justify-center rounded-md px-4 py-2 border border-gray-600 bg-[#1f2937] text-gray-300 hover:bg-[#111827] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#fbae55]"
                            >
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                let currentUserId = null;
                function editUser() {
                    document.getElementById('editModal').classList.remove('hidden');
                }
                function closeEditModal() {
                    document.getElementById('editModal').classList.add('hidden');
                    currentUserId = null;
                }
                function deleteUser() {
                    document.getElementById('deleteModal').classList.remove('hidden');
                }
                function closeDeleteModal() {
                    document.getElementById('deleteModal').classList.add('hidden');
                    currentUserId = null;
                }
            </script>
        </div>
        
    </div>
 

</x-app-layout>