<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <button id="infoButton" class="about-button" style="margin-right: 1085px;" onclick="learnMore()">Aegis</button>
   <div class="player" style=" background-image: url('images/aegis.jpg');">
       <div class="wrapper">
           <div class="details">
               <div class="now-playing">PLAYING x OF y</div>
               <div class="track-art"></div>
               <div class="track-name">Track Name</div>
               <div class="track-artist">Track Artist</div>
           </div>

           <div class="slider_container">
               <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration">00:00</div>
           </div>

           <div class="slider_container">
               <i class="fa fa-volume-down"></i>
                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                <i class="fa fa-volume-up"></i>
           </div>

           <div class="buttons">
            <div class="repeat-track" onclick="repeatTrack()">
                <i class="fa fa-repeat fa-2x" title="repeat"></i>
            </div>
               <div class="prev-track" onclick="prevTrack()">
                    <i class="fa fa-step-backward fa-2x"></i>
                </div>
                <div class="playpause-track" onclick="playpauseTrack()">
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <i class="fa fa-step-forward fa-2x"></i>
                </div>
                <div class="playlist-track" onclick="showPlaylist()">
                    <i class="fa fa-music fa-2x" title="Playlist"></i>
                </div>
           </div>
           <div id="playlist" class="playlist hidden">
            <div class="close-button" onclick="hidePlaylist()">X</div><br><br>
            <div class="song" onclick="selectSong(0)">Luha<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(1)">Hesus<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(2)">Basang Basa Sa Ulan<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(3)">Bulang, Pipi At Bingi<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(4)">Christmas Bonus<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(5)">Dukha<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(6)">Halik<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(7)">Miss Na Miss Kita<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(8)">Munting Pangarap<span class="aegis">Aegis</span></div>
        <hr><br>
        <div class="song" onclick="selectSong(9)">Sayang Na Sayang<span class="aegis">Aegis</span></div>
         </div>

</div>
</div>

</div>
<script>
    function learnMore() {
        console.log("Learn More button clicked");
        window.location.replace("about.php");
    }
</script>
</body>
</html>
