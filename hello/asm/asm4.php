<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Đăng Ký Tài Khoản</title>
</head>
<?php
$error = [];
$fullname = null;
$email = null;
$phone = null;
$dob = null;
// $address = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Fullname is required";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['email'])) {
        $error['email'] = "email is required";
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['phone'])) {
        $error['phone'] = "phone is required";
    } else {
        $phone = $_POST['phone'];
    }
    if (empty($_POST['dob'])) {
        $error['dob'] = "dob is required";
    } else {
        $dob = $_POST['dob'];
    }
    // if (empty($_POST['address'])) {
    //     $error['address'] = "address is required";
    // } else {
    //     $address = $_POST['address'];
    // }
    if (empty($_POST['password'])) {
        $error['password'] = "password is required";
    } else {
        $password = $_POST['password'];
    }
}
function errorMessage($key, $error)
{
    if (array_key_exists($key, $error)) {
        return $error[$key];
    }
    return null;
}
?>

<body>
    <div class="container mt-5">
        <h2>Đăng Ký Tài Khoản</h2>
        <form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="form-group">
                <label for="fullname">Họ và Tên:</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
                <p style="color:red"><?php echo errorMessage('fullname',$error) ?> </p>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
                <p style="color:red"><?php echo errorMessage('email',$error) ?> </p>
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
                <p style="color:red"><?php echo errorMessage('phone',$error) ?> </p>
            </div>
            <div class="form-group">
                <label for="dob">Ngày Tháng Năm Sinh:</label>
                <input type="date" class="form-control" id="dob" name="dob">
                <p style="color:red"><?php echo errorMessage('dob',$error) ?> </p>
            </div>
            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" class="form-control" id="password" name="password">
                <p style="color:red"><?php echo errorMessage('password',$error) ?> </p>
            </div>
            <button type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
    </div>


    <title>Danh Sách Tài Khoản</title>
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <h2>Danh Sách Tài Khoản</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Họ và Tên</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Ngày Sinh</th>
                        <th>Địa Chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    // Hiển thị dữ liệu trong bảng
                        echo "<tr>";
                        echo "<td>$fullname</td>";
                        echo "<td>$email</td>";
                        echo "<td>$phone</td>";
                        echo "<td>$dob</td>";
                        echo "<td>$address</td>";
                        echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>
    </body>

</html>
