<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniflex - Furniture Renting Website</title>
 <link rel="stylesheet" href="style.css">
<style>

.carousel {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none; /* Firefox */
    width: 100%; /* Ensure the carousel takes up the full width */
  }
  .carousel::-webkit-scrollbar {
    display: none; /* Safari and Chrome */
  }
  .carousel-item {
    flex: 0 0 auto;
    scroll-snap-align: center;
    margin: 20px;
    width: 300px;
    height: 200px;
    background-color: white;
    border: 2px solid blueviolet;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    
  }
  
  .carousel-item img {
    max-width: 100%;
    max-height: 60%;
    border-bottom: 2px solid blueviolet;
  }
  .carousel-item h3 {
    color: blueviolet;
    margin: 10px 0;
  }
  .carousel-item p {
    color: blueviolet;
    margin: 0 20px;
  }

</style>
    <title></title>
</head>
<body>
  
 <?php
require "partials/_db_connect.php";
require "partials/_navbar.php";

 ?>

<main>
    <h1>Living Room</h1>

<div class="carousel">
  <div class="carousel-item">
    <img src="Images/Houseshold Furniture/Leveingroom-fureniture/OIP.jpg" alt="Furniture 1">
    <h3>Leaving-Room</h3>
    <p>Full Custmization</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Houseshold Furniture/Leveingroom-fureniture/OIP (1).jpg" alt="Furniture 2">
    <h3>Sofa</h3>
    <p>Sofa Furniture</p>
  </div>
  <div class="carousel-item">
    <img src="Images/institute furniture/study2.jpg" alt="Furniture 3">
    <h3>Table</h3>
    <p>All Table Furniture</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Houseshold Furniture/Kitchen-fureniture/Kichen.jpg" alt="Furniture 4">
    <h3>Kichen</h3>
    <p>Full Kichen Custmization</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Houseshold Furniture/Kitchen-fureniture/Flower-port2.jpg" alt="Furniture 4">
    <h3>Decoration</h3>
    <p>All needed Decoration Items</p>
  </div>
 
</div>
<hr>
<h1>Institiude Applications</h1>
<div class="carousel">
  <div class="carousel-item">
    <img src="Images/institute furniture/study8.jpg" alt="Furniture 1">
    <h3>Full Class Custmization</h3>
    <p>Description of Furniture 1.</p>
  </div>
  <div class="carousel-item">
    <img src="Images/institute furniture/study5.jpg" alt="Furniture 2">
    <h3>Library</h3>
    <p>Library Custmization</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Houseshold Furniture/Leveingroom-fureniture/OIP(2).jpg" alt="Furniture 3">
    <h3>Decoration</h3>
    <p>Furniture For Decoration</p>
  </div>
  <div class="carousel-item">
    <img src="Images/office furniture/office3.jpg" alt="Furniture 4">
    <h3>Labs Decoration</h3>
    <p>All Type of lab Furniture</p>
  </div>
  <div class="carousel-item">
    <img src="Images/office furniture/office1.jpg" alt="Furniture 4">
    <h3>Office</h3>
    <p>All type of Office Decoration</p>
  </div> 
</div>
<hr>
<h1>Hotel & Cafe Application</h1>

<div class="carousel">
  <div class="carousel-item">
    <img src="Images/Hotel&Cafe-furniture/Seating-area.jpg" alt="Furniture 1">
    <h3>Full Custmization</h3>
    <p>Full Hotel Custmization</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Hotel&Cafe-furniture/Diyning-Table1.jpg" alt="Furniture 2">
    <h3>Tables</h3>
    <p>All Type of Diyning-Table</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Hotel&Cafe-furniture/Hotel-Kichen.jpg" alt="Furniture 3">
    <h3>Kichen</h3>
    <p>All Type of Kichen-Custmization</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Hotel&Cafe-furniture/seating-area2.jpg" alt="Furniture 4">
    <h3>Seating-Area</h3>
    <p>All Type Of Area-Custmization</p>
  </div>
  <div class="carousel-item">
    <img src="Images/Houseshold Furniture/Leveingroom-fureniture/lamp1.jpg" alt="Furniture 4">
    <h3>Decoration</h3>
    <p>All Type of Decoration<p>
  </div>
 
</div>
  </main>
  
</body>

</html>