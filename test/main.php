<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2 style="color: white;">Welcome,
          <?php echo $_SESSION['username']; ?>
        </h2>
        <h4 style="text-align: center; font-weight: normal; color: white; ">(Out of 4 options, Choose 1 correct option to
          win the quiz.)
        </h4>
        <div class="quiz-container" id="quiz">
          <div class="quiz-header">
            <h2 id="question">Question Text</h2>
            <ul>
              <li>
                <input type="radio" name="answer" id="a" class="answer">
                <label for="a" id="a_text">Answer</label>
              </li>
    
              <li>
                <input type="radio" name="answer" id="b" class="answer">
                <label for="b" id="b_text">Answer</label>
              </li>
    
              <li>
                <input type="radio" name="answer" id="c" class="answer">
                <label for="c" id="c_text">Answer</label>
              </li>
    
              <li>
                <input type="radio" name="answer" id="d" class="answer">
                <label for="d" id="d_text">Answer</label>
              </li>
    
            </ul>
            <div class="signup_link">
              Tired of Playing? <a href="logout.php">Logout</a>
            </div>
    
          </div>
          <button id="submit">Next</button>
        </div>
</div>    
<script src="script.js"></script>
</body>
</html>