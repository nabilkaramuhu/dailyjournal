<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th class="w-50">Username</th>
            <th class="w-25">Foto</th>
            <th class="w-25">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";

        $hlm = (isset($_POST['hlm'])) ? $_POST['hlm'] : 1;
        $limit = 5;
        $limit_start = ($hlm - 1) * $limit;
        $no = $limit_start + 1;

        $sql = "SELECT * FROM user LIMIT $limit_start, $limit";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $no++ ?></td>

                <td><?= $row["username"] ?></td>

                <td>
                    <?php
                    if ($row["foto"] != '' && file_exists('img/' . $row["foto"])) {
                    ?>
                        <img src="img/<?= $row["foto"] ?>" width="100">
                    <?php } else { ?>
                        <span class="text-muted">Tidak ada</span>
                    <?php } ?>
                </td>

                <td>
                    <a href="#" title="edit" class="badge rounded-pill text-bg-success"
                        data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["id"] ?>">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" title="delete" class="badge rounded-pill text-bg-danger"
                        data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>">
                        <i class="bi bi-x-circle"></i>
                    </a>

                    <!-- modal edit & hapus tetap seperti milikmu -->
                </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>

<?php
$sql1 = "SELECT * FROM user";
$hasil1 = $conn->query($sql1);
$total_records = $hasil1->num_rows;
?>
<p>Total user : <?php echo $total_records; ?></p>
<nav class="mb-2">
    <ul class="pagination justify-content-end">
        <?php
        $jumlah_page = ceil($total_records / $limit);
        $jumlah_number = 1;
        $start_number = ($hlm > $jumlah_number) ? $hlm - $jumlah_number : 1;
        $end_number = ($hlm < ($jumlah_page - $jumlah_number)) ? $hlm + $jumlah_number : $jumlah_page;

        if ($hlm == 1) {
            echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
            echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
        } else {
            $link_prev = ($hlm > 1) ? $hlm - 1 : 1;
            echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
            echo '<li class="page-item halaman" id="' . $link_prev . '"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
        }

        for ($i = $start_number; $i <= $end_number; $i++) {
            $link_active = ($hlm == $i) ? ' active' : '';
            echo '<li class="page-item halaman ' . $link_active . '" id="' . $i . '"><a class="page-link" href="#">' . $i . '</a></li>';
        }

        if ($hlm == $jumlah_page) {
            echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
            echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
        } else {
            $link_next = ($hlm < $jumlah_page) ? $hlm + 1 : $jumlah_page;
            echo '<li class="page-item halaman" id="' . $link_next . '"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
            echo '<li class="page-item halaman" id="' . $jumlah_page . '"><a class="page-link" href="#">Last</a></li>';
        }
        ?>
    </ul>
</nav>