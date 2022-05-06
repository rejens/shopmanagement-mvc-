<?php require_once APPROOT . "/views/includes/includes.php" ?>




<button type="button" class="btn btn-primary me-auto" data-toggle='tooltip' data-placement='top' title='add item' id="addButton"><i class="fa-solid fa-plus"></i></button>

<table class="table table-light table-borderless table-hover">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">cp</th>
            <th scope="col">sp</th>
            <th scope="col">quantity</th>
            <th scope="col"> action</th>
        </tr>
    </thead>

    <?php
    foreach ($this->result as $row) {

        echo " <form method='post'> <tbody>
<tr>

    <td>" . $row['name'] . "</td>
    <td>" . $row['cp'] . "</td> 
    <td>" . $row['sp'] . "</td>
    <td>" . $row['quantity'] . "</td> 
    <td><div class='me-auto'>
    <button type='button' class='btn btn-secondary editButton' data-toggle='tooltip' data-placement='top' title='edit' id='editButton'><i class='fa-solid fa-pen-to-square'></i></button>
    <button type='button' class='btn btn-danger deleteButton' data-toggle='tooltip' data-placement='top' title='delete' id='deleteButton'> <i class='fa-solid fa-trash'></i></button>
    <button type='button' class='btn btn-success soldButton' data-toggle='tooltip' data-placement='top' title='sale' id='soldButton'><i class='fa-solid fa-check'></i></button>
</div></td> 
</tr>

</tbody>

";
    }
    ?>
</table>
<?php require  APPROOT . "/helpers/modals/addModal.php" ?>
<?php require  APPROOT . "/helpers/modals/deleteModal.php" ?>
<?php require  APPROOT . "/helpers/modals/editModal.php" ?>
<?php require  APPROOT . "/helpers/modals/soldModal.php" ?>
<?php require  APPROOT . "/helpers/modals/stockModal.php" ?>

<script>
    $('document').ready(function() {
        $(".addButton").click(function() {
            $("#addModal").modal("show")
        })
        $(".editButton").click(function() {
            $("#editModal").modal("show")
        })

        $(".deleteButton").click(function() {
            $("#deleteModal").modal("show")
        })

        $(".stockButton").click(function() {
            $("#stockModal").modal("show")
        })

        $(".soldButton").click(function() {
            $("#soldModal").modal("show")
        })

    })
</script>

<?php require_once APPROOT . "/views/includes/footer.php" ?>