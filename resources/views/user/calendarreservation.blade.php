
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
  
    <div id="deleteModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4">
            <!-- Background Overlay -->
            <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"></div>
    
            <!-- Modal Content -->
            <div class="relative bg-[#1f2937] rounded-lg max-w-lg w-full shadow-lg">
                <!-- Modal Header -->
                <div class="p-6 bg-[#111827] rounded-t-lg">
                    <h3 class="text-2xl font-bold text-[#fbae55]">Delete Reservation</h3>
                </div>
    
                <!-- Modal Body -->
                <div class="p-6">
                    <p class="text-sm text-gray-300">
                        Are you sure you want to delete this reservation? This action cannot be undone.
                    </p>
                </div>
    
                <!-- Modal Footer -->
                <div class="bg-[#111827] px-4 py-3 flex justify-end gap-4 rounded-b-lg">
                    <!-- Delete Button -->
                    <form id="form" method="POST">
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
    <script type="text/javascript">
           function deleteUser() {
                    document.getElementById('deleteModal').classList.remove('hidden');
                }
                function closeDeleteModal() {
                    document.getElementById('deleteModal').classList.add('hidden');
                    currentUserId = null;
                }
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

            @role(["member"])
            <div x-data="{ openModal: false }">
                <button id="session" 
                    @click="openModal = true" 
                    class="px-6 py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-300 mb-6 hidden"
                >
                   Reservation
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
                            <h2 class="text-xl font-semibold text-gray-800">Reservation</h2>
                            <button @click="openModal = false" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                        </div>
                        <form action="{{ route('store.reservation') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-4">
                               
                             
                               
                                <div>
                                    <input name="start" id="start" type="datetime-local">
                                </div>
                                <div>
                                    <input name="end" id="end" type="datetime-local">
                                </div>
                        
                            <div class="mt-6">
                                <button 
                                    type="submit" 
                                    class="w-full py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition duration-300"
                                >
                                    Reservation
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
                    let response = await axios.get("/calendar/createe")
                    console.log("Response Data:", response.data.reservations);
                    // console.log("dddddddd",response);
                    
                    let reservations = response.data.reservations;
                    // console.log("Events Array:", events);


                    var myCalendar = document.getElementById('calendar');



                    var calendar = new FullCalendar.Calendar(myCalendar, {

                        // headerToolbar: {
                        //     left: 'timeGridWeek',
                        //     center: 'title',
                        //     // right: 'listMonth,listWeek,listDay'
                        // },
                        headerToolbar: {
                            start: 'prev,next today',
                            center: 'title',
                            end: 'dayGridMonth,timeGridWeek,timeGridDay',
                        },
                        initialView: window.innerWidth < 768 ? "timeGridDay" : "timeGridWeek",

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
                        events: reservations,
                        windowResize: function(view) {
                    if (window.innerWidth < 768) {
                        calendar.changeView('timeGridDay');
                    } else {
                        calendar.changeView('timeGridWeek');
                    }
                },

                         eventClick: (info) => {
                             let eventId = info.event._def.publicId

                            //     let buttonId = `session${eventId}`;

                                let button = document.getElementById("deleteModal");
                                form.action = `/delete/reservations/${eventId}`

                                deleteUser()

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
