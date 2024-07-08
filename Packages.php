<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.CSS">
</head>
<body>
    <div class="container">
        <h1>Discover many places with us</h1>
        <!--slideshow-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!--wrapper for slides-->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="Images/pexels-mohamedelaminemsiouri-2245436.jpg" alt="Destination Areas">
                </div>
                <div class="item">
                    <img src="Images/pexels-pixabay-34098.jpg" alt="Destination Areas">
                </div>
                <div class="item">
                    <img src="Images/pexels-tirachard-kumtanom-112571-347145.jpg" alt="Destination Areas">
                </div>
                <div class="item">
                    <img src="Images/pexels-vince-2265876.jpg" alt="Destination Areas">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <p>Explore breathtaking beaches around the world like in Thailand and serene landscapes and the rich history of Africa.</p>
        <p>We offer packages for our travel destinations.</p>
        <p>We also ensure you have a nice and comfortable stay at the destinations of choice. We also cover the travel expenses that include buses, cars, safari vans, flights that come at an extra price.</p>

        <!--The type of trips offered-->
        <p>We offer:</p>
        <ol style="list-style-type: lower-latin;">
            <li>International Trips</li>
            <li>Local Trips</li>
            <li>Business Trips</li>
            <li>School Trips</li>
            <li>Leisure Trips</li>
        </ol>
        <!--A list of the packages offered-->
        <h2>An example of the packages include:</h2>

        <table>
            <tr>
                <th>Type of Trip</th>
                <th>Package</th>
                <th>Duration</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>International Trip</td>
                <td>Thailand</td>
                <td>10 days and nights</td>
                <td>ksh 100,000</td>
            </tr>
            <tr>
                <td>Local Trip</td>
                <td>Gran Meila Arusha</td>
                <td>5 days and 4 nights</td>
                <td>ksh 45,000</td>
            </tr>
            <tr>
                <td>Business Trip</td>
                <td>Ole Sereni</td>
                <td>2 days and 1 night</td>
                <td>ksh 30,000</td>
            </tr>
            <tr>
                <td>Leisure Trip</td>
                <td>Kilili Baharini</td>
                <td>10 days and 9 nights</td>
                <td>ksh 50,000</td>
            </tr>
        </table>

        <p>Experience the world with Mahaba Travels</p>
    </div>

    
    <?php include_once("Templates/footer.php");?>
    <!--Footer section-->
    <div class="footer">
        <div class="container">
            <p>&copy; 2024 Mahaba Travels. All rights reserved.</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>