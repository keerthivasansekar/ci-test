<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="brand_name">Brand Name</label>
        <input type="text" name="brand_name" id="brand_name" value="<?= (!is_null($brand) ? $brand['brand_name'] : '')?>">
        <br>
        <label for="brand_logo">Brand Logo</label>
        <input type="text" name="brand_logo" id="brand_logo"  value="<?= (!is_null($brand) ? $brand['brand_logo_url'] : '')?>">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>