<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="mt-4 row d-flex justify-content-around">
        <button type="button" onclick="window.location.href = '/cogip/invoices/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> New Invoice</button>
        <button type="button" onclick="window.location.href = '/cogip/contacts/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add Contact</button>
        <button type="button" onclick="window.location.href = '/cogip/companies/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add Company</button>
    </div>
    <div class="row mt-5 mb-5 d-flex justify-content-center">
        <div class="col-8 border shadow" style="min-height:250px;">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <div class="row mt-4">
        <h4>Latest Invoices</h4>
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
                    <th class="th-sm">Action
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
                    <td class="text-right"><?=($invoice['type'] == 1) ? "- " : "+ "?><?=$invoice['amount']?> €</td>
                    <td
                        class="text-center d-flex <?=($_SESSION['level'] > 2) ? 'justify-content-around' : 'justify-content-center'?>">
                        <a href="/cogip/invoices/<?=$invoice['id']?>"><i class="far fa-lg fa-eye"></i></a>
                        <?php if ($_SESSION['level'] > 2): ?>
                        <a href="/cogip/invoices/update/<?=$invoice['id']?>"><i class="fas fa-lg fa-edit"></i></a>
                        <i class="fas fa-lg fa-trash-alt pointer toggleModal" data-itemid="<?=$invoice['id']?>"
                            data-itemname="<?=$invoice['invoiceNumber']?>" data-item="invoices" data-toggle="modal"
                            data-target="#deleteModal"></i>
                        <?php endif?>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <h4>Last contacts</h4>
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
                    <th class="th-sm">Action
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
                    <td
                        class="text-center d-flex <?=($_SESSION['level'] > 2) ? 'justify-content-around' : 'justify-content-center'?>">
                        <a href="/cogip/contacts/<?=$contact['id']?>"><i class="far fa-lg fa-eye"></i></a>
                        <?php if ($_SESSION['level'] > 2): ?>
                        <a href="/cogip/contacts/update/<?=$contact['id']?>"><i class="fas fa-lg fa-edit"></i></a>
                        <i class="fas fa-lg fa-trash-alt pointer toggleModal" data-itemid="<?=$contact['id']?>"
                            data-itemname="<?=$contact['firstname'] . ' ' . $contact['lastname']?>" data-item="contacts"
                            data-toggle="modal" data-target="#deleteModal"></i>
                        <?php endif?>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <h4>Last Companies</h4>
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
                    <th class="th-sm">Action
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
                    <td
                        class="text-center d-flex <?=($_SESSION['level'] > 2) ? 'justify-content-around' : 'justify-content-center'?>">
                        <a href="/cogip/companies/<?=$company['id']?>"><i class="far fa-lg fa-eye"></i></a>
                        <?php if ($_SESSION['level'] > 2): ?>
                        <a href="/cogip/companies/update/<?=$company['id']?>"><i class="fas fa-lg fa-edit"></i></a>
                        <i class="fas fa-lg fa-trash-alt pointer toggleModal" data-itemid="<?=$company['id']?>"
                            data-itemname="<?=$company['name']?>" data-item="companies" data-toggle="modal"
                            data-target="#deleteModal"></i>
                        <?php endif?>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>

</div>


<!-- Script bootstrap  -->
<?php include 'components/scripts.php'?>

<script>
new Chart(document.getElementById("lineChart"), {
    type: 'line',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
            'Octobre'
        ],
        datasets: [{
            data: [1340, 2590, 3000, 1500, 2331, 2892, 953, 2700, 783, 2478],
            label: "Jean-Christian",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: [1768, 930, 1700, 3452, 2250, 1300, 2690, 1402, 2700, 965],
            label: "Murielle",
            borderColor: "#8e5ea2",
            fill: false
        }, {
            data: [1680, 1700, 1780, 1900, 2030, 2760, 2080, 947, 675, 734],
            label: "Guy-Allain",
            borderColor: "#3cba9f",
            fill: false
        }, {
            data: [400, 1200, 1000, 1600, 2400, 1800, 740, 1670, 508, 784],
            label: " Gonzague-Henry",
            borderColor: "#e8c3b9",
            fill: false
        }, {
            data: [600, 300, 2200, 2600, 700, 620, 820, 1720, 2120, 2330],
            label: "Jean-Martin",
            borderColor: "#c45850",
            fill: false
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Chiffre d\'affaire par employé'
        }
    }
});
</script>
<?php
include "components/footer.php";
?>