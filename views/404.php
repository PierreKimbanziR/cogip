<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="COGIP Application">
    <meta name="Authors" content="Philippe Gilles, Pierre Kimbanzi, Guillaume Dery, Emmanuel Trepant">
    <link rel="icon" type="image/png" href="/cogip/static/img/cogip-logo3.png" />
    <title>404 - Not Found</title>
    <link rel="stylesheet" href="/cogip/static/css/404.css" />
</head>

<body>
    <canvas id="tv"></canvas>
    <main class="blue container">
        <h1 class="white title">
            <span class="bg">Holy Guacamole ! Error - 404</span>
        </h1>
        <img class="gif" src="/cogip/static/img/no.gif" alt="gif" />
        <p>An error has occured, ressource <b><i>"<?=$route?>"</i></b> was not found :</p>
        <p>
            * Verify URL<br />
            * Return to homepage<br />
        </p>
        <nav class="nav">
            <a href="/cogip/home" class="link">>> Go to home page <<</a>
        </nav>
    </main>
</body>
<script src="/cogip/static/js/404.js">
</script>

</html>