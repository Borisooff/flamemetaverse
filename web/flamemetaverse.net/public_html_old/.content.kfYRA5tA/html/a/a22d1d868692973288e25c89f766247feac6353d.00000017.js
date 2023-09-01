let timer = "1 May 2022";

function countdown() {
    let timerDate = new Date(timer);
    let currentDate = new Date();

    console.log(timerDate - currentDate);

    let totalSeconds = (timerDate - currentDate) / 1000;

    let seconds = Math.floor(totalSeconds)%60;
    let minutes = Math.floor(totalSeconds/60)%60;
    let hours = Math.floor(totalSeconds/3600)%24;
    let days = Math.floor(totalSeconds/3600/24);
    console.log(seconds);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

}

setInterval(countdown, 1000);



