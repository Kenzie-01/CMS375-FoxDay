<!DOCTYPE html>
<html>
    <head>
        <style>
        body {
            background-color: rgb(255, 255, 255);
            border: 20px solid #447fe4;
            padding: 10px;
        }
        
        .info{
            color:black;
            font-size: larger;
            text-align: center;
            margin-top: 20px;
        }

        p{
            color:black;
            font-size:large;
            text-align: center;
            margin-top: 30px;
        }

        .event-title{
            text-decoration:underline;
        }

        </style>
    </head>

    <head>
        <title>Regrestration Results</title>
    </head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];
    $year = $_POST['year'];

    if (empty($name) || empty($email) || empty($event) || empty($year)){
        echo "You may be missing some information! Make sure you filled out every field!";
        echo "Follow this link back to the regrestration page!";
        
        echo '<div class = "nav-links">';
        echo '<a href = "register.html" class = "btn">Register Here!</a>';
        echo '</div>';
        }
        
        else {
            ?>
            <div class = "info">
                <div class = "event-title">Regrestration Succesful!</div>
                <p>Below are your regrestration details:</p>

                <div class="event-details">
                    <strong>Name:</strong> <?php echo htmlspecialchars($name); ?><br>
                    <strong>Email:</strong> <?php echo htmlspecialchars($email); ?><br>
                    <strong>Event:</strong> <?php echo htmlspecialchars($event); ?><br>
                    <strong>Year:</strong> <?php echo htmlspecialchars($year); ?><br>
                </div>
            </div>
            <?php
        }
        
        echo '<p>We have sent a confirmation email to ' . htmlspecialchars($email) . '.</p>';
        echo '<p>Welcome to Fox Day! Your Adventure awaits!</p>';
    }
?>
</body>
</html>
