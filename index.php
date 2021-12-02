<html>
    <header>
        <title>Module 05 Assignment 05a</title>
        <link rel="stylesheet" href="../main.css">
    </header>
    <body>
        <div class = "navbar">
            <ul>
                <li><a href="../aboutMeAngularJS.html">About Me</a></li>
                <li><a href="../index.html">Home</a></li>
            </ul>
        </div>
        <div class = "intro">
            <h2>Assignment 05a: Farkle</h2>
            <p>A game of dice and probability.</p>
            <form method = "post" action = "farkle.php">
                <input type = "submit" value = "Let's Play!">
            </form>
        </div>
        
        <!-- This is the about page for the game
             Farkle is a game of chance where the player must roll the dice in order to create the highest scoring combinations
        -->
        
        <div class = "content">
            
            <h2>About Farkle</h2>
            
            <table class = "center">
                <tr>
                    <th>Farkle Facts</th>
                </tr>
                <tr>
                    <td>Single 1s and 5s are worth points</td>
                </tr>
                <tr>
                    <td>Other numbers count if you get three or more of the same number in a single roll</td>
                </tr>
                <tr>
                    <td>Other combinations of numbers are worth points if  you get them in a single roll</td>
                </tr>
                <tr>
                    <td>Some scoring dice must be removed after every roll</td>
                </tr>
            </table>
            
            <br>
            
            <h2>Scoring</h2>
            <table class = "center">
                <tr>
                    <th>Combinations</th>
                    <th>Points</th>
                </tr>
                <tr>
                    <td>Single 1</td>
                    <td>100pts</td>
                </tr>
                <tr>
                    <td>Single 5</td>
                    <td>50pts</td>
                </tr>
                <tr>
                    <td>Three 1s</td>
                    <td>300pts</td>
                </tr>
                <tr>
                    <td>Three 2s</td>
                    <td>200pts</td>
                </tr>
                <tr>
                    <td>Three 3s</td>
                    <td>300pts</td>
                </tr>
                <tr>
                    <td>Three 4s</td>
                    <td>400pts</td>
                </tr>
                <tr>
                    <td>Three 5s</td>
                    <td>500pts</td>
                </tr>
                <tr>
                    <td>Four of any number</td>
                    <td>1000pts</td>
                </tr>
                <tr>
                    <td>Five of any number</td>
                    <td>2000pts</td>
                </tr>
                <tr>
                    <td>Six of any number</td>
                    <td>3000pts</td>
                </tr>
                <tr>
                    <td>1-6 straight</td>
                    <td>1500pts</td>
                </tr>
                <tr>
                    <td>Three pairs</td>
                    <td>1500pts</td>
                </tr>
                <tr>
                    <td>Four of any number with a pair</td>
                    <td>1500pts</td>
                </tr>
                <tr>
                    <td>Two Triplets</td>
                    <td>2500pts</td>
                </tr>
            </table>
            
            <br>
            
            <h2>Who Wins?</h2>
            <p>When a player reaches an accumulated score of 10,000 or more, each of the other players has one more turn to beat that total. Player with the <em>highest</em> score wins.</p>
            
            <form method = "post" action = "farkle.php">
                <input type = "submit" value = "Let's Play!">
            </form>
        </div>

        <footer>
            <h3>Contact <br> Information</h3>
                <ul>
                    <li><a href="mailto:iq4186rf@go.mnstate.edu"><img src="../images\email_icon.png" alt="email"></a></li>
                    <li><a href= "https://www.linkedin.com/in/caitlin-brooks-08a2b61b7"><img src="../images\linkedin_logo.png" alt="Linkedin"></li>
                </ul>
        </footer>

    </body>
</html>
