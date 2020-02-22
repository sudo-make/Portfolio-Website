// Show the about modal when ./about.sh is typed

// Event listener
// var t_input = document.getElementById("#terminal-input");
window.onload=function() {
    document.getElementById('terminal-input').addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
            input();
        }
    });   
}

function input() {
    var terminal_input = $('#terminal-input').val(); // Get the terminal input

    if (terminal_input == "./about.sh") {
        $('#aboutModal').modal('show'); // show about modal
    } 
    if (terminal_input != "./about.sh") {
        $('#input-label').prepend("<p>Error: Please enter a correct command!</p>");
        $('#input-label').prepend("</br>");
    }
}