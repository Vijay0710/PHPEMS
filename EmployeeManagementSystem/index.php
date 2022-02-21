<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
    </head>
    <body>
        <?php
        include_once('config.php');
        $result = mysqli_query($mysqli,"SELECT * FROM empdetails ORDER BY empid DESC");
        ?>
        <h1 align="center">Employee Details</h1>
        <hr> 
        <a href='add.html'>Add new data</a><br/><br/><!-- comment -->
        <table width='100%' boder ='0'>
            <tr>
            <td>Employee ID</td>
            <td>Employee Name</td><!-- comment -->
            <td>Employee Designation</td>
            <td>Employee Department</td>
            <td>Employee DOJ</td>
            <td>Employee Salary</td>
            <td>Edit/Delete</td>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$res['empid']."</td>";
                    echo "<td>".$res["ename"]."</td>";
                    echo "<td>".$res["desig"]."</td>";
                    echo "<td>".$res["dept"]."</td>";
                    echo "<td>".$res["doj"]."</td>";
                    echo "<td>".$res["salary"]."</td>";
                    echo "<td><a href = 'edit.php?empid=$res[empid]'>Edit</a>";
                    echo "| <a href = 'delete.php?empid=$res[empid]'>Delete</a></td>";
                    echo "</tr>";
                        
                }
            ?>
        </table>
    </body>
</html>
