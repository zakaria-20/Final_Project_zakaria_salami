 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="max-w-7xl mx-auto py-6 px-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="#" class="text-xl font-bold text-[#f9ac54]">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
            </a>
        </div>
        <div class="flex gap-x-2">
        <a href="/register"><button class="px-6 py-2 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] hover:text-black transition md:block hidden">
            Register
        </button></a>
        <a href="/login"><button class="px-6 py-2 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] hover:text-black transition md:block hidden">
            Login
        </button></a>
    </div>
    </nav>


    <header class="relative bg-gray-900 h-full pt-24 pb-32">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-6 md:px-10">
        
            <div class="text-center md:text-left">
                <h4 class="text-[#f9ac54] font-semibold text-lg mb-4">BEST FITNESS IN THE TOWN</h4>
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#f9ac54] to-white">MAKE</span>
                    <span class="text-white ml-2">YOUR</span><br>BODY SHAPE
                </h1>
                <p class="text-gray-400 mb-8">
                    Unleash your potential and embark on a journey towards a stronger, fitter, and more confident you. 
                    Sign up for 'Make Your Body Shape' now and witness the incredible transformation your body is capable of!
                </p>
                <button class="px-7 py-3 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] hover:text-black transition">
                    Get Started
                </button>
            </div>

        
       
            <div class="relative w-[400px] h-[400px] mx-auto mt-10 md:mt-0">
       
            <div class="absolute inset-0 rounded-full" style="background: conic-gradient(from 180deg at 30% 30%, #f9ac54 0deg, white 360deg);"></div>
            
           
            <div class="absolute inset-[30px] rounded-full" style="background: conic-gradient(from 180deg at 50% 50%, rgba(249, 172, 84, 0.3) 0deg, white 360deg);"></div>
    
           
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="{{ asset('images/header.png') }}" alt="Fitness model" class="max-w-[100%] h-auto object-contain rounded-full shadow-lg">
            </div>
            </div> 

        </div>
    </header>
   
    <section class="bg-white py-16">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-10 px-6">
      
        <div>
            <h2 class="text-3xl md:text-5xl font-bold mb-6 text-[#111827]">
                Transform Your Fitness Journey
            </h2>
            <p class="text-gray-400 mb-6 leading-relaxed">
                At <span class="text-[#f9ac54] font-semibold">Fitness Pro</span>, we are passionate about empowering individuals to achieve their health and fitness goals. Our expert trainers, state-of-the-art facilities, and customized plans ensure your success every step of the way.
            </p>
            <ul class="list-disc text-gray-400 pl-6 space-y-3">
                <li>Professional trainers to guide you</li>
                <li>Custom fitness programs tailored to your needs</li>
                <li>Community-driven atmosphere</li>
                <li>State-of-the-art equipment</li>
            </ul>
        </div>
     
        <div>
            <img src="https://images.pexels.com/photos/5842229/pexels-photo-5842229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="About Us" class="rounded-lg shadow-lg h-[70vh] w-[80vw]">
        </div>
    </div>
    </section>
   
    <section class="bg-gray-800 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-white text-center mb-10">Our Programs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Program Card -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <img src="https://images.pexels.com/photos/931321/pexels-photo-931321.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Program 1" class="w-full h-48 object-cover rounded-md mb-6">
                <h3 class="text-xl font-semibold text-white mb-4">Weight Training</h3>
                <p class="text-gray-400 mb-4">
                    Build strength and endurance with our comprehensive weight training programs.
                </p>
                <button class="px-4 py-2 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] transition">
                    Learn More
                </button>
            </div>
            <!-- Program Card -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <img src="https://images.pexels.com/photos/4753990/pexels-photo-4753990.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Program 2" class="w-full h-48 object-cover rounded-md mb-6">
                <h3 class="text-xl font-semibold text-white mb-4">Cardio Workouts</h3>
                <p class="text-gray-400 mb-4">
                    Boost your heart health and energy levels with our high-energy cardio classes.
                </p>
                <button class="px-4 py-2 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] transition">
                    Learn More
                </button>
            </div>
            <!-- Program Card -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <img src="https://images.pexels.com/photos/8436493/pexels-photo-8436493.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Program 3" class="w-full h-48 object-cover rounded-md mb-6">
                <h3 class="text-xl font-semibold text-white mb-4">Yoga Classes</h3>
                <p class="text-gray-400 mb-4">
                    Enhance flexibility and mindfulness with our expert-led yoga sessions.
                </p>
                <button class="px-4 py-2 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] transition">
                    Learn More
                </button>
            </div>
        </div>
    </div>
    </section>

