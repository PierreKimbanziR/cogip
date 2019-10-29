<?php

include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <p id="joke" class="lead"></p>
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
include "components/header.php";?>