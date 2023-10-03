
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài Hát</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container ">
        <div class="header d-flex justify-content-between">
            <h1>THÊM BÀI HÁT </h1>            
            <div class = "d-flex">
                <button type="button" class="btn btn-info">Trang chủ</button>
                <button type="button" class="btn btn-warning">Thêm</button>
                <button type="button" class="btn btn-primary">Xóa</button>
            </div>
        </div>
       
    <form action="index.php" method="post" enctype="multipart/form-data">

  <div class="form-group mb-3 mt-3">
    <label for="tenBaiHat" class="form-label">TÊN BÀI HÁT:</label>
    <input type="text" class="form-control" placeholder="Tên Bài Hát " name="tenBaiHat">
  </div>

  <div class="form-group mb-3">
    <label for="hoten" class="form-label">CA SĨ:  </label>
    <input type="text" class="form-control" placeholder="CA SĨ" name="CaSi">
  </div>

  <div class="form-group mb-3">
    <label for="idTheLoai" class="form-label"> ID THỂ LOẠI</label>
      <input type="text" class="form-control"  placeholder="ID THỂ LOẠI" name="idTheLoai">
  </div>

  <button type="submit" class="btn btn-primary" name = "btn">Thêm</button>
</form>

    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>