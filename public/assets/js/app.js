// app.js

document.addEventListener('DOMContentLoaded', function () {
    // Example of simple form validation for the login page
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function (event) {
            const nameInput = document.getElementById('name');
            const classCodeInput = document.getElementById('class_code');

            // Validate form fields
            if (nameInput.value.trim() === '' || classCodeInput.value.trim() === '') {
                event.preventDefault();
                alert('All fields are required!');
            }
        });
    }

    // Example of adding an event listener to dynamically show or hide elements
    const showButton = document.getElementById('showButton');
    const hiddenContent = document.getElementById('hiddenContent');
    if (showButton && hiddenContent) {
        showButton.addEventListener('click', function () {
            hiddenContent.classList.toggle('hidden'); // Toggles the visibility of content
        });
    }
});
