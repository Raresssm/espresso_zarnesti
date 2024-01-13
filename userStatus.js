// userStatus.js

// Functionality related to managing user status (e.g., user icon)
async function initializeUserStatus() {
    console.log('Initializing user status...');
    try {
        const response = await fetch('user_status_endpoint.php');
        const data = await response.json();

        const loggedIn = data.loggedIn;
        const userIconContainer = document.getElementById('userIconContainer');
        const logoffButton = document.getElementById('logoffButton');
        const welcomeMessageContainer = document.getElementById('welcomeMessage');

        if (loggedIn) {
            // If logged in, create an image element and set its source
            const userIcon = document.createElement('img');
            userIcon.src = 'https://source.unsplash.com/random/100x100'; // Replace with the actual path or use a placeholder image path
            userIcon.alt = 'User Icon';
            userIcon.style.width = '74px'; // Set the width as needed
            userIcon.style.height = '74px'; // Set the height as needed
            userIcon.style.borderRadius = '50%'; // Make it round

            // Append the user icon to the container
            userIconContainer.appendChild(userIcon);

            // Show the logoff button if logged in
            logoffButton.style.display = 'inline';
            logoffButton.addEventListener('click', logOffUser);

            // Display the welcome message
            const username = data.username; // Assuming the server sends the user name
            welcomeMessageContainer.innerText = `Welcome, ${username}!`;
        } else {
            // If not logged in, create a placeholder image element with a random image from the internet
            const placeholderIcon = document.createElement('img');
            placeholderIcon.src = 'favicon.ico'; // Change dimensions as needed
            placeholderIcon.alt = 'Placeholder Icon';
            placeholderIcon.style.width = '74px'; // Set the width as needed
            placeholderIcon.style.height = '74px'; // Set the height as needed
            placeholderIcon.style.borderRadius = '50%'; // Make it round

            // Append the placeholder icon to the container
            userIconContainer.appendChild(placeholderIcon);

            // Hide the logoff button if not logged in
            logoffButton.style.display = 'none';

            // Clear the welcome message if not logged in
            welcomeMessageContainer.innerText = '';
        }
    } catch (error) {
        console.error('Error fetching user status:', error);
    }
}

// Function to log off the user
function logOffUser() {
    try {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'logoff.php', false); // Make the request synchronous
        xhr.send();

        if (xhr.readyState === 4 && xhr.status === 200) {
            const result = JSON.parse(xhr.responseText);

            // Assuming logoff.php returns a JSON response indicating success
            const { success } = result;

            if (success) {
                // Redirect to the same page after successful logoff
                window.location.reload(); // This can be adjusted based on your needs
            } else {
                console.error('Logoff failed:', result);
            }
        } else {
            console.error('Error during logoff. Ready state:', xhr.readyState, 'Status:', xhr.status);
        }
    } catch (error) {
        console.error('Error during logoff:', error);
    }
}

document.addEventListener('DOMContentLoaded', initializeUserStatus);