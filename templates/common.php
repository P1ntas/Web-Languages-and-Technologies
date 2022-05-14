<?php declare(strict_types = 1); ?>

<?php function drawHeader() { ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Restaurant Helper</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header>
      <h1><a href="/">Restaurant helper</a></h1>
      <?php if (isset($_SESSION['id'])) drawLogoutForm($_SESSION['name']);
        else drawLoginForm(); ?>
    </header>
    <main>
<?php } ?>

<?php function drawFooter() { ?>
    </main>

    <footer>
      Restaurant helper
    </footer>
  </body>
</html>
<?php } ?>

<?php function drawLoginForm() { ?>
  <form action="action_login.php" method="post" class="login">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <a href="register.php">Register</a>
    <button type="submit">Login</button>
  </form>
<?php } ?>

<?php function drawLogoutForm(string $name) { ?>
  <form action="action_logout.php" method="post" class="logout">
  <a href="profile.php"><?=$name?></a>
    <button type="submit">Logout</button>
  </form>
<?php } ?>