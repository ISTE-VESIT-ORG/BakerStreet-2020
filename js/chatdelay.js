function updateMessages() {
    var ps = document.getElementsByClassName("messages");
    for(var i = 0, len = ps.length; i < len; i++) {
        ps[i].innerHTML = "messages (" + messageCount + ")";
    }
}

setTimeout(updateMessages, 1000);