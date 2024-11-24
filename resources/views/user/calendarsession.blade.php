{{-- 






    <button id="show" class="hidden bg-rose-500 text-white rounded-md px-4 py-2 hover:bg-rose-700 transition"
        onclick="openModal('showcourse')">
        Create course
    </button>

    <!-- Modal for course details -->
 <!-- Modal for course details -->
<div id="showcourse" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-20 mx-auto shadow-xl rounded-md bg-white max-w-md">
        <div class="flex justify-end p-2">
            <button onclick="closeModal('showcourse')" type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div id="div" class="p-6 max-w-lg mx-auto bg-white rounded-lg shadow-md space-y-4">
            <h1 id="name" class="text-2xl font-bold text-gray-800"></h1>
            <h1 id="description" class="text-sm text-gray-600"></h1>
            <div id="dynamic-content"></div>
          
            <form id="join-form"  method="POST">
                    @csrf
                    <button class="w-full py-3 bg-[#f9ac54] text-white rounded-md shadow-md hover:bg-[#e69a49]">Join Session</button>
            </form>
        
        </div>
        

    </div>
</div>

    <script type="text/javascript">

        window.openModal = function(modalId) {
            document.getElementById(modalId).style.display = 'block';
            document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');
        };

        window.closeModal = function(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
        };

        // Close all modals when press ESC
        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
                let modals = document.getElementsByClassName('modal');
                Array.prototype.slice.call(modals).forEach(i => {
                    i.style.display = 'none';
                });
            }
        };
    </script>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @role(["trainer"])
            <div x-data="{ openModal: false }">
                <button id="session" 
                    @click="openModal = true" 
                    class="px-6 py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-300 mb-6 hidden"
                >
                    Create New Session
                </button>
    
                <!-- Modal -->
                <div 
                    x-show="openModal" 
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:leave="transition ease-in duration-200"
                    @click.away="openModal = false"
                >
                    <div 
                        class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg"
                        x-show="openModal"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:leave="transition ease-in duration-200 transform"
                    >
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Create New Session</h2>
                            <button @click="openModal = false" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                        </div>
                        <form action="{{ route('sessions.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-4">
                                <div>
                                    <label for="image" class="block text-sm font-medium text-gray-700">Session Image</label>
                                    <input type="file" id="image" name="image" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                <div class="flex gap-x-2">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Session Name</label>
                                    <input type="text" id="name" name="name" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                <div>
                                    <label for="day" class="block text-sm font-medium text-gray-700">Day</label>
                                    <input type="text" id="day" name="day" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                </div>
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea 
                                            id="description" 
                                            name="description" 
                                            rows="4" 
                                            class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm w-full" 
                                            required></textarea>
    
                                </div>
                                <div>
                                    <label for="spots" class="block text-sm font-medium text-gray-700">Available Spots</label>
                                    <input type="number" id="spots" name="spots" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                <div class="flex gap-x-2">
                                <div>
                                    <input name="start" id="start" type="datetime-local">
                                </div>
                                <div>
                                    <input name="end" id="end" type="datetime-local">
                                </div>
                            </div>
                                <div>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="is_premium" value="1" class="rounded">
                                        <span class="text-sm font-medium text-gray-700">Premium Session</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button 
                                    type="submit" 
                                    class="w-full py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-300"
                                >
                                    Create Session
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
             @endRole
      

             <div class="w-full h-[90vh] bg-white rounded-3xl border-none p-3" id="calendar"></div>



            <script>
                document.addEventListener('DOMContentLoaded', async function() {
                    let response = await axios.get("/calendar/create")
                    let events = response.data.sesions

                    console.log(events)


                    var myCalendar = document.getElementById('calendar');



                    var calendar = new FullCalendar.Calendar(myCalendar, {

                        headerToolbar: {
                            left: 'timeGridWeek',
                            center: 'title',
                            // right: 'listMonth,listWeek,listDay'
                        },


                        views: {
                            listDay: { // Customize the name for listDay
                                buttonText: 'Day Events',

                            },
                            listWeek: { // Customize the name for listWeek
                                buttonText: 'Week Events'
                            },
                            listMonth: { // Customize the name for listMonth
                                buttonText: 'Month Events'
                            },
                            timeGridWeek: {
                                buttonText: 'Week', // Customize the button text
                            },
                            timeGridDay: {
                                buttonText: "Day",
                            },
                            dayGridMonth: {
                                buttonText: "Month",
                            },

                        },


                        initialView: "timeGridWeek", // initial view  =   l view li kayban  mni kan7ol l  calendar
                        slotMinTime: "09:00:00", // min  time  appear in the calendar
                        slotMaxTime: "19:00:00", // max  time  appear in the calendar
                        nowIndicator: true, //  indicator  li kaybyen  l wa9t daba   fin  fl calendar
                        selectable: true, //   kankhali l user  i9ad  i selectioner  wast l calendar
                        selectMirror: true, //  overlay   that show  the selected area  ( details  ... )
                        selectOverlap: false, //  nkhali ktar mn event f  nfs  l wa9t  = e.g:   5 nas i reserviw nfs lblasa  f nfs l wa9t
                        weekends: true, // n7ayed  l weekends    ola nkhalihom 
                        editable: true,
                        droppable: true,


                        // events  hya  property dyal full calendar
                        //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                        events: events,


                        eventClick: (info) => {


                        // let a = info.event._def.extendedProps
                        // let tranzabadan = document.getElementById('tranzabadan');
                        // let eventStartTime = new Date(a.start_time);
                        // let eventEndTime = new Date(a.end_time);
                        // let nowDate = new Date();
                        // show.click()
                        // let name = document.getElementById('name');
                        // let description = document.getElementById('description');
                        // name.textContent = "Session Name : " + info.event._def.title;
                        // description.textContent = "description the session : " + a.description;
                        let extendedProps = info.event.extendedProps
                        console.log("dddd",info.event._def);
                        
                        let nameElement = document.getElementById('name');
                        let descriptionElement = document.getElementById('description');
                        let joinForm = document.getElementById('join-form');
                        nameElement.textContent = "Session Name: " + info.event.title;
                        descriptionElement.textContent = "Description: " + extendedProps.description;
                        joinForm.action = `/sessions/join/${info.event._def.publicId}`;
                        // let dynamicContent = document.getElementById('dynamic-content');
                        document.getElementById('showcourse').style.display = 'block';
                    
                       
                       
},

                    
                        select: (info) => {
                            console.log(info);


                            if (info.end.getDate() - info.start.getDate() > 0 && !info.allDay) {
                                return
                            }

                            if (info.allDay) {
                                start.value = info.startStr + " 09:00:00"
                                end.value = info.startStr + " 19:00:00"

                            } else {
                                start.value = info.startStr.slice(0, info.startStr.length - 6)
                                end.value = info.endStr.slice(0, info.endStr.length - 6)
                            }

                            session.click()
                        },

                    });

                    calendar.render();

                    function closeModal(modalId) { document.getElementById(modalId).style.display = 'none'; }


                })
            </script>


        </div>
    </div>



 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 </head>
 <body class="bg-[#1f2937]">
    @include("layouts.navbar")
  

    <!-- Modal for course details -->
