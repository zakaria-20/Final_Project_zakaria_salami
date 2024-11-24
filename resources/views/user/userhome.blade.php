


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#1f2937] text-white">

   
    @include("layouts.navbar")

  
    <section class="relative py-16">
     
        <div class="absolute top-0 left-0 w-full h-full bg-[#111827] z-[-1]"></div>
        <video class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" autoplay loop muted playsinline>
            <source src="https://videos.pexels.com/video-files/4761426/4761426-uhd_2732_1440_25fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
      
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-5xl font-extrabold text-[#f9ac54] mb-4">Join Our Training Sessions</h1>
            <p class="text-lg text-gray-300 mb-6">Achieve your fitness goals with our professional trainers and dynamic sessions.</p>
            <a href="#" class="px-8 py-3 bg-[#f9ac54] text-black font-medium rounded-md shadow-lg hover:bg-[#e69a49] transition">
                Explore Sessions
            </a>
        </div>
    </section>

  
    <div class="max-w-7xl mx-auto px-6 py-12">
     
        @role(["member"])
        <div class="bg-[#111827] shadow-lg rounded-lg p-6 mb-8">
            @if ($isPay && $isPay->pay == 'false' )
            <h2 class="text-2xl font-semibold text-[#f9ac54] mb-4">Payment Required</h2>
            <a href="cart/subscrip" 
                class="px-6 py-3 bg-[#f9ac54] text-black rounded-md shadow-md hover:bg-[#e69a49] transition">
                Proceed to Payment
            </a>
            @elseif ($isPay && $isPay->pay == 'true' )
                <h2 class="text-2xl font-semibold text-gray-300">Your request is pending approval.</h2>
            @else
            <h2 class="text-2xl font-semibold text-[#f9ac54] mb-4">Request to Become a Trainer</h2>
            <form action="{{ route('trainer-requests.store') }}" method="POST">
                @csrf
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-[#f9ac54] text-black rounded-md shadow-md hover:bg-[#e69a49] transition">
                    Submit Request
                </button>
            </form>
            @endif
        </div>
        @endRole

        @role(["trainer"])
        <div x-data="{ openModal: false }">
            <button  
                @click="openModal = true" 
                class="px-6 py-3 bg-[#f9ac54] text-black rounded-md shadow-md hover:bg-[#e69a49] transition mb-6">
                Create New Session
            </button>
            <!-- Modal -->
            <div 
                x-show="openModal" 
                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                x-transition:enter="transition ease-out duration-300"
                x-transition:leave="transition ease-in duration-200"
                @click.away="openModal = false">
                <div class="bg-[#1f2937] rounded-lg shadow-lg p-6 w-full max-w-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-[#f9ac54]">Create New Session</h2>
                        <button @click="openModal = false" class="text-gray-400 hover:text-gray-300 text-xl">&times;</button>
                    </div>
                    <form action="{{ route('sessions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-4">
                            <!-- Input Fields -->
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-300">Session Image</label>
                                <input type="file" id="image" name="image" required class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300">
                            </div>
                            <div class="flex gap-x-3">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300">Session Name</label>
                                <input type="text" id="name" name="name" required class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300">
                            </div>
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300">Day</label>
                                <input type="text" id="day" name="day" required class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300">
                            </div>
                            </div>
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                                <textarea 
                                        id="description" 
                                        name="description" 
                                        rows="4" 
                                        class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300"
                                        required></textarea>

                            </div>
                            <div>
                                <label for="spots" class="block text-sm font-medium text-gray-300">Available Spots</label>
                                <input type="number" id="spots" name="spots" required class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300">
                            </div>
                            <div class="flex gap-x-2">
                            <div>
                                <label for="start" class="block text-sm font-medium text-gray-300">Start Time</label>
                                <input type="datetime-local" min="{{ date('Y-m-d\TH:i') }}" id="start" name="start" required class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300">
                            </div>
                            <div>
                                <label for="end" class="block text-sm font-medium text-gray-300">End Time</label>
                                <input type="datetime-local" min="{{ date('Y-m-d\TH:i') }}" id="end" name="end" required class="block w-full mt-1 rounded-md bg-[#111827] text-gray-300">
                            </div>
                        </div>
                        <div>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="is_premium" value="1" class="rounded">
                                <span class="block text-sm font-medium text-gray-300">Premium Session</span>
                            </label>
                        </div>

                            <!-- Add more fields as required -->
                        </div>
                        <button 
                            type="submit" 
                            class="w-full py-3 mt-6 bg-[#f9ac54] text-black rounded-md shadow-md hover:bg-[#e69a49] transition">
                            Create Session
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endRole

       
       
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($sesions as $session)
            <div class="bg-[#1f2937] shadow-md rounded-lg overflow-hidden">
               
                <img src="{{ asset('images/'. $session->image) }}" alt="Session Image" class="w-full h-48 object-cover">
        
                <div class="p-6">
                  
                    <h3 class="text-2xl font-semibold text-[#f9ac54]">{{ $session->name }}</h3>
                    
                   
                    <p class="text-gray-400 mt-2"><strong>Day:</strong> {{ $session->day }}</p>
                    <p class="text-gray-400"><strong>Spots:</strong> {{ $session->spots }}</p>
                    
                    
                    <div class="mt-4">
                        @if (Auth::user()->hasRole(['member', 'trainer']))
                            <!-- Session Full Button -->
                            @if ($session->spots <= 0)
                                <button class="w-full py-3 bg-gray-600 text-white rounded-md shadow-md cursor-not-allowed" disabled>
                                    Session Full
                                </button>
                            @elseif (Auth::user()->sessions->contains($session->id))
                                <!-- Already Enrolled -->
                                <div class="flex items-center gap-2">
                                    <button class="px-4 py-2 bg-gray-600 text-white rounded-md shadow-md cursor-not-allowed" disabled>
                                        Already Enrolled
                                    </button>
                                    <a href="{{ route('sessions.show', $session->id) }}" class="text-[#f9ac54] font-medium">View Session</a>
                                </div>
                            @else
                                <!-- Join Session or Premium Pay Button -->

                              
                                @if (!(Auth::user()->id == $session->trainer_id) && $session->is_premium )
                               
                                    <form action="{{ route('session.subscrip', $session->id) }}" method="POST">
                                        @csrf
                                        
                                        <button class="w-full py-3 bg-green-600 text-white rounded-md shadow-md hover:bg-green-700">
                                            Pay for Premium
                                        </button>
                                    </form>
                             
                                @else
                                
                                    <form action="{{ route('sessions.join', $session->id) }}" method="POST">
                                        @csrf
                                        <button class="w-full py-3 bg-[#f9ac54] text-black rounded-md shadow-md hover:bg-[#e69a49]">
                                            Join Session
                                        </button>
                                    </form>
                                @endif
                            @endif
                        @endif
                      
                    


                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <footer class="bg-gray-800 mt-24  relative bottom-0">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
             
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">About Fitness Pro</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Fitness Pro is your ultimate destination for fitness, wellness, and community. Transform your life with us today!
                    </p>
                </div>
            
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-[#f9ac54] transition">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#f9ac54] transition">Programs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#f9ac54] transition">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#f9ac54] transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-[#f9ac54] transition">Contact</a></li>
                    </ul>
                </div>
            
                <div>
                    <h3 class="text-xl font-semibold text-white mb-4">Subscribe to Newsletter</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <input type="email" name="email" placeholder="Your Email" required 
                            class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#f9ac54]">
                        <button type="submit" 
                            class="w-full px-4 py-2 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] transition">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="text-center text-gray-400 text-sm mt-10">
                © 2024 Fitness Pro. All rights reserved.
            </div>
        </footer>
        
    </div>
</body>
</html>
