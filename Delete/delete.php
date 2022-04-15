<h2>Data Mahasiswa</h2>

<?php
if(isset($_POST['proses'])) {

    $NRP = $_POST['NRP'];
    $amount = count($NRP);

    while($amount > 0) {
        $amount--;
        mysqli_query($connect, "delete from 21_d4_it_a where NRP = '$NRP[$amount]'")
        or die(mysqli_error($connect));
    }
echo "<script>
    alert('Data Berhasil Dihapus');
    location.href='../view.php';
</script>";
}
?>