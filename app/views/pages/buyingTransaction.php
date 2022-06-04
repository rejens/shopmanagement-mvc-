<?php require_once APPROOT . "/views/includes/includes.php" ?>
<div class="form-group d-flex w-50 justify-content-around">
    <div>
        <label for="">from </label>
        <input type="date" class="form-control buying-transaction-table" name="" id="buying-transaction-table-from" aria-describedby="helpId" placeholder="">
    </div>
    <div>
        <label for="">to </label>
        <input type="date" class="form-control buying-transaction-table" name="" id="buying-transaction-table-to" aria-describedby="helpId" placeholder="">
    </div>
</div>
<table class=" mt-1 table  table-striped  table-borderless table-hover">
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
        <tbody id="buyingTransaction-table">


        </tbody>
</table>


<?php require_once APPROOT . "/views/includes/footer.php" ?>