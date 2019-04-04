<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 5px solid green;
    }
</style>
<body>
<table border="4">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Vũ Thị Phương",
            "ngaysinh" => "1995-08-20",
            "diachi" => "Hà Nội",
            "anh" => "anh1.jpg"),
        "2" => array("ten" => "Phạm Thị Hoa",
            "ngaysinh" => "1995-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "anh2.jpg"),
        "3" => array("ten" => "Nguyễn Ngọc Anh",
            "ngaysinh" => "1995-08-21",
            "diachi" => "Nam Định",
            "anh" => "anh 3.jpeg")
    );
    ?>
    <?php
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>