<section class="bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-white text-center mb-10">What Our Members Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial Card -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <p class="text-gray-400 mb-4">
                    "Joining Fitness Pro was the best decision of my life. The trainers are incredibly supportive!"
                </p>
                <div class="flex items-center">
                    <img src="https://www.utopix.com/fr/blog/wp-content/uploads/2024/04/Y2E4OTI3NzQtNmUyOC00YmU2LWE5ZjctODcxY2RlMzg2ZDIy_26dfc43e-31dd-463f-ad04-56f39a430691_profilhomme1-scaled.jpg" alt="Member 1" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-white font-semibold">Jane Doe</h4>
                        <span class="text-[#f9ac54] text-sm">Member</span>
                    </div>
                </div>
            </div>
            <!-- Testimonial Card -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <p class="text-gray-400 mb-4">
                    "The facilities are top-notch, and the community is so motivating. Highly recommend!"
                </p>
                <div class="flex items-center">
                    <img src="https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp" alt="Member 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-white font-semibold">John Smith</h4>
                        <span class="text-[#f9ac54] text-sm">Member</span>
                    </div>
                </div>
            </div>
            <!-- Testimonial Card -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <p class="text-gray-400 mb-4">
                    "The yoga classes have transformed my mind and body. Thank you, Fitness Pro!"
                </p>
                <div class="flex items-center">
                    <img src="https://media.istockphoto.com/id/1386479313/fr/photo/heureuse-femme-daffaires-afro-am%C3%A9ricaine-mill%C3%A9naire-posant-isol%C3%A9e-sur-du-blanc.jpg?s=612x612&w=0&k=20&c=CS0xj40eNCorQyzN1ImeMKlvPDocPHSaMsXethQ-Q_g=" alt="Member 3" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="text-white font-semibold">Sarah Lee</h4>
                        <span class="text-[#f9ac54] text-sm">Member</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action Section -->

<section 
    class="relative  py-16 bg-cover bg-center"
    style="background-image: url('https://images.pexels.com/photos/791763/pexels-photo-791763.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');"
>
    <div class="absolute inset-0 "></div>
    <div class="relative max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
            Ready to Transform Your Life?
        </h2>
        <p class="text-white text-lg mb-8">
            Sign up today and become part of the Fitness Pro community. Take the first step towards your fitness goals!
        </p>
        <a href="/register" class="px-8 py-3 bg-[#f9ac54] text-black rounded-md hover:bg-[#f4b66b] transition">
            Get Started Now
        </a>
    </div>
</section>


