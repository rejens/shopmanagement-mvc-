<?php require_once APPROOT . "/views/includes/includes.php" ?>


<table class=" mt-1 table  table-striped  table-borderless table-hover ">
    <thead class="table-dark ">
        <tr>
            <th scope="col">date</th>
            <th scope="col">name</th>
            <th scope="col">quantity</th>
            <th scope="col">profit/loss</th>
            <th scope="col">sales</th>

        </tr>
    </thead>

    <form method='post'>
        <tbody id="salesTransaction-table">

        </tbody>
</table>


<?php require_once APPROOT . "/views/includes/footer.php" ?>