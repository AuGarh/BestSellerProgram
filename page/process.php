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
            $product = array("มาม่า" => 0, "ดินสอ" => 0, "น้ำ" => 0, "ข้าว" => 0,"ยางลบ" => 0);
            $z = 0;

            $number = $_POST["number"];


            ?>
            <form method="post" action="../page/finish.php">
                <?php
                for ($i = 1; $i <= $number; $i++) {
                    echo "<H2>ใบเสร็จที่" . $i . "</H2>"; ?>
                    <table>
                        <tr>
                            <th>สินค้า</th>
                            <th>จำนวน</th>
                        </tr>
                        <?php
                        for ($j = 1; $j <= count($product); $j++) { ?>
                            <tr>
                                <td>
                                    <div class="txt-field">
                                        <select name="name<?php echo $z; ?>">
                                            <?php
                                            foreach ($product as $key => $value) {
                                                echo "<option value=" . $key . ">$key</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="txt-field">
                                        <select name="num<?php echo $z; ?>">
                                            <?php
                                            for ($n = 0; $n <= 100; $n++) {
                                                echo "<option value=" . $n . ">$n</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </td>
                            </tr><?php
                                    $z += 1;
                                } ?>
                    </table>
                <?php } ?> <br>
                <button type="submit">ตกลง</button><br><br>
                <?php
                $_SESSION['z'] = $z;
                $_SESSION['product'] = $product; ?>
            </form>
        </div>
    </div>
</body>

</html>