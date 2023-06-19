<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Brand Name</th>
                <th>Brand Logo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allBrands as $brand) : ?>
                <tr>
                    <td><?= $brand['brand_name'] ?></td>
                    <td><img src="<?= base_url('assets/images/') . $brand['brand_logo_url'] ?>" alt="" class="image"></td>
                    <td><a href="brand/update/<?= $brand['id'] ?>">Edit</a></td>
                    <td><a href="brand/delete/<?= $brand['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>