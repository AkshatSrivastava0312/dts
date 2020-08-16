<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>


<script>
    $(document).ready(function() {
        $('#faculty').change(function() {
            var mstr_f_id = $(this).val();
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    "get_data": "yes",
                    "option": "subjects",
                    mstr_f_id: mstr_f_id
                },
                success: function(data) {
                    $('#subject').html(data);
                }
            });
        });
        $('#srch_student').click(function() {
            var subject_id = $('#subject').val();
            var session_year = $('#session').val();
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    "get_data": "yes",
                    "option": "fetch_all",
                    session_year: session_year,
                    subject_id: subject_id
                },
                success: function(data) {
                    $('#table_body_students').html(data);
                }
            });
        });
        $('#srch_cwr').click(function() {
            var session_year = $('#session').val();
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    "get_data": "yes",
                    "option": "fetch_all_cwr",
                    session_year: session_year
                },
                success: function(data) {
                    $('#cwr_data_table').html(data);
                }
            });
        });
    });
</script>