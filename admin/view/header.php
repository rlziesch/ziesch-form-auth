<?php

  include('./util/valid_admin.php');

  if (isset($_SESSION['is_valid_admin'])) { ?>
   <br> <p>Welcome <a href=".?action=logout">(Logout Admin)</a></p>
<?php } 

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>

<body>
    <main>
        <header>
            <h1>Zippy Admin</h1>
        </header>

        