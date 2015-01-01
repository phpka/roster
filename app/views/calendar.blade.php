<!DOCTYPE html>
<html>
<head>
    <title>カレンダー</title>
    <meta charset="UTF-8">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/underscore-min.js"></script>
    <script type="text/javascript" src="js/language/id-ID.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <link rel="stylesheet" href="css/calendar.css">
</head>
<body>
    <div id="calendar"></div>
    <script type="text/javascript">
        (function() {
            var options = {
                events_source: JSON.parse('{{ $schedules }}'),
                view: 'month',
                tmpl_path: 'tmpls/',
                tmpl_cache: false,
                day: '2015-01-02',
            };
            var calendar = $('#calendar').calendar(options);
        })();
    </script>
</body>
</html>
