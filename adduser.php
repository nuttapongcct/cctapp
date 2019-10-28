<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
</head>
<body>
<?php 
    include 'tabmenu.php';
    include 'connect.php';

    error_reporting(~E_NOTICE);
    if (isset($_POST['submit'])) {
        $addSql = "INSERT INTO employee (id, username, password, first, last, department)
        VALUES ('".$_POST["id"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["firstname"]."',
        '".$_POST["lastname"]."','".$_POST["department"]."')";
        mysqli_query($conn,$addSql);
    }
?>
    <form name="formAdd" method="post">
    <div class="container">
        <div class="level">
            <div class="column box is-5" style="margin: 10px;">        
                <div class="level">
                    <div class="level-item">
                        <p class="title is-2">Add User</p>
                    </div>
                </div>
                <div class="column level">
                    <div class="level-item" style="margin-bottom:10px;">
                        <input type="text" name="username" class="input" placeholder="Username" style="margin-right:10px;">
                        <input type="text" name="password" class="input" placeholder="Password" >
                    </div>
                    <div class="level-item" style="margin-bottom:10px;">
                        <input type="text" name="firstname" class="input" placeholder="ชื่อ" style="margin-right:10px;">
                        <input type="text" name="lastname" class="input" placeholder="นามสกุล" >
                    </div>
                    <div class="level-item" style="margin-bottom:10px;">
                        <input type="text" name="id" class="input" placeholder="รหัสพนักงาน" style="margin-right:10px;">
                        <input type="text" name="department" class="input" placeholder="ตำแหน่ง" >
                    </div>
                    <div class="level-item">
                        <input type="submit" name="submit" value="Add" class="button is-success" style="margin-right:5px;">
                        <button class="button is-dark">Update</button>
                    </div>
                </div>
            </div>
            <?php
            
            ?>
            <div class="column is-6 box" style="margin-left:10px;margin-right:10px;">
            <p class="title is-4">ข้อมูลพนักงาน</p>
                <table border='1' width='100%' style='border-collapse: collapse;'>
                    <tr>
                        <th>รหัสพนักงาน</th>
                        <th>Username</th>
                        <th>ตำแหน่ง</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                    </tr>
                    <?php
                        while ($row = mysqli_fetch_assoc($dataS)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["username"];?></td>
                        <td><?php echo $row["department"];?></td>
                        <td><?php echo $row["first"];?></td>
                        <td><?php echo $row["last"];?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
            <div class="column is-1"></div>
        </div>
    </div>
    </form>
</body>
</html>