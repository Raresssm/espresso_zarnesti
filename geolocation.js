// geolocation.js

function getLocation() {
    // Use the specified coordinates
    showPosition(45.560931991819345, 25.316406658658448);
}

function showPosition(latitude, longitude) {
    // Display the map in a div with id "mapPanel"
    var mapPanel = document.getElementById("mapPanel");

    // Set the HTML content with the Google Maps iframe
    mapPanel.innerHTML = '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=' + latitude + ',' + longitude + '&output=embed"></iframe>';
    
    // Show the map panel
    mapPanel.style.display = 'block';

    // Add styling to the map panel (optional)
    mapPanel.style.border = '2px solid #ddd';
    mapPanel.style.padding = '10px';
    mapPanel.style.borderRadius = '8px';
    mapPanel.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
}

function showError(error) {
    var errorMessage;

    switch (error.code) {
        case error.PERMISSION_DENIED:
            errorMessage = "User denied the request for Geolocation.";
            break;
        case error.POSITION_UNAVAILABLE:
            errorMessage = "Location information is unavailable.";
            break;
        case error.TIMEOUT:
            errorMessage = "The request to get user location timed out.";
            break;
        case error.UNKNOWN_ERROR:
            errorMessage = "An unknown error occurred.";
            break;
    }

    // Display the error message in a div with id "coordinates"
    document.getElementById("coordinates").innerHTML = errorMessage;
}