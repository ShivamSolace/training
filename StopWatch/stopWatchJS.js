// window.onload = function () {



var seconds = 0, Dseconds = 0;
var minutes = 0, Dminutes = 0;
var timeOut = null;
var check = "stop";


function time() {
    seconds++;
    if (seconds / 60 == 1) {
        minutes++;
        seconds = 0;
    }

    if (seconds < 10) { Dseconds = "0" + seconds.toString(); }
    else { Dseconds = seconds.toString(); }
    if (minutes < 10) { Dminutes = "0" + minutes.toString(); }
    else { Dminutes = minutes.toString(); }
    document.getElementById("time").innerHTML = Dminutes + ":" + Dseconds;
}

function start() {
    if (check === "stop") {
        timeOut = window.setInterval(time, 1000);
        document.getElementById("start").innerHTML = "start";
        check = "start";
    }
}
function stop() {
    window.clearInterval(timeOut);
    document.getElementById("stop").innerHTML = "stop";
    check = "stop";
}

function reset() {
    window.clearInterval(timeOut);
    seconds = 0, minutes = 0;
    document.getElementById("time").innerHTML = "00:00";
    document.getElementById("start").innerHTML = "start";
}
// }
    // var newTens = document.getElementById("minutes")
    // var newSeconds = document.getElementById("seconds")
    // var startButton = document.getElementById('start');
    // var stopButton = document.getElementById('stop');
    // var resetButton = document.getElementById('reset');
    // var Interval;


    // startButton.onclick = function () {

    //     clearInterval(Interval);
    //     Interval = setInterval(starter, 1000);
    // }

    // stopButton.onclick = function () {
    //     clearInterval(Interval);
    // }


    // resetButton.onclick = function () {
    //     clearInterval(Interval);
    //     minutes = "00";
    //     seconds = "00";
    //     newTens.innerHTML = minutes;
    //     newSeconds.innerHTML = seconds;
    // }


    // function starter() {
    //     minutes++;

    //     if (minutes <= 9) {
    //         newTens.innerHTML = "0" + minutes;
    //     }

    //     if (minutes > 9) {
    //         newTens.innerHTML = minutes;

    //     }

    //     if (minutes > 99) {
    //         console.log("seconds");
    //         seconds++;
    //         newSeconds.innerHTML = "0" + seconds;
    //         minutes = 0;
    //         newTens.innerHTML = "0" + 0;
    //     }

    //     if (seconds > 9) {
    //         newSeconds.innerHTML = seconds;
    //     }

    // }
