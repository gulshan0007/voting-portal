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
                <h3>Add New Candidate</h3>
                <form method="POST">
                    <div class="form-group my-3">
                    <select class="form-select w-50 m-auto" name = "position" required>
                <option value="">Select Election</option>
                            <?php
                            $db = mysqli_connect("localhost", "root", "", "votingsystem") or die("Connectivity Failed");
                            $fetchingElections = mysqli_query($db, "SELECT * FROM elections") OR die(mysqli_error($db));
                            $isAnyElectionAdded = mysqli_num_rows($fetchingElections);
                            if($isAnyElectionAdded > 0)
                            {
                                while($row = mysqli_fetch_assoc($fetchingElections))
                                {
                                    $election_id = $row['id'];
                                    $election_name = $row['election_topic'];
                                    $allowed_candidates = $row['no_of_candidates'];

                                // Now checking how many candidates are added in this election 
                                $fetchingCandidate = mysqli_query($db, "SELECT * FROM cdetails WHERE position = '". $position ."'") or die(mysqli_error($db));
                                $added_candidates = mysqli_num_rows($fetchingCandidate);
                                if($added_candidates < $allowed_candidates)
                                {
                            ?>
                            <option value="<?php echo $election_name; ?>"><?php echo $election_name; ?></option>
                            <?php
                                    }
                                }
                            }else {
                        ?>
                                <option value=""> Please add election first </option>
                        <?php
                            }
                            ?>

                </select>
                    </div>
                    <!-- <div class="form-group">
                <input type="text" name="candidate_name" placeholder="Candidate Name" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="file" name="candidate_photo" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="text" name="candidate_details" placeholder="Candidate Details" class="form-control" required />
            </div>
            <input type="submit" value="Add Candidate" name="addCandidateBtn" class="btn btn-success" />
                </form>
            </div> -->


            <form class="login-form" action="../actions/cregister.php" method="POST" enctype="multipart/form-data">
            <h2>Ｓｉｇｎ－Ｕｐ</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Usernme" required>
                <img src="email.svg" class="icon" alt="Email Icon">
            </div>
            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="E-mail" required>
                <img src="../voter/eicon.svg" class="icon" alt="Email Icon">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <img src="password.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                <img src="password.svg" class="icon" alt="Password Icon">
            </div>
            <div class="mb-3">
                <select class="form-select w-50 m-auto" name = "position" required>
                <option value="">Select Election</option>
                            <?php
                            $db = mysqli_connect("localhost", "root", "", "votingsystem") or die("Connectivity Failed");
                            $fetchingElections = mysqli_query($db, "SELECT * FROM elections") OR die(mysqli_error($db));
                            $isAnyElectionAdded = mysqli_num_rows($fetchingElections);
                            if($isAnyElectionAdded > 0)
                            {
                                while($row = mysqli_fetch_assoc($fetchingElections))
                                {
                                    $election_id = $row['id'];
                                    $election_name = $row['election_topic'];
                            ?>
                            <option value="<?php echo $election_name; ?>"><?php echo $election_name; ?></option>
                            <?php
                                    }
                                }
                            else {
                        ?>
                                <option value=""> Please add election first </option>
                        <?php
                            }
                            ?>

                </select>
            </div>
            <div class="form-group">
                <input type="file" id="photo" name="photo" placeholder="" required>
                <img src="image.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                <input type="file" id="manifesto" name="manifesto" placeholder="Upload your Manifesto" required>
                <img src="document.svg" class="icon" alt="Password Icon">
            </div>
            <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="Candidate">Candidate</option>
                    <option value="Voter">Voter</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn">Sign-Up</button>
            <div class="sign-up">
                Already have an account? <a href="clogin.php">Log-In</a>
            </div>
        </form>






            <div class="col-8">
                <h3>Candidate Details</h3>
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






