<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<h1 class="text-center my-3 text-uppercase">Data Mahasiswa</h1>

<form class="container" method="post" >
    <div class="row my-3">
        <div class="col-md-10">
                <input class="btn btn-info" type="submit" value="Add" name="proses" onClick="action='Insert/input.php'">
            </a> 
        </div>
        <div class="col text-end">
                <input class="btn btn-warning mx-2" type="submit" value="Edit" name="proses" onClick="action='Update/update.php'">
                <input class="btn btn-danger" type="submit" value="Delete" name="proses" onClick="action='Delete/delete.php'">
            </a> 
        </div>
    </div>
    
    <table class="table table-dark table-hover">
        <tr class="text-center text-uppercase">
            <th>NRP</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>Telphone</th>
            <th>Mail PENS</th>
            <th>GitHub</th>
            <th>Trello</th>
            <th>Select</th>
        </tr>

        <?php
        include "connect.php";

        $i = 0;
        $takeData = mysqli_query($connect, "select * from 21_d4_it_a ORDER BY NRP") or die(mysqli_error($connect));
        while($views = mysqli_fetch_array($takeData)) {
            echo "
            <tr class='text-center'>
                <td align='center'>$views[NRP]</td>
                <td>$views[Name]</td>
                <td>$views[Gmail]</td>
                <td>$views[No_Telp]</td>
                <td>$views[Mail_PENS]</td>
                <td>$views[Name_GitHub]</td>
                <td>$views[Name_Trello]</td>
                <td> <div class='btn-group' role='group' aria-label='Basic checkbox toggle button group'> 
                <input type='checkbox' class='btn-check' autocomplete='off' id='btncheck$i' name='NRP[]' value='$views[NRP]'/>
                <label class='btn btn-outline-primary my-2' for='btncheck$i'> </label> </div> </td>
            </tr>";
            $i++;
        }
        ?>
    </table>
</form>