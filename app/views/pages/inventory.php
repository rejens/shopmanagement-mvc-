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
        <tbody>
            <?php
            foreach ($this->result as $row) {
                $id = $row['id'];
                $name = $row['name'];
                $cp = $row['cp'];
                $sp = $row['sp'];
                $quantity = $row['quantity'];
            ?>

                <tr>
                    <td> <?php echo $name ?> </td>
                    <td><?php echo $cp ?></td>
                    <td> <?php echo $sp ?></td>
                    <td> <?php echo $quantity ?> </td>
                    <td>
                        <div class='me-auto'>
                            <button type='button' class='btn btn-primary editButton' data-toggle='tooltip' data-placement='top' title='edit' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-pen-to-square'></i></button>
                            <button type='button' class='btn btn-danger deleteButton' data-toggle='tooltip' data-placement='top' title='delete' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-trash'></i> </button>
                            <button type='button' class='btn btn-success soldButton' data-toggle='tooltip' data-placement='top' title='sale' onclick="getId(<?php echo $id ?>)"><i class='fa-solid fa-check'></i></button>
                        </div>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
</table>


<?php require  APPROOT . "/views/modals/addModal.php";
require  APPROOT . "/views/modals/deleteModal.php";
require  APPROOT . "/views/modals/editModal.php";
require  APPROOT . "/views/modals/soldModal.php";
require  APPROOT . "/views/modals/stockModal.php";
require  APPROOT . "/views/includes/footer.php";
?>