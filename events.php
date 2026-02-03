<!DOCTYPE html>
<html>
    <head>
        <style>
        body {
            background-color: rgb(255, 255, 255);
            border: 20px solid #447fe4;
            padding: 10px;
        }
        
        h1{
            color:rgba(0, 0, 0);
            font-size:x-large;
            font-family:'Courier New', Courier, monospace;
            text-align: center;
            text-decoration:underline;
        }

        .event{
            color:black;
            font-size: larger;
            text-align: center;
            margin-top: 50px;
        }

        .event-title{
            text-decoration:underline;
        }

        
         </style>
    </head>

<head>
    <title>Event Schedule</title>
</head>

<body>
    <h1>Event Schedule</h1>

<?php
$FoxDayEvents = [
    ['title' => 'Fox Day Face Paint', 
    'time' => '12pm', 
    'location' => 'Mills Lawn', 
    'Description' => 'Join us on Mills lawn to rep your Fox Day spirit with themed face paint!'
    ],

    ['title' => 'Gift Bag Giveaway', 
    'time' => '1pm', 
    'location' => 'KWR', 
    'Description' => 'Go to the first floor of KWR to pick up one of these Fox Day themed giftbags!'
    ],

    ['title' => 'Foxday Trivia', 
    'time' => '2pm', 
    'location' => 'Daves Boathouse', 
    'Description' => 'Answer questions about Rollins and past Fox Days to win awesome prizes!'
    ],

    ['title' => 'Fox Day Photo Booth', 
    'time' => '3pm', 
    'location' => 'Mills Lawn',
    'Description' => 'Grab some friends and get some pictures with some Fox Day themed props!'
    ]
];

foreach ($FoxDayEvents as $event) {
        ?>
        <div class="event">
            <div class="event-title"><?php echo htmlspecialchars($event['title']); ?></div>
            <div class="event-details">
                <strong>Time:</strong> <?php echo htmlspecialchars($event['time']); ?><br>
                <strong>Location:</strong> <?php echo htmlspecialchars($event['location']); ?><br>
                <strong>Description:</strong> <?php echo htmlspecialchars($event['Description']); ?><br><br>
            </div>
        </div>
        <?php
        }
    ?>
</body>
</html>