<section class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-white text-center mb-12">Get in Touch</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <form action="#" method="POST" class="bg-gray-800 p-8 rounded-lg shadow-lg space-y-6">
                <div>
                    <label for="name" class="block text-gray-400 mb-2">Name</label>
                    <input type="text" id="name" name="name" required 
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#f9ac54]">
                </div>
                <div>
                    <label for="email" class="block text-gray-400 mb-2">Email</label>
                    <input type="email" id="email" name="email" required 
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#f9ac54]">
                </div>
                <div>
                    <label for="message" class="block text-gray-400 mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required 
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#f9ac54]"></textarea>
                </div>
                <button type="submit" 
                    class="w-full px-4 py-2 bg-[#f9ac54] text-black font-semibold rounded-md hover:bg-[#f4b66b] transition">
                    Send Message
                </button>
            </form>
            <!-- Contact Information -->
            <div class="text-gray-400 space-y-8">
                <div>
                    <h3 class="text-2xl font-semibold text-white mb-3">Our Address</h3>
                    <p>123 Fitness Street, Suite 456<br>Healthy City, FIT 78910</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-white mb-3">Call Us</h3>
                    <p>(+123) 456-7890</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-white mb-3">Email Us</h3>
                    <p>info@fitnesspro.com</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-white mb-3">Follow Us</h3>
                    <div class="flex space-x-6">
                        <!-- Social Icons -->
                        <a href="#" class="text-[#f9ac54] hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.437 9.878v-6.978h-2.54v-2.9h2.54V9.845c0-2.508 1.493-3.89 3.779-3.89 1.096 0 2.238.195 2.238.195v2.46h-1.261c-1.244 0-1.631.774-1.631 1.563v1.873h2.773l-.444 2.9h-2.329v6.978C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#f9ac54] hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.28 4.28 0 0 0 1.89-2.37c-.84.5-1.78.85-2.78 1.05a4.28 4.28 0 0 0-7.29 3.9A12.15 12.15 0 0 1 2.13 4.16a4.28 4.28 0 0 0 1.32 5.72 4.25 4.25 0 0 1-1.94-.54v.06a4.28 4.28 0 0 0 3.43 4.2c-.45.12-.92.18-1.4.18-.34 0-.67-.03-1-.09a4.28 4.28 0 0 0 4 2.96 8.57 8.57 0 0 1-5.3 1.83c-.35 0-.7-.02-1.04-.06A12.13 12.13 0 0 0 6.29 19c7.88 0 12.2-6.54 12.2-12.2 0-.19 0-.39-.01-.58A8.73 8.73 0 0 0 22.46 6z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#f9ac54] hover:scale-110 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.16C6.4 2.16 2.16 6.4 2.16 12 2.16 17.6 6.4 21.84 12 21.84c5.6 0 9.84-4.24 9.84-9.84 0-5.6-4.24-9.84-9.84-9.84zm0 3.5a2.69 2.69 0 1 1 0 5.38 2.69 2.69 0 0 1 0-5.38zm0 14.2c-3.36 0-6.32-2.06-7.58-5.04.03-.38.74-2.34 2.33-2.97 1.04-.4 2.72-.44 4.25-.44.16 0 .33 0 .5.02 1.53.02 3.22.05 4.26.45 1.58.63 2.3 2.58 2.33 2.96-1.26 2.99-4.23 5.06-7.59 5.06z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="bg-gray-800 py-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- About Us -->
        <div>
            <h3 class="text-xl font-semibold text-white mb-4">About Fitness Pro</h3>
            <p class="text-gray-400 leading-relaxed">
                Fitness Pro is your ultimate destination for fitness, wellness, and community. Transform your life with us today!
            </p>
        </div>
        <!-- Quick Links -->
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
        <!-- Subscribe -->
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

 
    <div class="md:hidden fixed top-0 left-0 w-full bg-black px-4 py-6 shadow-lg">
        <div class="flex items-center justify-between">
            <a href="#" class="text-[#f9ac54] text-xl font-bold">Logo</a>
            <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                ☰
            </button>
        </div>
        <ul id="mobile-menu" class="hidden mt-4 space-y-4">
            <li><a href="#" class="block text-[#f9ac54] hover:text-white transition">Home</a></li>
            <li><a href="#" class="block hover:text-white transition">Program</a></li>
            <li><a href="#" class="block hover:text-white transition">Service</a></li>
            <li><a href="#" class="block hover:text-white transition">About</a></li>
            <li><a href="#" class="block hover:text-white transition">Community</a></li>
        </ul>
    </div>

  
    <script>
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const menu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
