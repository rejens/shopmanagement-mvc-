<?php require_once APPROOT . "/views/includes/includes.php" ?>


<table class=" mt-1 table  table-striped  table-borderless table-hover ">
    <thead class="table-dark ">
        <tr>
            <th scope="col">date</th>
            <th scope="col">name</th>
            <th scope="col">quantity</th>
            <th scope="col">price</th>
            <th scope="col">vendor</th>

        </tr>
    </thead>
    <form method='post'>
        <tbody>
            <?php

            foreach ($this->result as $row) {
                echo " 
<tr>
<td>" . $row['datee'] . "</td>
<td>" . $row['name'] . "</td> 
<td>" . $row['quantity'] . "</td>
<td>" . $row['price'] . "</td> 
<td>" . $row['vendor'] . "</td> 
</tr>
";
            }
            ?>

        </tbody>
</table>


<?php require_once APPROOT . "/views/includes/footer.php" ?>