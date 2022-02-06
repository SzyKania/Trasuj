const log_out_button = document.getElementById("logout");

log_out_button.addEventListener('click', function(event){
    event.preventDefault();
    let request = new XMLHttpRequest();
    request.open("POST", "/logout", true);
    request.send();
    document.location.href = "/login";
})