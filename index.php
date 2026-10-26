<?php include 'includes/meta.php'; ?>
<?php include 'includes/header.php'; ?>


    <section>

    <?php 
    $nama = "Mahasiswa S1";
    $jurusan = "Sistem Informasi";
    $hobi = ["Membaca", "Desain", "Coding"];
    ?>

    Nama: <?php echo $nama ?> <br>
    Jurusan: <?php echo $jurusan ?> <br>
    Hobi:
    <ul>
        <?php foreach ($hobi as $key => $value): ?>
            <li><?php echo $value; ?></li>
        <?php endforeach ?>
    </ul>

    </section>

<?php include 'includes/footer.php'; ?>
