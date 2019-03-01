function timer() {

    let seconds = $('#seconds');
    let minuets = $('#minutes');
    let hours = $('#hours');
    let sec = 0;

    let isRunning = false;

    let start = $('#start-timer');
    let stop = $('#stop-timer');
    
    let timer;
    
    start.on('click', function () {
        if (!isRunning){
            timer =  setInterval(run, 1000);
            isRunning = true;
        }
    });

    stop.on('click', function () {
        clearInterval(timer);
        isRunning = false;
    });
    
    function run() {
        sec++;
        seconds.text(('0' + sec % 60).slice(-2));
        minuets.text(('0' + Math.trunc((sec / 60) % 60)).slice(-2));
        hours.text(('0' + Math.trunc(sec / 3600)).slice(-2));
    }
}