<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container">
        <h1>
            <center>Product List</center>
        </h1>

        <a href="/belajar-ci/product/add_new" class="btn btn-primary mt-5 mb-3">Tambah Produk</a>
        <table class="table table-striped" id="produk">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            $count = 0;
            foreach ($product->result() as $row):
                $count++; ?>
            <tr>
                <th scope="row"><?php echo $count; ?></th>
                <td><?php echo $row->product_name; ?></td>
                <td>Rp. <?php echo number_format($row->product_price); ?></td>
                <td>
                    <a href="<?php echo site_url(
                        'product/get_edit/' . $row->product_id
                    ); ?>" class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url(
                        'product/delete/' . $row->product_id
                    ); ?>" class="btn btn-sm btn-danger">Delete</a>
                <td>
            </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#produk').DataTable();
    });
    </script>
</body>

</html>