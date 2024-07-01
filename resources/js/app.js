import './bootstrap';


import './../../vendor/power-components/livewire-powergrid/dist/powergrid'



import './../../vendor/power-components/livewire-powergrid/dist/tailwind.css'

document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('[aria-label="Open Menu"]');
    const closeButton = document.querySelector('[aria-label="Close Menu"]');
    const dropdownMenu = document.getElementById('mobile-menu-dropdown');

    // Function to toggle the dropdown menu
    function toggleDropdown() {
        dropdownMenu.classList.toggle('hidden');
    }

    // Event listener for the "Open Menu" button
    menuButton.addEventListener('click', toggleDropdown);

    // Event listener for the "Close Menu" button
    closeButton.addEventListener('click', toggleDropdown);
});
