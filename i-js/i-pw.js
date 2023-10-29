var beatpack = [
{
  name: "Max Payne 2 - Main Theme",
  artist: "Remedy Games & Rockstar Games",
  src: "https://igardoivanov.host/musics/1.mp3",
  thumbnail: "url()" },

{
  name: 'GTA 4: Loading Theme [SLOWED]',
  artist: "Rockstar Games",
  src: "https://igardoivanov.host/musics/2.mp3",
  thumbnail: "url()" },

{
  name: 'Erika (Remix)',
  artist: "VXLCHIY CHEREP - Topic",
  src: "https://igardoivanov.host/musics/3.mp3",
  thumbnail: "url()" },

{
  name: 'TECHNO KILLA',
  artist: "KUTE",
  src: "https://igardoivanov.host/musics/4.mp3",
  thumbnail: "url()" },
  
{
  name: 'The Perfect Girl slowed + reverb (with a Nazi Germany voice)',
  artist: "Harder ♪",
  src: "https://igardoivanov.host/musics/5.mp3",
  thumbnail: "url()" },

  {
  name: 'Dejate Llevar',
  artist: "Better Call Saul Soundtrack",
  src: "https://igardoivanov.host/musics/6.mp3",
  thumbnail: "url()" },
  

  
{
  name: 'La muñeca de Jalisco',
  artist: "Better Call Saul Soundtrack",
  src: "https://igardoivanov.host/musics/7.mp3",
  thumbnail: "url()" }];


$(document).ready(function () {
  var playing = false,
  artistname = $(".artist-name"),
  musicName = $(".music-name"),
  time = $(".time"),
  fillBar = $(".fillBar");

  var song = new Audio();
  var CurrentSong = 0;
  window.onload = load();

  function load() {
    artistname.html(beatpack[CurrentSong].name);
    musicName.html(beatpack[CurrentSong].artist);
    song.src = beatpack[CurrentSong].src;
  }

  function playSong() {
    artistname.html(beatpack[CurrentSong].name);
    musicName.html(beatpack[CurrentSong].artist);
    song.src = beatpack[CurrentSong].src;
    song.play();
    $("#thumbnail").css("background-image", beatpack[CurrentSong].thumbnail);
    $("#play").addClass("fa-pause");
    $("#play").removeClass("fa-play");
    $("#thumbnail").addClass("active");
    $(".player-track").addClass("active");
  }

  song.addEventListener("timeupdate", function () {
    var position = 100 / song.duration * song.currentTime;
    var current = song.currentTime;
    var duration = song.duration;
    var durationMinute = Math.floor(duration / 60);
    var durationSecond = Math.floor(duration - durationMinute * 60);
    var durationLabel = durationMinute + ":" + durationSecond;
    currentSecond = Math.floor(current);
    currentMinute = Math.floor(currentSecond / 60);
    currentSecond = currentSecond - currentMinute * 60;
    // currentSecond = (String(currentSecond).lenght > 1) ? currentSecond : ( String("0") + currentSecond );
    if (currentSecond < 10) {
      currentSecond = "0" + currentSecond;
    }
    var currentLabel = currentMinute + ":" + currentSecond;
    var indicatorLabel = currentLabel + " / " + durationLabel;

    fillBar.css("width", position + "%");

    $(".time").html(indicatorLabel);
  });

  $("#play").click(function playOrPause() {
    if (song.paused) {
      song.play();
      playing = true;
      $("#play").addClass("fa-pause");
      $("#play").removeClass("fa-play");
      $("#thumbnail").addClass("active");
      $(".play-btn:before").css("padding-left", 300);

      document.getElementsByClassName("play-btn")[0].classList.add("pause-btn");
      document.getElementsByClassName("play-btn")[0].classList.remove("play-btn");
    } else {
      song.pause();
      playing = false;
      $("#play").removeClass("fa-pause");
      $("#play").addClass("fa-play");
      $("#thumbnail").removeClass("active");

      document.getElementsByClassName("pause-btn")[0].classList.add("play-btn");
      document.
      getElementsByClassName("pause-btn")[0].
      classList.remove("pause-btn");
    }
  });

  $("#prev").click(function prev() {
    CurrentSong--;
    if (CurrentSong < 0) {
      CurrentSong = beatpack.length - 1;
    }
    playSong();
  });

  $("#next").click(function next() {
    CurrentSong++;
    if (CurrentSong == beatpack.length) {
      CurrentSong = 0;
    }
    playSong();
  });
});
//# sourceURL=pen.js