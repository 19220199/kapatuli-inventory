<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Inventaris</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Product ID</th>
            <th>Supplier ID</th>
            <th>Supplier Product ID</th>
            <th>Stock</th>
            <th>Date Received</th>
            <th>Total Received</th>
        </tr>
        <?php $no = 1;
        foreach ($inventaris_pendataan as $ivt_p) : ?>
            <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $ivt_p->product_id ?></td>
                <td><?= $ivt_p->supplier_id ?></td>
                <td><?= $ivt_p->supplier_product_id ?></td>
                <td><?= $ivt_p->stock ?></td>
                <td><?= $ivt_p->date_received ?></td>
                <td><?= $ivt_p->total_received ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>