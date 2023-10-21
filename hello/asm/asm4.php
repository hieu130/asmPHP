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
$address = null;
$password = null;
$confirm_password = null;
$check = true;
$isPostMethod = $_SERVER['REQUEST_METHOD'] == 'POST';
$users = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Fullname is required";
        $check = false;
    }else if(!preg_match('@[0-9]@', $_POST['password'])){
        $error['fullname'] = "Tên không hợp lệ";
        $check = false;
    }
     else {
        $fullname = $_POST['fullname'];
    }

    if (empty($_POST['email'])) {
        $error['email'] = "email is required";
        $check = false;
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'Email không hợp lệ';
        $check = false;
    }else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) {
        $error['phone'] = "phone is required";
        $check = false;

    }elseif(!preg_match('/^[0-9]{10}+$/', $_POST['phone'])) {
        $error['phone'] = "Số điện thoại không hợp lệ";
        $check = false;
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['dob'])) {
        $error['dob'] = "dob is required";
        $check = false;

    }elseif($_POST['dob'] > date('Y-m-d')) {
        $error['dob'] = "Ngày tháng năm sinh không hợp lệ";
        $check = false;
    } else {
        $dob = $_POST['dob'];
    }

    if (empty($_POST['address'])) {
        $error['address'] = "address is required";
        $check = false;

    } else {
        $address = $_POST['address'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "password is required";
        $check = false;
     }elseif(strlen($_POST['password']) <6) {
        $error['password'] = "Mật khẩu phải chứa ít nhất 6 ký tự bao gồm cả chữ và số";
        $check = false;
    } else {
        $password = $_POST['password'];
    }
    
    // if ($_POST['confirm_password']) {
    //     $confirm_password = $_POST['confirm_password'];
    // } 

    if ($password !== $_POST['confirm_password']) {
        $error['confirm_password'] = "Password and Password confirmation not match";
        $check = false;
    } else {
        $confirm_password = $_POST['confirm_password'];
    }

    if($check) {
        $users[] = [
            'fullName' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'dob' => $dob,
        ];
        $fullname = null;
        $email = null;
        $phone = null;
        $address = null;
        $dob = null;
        $password = null;
        $confirm_password = null;
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
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname ?>" />
                <p style="color:red"><?php echo errorMessage('fullname', $error) ?> </p>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                <p style="color:red"><?php echo errorMessage('email', $error) ?> </p>
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại:</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
                <p style="color:red"><?php echo errorMessage('phone', $error) ?> </p>
            </div>
            <div class="form-group">
                <label for="dob">Ngày Tháng Năm Sinh:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $dob ?>">
                <p style="color:red"><?php echo errorMessage('dob', $error) ?> </p>
            </div>
            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
<<<<<<< HEAD
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>">
=======
                <input type="text" class="form-control" id="address" name="address">
>>>>>>> db5ab25ef14e7dbd95fb4bd3a18b2549b1cb66d3
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" class="form-control" id="password" name="password">
                <p style="color:red"><?php echo errorMessage('password', $error) ?> </p>
            </div>
            <div class="form-group">
                <label for="confirm_password">Nhập Lại Mật Khẩu:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                <p style="color:red"><?php echo errorMessage('confirm_password', $error) ?> </p>
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
            <p class="text-success">
                <?php if ($check && $isPostMethod) echo 'Register successfully !'; ?>
            </p>
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
                        foreach($users as $user) {
                            echo '<tr>';
                                echo '<td>' . $user['fullName'] . '</td>';
                                echo '<td>' . $user['email'] . '</td>';
                                echo '<td>' . $user['phone'] . '</td>';
                                echo '<td>' . $user['dob'] . '</td>';
                                echo '<td>' . $user['address'] . '</td>';
                            echo '</tr>';

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>

</html>
