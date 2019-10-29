<?php

include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <div class="alert alert-warning shadow mt-5" role="alert">
        <h1>Hi,<b><?php echo htmlspecialchars(!empty($_SESSION['firstname'])) ? ($_SESSION["firstname"]) : ($_SESSION["username"]); ?></b>.
            did you know that :</h1>
        <p id="joke" class="lead">
        </p>
        <div class="d-flex justify-content-center">
            <button id="newJoke" class="btn peach-gradient waves-effect">Learn something else</button>
        </div>
    </div>
</div>


<script>
getUserAsync = async (url) => {
    let response = await fetch(url);
    let data = await response.json()
    let joke = data.value.replace('Chuck Norris', '<?php echo $firstname ?>')
    document.getElementById('joke').innerHTML = joke;
    return data;
}

getUserAsync('https://api.chucknorris.io/jokes/random');

document.getElementById('newJoke').addEventListener('click', () => {
    getUserAsync('https://api.chucknorris.io/jokes/random');
})
</script>
<?php
include "components/footer.php";?>