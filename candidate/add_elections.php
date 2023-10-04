<!-- <?php 
    if(isset($_GET['added']))
    {
?>
        <div class="alert alert-success my-3" role="alert">
            Election has been added successfully.
        </div>
<?php 
    }else if(isset($_GET['delete_id']))
    {
        $d_id = $_GET['delete_id'];
        mysqli_query($db, "DELETE FROM elections WHERE id = '". $d_id ."'") OR die(mysqli_error($db));
?>
       <div class="alert alert-danger my-3" role="alert">
            Election has been deleted successfully!
        </div>
<?php

    }
?> -->



<?php 
 $db = mysqli_connect("localhost", "root", "", "votingsystem") or die("Connectivity Failed");
           
    if(isset($_POST['addElectionBtn']))
    {
        $election_topic = mysqli_real_escape_string($db, $_POST['election_topic']);
        $number_of_candidates = mysqli_real_escape_string($db, $_POST['number_of_candidates']);
        $starting_date = mysqli_real_escape_string($db, $_POST['starting_date']);
        $starting_time = mysqli_real_escape_string($db, $_POST['starting_time']);
        $ending_date = mysqli_real_escape_string($db, $_POST['ending_date']);
        $ending_time = mysqli_real_escape_string($db, $_POST['ending_time']);
        // $inserted_by = $_SESSION['username'];
        // $inserted_on = date("Y-m-d");


        $date1=date_create($starting_date);
        $date2=date_create($ending_date);
        $diff=date_diff($date1,$date2);

        

$time1 = date_create($starting_time);
$time2 = date_create($ending_time);

// Calculate the time difference
$difference = $time1->diff($time2);

// Format the time difference to display it more clearly
$format = "%h hours, %i minutes, %s seconds";
$time_difference = $difference->format($format);

// Echo the time difference
// echo "Time Difference: " . $time_difference;
        
        if((int)$diff->format("%R%a") >= 0 && $time_difference>=0)
        {
            $status = "Active";
        }else {
            $status = "InActive";
        }

        mysqli_query($db, "INSERT INTO elections(election_topic, no_of_candidates, starting_date, starting_time,ending_date,ending_time, status) VALUES('". $election_topic ."', '". $number_of_candidates ."', '". $starting_date ."', '". $starting_time ."', '". $ending_date ."', '". $ending_time ."', '". $status ."')") or die(mysqli_error($db));
        

echo '<script>
            alert("Election Added Successfully !!!");
            window.location="display.php?addElectionPage=1&added=1";
        </script>';
                        // <script>
                        // location.assign("display.php?addElectionPage=1&added=1");
                        // </script>
                        // <?php

    }

?>






<!doctype html>
<html lang="ar" dir="rt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">

    <title>Dashboard</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
      /* Add styles for the table */
      .table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
        font-size: 14px;
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: left;
    }

    .table thead th {
        background-color: #f2f2f2;
        border-bottom: 2px solid #ddd;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table tbody tr:hover {
        background-color: #e0e0e0;
    }

    .table th {
        font-weight: bold;
    }

    .table th,
    .table td {
        border-bottom: 1px solid #ddd;
    }

    .table td:last-child {
        text-align: center;
    }

    .status-active {
        color: green;
    }

    .status-inactive {
        color: red;
    }

    .action-btn {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .action-btn:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row my-3 ">
            <div class="col-4 my-3 mx-3">
                <h3>Add New Election</h3>
                <form method="POST">
                    <div class="form-group my-3">
                        <input type="text" name="election_topic" placeholder="Elction Topic" class="form-control"
                            required />
                    </div>
                    <div class="form-group my-3">
                        <input type="number" name="number_of_candidates" placeholder="No of Candidates"
                            class="form-control" required />
                    </div>
                    <div class="form-group my-3">
                        <input type="text" onfocus="this.type='Date'" name="starting_date" placeholder="Starting Date"
                            class="form-control" required />
                    </div>
                    <div class="form-group my-3">
                        <input type="text" onfocus="this.type='Time'" name="starting_time" placeholder="Starting Time"
                            class="form-control" required />
                    </div>
                    <div class="form-group my-3">
                        <input type="text" onfocus="this.type='Date'" name="ending_date" placeholder="Ending Date"
                            class="form-control" required />
                    </div>
                    <div class="form-group my-3">
                        <input type="text" onfocus="this.type='Time'" name="ending_time" placeholder="Ending Time"
                            class="form-control" required />
                    </div>
                    <input type="submit" value="Add Elction" name="addElectionBtn" class="btn btn-success" />
                </form>
            </div>

            <div class="col-8">
                <h3>Upcoming Elections</h3>
                <table class="table" border="3" cellspacing="7" width="100%" text-align="center">
    <thead>
        <tr>
            <th width="5%">S.No</th>
            <th width="10%">Election Name</th>
            <th width="5">Candidates</th>
            <th width="10%">Starting Date</th>
            <th width="10%">Starting Time</th>
            <th width="10%">Ending Date</th>
            <th width="10%">Ending Time</th>
            <th width="10">Status</th>
            <th width="30">Action</th>
        </tr>
    </thead>
    <tbody>
<?php
$fetchingData = mysqli_query($db, "SELECT * FROM elections") or die(mysqli_error($db));
$isAnyElectionAdded = mysqli_num_rows($fetchingData);

if($isAnyElectionAdded > 0)
{
$sno = 1;
while($row = mysqli_fetch_assoc($fetchingData))
{
$election_id = $row['id'];
?>
<tr>
    <td><?php echo $sno++; ?></td>
    <td><?php echo $row['election_topic']; ?></td>
    <td><?php echo $row['no_of_candidates']; ?></td>
    <td><?php echo $row['starting_date']; ?></td>
    <td><?php echo $row['starting_time']; ?></td>
    <td><?php echo $row['ending_date']; ?></td>
    <td><?php echo $row['ending_time']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="#" class="btn btn-sm btn-warning"> Edit </a>
        <button class="btn btn-sm btn-danger" onclick="DeleteData(<?php echo $election_id; ?>)">
            Delete </button>
    </td>
</tr>
<?php
}
}else {
?>
<tr>
    <td colspan="7"> No any election is added yet. </td>
</tr>
<?php
}
?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script>
    const DeleteData = (e_id) => {
        let c = confirm("Are you really want to delete it?");

        if (c == true) {
            location.assign("display.php?addElectionPage=1&delete_id=" + e_id);
        }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>