@foreach ($sessions as $session)
    <!-- Hidden Button to Open Modal -->
    <button 
        class="hidden bg-[#fbae55] text-white rounded-lg px-6 py-3 hover:bg-[#f9ac54] transition duration-300 ease-in-out" 
        id="session{{ $session->id }}" 
        onclick="openModal('sessionInfo{{ $session->id }}')">
        Click to Open Modal
    </button>

    <!-- Modal -->
    <div 
        id="sessionInfo{{ $session->id }}" 
        class="fixed hidden z-50 inset-0 bg-[#111827] bg-opacity-60 overflow-y-auto h-full w-full px-4">
        
        <!-- Modal Content -->
        <div class="relative top-1/4 mx-auto bg-[#1f2937] text-white rounded-xl shadow-2xl transform transition-all duration-300 ease-in-out w-full max-w-lg">
            <!-- Close Button -->
            <div class="flex justify-end p-4">
                <button 
                    onclick="closeModal('sessionInfo{{ $session->id }}')" 
                    class="text-gray-400 hover:bg-gray-700 hover:text-white rounded-full p-2">
                    <svg 
                        class="w-6 h-6" 
                        fill="currentColor" 
                        viewBox="0 0 20 20" 
                        xmlns="http://www.w3.org/2000/svg">
                        <path 
                            fill-rule="evenodd" 
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" 
                            clip-rule="evenodd">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 pb-8">
                <!-- Session Details -->
                <h1 class="text-3xl font-semibold text-center text-[#fbae55]">{{ $session->name }}</h1>
                <p class="text-center text-gray-400">Owner: {{ $session->trainer->name }}</p>

                <!-- Date and Time -->
                <div class="mt-6 flex items-center justify-between text-sm text-gray-300">
                    <p>
                        <span class="font-medium text-[#fbae55]">Start:</span> 
                        {{ \Carbon\Carbon::parse($session->start)->format('F j, Y g:i A') }}
                    </p>
                    <p>
                        <span class="font-medium text-[#fbae55]">End:</span> 
                        {{ \Carbon\Carbon::parse($session->end)->format('F j, Y g:i A') }}
                    </p>
                </div>

                <!-- Description -->
                <p class="mt-4 text-gray-300">
                    <span class="font-medium text-[#fbae55]">Description:</span> 
                    {{ $session->description }}
                </p>

                <!-- Spots and Actions -->
                <div class="mt-6 flex items-center justify-between text-sm text-gray-300">
                    <p>
                        <span class="font-medium text-[#fbae55]">Spots:</span> 
                        {{ $session->spots }}
                    </p>
                </div>

                <!-- Actions -->
                <div class="mt-6 space-y-4">
                    @if (Auth::user()->hasRole(['member', 'trainer']))
                        @if ($session->spots <= 0)
                            <button 
                                class="w-full py-3 bg-gray-600 text-white rounded-md cursor-not-allowed" 
                                disabled>
                                Session Full
                            </button>
                        @elseif (Auth::user()->sessions->contains($session->id))
                            <div class="flex justify-center items-center gap-x-4">
                                <button 
                                    class="px-2 py-3 bg-gray-600 text-white rounded-md cursor-not-allowed" 
                                    disabled>
                                    Already Enrolled
                                </button>
                                <a 
                                    href="{{ route('sessions.show', $session->id) }}" 
                                    class="text-[#fbae55] font-medium underline">
                                    View Session
                                </a>
                            </div>
                        @else
                            @if ($session->is_premium)
                                <form action="#" method="POST">
                                    @csrf
                                    <button 
                                        class="w-full py-3 bg-green-600 text-white rounded-md shadow-md hover:bg-green-700">
                                        Pay for Premium
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('sessions.join', $session->id) }}" method="POST">
                                    @csrf
                                    <button 
                                        class="w-full py-3 bg-[#fbae55] text-black rounded-md shadow-md hover:bg-[#e69a49]">
                                        Join Session
                                    </button>
                                </form>
                            @endif
                        @endif
                    @endif

                    @if (Auth::user()->id == $session->trainer_id)
                        <form action="{{ route('session.delete', $session->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button 
                                class="w-full py-3 bg-red-600 text-white rounded-md shadow-md hover:bg-red-700">
                                Delete Session
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
    <script type="text/javascript">

        window.openModal = function(modalId) {
            document.getElementById(modalId).style.display = 'block';
            document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');
        };

        window.closeModal = function(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
        };

        // Close all modals when press ESC
        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
                let modals = document.getElementsByClassName('modal');
                Array.prototype.slice.call(modals).forEach(i => {
                    i.style.display = 'none';
                });
            }
        };
    </script>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @role(["trainer"])
            <div x-data="{ openModal: false }">
                <button id="session" 
                    @click="openModal = true" 
                    class="px-6 py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-300 mb-6 hidden"
                >
                    Create New Session
                </button>
    
                <!-- Modal -->
                <div 
                    x-show="openModal" 
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:leave="transition ease-in duration-200"
                    @click.away="openModal = false"
                >
                    <div 
                        class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg"
                        x-show="openModal"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:leave="transition ease-in duration-200 transform"
                    >
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Create New Session</h2>
                            <button @click="openModal = false" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                        </div>
                        <form action="{{ route('sessions.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-4">
                                <div>
                                    <label for="image" class="block text-sm font-medium text-gray-700">Session Image</label>
                                    <input type="file" id="image" name="image" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                <div class="flex gap-x-2">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Session Name</label>
                                    <input type="text" id="name" name="name" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                <div>
                                    <label for="day" class="block text-sm font-medium text-gray-700">Day</label>
                                    <input type="text" id="day" name="day" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                </div>
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea 
                                            id="description" 
                                            name="description" 
                                            rows="4" 
                                            class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm w-full" 
                                            required></textarea>
    
                                </div>
                                <div>
                                    <label for="spots" class="block text-sm font-medium text-gray-700">Available Spots</label>
                                    <input type="number" id="spots" name="spots" required class="block w-full mt-1 rounded-md border-gray-300 shadow-sm">
                                </div>
                                <div class="flex gap-x-2">
                                <div>
                                    <input name="start" id="start" type="datetime-local">
                                </div>
                                <div>
                                    <input name="end" id="end" type="datetime-local">
                                </div>
                            </div>
                                <div>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="is_premium" value="1" class="rounded">
                                        <span class="text-sm font-medium text-gray-700">Premium Session</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button 
                                    type="submit" 
                                    class="w-full py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-300"
                                >
                                    Create Session
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
             @endRole
      

             <div class="w-full h-[90vh] bg-white rounded-3xl border-none p-3" id="calendar"></div>



            <script>
                document.addEventListener('DOMContentLoaded', async function() {
                    let response = await axios.get("/calendar/create")
                    let events = response.data.sesions
                  
                    console.log("ddddddddd",events)


                    var myCalendar = document.getElementById('calendar');



                    var calendar = new FullCalendar.Calendar(myCalendar, {

                        // headerToolbar: {
                        //     left: 'timeGridWeek',
                        //     center: 'title',
                        //     // right: 'listMonth,listWeek,listDay'
                        // },
                        // initialView: 'dayGridMonth',
                        headerToolbar: {
                            start: 'prev,next today',
                            center: 'title',
                            end: 'dayGridMonth,timeGridWeek,timeGridDay',
                        },
                   
                        views: {
                            listDay: { // Customize the name for listDay
                                buttonText: 'Day Events',

                            },
                            listWeek: { // Customize the name for listWeek
                                buttonText: 'Week Events'
                            },
                            listMonth: { // Customize the name for listMonth
                                buttonText: 'Month Events'
                            },
                            timeGridWeek: {
                                buttonText: 'Week', // Customize the button text
                            },
                            timeGridDay: {
                                buttonText: "Day",
                            },
                            dayGridMonth: {
                                buttonText: "Month",
                            },
                          
                        },


                        initialView: "timeGridWeek", // initial view  =   l view li kayban  mni kan7ol l  calendar
                        slotMinTime: "09:00:00", // min  time  appear in the calendar
                        slotMaxTime: "19:00:00", // max  time  appear in the calendar
                        nowIndicator: true, //  indicator  li kaybyen  l wa9t daba   fin  fl calendar
                        selectable: true, //   kankhali l user  i9ad  i selectioner  wast l calendar
                        selectMirror: true, //  overlay   that show  the selected area  ( details  ... )
                        selectOverlap: false, //  nkhali ktar mn event f  nfs  l wa9t  = e.g:   5 nas i reserviw nfs lblasa  f nfs l wa9t
                        weekends: true, // n7ayed  l weekends    ola nkhalihom 
                        editable: true,
                        droppable: true,


                        // events  hya  property dyal full calendar
                        //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                        events: events,


                    eventClick: (info) => {


                        // let a = info.event._def.extendedProps
                        // let tranzabadan = document.getElementById('tranzabadan');
                        // let eventStartTime = new Date(a.start_time);
                        // let eventEndTime = new Date(a.end_time);
                        // let nowDate = new Date();
                        // show.click()
                        // let name = document.getElementById('name');
                        // let description = document.getElementById('description');
                        // name.textContent = "Session Name : " + info.event._def.title;
                        // description.textContent = "description the session : " + a.description;
                        // let extendedProps = info.event.extendedProps
                        // console.log("dddd",info.event._def);
                        
                        // let nameElement = document.getElementById('name');
                        // let descriptionElement = document.getElementById('description');
                        // let joinForm = document.getElementById('join-form');
                        // nameElement.textContent = "Session Name: " + info.event.title;
                        // descriptionElement.textContent = "Description: " + extendedProps.description;
                        // joinForm.action = `/sessions/join/${info.event._def.publicId}`;
                        // let dynamicContent = document.getElementById('dynamic-content');
                        // document.getElementById('showcourse').style.display = 'block';
                        let eventId = info.event._def.publicId

                                let buttonId = `session${eventId}`;

                                let button = document.getElementById(buttonId);

                                button.click()
                    
                     },


                    
                        select: (info) => {
                            console.log(info);


                            if (info.end.getDate() - info.start.getDate() > 0 && !info.allDay) {
                                return
                            }

                            if (info.allDay) {
                                start.value = info.startStr + " 09:00:00"
                                end.value = info.startStr + " 19:00:00"

                            } else {
                                start.value = info.startStr.slice(0, info.startStr.length - 6)
                                end.value = info.endStr.slice(0, info.endStr.length - 6)
                            }

                            session.click()
                        },

                    });

                    calendar.render();

                    function closeModal(modalId) { document.getElementById(modalId).style.display = 'none'; }


                })
            </script>


        </div>
    </div>



 

 </body>
 </html>
