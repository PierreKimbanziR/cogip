<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>

<div class="container" >
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="mt-4 row d-flex justify-content-between">
        <button type="button" onclick="window.location.href = 'invoices/create'" class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> New Invoice</button>
        <button type="button" onclick="window.location.href = 'contacts/create'" class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add Contact</button>
        <button type="button" onclick="window.location.href = 'companies/create'" class="btn btn-outline-danger waves-effect"><i class="fas fa-plus"></i> Add Company</button>
    </div>
    <div class="row mt-4">
        <canvas id="myChart" width="400" height="400"></canvas>
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
        <tfoot>
            <tr>
                <th>Name
                </th>
                <th>Position
                </th>
                <th>Office
                </th>
                <th>Age
                </th>
                <th>Start date
                </th>
                <th>Salary
                </th>
            </tr>
        </tfoot>
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
        <tfoot>
            <tr>
                <th>Name
                </th>
                <th>Position
                </th>
                <th>Office
                </th>
                <th>Age
                </th>
                <th>Start date
                </th>
                <th>Salary
                </th>
            </tr>
        </tfoot>
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
        <tfoot>
            <tr>
                <th>Name
                </th>
                <th>Position
                </th>
                <th>Office
                </th>
                <th>Age
                </th>
                <th>Start date
                </th>
                <th>Salary
                </th>
            </tr>
        </tfoot>
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

<?php
// Inclure Footer ...
include "components/scripts.php";
?>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<?php
include "components/footer.php";
?>