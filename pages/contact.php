<?php include 'thankyou.php';?>

<!DOCTYPE html>

<html>
    <body>

        <head>
            <title>Michael Thousand - Contact</title>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Quicksand&family=Raleway&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../style/contact.css">  
            <meta content="width=device-width, initial-scale=1" name="viewport" />
        </head>

        <header>
            <nav>
                <ul class="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li id="currentPage"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div id="pic">
                <img src="../content/UWM.png" alt="Picture of Michael">
            </div>
            <div class="container">
                <ul class="contact-list">
                    <li><a href="https://www.github.com/michaelthousand" target="_blank">GitHub</a></li>
                    <li><a href="https://www.linkedin.com/in/michael-thousand-89981911b/" target="_blank">LinkedIn</a></li>
                    <li><strong>Email:</strong> me@michaelthousand.com</li>
                    <li><strong>Location:</strong> Milwaukee, WI, United States</li>
                </ul>
            </div>   
            
            <form action="" name="myemailform" method="POST" enctype="" id="submissionForm">
                <h1>Get in touch with me!</h1>
                <p>If you would like to contact me about a potential job or just with general comments, please feel free to use the form below:</p>
                <label for="name">What's your name?</label>
                <input type="text" name="name" id="name" required>
                <br>
                <br>
                <label for="emailInput">What's your email address?</label>
                <input type="text" name="emailInput" id="emailInput">
                <br>
                <br>
                <label for="phoneInput">What's your phone number?</label>
                <input type="text" name="phoneInput" id="phoneInput">
                <br>
                <br>
                <span>How would you prefer for me to get in touch with you?</span>
                <br>
                <label for="phone" class="radioButtons">By phone</label>
                <input id="phone" name="contactPreference" type="radio" value="phone">
                <label for="email" class="radioButtons">By email</label>
                <input id="email" name="contactPreference" type="radio" value="email" required>
                <label for="either" class="radioButtons">Either is fine</label>
                <input id="either" name="contactPreference" type="radio" value="either">
                <br>
                <br>
                <label for="reason">Why are you reaching out to me?</label>
                <select id="reason" name="reason" required>
                    <option value="blank"></option>
                    <option value="job">Job Opportunity</option>
                    <option value="siteIssue">Website Feedback</option>
                    <option value="gameIdea">Game Idea</option>
                    <option value="other">Something Else</option>
                </select>
                <br>
                <br>
                <label for="message">Please enter the specifics of your message below:</label>
                <br>
                <textarea required id="message" name="message" rows="10" cols="70" minlength="5" maxlength="500"></textarea>
                <br>
                <br>
                <br>
                <br>
                <input type="submit" value="Submit your message">
            </form>
        </main>

        <footer>
            <div class="footer">
                <p>Created and designed by Michael Thousand - &copy; 2022</p>
            </div> 
        </footer>

    </body>
</html>