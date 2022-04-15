<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<h1 class="text-center my-3 text-uppercase">Tambah Data Produk</h1>

<form method="post" action="save.php" class="container-fluid">
    <table class="table table-dark table-hover">
        <tr class="text-center text-uppercase">
            <th>NRP</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>Telphone</th>
            <th>Mail PENS</th>
            <th>GitHub</th>
            <th>Trello</th>

            <?php
            $amount = $_POST['amount'];

            for ($i = 1; $i <= $amount; $i++) {
                echo "<tr>
                            <td><input type='text' name='NRP[]' size='7'></td>
                            <td><input type='text' name='Name[]' size='25'></td>
                            <td><input type='text' name='Gmail[]' size='29'></td>
                            <td><input type='text' name='No_Telp[]' size='10'></td>
                            <td><input type='text' name='Mail_PENS[]' size='33'></td>
                            <td><input type='text' name='Name_GitHub[]' size='11'></td>
                            <td><input type='text' name='Name_Trello[]' size='13'></td>       
                </tr>";
            }
            ?>
        </tr>
    </table>
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

    <input class="btn btn-warning mx-2" type="submit" name="save" value="Save">
    <input class="btn btn-danger mx-1" type="button" value="Back" onclick="location.href='input.php'">
</form>