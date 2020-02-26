<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Student Details</h2>
                      
                    </div>
					
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM user";
                    if($result = mysqli_query($link, $sql)){
                        //$link comes from config, it's the database. $sql is the query
                        if(mysqli_num_rows($result) > 0){
                            //mysqli_num_rows returns no of rows
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>user Name</th>";
                                        echo "<th>course</th>";
										echo "<th>progress</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    //returns the table as an array
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['user'] . "</td>";
                                        echo "<td>" . $row['course'] . "</td>";
                                        echo "<td>" . $row['progress'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                   
                    ?>
					
					
					
					
                </div>
            </div>        
        </div>
    </div>
</body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Courses Details</h2>
                    </div>
					
					<?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM course";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>course name</th>";
                                        echo "<th>description</th>";
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['course'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                            // frees the data, not necessary for localhost but good practice
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    
                    ?>
                    
					
            </div>        
        </div>
    </div>
					
					<!-- <body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
				<div class="page-header clearfix">
                        <h2 class="pull-left">Employee Shift</h2>
						
                    </div>
					
 
              //<?php
                    // Include config file
                    // require_once "config.php";
                    
                    // Attempt select query execution
                    // $sql = "SELECT employees.id,name,salary,schedule.time FROM schedule JOIN employees ON schedule.schedule_name = employees.schedule";
                    // if($result = mysqli_query($link, $sql)){
                    //     if(mysqli_num_rows($result) > 0){
                    //         echo "<table class='table table-bordered table-striped'>";
                    //             echo "<thead>";
                    //                 echo "<tr>";
					// 					echo "<th>id</th>";
                    //                     echo "<th>Name</th>";
                    //                     echo "<th>Salary</th>";
					// 					echo "<th>Shift</th>";
                    //                 echo "</tr>";
                    //             echo "</thead>";
                    //             echo "<tbody>";
                    //             while($row = mysqli_fetch_array($result)){
                    //                 echo "<tr>";
					// 					echo "<td>" . $row['id'] . "</td>";
                    //                     echo "<td>" . $row['name'] . "</td>";
                    //                     echo "<td>" . $row['salary'] . "</td>";
					// 					echo "<td>" . $row['time'] . "</td>";
                    //                     echo "<td>";
                    //                     echo "</td>";
                    //                 echo "</tr>";
                    //             }
                    //             echo "</tbody>";                            
                    //         echo "</table>";
                            // Free result set
                    //         mysqli_free_result($result);
                    //     } else{
                    //         echo "<p class='lead'><em>No records were found.</em></p>";
                    //     }
                    // } else{
                    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    // }
                   // Close connection
                    // mysqli_close($link);
                    // ?> -->
					
					
					
					
                <!-- </div>
            </div>        
        </div>
    </div>
</body> --> -->

</html>