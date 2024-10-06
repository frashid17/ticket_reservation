<?php 
session_start();
// Ensure ORDERREF is set and valid
if (!isset($_SESSION['ORDERREF']) || empty($_SESSION['ORDERREF'])) {
    header('Location: index.php'); // Redirect to home page if no order ref
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAEKANA SACCO Ticket Reservation System</title>
    <link rel="stylesheet" href="semantic/semantic.min.css">
    <link rel="stylesheet" href="semantic/datepicker.css">
    <style>
        body {
            background-color: #f1f1f1;
        }
        a {
            cursor: pointer;
        }
        .main-container {
            margin-top: 60px;
        }
        .steps-container {
            margin-top: 40px;
        }
    </style>
    <script src="semantic/jquery.min.js"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="semantic/datepicker.js"></script>
    <script src="nav.js"></script>
    <script>
      var ORDERREF = '<?php echo htmlspecialchars($_SESSION['ORDERREF'], ENT_QUOTES, 'UTF-8'); ?>';
    </script>
</head>
<body>

    <!-- Navbar -->
    <div class="ui inverted huge borderless fixed fluid menu">
        <a class="header item">NAEKANA SACCO Ticket Reservation System</a>
    </div>

    <div class="ui container main-container">
        <!-- Steps -->
        <div class="ui fluid container center aligned steps-container">
            <div class="ui unstackable tiny steps">
                <div class="step" onclick="booking()">
                    <i class="plane icon"></i>
                    <div class="content">
                        <div class="title">Booking Details</div>
                        <div class="description">Travelling and booking info</div>
                    </div>
                </div>
                <div class="disabled step" id="contactbtn" onclick="contact()">
                    <i class="truck icon"></i>
                    <div class="content">
                        <div class="title">Details</div>
                        <div class="description">Contact information</div>
                    </div>
                </div>
                <div class="disabled step" id="billingbtn" onclick="billing()">
                    <i class="money icon"></i>
                    <div class="content">
                        <div class="title">Billing</div>
                        <div class="description">Payment and verification</div>
                    </div>
                </div>
                <div class="disabled step" id="confirmationbtn" onclick="confirmdetails()">
                    <i class="info icon"></i>
                    <div class="content">
                        <div class="title">Confirm Details</div>
                        <div class="description">Verify order details</div>
                    </div>
                </div>
                <div class="disabled step" id="finishbtn">
                    <i class="print icon"></i>
                    <div class="content">
                        <div class="title">Finish and Print</div>
                        <div class="description">Print Ticket</div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- Dynamic Content Section -->
        <div id="dynamic">
            <!-- Booking Page -->
            <div class="ui container text" id="booking-page">
                <div class="ui attached message">
                    <div class="header">Booking Info</div>
                    <div class="header">Order Ref: 
                        <span style="color:red;font-size:15px"><?php echo htmlspecialchars($_SESSION['ORDERREF'], ENT_QUOTES, 'UTF-8'); ?></span> 
                        <a href="index.php">Cancel Order</a>
                    </div> 
                    <p>Enter travelling booking info</p>
                </div>

                <form class="ui form attached fluid loading segment" onsubmit="return contact(this)">
                    <div class="field">
                        <label>Destination</label>
                        <select required id="destination">
                            <option value="" selected disabled>--Travel Destination--</option>
                            <option>MOMBASA to NAKURU</option>
                            <option>NAKURU to MOMBASA</option>
                            <option>NAIROBI to NAKURU</option>
                            <option>NAKURU to NAIROBI</option>
                            <option>Mombasa to Nairobi</option>
                            <option>Nairobi to Mombasa</option>
                        </select>
                    </div>   

                    <div class="field">
                        <label>Traveling Class</label>
                        <span><a href="home.php">Learn more</a><i> about traveling classes</i></span>
                        <select required id="travelclass">
                            <option value="" selected disabled>--Travel Class--</option>
                            <option>High Class Travel</option>
                            <option>Middle Class Travel</option>
                            <option>Lower Class Travel</option>
                            <option>Special Needs Travel</option>
                        </select>
                    </div>

                    <div class="two fields"> 
                        <div class="field">
                            <label>Number of Seats</label>
                            <input placeholder="Number of Seats" type="number" id="seats" min="1" max="72" value="1" required>
                        </div> 

                        <div class="field">
                            <label>Date of Travel</label>
                            <input type="text" readonly required id="traveldate" class="datepicker-here form-control" placeholder="ex. October 07, 2024">
                        </div>  
                    </div>

                    <div style="text-align:center">
                        <div><label>Ensure all details have been filled correctly</label></div>
                        <button class="ui green submit button">Submit Details</button>
                    </div>
                </form>
            </div>

            <!-- Other Sections: Contact, Billing, Confirm Details go here (similar to the original) -->

        </div>
    </div>

</body>
</html>
