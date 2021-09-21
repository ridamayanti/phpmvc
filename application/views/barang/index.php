<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($barang as $brg) : ?>
                    <td><?= $brg['id_barang']; ?></td>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td><?= $brg['harga']; ?></td>
                    <td><?= $brg['stock']; ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>