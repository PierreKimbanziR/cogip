<?php
include "components/header.php";
include "components/navbar.php";
?>
<div class="container">
    <div class="alert alert-secondary shadow" role="alert">
        <h1>Good day, <b><?php echo htmlspecialchars(!empty($_SESSION['firstname'])) ? ($_SESSION["firstname"]) : ($_SESSION["username"]); ?></b>.</h1>
        <p id="joke" class="lead">
        </p>
        <div class="d-flex justify-content-center">
            <button id="newJoke" class="btn peach-gradient waves-effect">More peache</button>
        </div>
    </div>
    <div class="mt-4 row d-flex justify-content-around">
        <button type="button" onclick="window.location.href = '/cogip/companies/clients'"
            class="btn btn-mdb-color waves-effect"><i class="fas fa-arrow-right"></i></i> Clients</button>
        <button type="button" onclick="window.location.href = '/cogip/companies/providers'" class="btn btn-mdb-color"><i
                class="fas fa-arrow-right"></i></i> Providers</button>
    </div>
    <div class="row mt-4">
        <h4>Latest Invoices <button onclick="window.location.href = '/cogip/invoices/create'" class="btn btn-sm cogipBtn waves-effect"><i class="fas fa-lg fa-plus"></i></button></h4>
        <div class="table-responsive col-12">
            <table id="" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th class="th-sm">
                            Invoice #
                        </th>
                        <th class="th-sm">Date
                        </th>
                        <th class="th-sm">Client
                        </th>
                        <th class="th-sm">type
                        </th>
                        <th class="th-sm">Amount
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastInvoices as $invoice): ?>
                    <tr id="invoices-<?=$invoice['id']?>" class="click hoverable">
                        <td><?=$invoice['invoiceNumber']?></td>
                        <td><?=explode(' ', $invoice['createdAt'])[0]?></td>
                        <td><?=($invoice['clientType'] == 0) ? $invoice['companyName'] : $invoice['contactFirst'] . ' ' . $invoice['contactLast']?>
                        </td>
                        <td class="text-right"><?=($invoice['type'] == 1) ? "OUT" : "IN"?></td>
                        <td class="text-right"><?=($invoice['type'] == 1) ? "- " : "+ "?><?=$invoice['amount']?> €</td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-4">
        <h4>Last contacts <button onclick="window.location.href = '/cogip/contacts/create'" class="btn btn-sm cogipBtn waves-effect"><i class="fas fa-lg fa-plus"></i></button></h4>
        <div class="table-responsive col-12">
            <table id="" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th class="th-sm">Firstname
                        </th>
                        <th class="th-sm">Lastname
                        </th>
                        <th class="th-sm">Email
                        </th>
                        <th class="th-sm">Telephone
                        </th>
                        <th class="th-sm">Company
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastContacts as $contact): ?>
                    <tr id="contacts-<?=$contact['id']?>" class="click hoverable">
                        <td><?=$contact['firstname']?></td>
                        <td><?=$contact['lastname']?></td>
                        <td><?=$contact['email']?></td>
                        <td><?=$contact['telephone']?></td>
                        <td><?=$contact['companyName']?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-4">
        <h4>Last Companies <button onclick="window.location.href = '/cogip/companies/create'" class="btn btn-sm cogipBtn waves-effect"><i class="fas fa-lg fa-plus"></i></button></h4>
        <div class="table-responsive col-12">
            <table id="" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th class="th-sm">
                            Name
                        </th>
                        <th class="th-sm">Country
                        </th>
                        <th class="th-sm">VAT
                        </th>
                        <th class="th-sm">Role
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastCompanies as $company): ?>
                    <tr id="companies-<?=$company['id']?>" class="click hoverable">
                        <td><?=$company['name']?></td>
                        <td><?=$company['country']?></td>
                        <td><?=$company['vat']?></td>
                        <td><?=($company['role'] == 0) ? 'Client' : 'Fournisseur'?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "components/scripts.php";
?>
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

var linkTo = (id) => {
    //console.log(id);

    let route = id.split('-')
    document.location = `/cogip/${route[0]}/${route[1]}`;
}

Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
    console.log($btn);
    $btn.addEventListener('click', () => (linkTo($btn.id), false));
});
</script>
<?php
include "components/footer.php";