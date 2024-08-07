<?php
include 'connection.php';

$action = $_GET['action'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($action == "update") {
        $booking_id = $_POST['booking_id'];
        $Travelersname = $_POST['Travelers_Name'];
        $Travelersemail = $_POST['Travelers_email'];
        $Travelersphone = $_POST['Travelers_phone'];
        $Adults = $_POST['adults'];
        $Children = $_POST['children'];
        $Checkin = $_POST['checkin'];
        $Checkout = $_POST['checkout'];
        $destination = $_POST['destination'];
        $Transport = $_POST['Mode_of_transport'];
        $Travelersmessage = $_POST['Travelers_message'];

        $stmt = $conn->prepare("UPDATE travelers SET travelersname=?, email=?, phonenumber=?, adults=?, children=?, checkin=?, checkout=?, destination=?, modeoftransport=?, anythingelse=? WHERE id=?");
        $stmt->bind_param("ssiiisssssi", $Travelersname, $Travelersemail, $Travelersphone, $Adults, $Children, $Checkin, $Checkout, $destination, $Transport, $Travelersmessage, $booking_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Booking updated!";
        } else {
            echo "No changes made or invalid booking ID.";
        }

        $stmt->close();

    } elseif ($action == "delete") {
        $booking_id = $_POST['booking_id'] ?? null;

        $stmt = $conn->prepare("DELETE FROM travelers WHERE id=?");
        $stmt->bind_param("i", $booking_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Booking deleted!";
        } else {
            echo "Invalid booking ID.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reservation</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<div class="booking" id="booking">
    <div class="image"></div>
    <div class="form">
        <?php if ($action == "update") { ?>
            <h2>Update Booking</h2>
            <form action="" method="post">
                <input type="hidden" name="booking_id" value="<?php echo $_GET['booking_id']; ?>">
                <div class="elem-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="Travelers_Name" placeholder="Name">
                </div>
                <div class="elem-group">
                    <label for="Email">Email</label>
                    <input type="email" id="email" name="Travelers_email" placeholder="username@gmail.com" required>
                </div>
                <div class="elem-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="Travelers_phone" placeholder="0723456789" required>
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
                <button type="submit">Update Booking</button>
            </form>
        <?php } elseif ($action == "delete") { ?>
            <h2>Delete Booking</h2>
            <form action="" method="post">
                <input type="text" name="booking_id" placeholder="Booking ID">
                <center><button type="submit" class="btn">Delete</button></center>
            </form>
        <?php } else { ?>
            <h2>Invalid Action</h2>
        <?php } ?>
    </div>
</div>
</body>
</html>