<!-- <?php 
$date = date("g:ia \o\n l jS F Y");
echo $datetime = date_format($date, 'g:ia \o\n l jS F Y');
 ?> -->

 <?php
date_default_timezone_set("Asia/Manila");
echo "Today is " . date("g:ia  l jS F Y") . "<br>";

?>

<!-- for datatables -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/jquery.dataTables.css">
 
<script type="text/javascript" charset="utf8" src="plugins/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    var table = $('#serviceInfotable').DataTable( {
        scrollY:        "300px",
        scrollX:        "1220px",
        scrollCollapse: true,
        // paging:         false,
        columnDefs: [
            { width: '5%', targets: 0 },
            { width: '15%', targets: 1 },
            // { width: '15%', targets: 2 },
            // { width: '30%', targets: 3 },
            // { width: '15%', targets: 4 },
            // { width: '10%', targets: 5 },
            // { width: '10%', targets: 6 },
            // { width: '10%', targets: 7 },
            // { width: '5%', targets: 8 }
        ],
        // fixedColumns: true
    } );
} );
</script>
 <!-- for datatables -->


              <table id="serviceInfotable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Dat1</td>
            <td>Row 1 Data </td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data </td>
        </tr>
    </tbody>
</table>



