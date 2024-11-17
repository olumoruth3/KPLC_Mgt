

// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Get necessary elements
    const profileHeader = document.querySelector('.profile-header');
    const dropdownContent = document.getElementById('myDropdown');

    // Toggle dropdown when clicking the header
    profileHeader.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdownContent.classList.toggle('show');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            if (dropdownContent.classList.contains('show')) {
                dropdownContent.classList.remove('show');
            }
        }
    });

    // Optional: Close dropdown when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && dropdownContent.classList.contains('show')) {
            dropdownContent.classList.remove('show');
        }
    });

    const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toogle-switch"),
    modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () =>{
        sidebar.classList.remove("close");
    });

    modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light Mode"
        }else {
            modeText.innerText = "Dark Mode"
        }
    });

});





 