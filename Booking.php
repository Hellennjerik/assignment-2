<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet"href="Style.CSS">
</head>
<body>
<?php include_once("Templates/nav.php");?>
  
    <form action="" method="post">
        <div class="elem-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="Travelers_Name" placeholder="Name">
        </div>

        <div class="elem-group">
            <label for="Email">Email</label>
            <input type="email" id="email" name="Travelers-email" placeholder="username@gmail.com" required>
        </div>

        <div class="elem-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="Travelers-phone" placeholder="0723456789" required>
        </div>

        <hr>
        <div class="elem-group inlined">
          <label for="adult">Adults</label>
          <input type="number" id="adult" name="adults" placeholder="3" min="1" required>
        </div>
        <div class="elem-group inlined">
          <label for="child">Children</label>
          <input type="number" id="child" name="children" placeholder="4" min="0" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkin-date">Check-in Date</label>
          <input type="date" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkout-date">Check-out Date</label>
          <input type="date" id="checkout-date" name="checkout" required>
        </div>
    </div>

    <div class="elem-group">
        <label for="destination">Destination</label>
        <select id="destination-selection" name="destination" required>
            <option value="">Choose a destination</option>
            <option value="Dubai">Dubai</option>
            <option value="Morocco">Morocco</option>
            <option value="Greece">Greece</option>
            <option value="Maasai Mara">Maasai Mara</option>
            <option value="India">India</option>
        </select>
    </div>

    <div class="elem-group">
        <label for="Mode of transport">Mode of transport</label>
        <select id="Mode of transport-selection" name="Mode_of_transport" required>
            <option value="">Choose mode of transport</option>
            <option value="Safari car">Safari Car</option>
            <option value="Self drive">Self drive</option>
            <option value="Bus">Bus</option>
            <option value="Airplane">Airplane</option>
        </select>
    </div>
       <hr>
       <div class="elem-group">
        <label for="message">Anything Else?</label>
        <textarea id="message" name="Travelers_message" placeholder="Tell us anything else that might be important." required></textarea>
      </div>
      <button type="submit">Book now </button>
    </form>

    

     <?php
     include 'connection.php';
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        $Travelersname = $_POST["Travelers_Name"];
        $Travelersemail = $_POST["Travelers-email"];
        $Travelersphone= $_POST["Travelers-phone"];
        $Adults = $_POST["adults"];
        $Children = $_POST["children"];
        $Checkin = $_POST["checkin"];
        $Checkout = $_POST["checkout"];
        $destination = $_POST["destination"];
        $Transport = $_POST["Mode_of_transport"];
        $Travelersmessage = $_POST["Travelers_message"];

      }

      $stmt = $conn->prepare("INSERT INTO travelers (travelersname, email, phonenumber, adults, children, checkin, checkout, destination, modeoftransport, anythingelse)
      VALUES (?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("ssiiisssss",$Travelersname,$Travelersemail,$Travelersphone,$Adults,$Children, $Checkin,$Checkout,$destination,$Transport,$Travelersmessage);
      $stmt->execute();
      echo "Booked successfully";
      $stmt->close();

      $conn->close();
     
     ?>
</body>
</html>