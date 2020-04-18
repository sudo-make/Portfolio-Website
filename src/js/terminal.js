var lsClicked = false;
var whoisClicked = false;
var contactClicked = false;

// add keyEvent listener when window fully loads
window.onload=function() {
    document.getElementById('terminal-input').addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
            input();
        }
    });   
}

// Handle of all the input from the terminal
function input() {
    var terminal_input = $('#terminal-input').val().toLowerCase().trim(); // Get the terminal input

    if (terminal_input == "clear") {
        clear();
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
        if (contactClicked) {
            // If the contact form is already open
            $('#output').append("<p class='error'>Command is already running, please type 'clear' into the prompt.</p>");
            $('#output').append("</br class='line-break'>");
            document.getElementById('terminal-input').value = '';
        } else contact();
    }
    else if (terminal_input == "ls projects") {
        if (lsClicked) {
            // If the projects section is already open
            $('#output').append("<p class='error'>Command is already running, please type 'clear' into the prompt.</p>");
            $('#output').append("</br class='line-break'>");
            document.getElementById('terminal-input').value = '';
        } else lsProjects();
    }
    else if (terminal_input == "whois sudo-make" || terminal_input == "whois sudo" || terminal_input == "whois callum") {
        if (whoisClicked) {
            // If the about section is already open
            $('#output').append("<p class='error'>Command is already running, please type 'clear' into the prompt.</p>");
            $('#output').append("</br class='line-break'>");
            document.getElementById('terminal-input').value = '';
        } else whois();
    }
    else {
        $('#output').append("<p class='error'>Bash: command not found: " + terminal_input + "</p>");
        $('#output').append("</br class='line-break'>");
        document.getElementById('terminal-input').value = '';
    }
}

function contact() {
    if (!contactClicked) {
        document.getElementById('contactForm').style.display = "block";
        document.getElementById('terminal-input').value = '';
        contactClicked = true;
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

function whois() {
    if (!whoisClicked) {
        $('#output').append("<h3 class='terminal-out'>Hey!</h3>");
        $('#output').append("<p class='terminal-out'>My name is Callum-James Smith; I am a 2nd year student at the university of essex; studying computer science.</p>");
        $('#output').append('<p class="terminal-out">I make <i class="terminal-out fa fa-gamepad" aria-hidden="true"></i> games, create websites, and mess around with <i class="terminal-out fa fa-linux" aria-hidden="true"></i> Linux.</p><p class="small">I also love dragons <i class="fas fa-dragon"></i>')
        $('#output').append('<h3 class="terminal-out">My education:</h3><br>')
        var lOutput = `<div class="terminal-out">
                        <ul class="terminal-out timeline">
                        <li>
                            <p>Student</p>
                            <p>University of Essex</p>
                            <p>Oct 2018 - Present</p>
                            <p>I learnt and am still learning a lot at university; successfully completing a number of projects including a team project.</p>
                            <p><strong>Modules include:</strong></p>
                            <ul>
                                <li>Team Project</li>
                                <p class="small">This module involved the development of a product as part of a agile team. The project was to create an application that read data from a CSV file, and then would display loads of data pertaining to the module marks for particular students.</p>
                                <li>Introduction to programming (Python)</li>
                                <li>Mathematics for computing</li>
                                <li>Object-oriented programming (Java)</li>
                                <li>C++ Programming</li>
                                <li>Games Programming</li>
                            </ul>
                            <p><strong>Certifications:</strong> Cisco Certified Network Associate (CCNA).</p>
                            
                        </li>
                        <br>
                        <li>
                            <p>Student</p>
                            <p>(East) Sussex Coast College</p>
                            <p>2015 - 2018</p>
                            <p>This is my college degree in information communication technology. I achieved a D* for both Level 2 and 3. Gained experience with the design of software, planning and then producing a product for a target market. Alongside gaining experience in written communication and languages such as; C++, PHP, and C#. Also obtained experience in designing a full game; including technical documentation, manual, and a game design document. With the game being produced on Unity 3D and available on GitHub.</p>
                            <p><strong>This course consisted of modules in:</strong></p>
                            <ul>
                            <li>Programming (C++)</li>
                            <li>Games Development (Unity3D)</li>
                            <li>Website Production (HTML,CSS,PHP)</li>
                            <li>Sound in Computer Games</li>
                            <li>Digital Portfolio</li>
                            </ul>
                        </li>
                    </ul>
                    </div>`;

        // Experience
        $('#output').append(lOutput);
        $('#ls-projects').append("</br class='line-break'>");
        document.getElementById('terminal-input').value = '';
        whoisClicked = true;
    }
}

function clear() {
    document.getElementById('ls-projects').style.display = "none";
    document.getElementById('contactForm').style.display = "none";
    $('br').remove();
    $('.terminal-out').remove();
    $('.error').remove();
    $('.output-pre').remove();
    document.getElementById('terminal-input').value = '';
    lsClicked = false;
    whoisClicked = false;
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