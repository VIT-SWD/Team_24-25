<!DOCTYPE html>
<html lang="en">

<head>
    <title>Export Statistics</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
</head>

<body>

    <?php

    //inlcude here the config file
    include 'config.php';
    // $host       = "localhost";
    // $dbUsername = "root";
    // $dbPassword = "";
    // $dbname     = "registration";

    //Create conn
    // $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    $department = "select dept_name from department where 1";
    $d_list     = $conn->query($department);

    $activity = "select a_name from activity where 1";
    $a_list   = $conn->query($activity);

    ?>
    <form action="" method="POST" autocomplete="off">
        <hr>
        <div align="center">
            <div>
                <input type="text" name="user_name" placeholder="Username" required oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="this.setCustomValidity('')" />
                <input type="password" name="user_pwd" placeholder="Password" required oninvalid="this.setCustomValidity('Enter Password Here')" oninput="this.setCustomValidity('')" />
                <br><br>
                <?php
                if ($r_set = $conn->query("SELECT * from department")) {
                    echo "<select name='u_dept' id='sel'>";
                    echo "<option value='' selected disabled hidden>Department</option>";
                    while ($row = $r_set->fetch_assoc()) {
                        echo "<option value=" . $row['dept_id'] . ">" . $row['dept_name'] . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo $conn->error;
                }
                ?>
                <select name="u_year" placeholder="Year" id="sel">
                    <option value="" selected disabled hidden>Academic Year</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                    <option value="Fourth">Fourth</option>
                </select>
                <select name="u_div" placeholder="Division" id="sel">
                    <option value="" selected disabled hidden>Division</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>

                <?php
                if ($r_set = $conn->query("SELECT * from activity")) {
                    echo "<select name='u_activity' id='sel'>";
                    echo "<option value='' selected disabled hidden>Activity</option>";
                    while ($row = $r_set->fetch_assoc()) {
                        echo "<option value=" . $row['a_id'] . ">" . $row['a_name'] . "</option>";
                    }
                    echo "</select>";
                } else {
                    echo $conn->error;
                }
                ?>
            </div>
            <br>
            <div>
                <input type="submit" name="submit" value="SUBMIT">
            </div>
            <hr>
        </div>
    </form>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <?php
    $query = "";
    $filename = "GP2_";


    $dept = "";
    $year = "";
    $div = "";
    $activity = "";

    if (isset($_POST['submit']) && $_POST['submit'] != "") {

        if ($_POST['user_name'] != "swdadmin" && $_POST['user_pwd'] != "hailswd") {
            echo "<script>alert('Invalid Credentials')</script>";
            exit;
        }

        if (isset($_POST['u_dept'])) {
            $tmp = "select dept_name from department where dept_id=" . $_POST['u_dept'];
            $res = mysqli_query($conn, $tmp);
            $fin = mysqli_fetch_assoc($res);
            $dept = $fin['dept_name'];
            // echo "Department Name:" . $fin['dept_name'] . "<br>";
        }

        if (isset($_POST['u_activity'])) {
            $tmp = "select a_name from activity where a_id=" . $_POST['u_activity'];
            $res = mysqli_query($conn, $tmp);
            $fin = mysqli_fetch_assoc($res);
            $activity = $fin['a_name'];
            // echo "Activity Name:" . $fin['a_name'] . "<br";
        }

        if (isset($_POST['u_year'])) {
            $year = $_POST['u_year'];
        }

        if (isset($_POST['u_div'])) {
            $div = $_POST['u_div'];
        }



        if (isset($_POST['u_dept']) && isset($_POST['u_year']) && isset($_POST['u_div']) && isset($_POST['u_activity'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        department.dept_id=" . $_POST['u_dept'] . " and users.dept_id=" . $_POST['u_dept'] . " 
                        and activity.a_id= " . $_POST['u_activity'] . " and users.a_id=" . $_POST['u_activity'] . " 
                        and users.u_year='" . $_POST['u_year'] . "' and users.u_div='" . $_POST['u_div'] . "'";
            echo "Everything is set";
            $filename .= $dept . "_" . $year . "Year_" . $div . "_" . $activity;
        } else if (isset($_POST['u_dept']) && isset($_POST['u_year']) && isset($_POST['u_div'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id=users.a_id
                        and department.dept_id=" . $_POST['u_dept'] . " and users.dept_id=" . $_POST['u_dept'] . " 
                        and users.u_year='" . $_POST['u_year'] . "' and users.u_div='" . $_POST['u_div'] . "'";
            echo "Department, Year, Division is set";
            $filename .= $dept . "_" . $year . "Year_" . $div;
        } else if (isset($_POST['u_dept']) && isset($_POST['u_year'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id=users.a_id
                        and department.dept_id=" . $_POST['u_dept'] . " and users.dept_id=" . $_POST['u_dept'] . " 
                        and users.u_year='" . $_POST['u_year'] . "'";
            echo "Department, Year is set";
            $filename .= $dept . "_" . $year . "Year";
        } else if (isset($_POST['u_dept'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id=users.a_id 
                        and department.dept_id=" . $_POST['u_dept'] . " and users.dept_id=" . $_POST['u_dept'] . "";
            echo "Department is set";
            $filename .= $dept;
        } else if (isset($_POST['u_year'])  && isset($_POST['u_div']) && isset($_POST['u_activity'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        department.dept_id=users.dept_id 
                        and activity.a_id= " . $_POST['u_activity'] . " and users.a_id=" . $_POST['u_activity'] . " 
                        and users.u_year='" . $_POST['u_year'] . "' and users.u_div='" . $_POST['u_div'] . "'";
            echo "Year, Division, Activity is set";
            $filename .= $year . "Year_" . $div . "_" . $activity;
        } else if (isset($_POST['u_year'])  && isset($_POST['u_div'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where                         
                        activity.a_id=users.a_id and department.dept_id=users.dept_id             
                        and users.u_year='" . $_POST['u_year'] . "' and users.u_div='" . $_POST['u_div'] . "'";
            echo "Year, Division is set";
            $filename .= $year . "Year_" . $div;
        } else if (isset($_POST['u_year'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id=users.a_id and department.dept_id=users.dept_id 
                        and users.u_year='" . $_POST['u_year'] . "'";
            echo "Year is set";
            $filename .= $year . "Year";
        } else if (isset($_POST['u_div'])  && isset($_POST['u_activity'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id= " . $_POST['u_activity'] . " and users.a_id=" . $_POST['u_activity'] . " 
                        and department.dept_id=users.dept_id 
                        and users.u_div='" . $_POST['u_div'] . "'";
            echo "Div, Activity is set";
            $filename .= $div . "_" . $activity;
        } else if (isset($_POST['u_div'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id=users.a_id and department.dept_id=users.dept_id 
                        and users.u_div='" . $_POST['u_div'] . "'";
            echo "Division is set";
            $filename .= $div;
        } else if (isset($_POST['u_activity'])) {
            $query = "  select users.*, department.dept_name,activity.a_name from users,department,activity where 
                        activity.a_id= " . $_POST['u_activity'] . " and users.a_id=" . $_POST['u_activity'] . "
                        and department.dept_id=users.dept_id";
            echo "Activity is set";
            $filename .= $activity;
        } else {
            echo "Nothing is set";
        }

        $flag = -1;

        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {

            echo "<br>Connection Successful :)";

            if (!empty($query)) {
                $results = mysqli_query($conn, $query);
                if ($results) {
                    $row_count = mysqli_num_rows($results);
                    $flag = 1;
                } else {
                    $flag = -1;
                    echo "<br> No Matching Entries :(";
                }

                echo "<br> Query Fired Successfully <br><br>";

    ?>
                <button <?php if ($flag == -1) { ?> disabled <?php   } ?> onclick="exportData()">
                    <span class="glyphicon glyphicon-download"></span>
                    Download list
                </button>
                <table id="stats" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Activity</th>
                            <th>GR NO</th>
                            <th>ROLL NO</th>
                            <th>STUDENT NAME</th>
                            <th>GENDER</th>
                            <th>EMAIL ADDRESS</th>
                            <th>CONTACT NO</th>
                            <th>DEPARTMENT</th>
                            <th>YEAR</th>
                            <th>DIV</th>
                            <th>ADDRESS</th>
                        </tr>
                    </thead>
        <?php
                echo "<tbody>";
                if ($flag == 1)
                    while ($row = mysqli_fetch_array($results)) {
                        echo "<tr>";
                        echo "<td>" . ($row['a_name']) . "</td>";
                        echo "<td>" . ($row['u_prn']) . "</td>";
                        echo "<td>" . ($row['u_roll']) . "</td>";
                        echo "<td>" . ($row['u_name']) . "</td>";
                        echo "<td>" . ($row['u_gnd']) . "</td>";
                        echo "<td>" . ($row['u_email']) . "</td>";
                        echo "<td>" . ($row['u_contact']) . "</td>";
                        echo "<td>" . ($row['dept_name']) . "</td>";
                        echo "<td>" . ($row['u_year']) . "</td>";
                        echo "<td>" . ($row['u_div']) . "</td>";
                        echo "<td>" . ($row['u_addr']) . "</td>";
                        echo "</tr>";
                    }
                echo "<tbody>";
                echo "</table>";
            } else
                echo "<br> query is empty :(";
        }
    }
        ?>

        <script type="text/javascript">
            function exportData() {
                /* Get the HTML data using Element by Id */
                var table = document.getElementById("stats");

                /* Declaring array variable */
                var rows = [];

                //iterate through rows of table
                for (var i = 0, row; row = table.rows[i]; i++) {
                    //rows would be accessed using the "row" variable assigned in the for loop
                    //Get each cell value/column from the row
                    column1 = row.cells[0].innerText;
                    column2 = row.cells[1].innerText;
                    column3 = row.cells[2].innerText;
                    column4 = row.cells[3].innerText;
                    column5 = row.cells[4].innerText;
                    column6 = row.cells[5].innerText;
                    column7 = row.cells[6].innerText;
                    column8 = row.cells[7].innerText;
                    column9 = row.cells[8].innerText;
                    column10 = row.cells[9].innerText;
                    column11 = row.cells[10].innerText;

                    /* add a new records in the array */
                    rows.push(
                        [
                            column1,
                            column2,
                            column3,
                            column4,
                            column5,
                            column6,
                            column7,
                            column8,
                            column9,
                            column10,
                            column11,

                        ]
                    );

                }
                csvContent = "data:text/csv;charset=utf-8,";
                /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
                rows.forEach(function(rowArray) {
                    row = rowArray.join(",");
                    csvContent += row + "\r\n";
                });

                /* create a hidden <a> DOM node and set its download attribute */
                var encodedUri = encodeURI(csvContent);
                var link = document.createElement("a");
                link.setAttribute("href", encodedUri);
                link.setAttribute("download", "<?php echo $filename?>.csv");
                document.body.appendChild(link);
                /* download the data file named "Stock_Price_Report.csv" */
                link.click();
            }
        </script>



</body>

</html>