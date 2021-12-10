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
            <form method = "post" action = "assignment.php">
                <input type = "submit" value = "Group Roles">
            </form>
        
        </div>
        
        <!-- This is the about page for the game
             Farkle is a game of chance where the player must roll the dice in order to create the highest scoring combinations
        -->
        
        <div class = "content">
            
            <h2>About Farkle</h2>
            
            <table class = "center">
                <tr>
                    <th>Oversimplified Farkle Facts</th>
                </tr>
                <tr>
                    <td>Single 1s and 5s are worth points</td>
                </tr>
                <tr>
                    <td>A player gets up to three rolls to get as many points as possible</td>
                </tr>
                <tr>
                    <td>If one of the rolls does not score any points, their turn is over</td>
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
               
            </table>
            
            <br>
            
            <h2>Who Wins?</h2>
            <p>When a player reaches an accumulated score of 6,000 or more. Player with the <em>highest</em> score wins.</p>
            
            <form method = "post" action = "farkle.php">
                <input type = "submit" value = "Let's Play!">
            </form>
            <!--
            <form method = "post" action = "assignment.php">
                <input type = "submit" value = "Group Roles">
            </form>
            -->
        </div>

        
    </body>
</html>
