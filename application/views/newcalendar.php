<head>
    <title>My Calendar</title>
    <style type="text/css">
        .calendar {
            font-family: Arial; font-size: 12px;
        }
        table.calendar {
            margin: auto; border-collapse: collapse;
        }
        .calendar .days td {
            width: 80px; height: 80px; padding: 4px;
            border: 1px solid #999;
            vertical-align: top;
            background-color: #DEF;
        }
        .calendar .days td:hover {
            background-color: #FFF;
        }
        .calendar .highlight {
            font-weight: bold; color: #00F;
        }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<?php echo $calendar; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.calendar .day').click(function() {
            day_num = $(this).find('-day_num').html()
            alert(day_num);


        });

    });
</script>
</body>
