<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
</head>

<body>
    <h1> My Restaurant</h1>
    
    <h2> Book a Table</h2>
    <!-- bo0ok atable Form-->
    <form method="post" action="book.php">
        <label>Name</label>
        <input type="text" name="namebox" required>
        <label>Date</label>
        <input type="date" name="datebox">
        <label>Time</label>
        <input type="time" name="timebox">
        <!--which for was used-->
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
    </form>
     <h2> search for booking</h2>
      <!-- bo0ok atable finding-->
      
      
</body>
</html>

<?php

?>