<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheet/stylesheet.css">
    <title>Document</title>
</head>

<body>
    <div class="center">
        <div class="modal-left1">
            <?php
            session_start();
            $z = $_SESSION['z'];
            $product = $_SESSION['product'];
            for ($i = 0; $i <= $z - 1; $i++) {
                $name = $_POST["name$i"];
                $num = $_POST["num$i"];
                foreach ($product as $key => $value) {
                    if ($name == $key) {
                        $product[$name] = $product[$name] + $num;
                    }
                }
            }
            $maxValue = max($product);
            $maxIndex = array_search(max($product), $product);
            echo "<h1>สินค้าที่ขายดีที่สุดคือ</h1>";
            echo "<h2>$maxIndex</h2>";
            echo "<h2>จำนวนทั้งหมด</h2>";
            echo "<h2>$maxValue ชิ้น";
            foreach ($product as $key => $value){
                echo "<h3>$key $value ชิ้น</h3>";
            }
            ?>
            
        </div>
        <div class="modal-right1">
            <img src="../img/test2.jpg" alt="">
        </div>
    </div>
</body>

</html>