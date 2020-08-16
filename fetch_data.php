<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dts";

$conn = mysqli_connect($host, $user, $pass, $db);
$resu = 0;


if (isset($_POST['get_data'])) {

    $option = $_POST['option'];

    switch ($option) {
            // case 'students': {
            //         if ($conn) {
            //             $query = "SELECT `reg_no`,`name` FROM `student_master` WHERE `session`=" . $_POST['session_year'];
            //             $resu = mysqli_query($conn, $query);
            //             $num = mysqli_num_rows($resu);
            //             for ($i = 0; $i < $num; $i++) {
            //                 $row = mysqli_fetch_array($resu);
            //                 echo "<tr><td>" . ($i + 1) . "</td><td>" . $row['reg_no'] . "</td>" . "<td>" . $row['name'] . "</td>" . "</tr>";
            //             }
            //         }
            //         break;
            //     }
        case 'subjects': {
                if ($conn) {

                    $query = "SELECT `mstr_subject`.`subject_name`,`mstr_subject`.`id` FROM `mstr_subject` WHERE `mstr_subject`.`faculty_name` = " . $_POST['mstr_f_id'] . "";
                    // echo "<script>alert('" . $query . "')</script>";
                    // print_r($query);
                    $resu = mysqli_query($conn, $query);
                    $num = mysqli_num_rows($resu);
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($resu);
                        echo "<option value='" . $row['id'] . "'>" . $row['subject_name'] . "</option>";
                    }
                }
                break;
            }
        case 'fetch_all': {
                if ($conn) {
                    $query = "SELECT `teacher_name`,`id` FROM `mstr_teacher` WHERE `subject_name`=" . $_POST['subject_id'] . "";
                    $resu = mysqli_query($conn, $query);
                    $num = mysqli_num_rows($resu);
                    $teacher_selection_list = "<select class='form-control'>";
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($resu);
                        $teacher_selection_list = $teacher_selection_list . "<option value='" . $row['id'] . "'>" . $row['teacher_name'] . "</option>";
                    }
                    $teacher_selection_list = $teacher_selection_list . "</select>";



                    $query = "SELECT `reg_no`,`name` FROM `student_master` WHERE `session`=" . $_POST['session_year'];
                    $resu = mysqli_query($conn, $query);
                    $num = mysqli_num_rows($resu);
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($resu);
                        echo "<tr><td>" . ($i + 1) . "</td><td>" . $row['reg_no'] . "</td><td>" . $row['name'] . "</td><td>" . $teacher_selection_list . "</td><td><button class='btn btn-sm mr-1  mb-1 btn-success'>Allot</button><button class='btn mb-1 btn-sm btn-danger'>Remove</button></td></tr>";
                    }
                }
                break;
            }
        case 'fetch_all_cwr': {
                if ($conn) {
                    $query = "SELECT `reg_no`,`name` FROM `student_master` WHERE `session`=" . $_POST['session_year'];
                    $resu = mysqli_query($conn, $query);
                    $num = mysqli_num_rows($resu);
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($resu);
                        echo "<tr><td>" . ($i + 1) . "</td><td>" . $row['reg_no'] . "</td><td class='row'><input type='number' name='".$i."' placeholder='a marks' class='col form-control mr-2'><input type='number' name='".$i."' placeholder='b marks' class='col form-control'></td>";
                    }
                }
                break;
            }
        default: {
                echo "option is not set";
                break;
            }
    }
}