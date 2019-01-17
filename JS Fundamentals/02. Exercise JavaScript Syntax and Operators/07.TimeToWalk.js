function solve(steps, footprint, speed){
    let distanceInMeters = steps * footprint;
    let breakInSeconds = (Math.floor(distanceInMeters / 500)) * 60;
    let timeInSeconds = (distanceInMeters / (speed * 1000)) * 3600;
    let totalTime = breakInSeconds + timeInSeconds;
    let hours = Math.floor(totalTime / 3600);
    let minutes = Math.floor(totalTime / 60);
    let seconds = Math.round(totalTime % 60);
    let time=('0'  + hours).slice(-2)+':'+('0'  + minutes).slice(-2)+':'+('0' + seconds).slice(-2);
    console.log(time);
}

solve(15263, 0.70, 5.5);