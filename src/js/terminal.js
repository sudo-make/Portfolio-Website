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
        $('.output-pre').remove();
        lsClicked = false;
        document.getElementById('terminal-input').value = '';
    }
    else if (terminal_input == "su") {
        $('#output').append("</br class='line-break'>");
        $('#output').append("<label style='color: blue' for='terminal-pass' class='label-pass'>Please enter root password:  </label><input id='terminal-pass' value='' type='password' autofocus></input>");
        document.getElementById('terminal-input').value = '';
        pass();
    }
    else if (terminal_input.startsWith("sudo") && (terminal_input.endsWith("./about.sh") || terminal_input.endsWith("ls projects") || terminal_input.endsWith("./contact.sh")) ) {
        $('#output').append("</br class='line-break'>");
        $('#output').append("<p style='color: red' class='output-pre'>(ノಠ益ಠ)ノ彡┻━┻ you are not in the sudoers file! No cookies for u!</p>");
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

function pass() {
    document.getElementById('terminal-pass').addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
        var pass_input = $('#terminal-pass').val(); // Get the terminal input
        if (pass_input == "root") {
            $('#terminal-pass').remove();
            $('.label-pass').remove();
            $('.error').remove();
            $('#output').append("</br class='line-break'>");
            $('#output').append("<p class='output-pre'>((ง'̀-'́)ง welp, looks like you guessed one of the most uncommon and most secure passwords in the world. Enjoy relishing in your achievement in defeating the website.</p>");
            document.getElementById('terminal-input').value = '';
        } else {
            $('#output').prepend("<p class='error' style='color: red'>Incorrect password!</p>");
            document.getElementById('terminal-pass').value = '';
        }
     }
    });
}