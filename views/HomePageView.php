<?php
include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <div class="alert alert-secondary shadow" role="alert">
        <h1>Hi,<b><?php echo htmlspecialchars(!empty($_SESSION['firstname'])) ? ($_SESSION["firstname"]) : ($_SESSION["username"]); ?></b>.
            did you know that :</h1>
        <p id="joke" class="lead">
        </p>
        <div class="d-flex justify-content-center">
            <button id="newJoke" class="btn blue-gradient waves-effect">Learn something else</button>
        </div>
    </div>

    <div class="mt-4 row d-flex justify-content-around">
        <button type="button" onclick="window.location.href = 'companies/clients'"
            class="btn btn-lg btn-mdb-color waves-effect"><i class="fas fa-arrow-right"></i></i> Clients</button>
        <button type="button" onclick="window.location.href = 'companies/providers'"
            class="btn btn-lg btn-mdb-color"><i class="fas fa-arrow-right"></i></i> Providers</button>
    </div>


    <div class="row mt-4">
        <h4>Latest Invoices</h4>
        <div class="table-responsive col-12">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th class="th-sm">
                            Invoice #
                        </th>
                        <th class="th-sm">Date
                        </th>
                        <th class="th-sm">Client
                        </th>
                        <th class="th-sm">Amount
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastInvoices as $invoice): ?>
                    <tr id="<?=$invoice['id']?>">
                        <td><?=$invoice['invoiceNumber']?></td>
                        <td><?=explode(' ', $invoice['createdAt'])[0]?></td>
                        <td><?=($invoice['clientType'] == 0) ? $invoice['companyName'] : $invoice['contactFirst'] . ' ' . $invoice['contactLast']?>
                        </td>
                        <td class="text-right"><?=$invoice['amount']?> €</td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-4">
        <h4>Last contacts</h4>
        <div class="table-responsive col-12">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
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
                    <tr id="<?=$contact['id']?>">
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
        <h4>Last Companies</h4>
        <div class="table-responsive col-12">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
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
                    <tr id="<?=$company['id']?>">
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
</script>
<?php
include "components/footer.php";