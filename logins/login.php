<?php
//--------------------------------
//require_once __DIR__ . '../src/MainController.php';
//--------------------------------
?>

</head>

<body>
<header>
    hint: try <strong>admin / admin</strong> when you login ...
</header>
<nav>
    <a href="/index.php?action=login"">log in</a>
    <a href="/index.php?action=logout">log out </a>>
    <hr>
</nav>

<form

    method="post"
>

    <input type="hidden" name="action" value="processLogin">

    <p>
        username:
        <input type="text" name="username">
    </p>

    <p>
        password:
        <input type="text" name="password">
    </p>

    <input type="submit" value="login">

</form>