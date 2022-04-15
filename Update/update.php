<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<h1 class="text-center my-3 text-uppercase">Update Data Mahasiswa</h1>

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
        </tr>

        <?php
        include "../connect.php";

        $NRP = $_POST['NRP'];
        $NRP_2 = $_POST['NRP'];
        $amount = count($NRP);

        for($i=0; $i<$amount; $i++){
            $takeData = mysqli_query($connect, "select * from 21_d4_it_a where NRP = '$NRP[$i]'") or die(mysqli_error($connect));
            while($views = mysqli_fetch_array($takeData)) {
                echo "
                <tr>
                    <input type='hidden' name='NRP_2[]' value='$NRP_2[$i]'>

                    <td><input type='text' name='NRP[]' value='$views[NRP]'></td>
                    <td><input type='text' name='Name[]' value='$views[Name]'></td>
                    <td><input type='text' name='Gmail[]' value='$views[Gmail]'></td>
                    <td><input type='text' name='No_Telp[]' value='$views[No_Telp]'></td>
                    <td><input type='text' name='Mail_PENS[]' value='$views[Mail_PENS]'></td>
                    <td><input type='text' name='Name_GitHub[]' value='$views[Name_GitHub]'></td>
                    <td><input type='text' name='Name_Trello[]' value='$views[Name_Trello]'></td>
                </tr>";
            }
        }
        ?>
    </table>

    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

    <input class="btn btn-warning mx-2" type="submit" name="save" value="Save">
    <input class="btn btn-danger mx-1" type="button" value="Cancel" onclick="location.href='../index.php'">
</form>