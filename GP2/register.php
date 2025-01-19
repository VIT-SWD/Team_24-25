
<?php
// include 'index.php';


if (isset($_POST['submit']) && $_POST['submit'] != "") {




    $u_fname   = $_POST['u_fname'];
    $u_email   = $_POST['u_email'];
    $u_contact = $_POST['u_contact'];
    $u_prn     = $_POST['u_prn'];
    $dept_id   = $_POST['dept_id'];
    $u_year    = $_POST['u_year'];
    $u_div     = $_POST['u_div'];
    $u_roll    = $_POST['u_roll'];
    $u_addr    = $_POST['u_addr'];
    $a_id      = $_POST['a_id'];
    $u_gender     = $_POST['u_gender'];
    $referer = $_SERVER['HTTP_REFERER'];


    function checkemail($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@vit.edu", $str)) ? false : true;
    }

    if (empty($u_fname)) {
        echo "<script language='javascript'>";
        echo 'alert("Enter Username");';
        // echo "document.location=document.;
        echo "</script>";
    } elseif (empty($u_email)) {
        echo "<script>";
        echo "alert('Enter Email');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif (empty($u_contact)) {
        echo "<script>";
        echo "alert('Enter Contact No');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif ($u_gender == "") {
        echo "<script>";
        echo "alert('Choose Gender');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif (empty($u_prn)) {
        echo "<script>";
        echo "alert('Enter PN No.');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif ($dept_id == "") {
        echo "<script>";
        echo "alert('Select Department');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif ($u_year == "") {
        echo "<script>";
        echo "alert('Select Year');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif ($u_div == "") {
        echo "<script>";
        echo "alert('Select Division');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif (empty($u_roll)) {
        echo "<script>";
        echo "alert('Enter Roll No');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif (!strlen(trim($u_addr))) {
        echo "<script>";
        echo "alert('Enter Address');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } elseif ($a_id == "") {
        echo "<script>";
        echo "alert('Select Activity');";
        // echo "document.location='https://trialopluiop.rf.gd/GP2/'";
        echo "</script>";
    } else {

            include 'config.php';
//         $host       = "localhost";
//         $dbUsername = "root";
//         $dbPassword = "";
//         $dbname     = "registration";

        //Create conn
//         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());

// elseif (strlen($u_contact) < 10) {
//             // echo "Phone number requires 10 digits";
//         } elseif (strlen($u_contact) > 10) {
//             // echo "Phone number requires 10 digits";
        } else if (checkemail($u_email)) {
        } else {
            $flag = -1;

            // echo $u_fname . " " . $u_email . " " .
            $u_contact . " " . $u_prn . " " . $dept_id . " " . $u_year . "<br>";
            // echo $u_div . " " . $u_roll . " " . $u_addr . " " . $a_id . "<br>";

            $query  = "SELECT MAX(u_id) FROM users";
            $result = mysqli_query($conn, $query);
            $row    = mysqli_fetch_row($result);

            $q2  = "SELECT * FROM activity where a_id=" . $a_id;

            $res2 = mysqli_query($conn, $q2);
            $row2 = mysqli_fetch_assoc($res2);

            // echo "<script>";
            //  echo "alert('" . $q2 . " " . $row2['a_slots'] . "');";
            // echo "</script>";

            $slots = $row2['a_slots'];

            if ($slots == 0) {
                echo "<script>";
                echo "alert('There are no more slots available for this activity or the registration has not yet begun!" . $slots . "');";
                echo "</script>";
                $q = -2;
            }

            $q3  = "SELECT * FROM activity where a_id=" . $a_id;

            $res3 = mysqli_query($conn, $q2);
            $row3 = mysqli_fetch_assoc($res2);
            if($a_id==2 || $a_id==4 || $a_id==1)
            {
                if ($u_gender == "male")
                    if ($row2['m_cnt'] == 0) {
                        echo "<script>";
                        echo "alert('There are no more slots available for this activity for boys or the registration has not yet begun!');";
                        echo "</script>";
                        $q = -2;
                    } else {
                        $sub_q1  = "UPDATE `activity` SET m_cnt = IF(m_cnt > 0, m_cnt - 1, 0) WHERE a_id =" . $a_id;
                        $result = mysqli_query($conn, $sub_q1);
                    }
                else
                    if ($slots == 0) {
                    echo "<script>";
                    echo "alert('There are no more slots available for this activity for girls or the registration has not yet begun!');";
                    echo "</script>";
                    $q = -2;
                } else {
                    // echo "<script>";
                    // echo "alert('In Female Section');";
                    // echo "</script>";
                    $sub_q2  = "UPDATE `activity` SET f_cnt = IF(f_cnt > 0, f_cnt - 1, 0) WHERE a_id =" . $a_id;
                    $result = mysqli_query($conn, $sub_q2);
                }
            }
            // echo "Total Rows: " . $row[0] . "<br>";
            $u_id = $row[0] + 1;
            // echo "Updated Row: " . $u_id;

            if ($r_set = $conn->query("SELECT u_email from users")) {

                $tmp = mysqli_num_rows($r_set);
                if ($tmp == 0) {
                    // echo "No Data in Database";
                }

                while ($row = $r_set->fetch_assoc()) {
                    if (strcmp($row['u_email'], $u_email) == 0) {
                        $flag = 0;
                        // echo '<script>alert("'. strcmp($row['u_email'], $u_email) . '<br>' .$u_email . '-' . $row['u_email'] .'")</script>';
                        break;
                    }
                }
                // echo '<script>alert("'. $flag .'")</script>';
                // echo "<br>f:" . $flag . "<br>";

            } else {
                // echo $conn->error;
            }

            if ($flag == 0) {
                echo "<script>";
                echo "alert('This Email is Already Registered');";
                echo "</script>";
            } else if ($q != -2) {

                //Prepare statement
                $INSERT = "INSERT into users(u_id, u_prn, u_roll, u_name, u_gnd, u_email, u_contact, dept_id, u_year, u_div, u_addr, a_id)
                              values( ? ,  ?,  ?,  ?,  ?,  ?,  ?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("iiisssiisssi", $u_id, $u_prn, $u_roll, $u_fname, $u_gender,$u_email, $u_contact, $dept_id, $u_year, $u_div, $u_addr, $a_id);

                if (!$stmt->execute()) {
                    echo '<script>alert("' . $stmt->error . '")</script>';
                }

                $q3  = "UPDATE `activity` SET a_slots = IF(a_slots > 0, a_slots - 1, 0) WHERE a_id =" . $a_id;
                $result = mysqli_query($conn, $q3);
                // $row    = mysqli_fetch_row($result);

                echo "<script>";
                // echo "alert('Record Successfully Inserted');";
                echo "alert('Successfully Registered for Aatmabodh 2022');";
                echo "</script>";
            }
        }
        $conn->close();
    }
}

// header( "Location: index.php" ); 
// exit;

// Dummy Code For Excel Sheet Preparation
// $query = "SELECT * FROM `users` WHERE 1";

// $dta = $conn->QUERY($query);

// $x = Excel_form();
// $cnt = 1; //row count
// while($dta = fetch_assoc_array())
// {
// sheet($cnt,0;) $dta[u_name]
// sheet($cnt,1;) $dta[u_prn]
// sheet($cnt,2;) $dta[u_roll]
// sheet($cnt,3;) $dta[u_name]
// sheet($cnt,4;) $dta[u_email]
// sheet($cnt,5;) $dta[u_cotact]

// $d_id = $dta['dept_id'];

// $fetch_id = "SELECT * FROM `department` WHERE dept_id=" . $d_id ;
// $res = $conn-> query($fetch_id);
// $actual_name = $res['dept_name'];

// sheet($cnt,6;) $actual_name

// $cnt++;
// }


?>

