<!DOCTYPE html>
<html lang="en">

<head>
   

<meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LankaBangla</title> 
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <a href="registration-form"></a>

   




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>







<style>

.DataTable-container {



   

    display: flex;
            align-items: center;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            


}

#customButton {
            
    
    padding: 8px 15px;
            border: none;
            border-radius: 3px;
            background-color: #3498db;
            color: #fff;
           
            margin-left: 5px;

            
          


           
       
        }


      


</style>




</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">LankaBangla</a> <!-- Modified brand name to 'LankaBangla' -->
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>




    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

            </nav>


            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>


                               
                                <a class="nav-link" href="Customeraccount.php"> <!-- Added customer account Form link -->

                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Customer Account

                                </a>


    <div class="sub-menu">
        <a class="nav-link sub-link" href="Firstaccountholder.php">First Account Holder</a>
        <a class="nav-link sub-link" href="Jointaccountholder.php">Joint Account Holder</a>
        <a class="nav-link sub-link" href="Authorizedpersoninformation.php">Authorized Person Information</a>
    </div>




                                <a class="nav-link" href="BOaccount.php"> <!-- Added Registration Form link -->
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    BO Account

                                </a>



<div class="sub-menu">
<a class="nav-link sub-link" href="BOaccountFirstapplicant.php">BOaccount First applicant</a>
<a class="nav-link sub-link" href="BOaccountJointapplicant.php">BOaccount Joint applicant</a>
</div>







<!-- Nominee Form  -->

<a class="nav-link" href="Nominee.php"> 
    

<div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
Nominee

</a>








                            </div>
                    </nav>
                </div>


            </div>
            </div>

            </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>


                               
                                   

    </main>

                                  

    <div class="row">
    <!-- Bar Chart -->
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Bar Chart
            </div>
            <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-lg-3">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-pie me-1"></i>
                Pie Chart 
            </div>
            <div class="card-body">
                <canvas id="myPieChart" width="90%" height="52"></canvas>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>

    <!-- Line Chart -->
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-line me-1"></i>
                Line Chart 
            </div>
            <div class="card-body">
                <canvas id="myLineChart" width="100%" height="50"></canvas>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>
</div>

<script>
        // Random data for Pie Chart
        var pieData = [Math.random() * 100, Math.random() * 100, Math.random() * 100];
        var pieColors = ['red', 'green', 'black'];

        var ctxPie = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Dhaka', 'Mohakhali', 'Rampura'],
                datasets: [{
                    data: pieData,
                    backgroundColor: pieColors,
                }]
            },
        });

        // Random data for Line Chart
        var lineLabels = ['2009', '2010', '2012', '2015', '2017', '2020'];
        var lineData = [];
        for (var i = 0; i < lineLabels.length; i++) {
            lineData.push(Math.random() * 50);
        }

        var ctxLine = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: lineLabels,
                datasets: [{
                    label: 'Number of BO A/C opening year-wisely',
                    data: lineData,
                    borderColor: 'blue',
                    
                }]
            },
        });
    </script>

















        




<div class="DataTable-container">
    <div class="DataTable-header">
        <i class="fas fa-table me-1"></i>
       
    </div>
    <br>
    <br>
    <form method="post">
        <select id="tableSelect" name="tableSelect">
            <option value="jointaccountholder">Joint Account Holder </option>
            <option value="firstaccountholder">First Account Holder </option>
            <option value="authorizedpersoninformation">Authorized Person Information 

            </option>
            <option value="boaccountfirstapplicant">BOaccount First applicant</option>
            <option value="boaccountjointapplicant">BOaccount Joint applicant</option>
            <option value="nominee">Nominee</option>
            
        </select>
        <button id="customButton" type="submit" name="confirmButton">Confirm</button>
    </form>
</div>

<div class="card-body">
    <table id="datatablesSimple" class="display">
        <thead>
            <tr>
                <th>Title</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Present Address</th>
                <th>Division</th>
                <th>Branch</th>
                <th>Account Opening Year</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>E-tin</th>
                <th>NID</th>
                <th>Date of Birth</th>
                <th>Occupation</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Residency</th>
                <th>Declaration</th>
                <th>Customer Signature</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmButton']) && isset($_POST['tableSelect'])) {
            // Establish database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lankabangla";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get the selected table from the dropdown
            $selectedTable = $_POST['tableSelect'];

            // Query to fetch data from the selected table
            $sql = "SELECT * FROM $selectedTable";

            // Execute the query and display data
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['Title']}</td>";
                    echo "<td>{$row['Name']}</td>";
                    echo "<td>{$row['FatherName']}</td>";
                    echo "<td>{$row['MotherName']}</td>";
                    echo "<td>{$row['Presentaddress']}</td>";
                    echo "<td>{$row['Division']}</td>";
                    echo "<td>{$row['Branch']}</td>";
                    echo "<td>{$row['accountopeningYear']}</td>";
                    echo "<td>{$row['Mobile']}</td>";
                    echo "<td>{$row['Email']}</td>";
                    echo "<td>{$row['Etin']}</td>";
                    echo "<td>{$row['NID']}</td>";
                    echo "<td>{$row['DateofBirth']}</td>";
                    echo "<td>{$row['Occupation']}</td>";
                    echo "<td>{$row['Gender']}</td>";
                    echo "<td>{$row['Nationality']}</td>";
                    echo "<td>{$row['Residency']}</td>";
                    echo "<td>{$row['Declaration']}</td>";
                    echo "<td>{$row['customerSignature']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='16'>No entries found.</td></tr>";
            }

            // Close the database connection
            $conn->close();
        }
        ?>
        </tbody>
    </table>
</div>




                       


















                          



















                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">


                            <div class="text-muted text-center py-3">
                                <img src="LankaBangla.jpg" alt="LankaBangla Logo" height="38" width="90">

                                <b> Copyright&copy; 2023 </b>
                            </div>

                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>



</body>

</html>