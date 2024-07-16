<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackShack - Home</title>
    <style>



body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    display: flex;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/food.jpeg');
    flex-direction: column; /* Stack elements vertically */
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    text-align: center; /* Center text */
}

header, section {
    width: 80%; /* Adjust width as needed */
    max-width: 600px; /* Maximum width for larger screens */
    margin: 20px 0; /* Spacing between header and section */
}

/* Additional styles for visual enhancement */
header {
    padding: 20px;
    background-color: rgba(255, 152, 0, 0.85);
    color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

section {
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    color: #333;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

footer {
    background-color: rgba(51, 51, 51, 0.85); /* Slightly transparent footer */
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
    border-radius: 0 0 10px 10px; /* Added border radius for bottom corners */
    box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2); /* Added box shadow, inverted for footer */
}

h1, h2 {
    font-weight: normal;
    font-family: 'Montserrat', sans-serif;
}

p {
    line-height: 1.6;
}

button#showMenu {
    padding: 10px 20px;
    background-color: #ff9800; /* Orange color to match the header */
    color: #fff; /* White text */
    border: none; /* Remove default border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover */
    font-size: 16px; /* Larger font size for better readability */
    margin-top: 20px; /* Add some space above the button */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

button#showMenu:hover {
    background-color: #e68a00; /* Slightly darker orange on hover */
}
    </style>
</head>
<body>
    <header>
        <h1>Welcome to SnackShack!</h1>
    </header>
    <section>
        <h2>Overview</h2>
        <p>Welcome to SnackShack, your go-to destination for delicious snacks and refreshments! At SnackShack, we pride ourselves on offering a wide variety of snacks that cater to all tastes and preferences. Whether you're in the mood for something sweet, salty, or savory, we've got you covered.</p>
        <p>Our mission is to provide high-quality, tasty snacks that everyone can enjoy. From classic favorites to innovative new creations, our menu is designed to delight your taste buds and keep you coming back for more. Join us at SnackShack and discover your new favorite snack today!</p>
    </section>
    <button id="showMenu">Show Menu</button>
    <script>
        document.getElementById('showMenu').addEventListener('click', function() {
            window.location.href = 'menu.php';
        });
    </script>

</body>
</html>