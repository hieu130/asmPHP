<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h2>Đăng Ký Tài Khoản</h2>
        <form action="save-user.php" method="post">
        <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control"  name="id" />
            </div>    
        <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" class="form-control"  name="name" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" >
            </div>
            <div class="form-group">
                <label for="birthday">Ngày Tháng Năm Sinh:</label>
                <input type="date" class="form-control"  name="birthday">
                
            </div>
            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <input type="text" class="form-control"  name="address" >
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Nhập Lại Mật Khẩu:</label>
                <input type="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
    </div>
</body>
</html>