/*var timer = 0;
var spm = 0;
var scount = 0;
var interval_timer = 0;
var started = false;*/
var start = 0;

/*$("#input_pass").keypress(function(evt){
    if(!started){
        start();
        started = true;
    }
    evt = evt || window.event;
    $("#input_pass").keyup(function(){
        $("#scount").text($("#input_pass").val().length);
        scount = $("#input_pass").val().length
    });
    if (evt.keyCode == 13) {
        send();
    }
});

function start(){
    interval_timer = setInterval(function(){
        timer ++;
        $("#timer").text(timer);
    }, 1000)

}

function stop(){
    clearInterval(interval_timer);
    started = false;
    spm = Math.round(scount / (timer / 60));
    $("#spm").text(spm);
}

function send() {
    stop();
}*/

$("#input_pass").keyup(function(e) {
    if(e.keyCode == 37) {
        start = new Date().getTime();
    } else if(e.keyCode == 39) {
        var elapsed = new Date().getTime() - start;
        $("#timer_key_press").text(elapsed);
        // start again
        start = 0;
    }
});