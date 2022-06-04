<?php require_once APPROOT . "/views/includes/includes.php" ?>

<div class="d-flex justify-content-between">
    <button type="button" class="btn btn-primary  addButton" data-toggle='tooltip' data-placement='top' title='add item' id="addButton"><i class="fa-solid fa-plus"></i>Add Item</button>

    <div class="input-group rounded w-25 ">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="searchItem" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </div>
</div>

<table class=" mt-4 table  table-striped  table-borderless table-hover ">
    <thead class="table-dark">
        <tr>
            <th scope="col">name</th>
            <th scope="col">cp</th>
            <th scope="col">sp</th>
            <th scope="col">quantity</th>
            <th scope="col"> action</th>
        </tr>
    </thead>
    <form method='post'>
        <tbody id="inventory-table">

        </tbody>
    </form>
</table>


<?php require  APPROOT . "/views/modals/addModal.php";
require  APPROOT . "/views/modals/deleteModal.php";
require  APPROOT . "/views/modals/editModal.php";
require  APPROOT . "/views/modals/soldModal.php";
require  APPROOT . "/views/modals/stockModal.php";
require  APPROOT . "/views/includes/footer.php";
?>