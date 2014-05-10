<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>

    <meta charset="utf-8"/>

    <link rel="stylesheet" type="text/css" href="../css/layout.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>

</head>
<body>

<header>
    <h2><?= $title ?></h2>
</header>

<nav>
    <ul>
        <li>
            <a href="home">Home</a>
        </li>
        <li>
            <a href="Laravel">Laravel</a>
        </li>
        <li>
            <a href="php">Php</a>
        </li>
        <li>
            <a href="contacts">Contacts</a>
        </li>
    </ul>
</nav>

<?= $tpl_content; ?>


<footer>
    <p>Gabriel Mayta - grandemayta@gmail.com</p>
</footer>

</body>
</html>