<x-app-layout>

    <div class="py-2">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <div class="p-6 text-gray-900">

                    @if(auth()->user()->role_id == 0)
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-5">

                        <a href="{{route('profile')}}" class="p-4 hover:border-2 hover:animate-shake hover:shadow-lg w-36  rounded  ">
                            <div >
                                <div class="justify-center flex">
                       <div>
                           <svg height="50" width="50" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile_round [#1342]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]"> </path> </g> </g> </g> </g></svg>
                       </div>
                                </div>
                            <p class="justify-center flex">profile</p>
                            </div>
                        </a>

                        <a href="{{route('location.index')}}" class="p-4 hover:border-2 hover:animate-shake hover:shadow-lg w-36 rounded  ">
                            <div >
                                <div class="justify-center flex">
                                    <div>
                                        <svg height="50" width="50"  viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000;} </style> <g id="Layer_1"></g> <g id="Layer_2"> <g> <path class="st0" d="M256,108.24c-52.25,0-94.75,42.51-94.75,94.75s42.51,94.75,94.75,94.75s94.75-42.51,94.75-94.75 S308.25,108.24,256,108.24z M256,265.75c-34.6,0-62.75-28.15-62.75-62.75c0-34.6,28.15-62.75,62.75-62.75s62.75,28.15,62.75,62.75 C318.75,237.59,290.6,265.75,256,265.75z"></path> <path class="st0" d="M431.5,203c0-47.35-18.57-91.73-52.29-124.98c-33.71-33.24-78.36-51.18-125.74-50.5 c-45.85,0.65-89.06,19.03-121.66,51.77c-32.6,32.73-50.81,76.01-51.29,121.87c-0.46,44.44,15.74,87,45.59,119.83 c15.17,16.68,29.15,34.22,41.77,52.36c-35.52,7.31-76.12,22.09-76.12,51.48c0,18.65,16.21,33.5,48.18,44.13 c25.2,8.38,59.39,13.78,96.28,15.18c0,0,0,0,0,0c0,0,0,0,0.01,0c6.54,0.25,13.19,0.37,19.78,0.37c6.59,0,13.24-0.12,19.78-0.37 c0,0,0,0,0.01,0c0,0,0,0,0,0c36.89-1.4,71.08-6.8,96.28-15.18c31.97-10.64,48.18-25.49,48.18-44.13 c0-29.42-40.68-44.21-76.25-51.51c12.54-17.98,26.49-35.42,41.67-52.06C415.22,288.86,431.5,246.86,431.5,203z M124.09,424.79 c3.53-5.03,22.26-15.77,62.53-22.38c0.02,0.04,0.05,0.08,0.07,0.12c1.05,1.77,2.09,3.55,3.12,5.33c0.3,0.52,0.59,1.04,0.89,1.55 c0.74,1.29,1.48,2.59,2.2,3.89c0.35,0.62,0.69,1.23,1.03,1.85c0.71,1.28,1.41,2.56,2.11,3.85c0.3,0.55,0.6,1.1,0.89,1.65 c0.97,1.82,1.94,3.64,2.89,5.46c0.03,0.06,0.06,0.12,0.09,0.18c0.92,1.77,1.82,3.54,2.71,5.31c0.28,0.56,0.56,1.12,0.84,1.68 c0.65,1.31,1.3,2.62,1.94,3.93c0.3,0.61,0.6,1.23,0.89,1.84c0.66,1.38,1.31,2.75,1.96,4.13c0.23,0.49,0.46,0.98,0.69,1.47 c0.86,1.85,1.7,3.7,2.54,5.56c0.03,0.06,0.06,0.13,0.09,0.19c-21.15-2.04-40.54-5.52-56.19-10.16 C134.41,434.04,126.14,427.5,124.09,424.79z M387.91,424.79c-2.04,2.71-10.31,9.26-31.3,15.48c-15.67,4.65-35.08,8.13-56.26,10.17 c0.09-0.2,0.18-0.41,0.27-0.61c0.78-1.75,1.57-3.49,2.37-5.23c0.05-0.11,0.1-0.21,0.14-0.32c0.85-1.85,1.72-3.69,2.61-5.53 c0.26-0.54,0.52-1.08,0.78-1.62c0.64-1.33,1.29-2.66,1.95-3.98c0.3-0.6,0.59-1.19,0.89-1.79c0.71-1.41,1.43-2.83,2.15-4.24 c0.22-0.42,0.43-0.85,0.65-1.27c0.94-1.81,1.89-3.61,2.85-5.41c0.23-0.44,0.47-0.87,0.71-1.31c0.74-1.38,1.5-2.76,2.26-4.13 c0.33-0.6,0.67-1.2,1-1.8c0.71-1.28,1.43-2.55,2.16-3.82c0.31-0.55,0.63-1.1,0.94-1.65c1.02-1.77,2.05-3.53,3.09-5.28 c0.01-0.02,0.03-0.05,0.04-0.07C365.61,408.99,384.38,419.75,387.91,424.79z M303.52,376.53c-0.98,1.56-1.94,3.13-2.9,4.7 c-0.31,0.51-0.61,1.01-0.92,1.52c-0.65,1.07-1.29,2.13-1.93,3.2c-0.37,0.62-0.73,1.24-1.09,1.86c-0.57,0.96-1.13,1.92-1.69,2.89 c-0.39,0.67-0.78,1.35-1.16,2.03c-0.52,0.91-1.05,1.83-1.57,2.74c-0.4,0.71-0.79,1.42-1.19,2.13c-0.5,0.89-0.99,1.78-1.49,2.67 c-0.4,0.73-0.8,1.46-1.19,2.19c-0.48,0.88-0.96,1.75-1.43,2.63c-0.4,0.74-0.79,1.49-1.19,2.24c-0.46,0.87-0.92,1.73-1.37,2.6 c-0.4,0.76-0.79,1.53-1.19,2.29c-0.44,0.86-0.88,1.72-1.32,2.58c-0.39,0.77-0.78,1.55-1.17,2.32c-0.43,0.85-0.86,1.71-1.28,2.57 c-0.39,0.78-0.77,1.56-1.15,2.35c-0.42,0.85-0.83,1.7-1.24,2.56c-0.38,0.79-0.76,1.58-1.13,2.37c-0.4,0.85-0.8,1.7-1.2,2.54 c-0.37,0.8-0.75,1.6-1.11,2.4c-0.39,0.85-0.78,1.7-1.16,2.55c-0.36,0.8-0.72,1.6-1.08,2.41c-0.38,0.85-0.76,1.71-1.13,2.57 c-0.35,0.8-0.71,1.61-1.05,2.41c-0.37,0.85-0.73,1.71-1.1,2.56c-0.35,0.81-0.69,1.62-1.03,2.44c-0.36,0.85-0.71,1.71-1.06,2.57 c-0.33,0.81-0.67,1.62-1,2.44c-0.08,0.19-0.16,0.39-0.24,0.58c-5.84,0.1-11.68,0.1-17.52,0c-0.68-1.67-1.37-3.34-2.08-5.01 c-0.17-0.4-0.34-0.8-0.51-1.2c-0.54-1.28-1.09-2.56-1.64-3.84c-0.26-0.61-0.53-1.21-0.8-1.82c-0.47-1.07-0.94-2.14-1.42-3.21 c-0.3-0.68-0.61-1.35-0.92-2.02c-0.45-0.99-0.9-1.99-1.36-2.98c-0.33-0.71-0.66-1.42-0.99-2.13c-0.45-0.96-0.89-1.91-1.35-2.87 c-0.34-0.72-0.69-1.45-1.04-2.17c-0.45-0.93-0.9-1.87-1.35-2.8c-0.36-0.73-0.72-1.47-1.08-2.2c-0.46-0.92-0.91-1.84-1.37-2.76 c-0.37-0.73-0.74-1.47-1.11-2.2c-0.47-0.92-0.93-1.83-1.41-2.74c-0.38-0.73-0.76-1.46-1.14-2.19c-0.48-0.91-0.96-1.82-1.44-2.73 c-0.38-0.72-0.77-1.44-1.15-2.16c-0.5-0.92-0.99-1.84-1.5-2.76c-0.38-0.7-0.77-1.41-1.16-2.11c-0.51-0.93-1.03-1.86-1.56-2.79 c-0.38-0.69-0.77-1.37-1.15-2.06c-0.54-0.95-1.08-1.9-1.63-2.85c-0.38-0.66-0.75-1.32-1.13-1.97c-0.58-1-1.17-1.99-1.75-2.98 c-0.36-0.6-0.71-1.21-1.07-1.81c-0.66-1.1-1.32-2.2-1.99-3.3c-0.3-0.49-0.59-0.98-0.89-1.47c-0.97-1.58-1.94-3.16-2.93-4.74 c0,0,0-0.01-0.01-0.01c0,0,0,0,0,0c0,0,0,0,0,0c-16.83-26.94-36.53-52.87-58.54-77.09c-24.41-26.84-37.64-61.63-37.27-97.97 c0.8-77.19,64.23-140.88,141.4-141.97c38.74-0.55,75.26,14.11,102.82,41.29c27.57,27.18,42.76,63.48,42.76,102.19 c0,35.87-13.31,70.2-37.48,96.68C339.92,323.9,320.23,349.76,303.52,376.53z"></path> </g> </g> </g></svg>
                                    </div>
                                </div>
                                <p class="justify-center flex">venue</p>
                            </div>
                        </a>

                        <a href="{{route('chatroom.index')}}" class="p-4 hover:border-2 hover:animate-shake hover:shadow-lg w-36 rounded ">

                            <div  >
                                <div class="justify-center flex">
                                    <div>

                                        <svg height="50" width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3121 23.3511C17.4463 23.0228 16.7081 22.5979 16.1266 22.1995C14.8513 22.7159 13.4578 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 14.2788 22.306 16.3983 21.1179 18.1551C21.0425 19.6077 21.8054 20.9202 22.5972 22.0816C23.2907 23.0987 23.1167 23.9184 21.8236 23.9917C21.244 24.0245 19.9903 23.9874 18.3121 23.3511ZM3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 13.9503 20.3808 15.7531 19.328 17.2262C18.8622 17.8782 19.1018 19.0998 19.2616 19.8011C19.4167 20.4818 19.7532 21.2051 20.0856 21.8123C19.7674 21.7356 19.4111 21.6288 19.0212 21.481C18.1239 21.1407 17.3824 20.6624 16.8594 20.261C16.5626 20.0332 16.1635 19.9902 15.825 20.1494C14.6654 20.6947 13.3697 21 12 21C7.02944 21 3 16.9706 3 12ZM7 9C6.44772 9 6 9.44771 6 10C6 10.5523 6.44772 11 7 11H17C17.5523 11 18 10.5523 18 10C18 9.44771 17.5523 9 17 9H7ZM7 13C6.44772 13 6 13.4477 6 14C6 14.5523 6.44772 15 7 15H17C17.5523 15 18 14.5523 18 14C18 13.4477 17.5523 13 17 13H7Z" fill="#000000"></path> </g></svg>

                                    </div>
                                </div>
                                <p class="flex justify-center">Chat</p>
                            </div>
                        </a>
                        <a href="" class="p-4 hover:border-2 hover:animate-shake hover:shadow-lg w-36 rounded ">
                            <div  >
                                <div class="justify-center flex">
                                    <div>
                                        <svg height="50" width="50"  fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 72 72" enable-background="new 0 0 72 72" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M61.068,11H55V5c0-1.104-0.896-2-2-2s-2,0.896-2,2v6H20V5c0-1.104-0.896-2-2-2s-2,0.896-2,2v6h-5.068 C7.104,11,4,14.104,4,17.932v44.136C4,65.896,7.104,69,10.932,69h50.136C64.896,69,68,65.896,68,62.068V17.932 C68,14.104,64.896,11,61.068,11z M10.932,15H16v5c0,1.104,0.896,2,2,2s2-0.895,2-2v-5h31v5c0,1.104,0.896,2,2,2s2-0.895,2-2v-5 h6.068C62.688,15,64,16.313,64,17.932V28H8V17.932C8,16.313,9.313,15,10.932,15z M61.068,65H10.932C9.313,65,8,63.688,8,62.068V30 h56v32.068C64,63.688,62.688,65,61.068,65z"></path> <path d="M59.896,56.641c-0.553,0-1.103,0.447-1.103,1c0,2.189-0.7,2.359-1.69,2.359h-6.31c-0.553,0-1,0.447-1,1s0.447,1,1,1h6.31 c2.295,0,3.631-1.287,3.779-3.828C60.893,58.115,61,58.059,61,58v-0.359C61,57.088,60.45,56.641,59.896,56.641z"></path> <path d="M59.875,54.411c0.26,0,0.52-0.112,0.71-0.291c0.181-0.188,0.29-0.449,0.29-0.709c0-0.263-0.109-0.522-0.29-0.711 c-0.38-0.369-1.05-0.369-1.42,0c-0.181,0.19-0.29,0.448-0.29,0.711c0,0.271,0.109,0.521,0.29,0.709 C59.354,54.3,59.604,54.411,59.875,54.411z"></path> <path d="M18.795,37h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S19.348,37,18.795,37z"></path> <path d="M25.795,37h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S26.348,37,25.795,37z"></path> <path d="M32.795,37h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S33.348,37,32.795,37z"></path> <path d="M38.795,37h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S39.348,37,38.795,37z"></path> <path d="M45.795,37h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S46.348,37,45.795,37z"></path> <path d="M51.795,39h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S51.242,39,51.795,39z"></path> <path d="M18.795,43h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S19.348,43,18.795,43z"></path> <path d="M25.795,43h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S26.348,43,25.795,43z"></path> <path d="M32.795,43h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S33.348,43,32.795,43z"></path> <path d="M38.795,43h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S39.348,43,38.795,43z"></path> <path d="M45.795,43h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S46.348,43,45.795,43z"></path> <path d="M51.795,45h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S51.242,45,51.795,45z"></path> <path d="M18.795,55h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S19.348,55,18.795,55z"></path> <path d="M25.795,55h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S26.348,55,25.795,55z"></path> <path d="M32.795,55h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S33.348,55,32.795,55z"></path> <path d="M38.795,55h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S39.348,55,38.795,55z"></path> <path d="M18.795,49h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S19.348,49,18.795,49z"></path> <path d="M25.795,49h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S26.348,49,25.795,49z"></path> <path d="M32.795,49h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S33.348,49,32.795,49z"></path> <path d="M38.795,49h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S39.348,49,38.795,49z"></path> <path d="M45.795,49h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S46.348,49,45.795,49z"></path> <path d="M51.795,51h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S51.242,51,51.795,51z"></path> </g> </g></svg>
                                    </div>
                                </div>
                                <p class="flex justify-center">Time-table</p>
                            </div>
                        </a>
                            <a href="{{route('doc3',['course' => auth()->user()->course_id , 'ntalevel' => auth()->user()->ntalevel_id])}}" class="p-4 hover:border-2 hover:animate-shake hover:shadow-lg w-36 rounded ">
                                <div  >
                                    <div class="justify-center flex">
                                        <div>

                                            <svg height="50" width="50" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><line class="cls-1" x1="6.27" y1="14.86" x2="13.91" y2="14.86"></line><line class="cls-1" x1="6.27" y1="11.05" x2="13.91" y2="11.05"></line><line class="cls-1" x1="6.27" y1="18.68" x2="13.91" y2="18.68"></line><polygon class="cls-1" points="16.77 8.18 16.77 22.5 3.41 22.5 3.41 5.32 13.91 5.32 16.77 8.18"></polygon><polyline class="cls-1" points="16.77 18.68 20.59 18.68 20.59 4.36 17.73 1.5 7.23 1.5 7.23 5.32"></polyline></g></svg>

                                        </div>
                                    </div>
                                    <p class="flex justify-center">Documents</p>
                                </div>
                            </a>
                            <a href="{{route('vid3',['course' => auth()->user()->course_id , 'ntalevel' => auth()->user()->ntalevel_id])}}" class="p-4 hover:border-2 hover:animate-shake hover:shadow-lg w-36 rounded ">
                                <div  >
                                    <div class="justify-center flex">
                                        <div>

                                            <svg height="50" width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                                        </div>
                                    </div>
                                    <p class="flex justify-center">Videos</p>
                                </div>
                            </a>

                    </div>

                    @elseif(auth()->user()->role_id == 1)

                        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                            <div class="grid grid-cols-1  row-gap-8 sm:grid-cols-3">
                                <div class="text-center md:border-r">
                                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{\App\Models\User::where('role_id',2)->count()}}</h6>
                                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                                        Lecture
                                    </p>
                                </div>
                                <div class="text-center md:border-r">
                                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{\App\Models\User::where('role_id',0)->count()}}</h6>
                                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                                        Students
                                    </p>
                                </div>
                                <div class="text-center md:border-r">
                                    <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{\App\Models\User::where('role_id',1)->count()}}</h6>
                                    <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                                        Admins
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2  grid  grid-cols-2 justify-center items-center gap-4">
                            <!-- Comments -->
                            <a href="{{route('vid1')}}"
                               class="flex h-20 w-full flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">


                                    <svg height="24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>


                                    <span class="font-bold text-gray-600">
                                        @if(auth()->user()->role_id == 1)
                                            {{\App\Models\Video::count()}}
                                        @elseif(auth()->user()->role_id == 2)
                                            {{\App\Models\Video::where('user_id', auth()->user()->id)->count()}}
                                        @endif
                                    </span>
                                </div>

                                <div class="mt-2 text-sm text-gray-400">Videos</div>
                            </a>

                            <!-- Projects -->
                            <a href="{{route('doc1')}}"
                               class="flex h-20 w-full flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">


                                    <svg height="24" width="24" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><line class="cls-1" x1="6.27" y1="14.86" x2="13.91" y2="14.86"></line><line class="cls-1" x1="6.27" y1="11.05" x2="13.91" y2="11.05"></line><line class="cls-1" x1="6.27" y1="18.68" x2="13.91" y2="18.68"></line><polygon class="cls-1" points="16.77 8.18 16.77 22.5 3.41 22.5 3.41 5.32 13.91 5.32 16.77 8.18"></polygon><polyline class="cls-1" points="16.77 18.68 20.59 18.68 20.59 4.36 17.73 1.5 7.23 1.5 7.23 5.32"></polyline></g></svg>

                                    <span class="font-bold text-gray-600">
                                          @if(auth()->user()->role_id == 1)
                                            {{\App\Models\Document::count()}}
                                        @elseif(auth()->user()->role_id == 2)
                                            {{\App\Models\Document::where('user_id', auth()->user()->id)->count()}}
                                        @endif
                                    </span>
                                </div>

                                <div class="mt-2 text-sm text-gray-400">Documents</div>
                            </a>
                        </div>

                    @elseif(auth()->user()->role_id == 2)
                        <div class="mt-2  grid  grid-cols-2 justify-center items-center gap-4">
                            <!-- Comments -->
                            <a href="{{route('vid1')}}"
                               class="flex h-20 w-full flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">


                                    <svg height="24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>


                                    <span class="font-bold text-gray-600">
                                        @if(auth()->user()->role_id == 1)
                                            {{\App\Models\Video::count()}}
                                        @elseif(auth()->user()->role_id == 2)
                                            {{\App\Models\Video::where('user_id', auth()->user()->id)->count()}}
                                        @endif
                                    </span>
                                </div>

                                <div class="mt-2 text-sm text-gray-400">Videos</div>
                            </a>

                            <!-- Projects -->
                            <a href="{{route('doc1')}}"
                               class="flex h-20 w-full flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                                <div class="flex flex-row items-center justify-center">


                                    <svg height="24" width="24" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><line class="cls-1" x1="6.27" y1="14.86" x2="13.91" y2="14.86"></line><line class="cls-1" x1="6.27" y1="11.05" x2="13.91" y2="11.05"></line><line class="cls-1" x1="6.27" y1="18.68" x2="13.91" y2="18.68"></line><polygon class="cls-1" points="16.77 8.18 16.77 22.5 3.41 22.5 3.41 5.32 13.91 5.32 16.77 8.18"></polygon><polyline class="cls-1" points="16.77 18.68 20.59 18.68 20.59 4.36 17.73 1.5 7.23 1.5 7.23 5.32"></polyline></g></svg>

                                    <span class="font-bold text-gray-600">
                                          @if(auth()->user()->role_id == 1)
                                            {{\App\Models\Document::count()}}
                                        @elseif(auth()->user()->role_id == 2)
                                            {{\App\Models\Document::where('user_id', auth()->user()->id)->count()}}
                                        @endif
                                    </span>
                                </div>

                                <div class="mt-2 text-sm text-gray-400">Documents</div>
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
