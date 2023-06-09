<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>S&B Banking</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./assets/images/favicon.png">
  </head>
  <body>
    <?php 
      include "./components/header.php";
    ?>
    <section class="home">
      <h1>
        All the <span>experience</span><br />
        in new <i class="ri-arrow-right-line"></i>S&B Bank
      </h1>
      <p>
        Simple transfers, payment for utlities, functional statement, card
        settiings, for which you used to have to the branch online-banking.
      </p>
      <div class="buttons">
        <a href="create-user.php" class="createUser">Create User</a>
      </div>
    </section>
    <?php>
      include "./components/footer.php";
    ?> 
    <script src="./assets/js/script.js"></script>

  </body>
</html>
