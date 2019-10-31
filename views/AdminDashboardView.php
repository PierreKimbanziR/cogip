<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="mt-4 row d-flex justify-content-between">
        <button type="button" onclick="window.location.href = 'invoices/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> New Invoice</button>
        <button type="button" onclick="window.location.href = 'contacts/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add Contact</button>
        <button type="button" onclick="window.location.href = 'companies/create'"
            class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add Company</button>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-8 border shadow" style="min-height:250px;">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <div class="row mt-4">
        <h3>Latest Invoices</h3>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">
                        Name
                    </th>
                    <th class="th-sm">Position
                    </th>
                    <th class="th-sm">Office
                    </th>
                    <th class="th-sm">Age
                    </th>
                    <th class="th-sm">Start date
                    </th>
                    <th class="th-sm">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td  class="text-center pointer"><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td class="text-center pointer"><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td class="text-center pointer"><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td class="text-center pointer"><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td class="text-center pointer"><i class="fas fa-trash-alt"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <h3>Last contacts</h3>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">
                        Name
                    </th>
                    <th class="th-sm">Position
                    </th>
                    <th class="th-sm">Office
                    </th>
                    <th class="th-sm">Age
                    </th>
                    <th class="th-sm">Start date
                    </th>
                    <th class="th-sm">Salary
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <h3>Last Companies</h3>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">
                        Name
                    </th>
                    <th class="th-sm">Position
                    </th>
                    <th class="th-sm">Office
                    </th>
                    <th class="th-sm">Age
                    </th>
                    <th class="th-sm">Start date
                    </th>
                    <th class="th-sm">Salary
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>


<!-- Script bootstrap  -->
<?php include 'components/scripts.php'?>

<!-- Script appliquer un lien et variable id sur <tr>-->
<!-- <script>
    var linkTo = (id) => {
        //console.log(id);
        document.location = `contacts/${id}`;
    }

    Array.from(document.querySelectorAll('tr.click')).forEach($btn => {
        console.log($btn);
        $btn.addEventListener('click', () => (linkTo($btn.id), false));
    });

</script> -->
<!-- Fin Script-->
<script>
new Chart(document.getElementById("lineChart"), {
    type: 'line',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre'],
        datasets: [{
            data: [1340, 2590, 3400, 543, 2331, 2892, 153, 2700, 783, 2478],
            label: "Jean-Christian",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: [1768, 930, 1700, 3452, 2250, 1300, 2690, 1402, 2700, 365],
            label: "Murielle",
            borderColor: "#8e5ea2",
            fill: false
        }, {
            data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
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