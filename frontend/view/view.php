<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My site</title>
</head>
<body>
<form action="../controller/controller.php" method="post">
  Your name: <input type="text" placeholder="Name" name="new[name]"> <br>
  Your comment: <br>
  <textarea name="new[text]" cols="30" rows="10"></textarea> <br>
  <input type="submit" name="doAdd" value="Add">
</form>

<h2>Book</h2>
<?php foreach ($book as $e) { ?>
Name: <?php echo $e['name'] ?> <br>
Comment: <?php echo $e['text']?><hr />
<?php } ?>

</body>
</html>