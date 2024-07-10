<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/');
    }
}; ?>

<nav>

    <button id="showNavigationButton" class="ml-10"  type="button">
        <svg height="40" width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M4 8H20M4 16H12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </button>


    <!-- drawer component -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4  transition-transform -translate-x-full bg-white" tabindex="-1" aria-labelledby="drawer-navigation-label">

        <button id="closeMenuButton" type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center ">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-1 overflow-y-auto">
            <a href="/">
                <div class="justify-center flex mb-4 ">
                    <img src="{{asset('atclogo.jpg')}}" class="h-20 w-20">
                </div>
            </a>
            <p class="justify-center font-semibold  flex mb-6"> ATC - Help Desk</p>
            <!-- Sidebar content -->
            <div class="overflow-y-auto" style="height: 70vh;">
                <ul class="font-medium space-y-2 ">

                    <li>
                        <div class="  p-2 text-gray-900 rounded-lg
                     group">
                            <button class="w-full flex items-center ">
                                <div class=" text-start">
                                    <svg height="30" width="30" fill="#000000" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier"> <path d="M833.935 1063.327c28.913 170.315 64.038 348.198 83.464 384.79 27.557 51.84 92.047 71.944 144 44.387 51.84-27.558 71.717-92.273 44.16-144.113-19.426-36.593-146.937-165.46-271.624-285.064Zm-43.821-196.405c61.553 56.923 370.899 344.81 415.285 428.612 56.696 106.842 15.811 239.887-91.144 296.697-32.64 17.28-67.765 25.411-102.325 25.411-78.72 0-154.955-42.353-194.371-116.555-44.386-83.802-109.102-501.346-121.638-584.245-3.501-23.717 8.245-47.21 29.365-58.277 21.346-11.294 47.096-8.02 64.828 8.357ZM960.045 281.99c529.355 0 960 430.757 960 960 0 77.139-8.922 153.148-26.654 225.882l-10.39 43.144h-524.386v-112.942h434.258c9.487-50.71 14.231-103.115 14.231-156.084 0-467.125-380.047-847.06-847.059-847.06-467.125 0-847.059 379.935-847.059 847.06 0 52.97 4.744 105.374 14.118 156.084h487.454v112.942H36.977l-10.39-43.144C8.966 1395.137.044 1319.128.044 1241.99c0-529.243 430.645-960 960-960Zm542.547 390.686 79.85 79.85-112.716 112.715-79.85-79.85 112.716-112.715Zm-1085.184 0L530.123 785.39l-79.85 79.85L337.56 752.524l79.849-79.85Zm599.063-201.363v159.473H903.529V471.312h112.942Z" fill-rule="evenodd"></path>
                                        </g></svg>
                                </div>
                                <div class="flex-1 ms-3 whitespace-nowrap">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('dashboard') }}
                                    </x-nav-link>
                                </div>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div  class="  p-2 text-gray-900 rounded-lg
                     group">
                            <button class="w-full flex items-center ">
                                <div class=" text-start">
                                    <svg viewBox="0 0 20 20" height="30" width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile_round [#1342]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]"> </path> </g> </g> </g> </g></svg>
                                </div>
                                <div class="flex-1 ms-3 whitespace-nowrap">
                                    <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                                        {{ __('Profile') }}
                                    </x-nav-link>
                                </div>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div  class="  p-2 text-gray-900 rounded-lg
                     group">
                            <button class="w-full flex items-center ">
                                <div class=" text-start">

                                    <svg viewBox="0 0 512 512" height="30"  width="30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>add-document-note</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="icon" fill="#000000" transform="translate(85.333333, 42.666667)"> <path d="M341.333333,277.333333 L341.332667,341.332333 L405.333333,341.333333 L405.333333,384 L341.332667,383.999333 L341.333333,448 L298.666667,448 L298.666667,383.999333 L234.666667,384 L234.666667,341.333333 L298.666667,341.332333 L298.666667,277.333333 L341.333333,277.333333 Z M234.666667,3.55271368e-14 L341.333333,106.666667 L341.333,256 L298.666,256 L298.666667,124.339779 L216.993555,42.6666667 L42.6666667,42.6666667 L42.6666667,384 L213.333,383.999 L213.333333,405.333333 L277.333333,405.333333 L277.333,426.666 L1.42108547e-14,426.666667 L1.42108547e-14,3.55271368e-14 L234.666667,3.55271368e-14 Z M213.333333,298.666667 L213.333333,341.333333 L64,341.333333 L64,298.666667 L213.333333,298.666667 Z M196,85.3333333 L256,145.333333 L124,277.333333 L64,277.333333 L64,217.333333 L196,85.3333333 Z M157.304,169.265333 L96,230.570667 L96,245.333333 L110.72,245.333333 L172.046,184.007333 L157.304,169.265333 Z M195.989333,130.581333 L179.932,146.637333 L194.674,161.379333 L210.730667,145.322667 L195.989333,130.581333 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>

                                </div>
                                <div class="flex-1 ms-3 whitespace-nowrap">
                                    <x-nav-link :href="route('add-doc')" :active="request()->routeIs('add-doc')">
                                        {{ __('Documents') }}
                                    </x-nav-link>
                                </div>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div  class="  p-2 text-gray-900 rounded-lg
                     group">
                            <button class="w-full flex items-center ">
                                <div class=" text-start">

                                    <svg height="30"  width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.5 9V15M6.5 12H12.5M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                                </div>
                                <div class="flex-1 ms-3 whitespace-nowrap">
                                    <x-nav-link :href="route('add.vid')" :active="request()->routeIs('add.vid')">
                                        {{ __('Videos') }}
                                    </x-nav-link>
                                </div>
                            </button>
                        </div>
                    </li>

                    <li>
                        <div  class="  p-2 text-gray-900 rounded-lg
                     group">
                            <button class="w-full flex items-center ">
                                <div class=" text-start">

                                    <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3121 23.3511C17.4463 23.0228 16.7081 22.5979 16.1266 22.1995C14.8513 22.7159 13.4578 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 14.2788 22.306 16.3983 21.1179 18.1551C21.0425 19.6077 21.8054 20.9202 22.5972 22.0816C23.2907 23.0987 23.1167 23.9184 21.8236 23.9917C21.244 24.0245 19.9903 23.9874 18.3121 23.3511ZM3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 13.9503 20.3808 15.7531 19.328 17.2262C18.8622 17.8782 19.1018 19.0998 19.2616 19.8011C19.4167 20.4818 19.7532 21.2051 20.0856 21.8123C19.7674 21.7356 19.4111 21.6288 19.0212 21.481C18.1239 21.1407 17.3824 20.6624 16.8594 20.261C16.5626 20.0332 16.1635 19.9902 15.825 20.1494C14.6654 20.6947 13.3697 21 12 21C7.02944 21 3 16.9706 3 12ZM7 9C6.44772 9 6 9.44771 6 10C6 10.5523 6.44772 11 7 11H17C17.5523 11 18 10.5523 18 10C18 9.44771 17.5523 9 17 9H7ZM7 13C6.44772 13 6 13.4477 6 14C6 14.5523 6.44772 15 7 15H17C17.5523 15 18 14.5523 18 14C18 13.4477 17.5523 13 17 13H7Z" fill="#000000"></path> </g></svg>

                                </div>
                                <div class="flex-1 ms-3 whitespace-nowrap">
                                    <x-nav-link :href="route('chatroom.index')" :active="request()->routeIs('chatroom.index')">
                                        {{ __('Chat') }}
                                    </x-nav-link>
                                </div>
                            </button>
                        </div>
                    </li>
                    @if(auth()->user()->role_id == 1)
                        <li>
                            <div  class="  p-2 text-gray-900 rounded-lg
                     group">
                                <button class="w-full flex items-center ">
                                    <div class=" text-start">

                                        <svg height="30"  width="30" fill="#000000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="table-add"> <path d="M22,12.1V6V4V0H-1v4v2v18h14h2h2c3.9,0,7-3.1,7-7C24,15.1,23.2,13.4,22,12.1z M20,10h-5V6h5V10z M10.1,18 c0.2,1.6,1,2.9,2,4H8v-4H10.1z M10.1,16H8v-4h4.1C11,13.1,10.3,14.4,10.1,16z M6,16H1v-4h5V16z M13,6v4H8V6H13z M1,2h19v2H1V2z M6,6v4H1V6H6z M1,18h5v4H1V18z M17,22c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S19.8,22,17,22z"></path> <polygon points="18,13.6 16,13.6 16,16 13.6,16 13.6,18 16,18 16,20.4 18,20.4 18,18 20.4,18 20.4,16 18,16 "></polygon> </g> </g></svg>

                                    </div>
                                    <div class="flex-1 ms-3 whitespace-nowrap">
                                        <x-nav-link :href="route('add.timetable')" :active="request()->routeIs('add.timetable')">
                                            {{ __('Timetable') }}
                                        </x-nav-link>
                                    </div>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div  class="  p-2 text-gray-900 rounded-lg
                     group">
                                <button class="w-full flex items-center ">
                                    <div class=" text-start">

                                        <svg height="30"  width="30" fill="#000000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="table-add"> <path d="M22,12.1V6V4V0H-1v4v2v18h14h2h2c3.9,0,7-3.1,7-7C24,15.1,23.2,13.4,22,12.1z M20,10h-5V6h5V10z M10.1,18 c0.2,1.6,1,2.9,2,4H8v-4H10.1z M10.1,16H8v-4h4.1C11,13.1,10.3,14.4,10.1,16z M6,16H1v-4h5V16z M13,6v4H8V6H13z M1,2h19v2H1V2z M6,6v4H1V6H6z M1,18h5v4H1V18z M17,22c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S19.8,22,17,22z"></path> <polygon points="18,13.6 16,13.6 16,16 13.6,16 13.6,18 16,18 16,20.4 18,20.4 18,18 20.4,18 20.4,16 18,16 "></polygon> </g> </g></svg>

                                    </div>
                                    <div class="flex-1 ms-3 whitespace-nowrap">
                                        <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                                            {{ __('Add User') }}
                                        </x-nav-link>
                                    </div>
                                </button>
                            </div>
                        </li>
                    @endif

                </ul>
            </div>
            <ul class="bottom-0">
                <li>
                    <div wire:click="logout" class="  p-2 text-gray-900 rounded-lg  hover:border-2 hover:text-green-700 hover:border-green-700
                     group">
                        <button class="w-full flex items-center ">
                            <div class=" text-start">
                                <svg height="30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 6.62219V17.245C22 18.3579 21.2857 19.4708 20.1633 19.8754L15.0612 21.7977C14.7551 21.8988 14.449 22 14.0408 22C13.5306 22 12.9184 21.7977 12.4082 21.4942C12.2041 21.2918 11.898 21.0895 11.7959 20.8871H7.91837C6.38776 20.8871 5.06122 19.6731 5.06122 18.0544V17.0427C5.06122 16.638 5.36735 16.2333 5.87755 16.2333C6.38776 16.2333 6.69388 16.5368 6.69388 17.0427V18.0544C6.69388 18.7626 7.30612 19.2684 7.91837 19.2684H11.2857V4.69997H7.91837C7.20408 4.69997 6.69388 5.20582 6.69388 5.91401V6.9257C6.69388 7.33038 6.38776 7.73506 5.87755 7.73506C5.36735 7.73506 5.06122 7.33038 5.06122 6.9257V5.91401C5.06122 4.39646 6.28572 3.08125 7.91837 3.08125H11.7959C12 2.87891 12.2041 2.67657 12.4082 2.47423C13.2245 1.96838 14.1429 1.86721 15.0612 2.17072L20.1633 4.09295C21.1837 4.39646 22 5.50933 22 6.62219Z" fill="#000000"></path> <path d="M4.85714 14.8169C4.65306 14.8169 4.44898 14.7158 4.34694 14.6146L2.30612 12.5912C2.20408 12.49 2.20408 12.3889 2.10204 12.3889C2.10204 12.2877 2 12.1865 2 12.0854C2 11.9842 2 11.883 2.10204 11.7819C2.10204 11.6807 2.20408 11.5795 2.30612 11.5795L4.34694 9.55612C4.65306 9.25261 5.16327 9.25261 5.46939 9.55612C5.77551 9.85963 5.77551 10.3655 5.46939 10.669L4.7551 11.3772H8.93878C9.34694 11.3772 9.7551 11.6807 9.7551 12.1865C9.7551 12.6924 9.34694 12.7936 8.93878 12.7936H4.65306L5.36735 13.5017C5.67347 13.8052 5.67347 14.3111 5.36735 14.6146C5.26531 14.7158 5.06122 14.8169 4.85714 14.8169Z" fill="#000000"></path>
                                    </g></svg>

                            </div>
                            <span class="flex-1 ms-3 whitespace-nowrap">log out</span>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showNavigationButton = document.getElementById('showNavigationButton');
        const drawerNavigation = document.getElementById('drawer-navigation');
        const closeMenuButton = document.getElementById('closeMenuButton');

        showNavigationButton.addEventListener('click', function() {
            drawerNavigation.classList.toggle('translate-x-0');
        });

        closeMenuButton.addEventListener('click', function() {
            drawerNavigation.classList.remove('translate-x-0');
        });

        const drawerNavigationLabel = document.getElementById('drawer-navigation-label');
        drawerNavigationLabel.addEventListener('click', function() {
            drawerNavigation.classList.remove('translate-x-0');
        });
    });
</script>
