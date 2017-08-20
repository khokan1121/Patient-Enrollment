<!DOCTYPE html>




<html>

<head>

    <style>
        table {
            border-collapse: collapse;
        }
        
        table,
        tr,
        td,
        th {
            padding-left: 10px;
            border: 1px solid green;
        }
        
        tr,
        td {
            padding: 20px;
        }

    </style>

</head>

<body>



    <form method="post" action="">

        <button type="submit" class="button1" name="showAll">Show All Employee List</button>

        <table>




            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>DateOfBirth</th>
                <th>JointDate</th>
                <th>Department</th>
            </tr>

            <?php
                
                $connect=mysqli_connect("localhost","root","","admin");
                
                if(isset($_POST['showAll'])){
         $sql = "select UserId,Name,Address,Gender,DateOfBirth,JointDate,Department from user";
             $query=mysqli_query($connect,$sql);
                $count=mysqli_num_rows($query);

               if($count>0)
               {
                 while($row=mysqli_fetch_array($query))
                 {  

            ?>
                <tr>
                    <td>
                        <?php echo $row['UserId']; ?>
                    </td>
                    <td>
                        <?php echo $row['Name']; ?>
                    </td>
                    <td>
                        <?php echo $row['Address']; ?>
                    </td>
                    <td>
                        <?php echo $row['Gender']; ?>
                    </td>
                    <td>
                        <?php echo $row['DateOfBirth']; ?>
                    </td>
                    <td>
                        <?php echo $row['JointDate']; ?>
                    </td>
                    <td>
                        <?php echo $row['Department']; ?>
                    </td>

                </tr>
                <?php

            }
            }
                }
             ?>

        </table>

    </form>

</body>

</html>
