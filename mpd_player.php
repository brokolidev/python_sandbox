<!doctype html>
<html>

<head>
    <title>Dash.js Rocks</title>
    <style>
    video {
        width: 640px;
        height: 360px;
    }
    </style>
</head>

<body>
    <div>
        <video id="videoPlayer" controls></video>
    </div>
    <script src="js/dash.all.min.js"></script>
    <script>
    (function() {
        var url = "https://d1w4nnhc6p1sud.cloudfront.net/output/dash/IMG2065.mpd";
        var player = dashjs.MediaPlayer().create();
        player.initialize(document.querySelector("#videoPlayer"), url, true);
    })();
    </script>
</body>

</html>