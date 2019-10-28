<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
</head>
<body>
    <?php 
        include 'tabmenu.php';
        include 'connect.php';
    ?>
    <?php 
        $res = array();
        while ($row = mysqli_fetch_assoc($dataS)) {
            $res[] = $row;
        }
        // echo json_encode($res);
    ?>
    <div class="container" 
    style="margin-left: 2.5%;
    mrgin-right: 2.5%;margin-top:10%;">
        <div class="level">
            <div class="level-item">
                <img src="https://uppic.cc/d/5neC" alt="" width="100px"/>
            </div>
        </div>
        <div class="column box is-4 is-offset-4">        
            <div class="level">
                <div class="level-item">
                    <p class="title is-2">Login</p>
                </div>
            </div>
            <div class="column is-6 is-offset-3">
                <input type="text" class="input" placeholder="Uername" style="margin-bottom:10px;">
                <input type="text" class="input" placeholder="Password" style="margin-bottom:10px;">
            </div>
            <div class="level-item" style="margin-top: -10px">
                <button class="button is-success">Login</button>
            </div>
        </div>
    </div>
</body>
</html>