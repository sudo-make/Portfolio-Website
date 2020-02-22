// Show the about modal when ./about.sh is typed

var lsClicked = false;

// add keyEvent listener when window fully loads
window.onload=function() {
    document.getElementById('terminal-input').addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
            input();
        }
    });   
}

function input() {
    var terminal_input = $('#terminal-input').val(); // Get the terminal input

    if (terminal_input == "clear") {
        document.getElementById('ls-projects').style.display = "none";
        $('br').remove();
        $('.error').remove();
        lsClicked = false;
        document.getElementById('terminal-input').value = '';
    }
    else if (terminal_input == "./about.sh") {
        $('#aboutModal').modal('show'); // show about modal
        document.getElementById('terminal-input').value = '';
    }
    else if (terminal_input == "./contact.sh") {
        $('#contactModal').modal('show'); // show about modal
        document.getElementById('terminal-input').value = '';
    }
    else if (terminal_input == "ls projects") {
        $('#output').append("</br class='line-break'>");
        document.getElementById('ls-projects').style.display = "block";
        $('#output').append("</br class='line-break'>");
        document.getElementById('terminal-input').value = '';
    }
    else {
        $('#output').append("<p class='error'>Bash: command not found: " + terminal_input + "</p>");
        $('#output').append("</br class='line-break'>");
        document.getElementById('terminal-input').value = '';
    }
}

function lsProjects() {
    if (!lsClicked) {
        $('#output').append("</br class='line-break'>");
        document.getElementById('ls-projects').style.display = "block";
        $('#output').append("</br class='line-break'>");
        document.getElementById('terminal-input').value = '';
        lsClicked = true;
    }
}