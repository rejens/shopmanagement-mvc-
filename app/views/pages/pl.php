<?php require_once APPROOT . "/views/includes/includes.php" ?>


<table class="table table-light table-borderless table-hover">
    <thead>
        <tr>
            <th scope="col">date</th>
            <th scope="col">name</th>
            <th scope="col">quantity</th>
            <th scope="col">profit/loss</th>
            <th scope="col">sales</th>

        </tr>
    </thead>
    <?php
    foreach ($this->result as $row) {
        echo " <form method='post'> <tbody>
<tr>

<td>" . $row['datee'] . "</td>
<td>" . $row['name'] . "</td> 
<td>" . $row['quantity'] . "</td>
<td>" . $row['pl'] . "</td> 
<td>" . $row['salesAmt'] . "</td> 


</tr>

</tbody>

";
    }
    ?>
</table>


<?php require_once APPROOT . "/views/includes/footer.php" ?>