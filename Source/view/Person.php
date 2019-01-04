<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document <?php print($person->name); ?></title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
        </tr>

        <?php
        echo $person->name .'<br>';
        echo $person->birthday .'<br>';
        echo $person->description .'<br>';

        ?>
    </table>
    <a href="index.php"><h1>Back to List</h1> </a>
</body>
</html>