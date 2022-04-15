<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<h1 class="text-center my-3 text-uppercase">Tambah Data Mahasiswa</h1>

<form method="post" action="entry.php" class="container my-5">

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Jumlah Data</label>
        </div>
        <div class="col-auto">
            <input type="text" name="amount" class="form-control">
        </div>
        <div class="col-auto">
            <input class="btn btn-warning mx-2" type="submit" name="submit" value="Proses">
            <input class="btn btn-danger mx-1" type="button" value="Cancel" onclick="location.href='../index.php'">
        </div>
    </div>
</form>