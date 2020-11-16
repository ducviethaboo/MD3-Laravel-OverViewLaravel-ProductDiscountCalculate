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
<h2>Product Discount Calculator</h2>
<form action="/show" method="post">
    @csrf
Mô tả sản phẩm: <p><input type="text" name="desc"></p>
Giá niêm yết: <p><input type="number" name="price"></p>
Tỉ lệ chiết khấu: <p><input type="number" name="discountpercent"></p>
    <input type="submit" value="Tính">
</form>
</body>
</html>
