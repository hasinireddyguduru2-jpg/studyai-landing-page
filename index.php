<!DOCTYPE html>
<html>
<head>
  <title>StudyAI</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- navbar -->
<div class="nav">
  <h2>StudyAI</h2>

  <div class="menu">
    <a href="#">Home</a>
    <a href="#features">Features</a>
    <a href="#plans">Plans</a>
    <a href="#contact">Contact</a>
  </div>
</div>

<!-- main section -->
<div class="main">
  <h1>Study smarter with AI tools</h1>
  <p>This helps you study better using simple tools</p>
  <button>Try Now</button>
</div>

<!-- features -->
<div id="features" class="section">
  <h2>Features</h2>

  <div class="boxes">
    <div class="box">
      <h3>Notes</h3>
      <p>Quick notes from content</p>
    </div>

    <div class="box">
      <h3>Quiz</h3>
      <p>Practice anytime</p>
    </div>

    <div class="box">
      <h3>Progress</h3>
      <p>Track improvement</p>
    </div>
  </div>
</div>

<!-- plans -->
<div id="plans" class="section light">
  <h2>Plans</h2>

  <div class="boxes">
    <div class="box">
      <h3>Free</h3>
      <p>₹0</p>
      <button>Select</button>
    </div>

    <div class="box highlight">
      <h3>Pro</h3>
      <p>₹499/month</p>
      <button>Select</button>
    </div>

    <div class="box">
      <h3>Premium</h3>
      <p>₹999/month</p>
      <button>Select</button>
    </div>
  </div>
</div>

<!-- contact -->
<div id="contact" class="section">
  <h2>Contact Us</h2>

  <form method="POST">
    <input type="text" name="name" placeholder="Enter name" required><br><br>
    <input type="email" name="email" placeholder="Enter email" required><br><br>
    <textarea name="message" placeholder="Your message" required></textarea><br><br>
    <button type="submit" name="submit">Send</button>
  </form>

  <?php
  // simple form handling
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    // save data into file
    $text = "Name: $name | Email: $email | Message: $msg\n";
    file_put_contents("data.txt", $text, FILE_APPEND);

    echo "<p>Thank you, $name. Message received.</p>";
  }
  ?>
</div>

<!-- footer -->
<div class="footer">
  <p>© 2026 StudyAI</p>
</div>

</body>
</html>