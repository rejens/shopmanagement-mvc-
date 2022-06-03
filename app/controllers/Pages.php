<?php
session_start();
class Pages extends Controller
{
    protected $chart;
    protected $modalControl;
    public function __construct()
    {

        $this->modelObj = $this->model("Items");
        require APPROOT . "/helpers/Chart.php";

        //redirects to login if not logged in
        if (empty($_SESSION)) {
?>
            <script>
                window.location.replace("<?php echo URLROOT . "users/login" ?>");
            </script>
        <?php
        }
        //logout
        if (isset($_POST['logout'])) {
            session_destroy();
        ?>
            <script>
                location.reload();
            </script>
        <?php
        }
        $this->chart = new Chart();
    }


    //dashboard
    public function dashboard()
    {
        $this->view("pages/dashboard");

        $this->result = $this->modelObj->dashboard("pieChart");
        $this->chart->pieChart($this->result);

        $this->result = $this->modelObj->dashboard("lineChart");
        $this->chart->lineChart($this->result);
    }


    //buying transaction
    public function sellingTransaction()
    {
        $this->result = $this->modelObj->sellingTransaction();
        $this->view("pages/sellingTransaction");
    }


    //selling transaction
    public function buyingTransaction()
    {
        $this->result = $this->modelObj->buyingTransaction();
        $this->view("pages/buyingTransaction");
    }


    //inventory
    public function inventory($param)
    {
        $this->result = $this->modelObj->inventory();
        $this->view("pages/inventory");

        if (isset($_POST['saveAddModal'])) {
            $this->addModal();
        }

        if (isset($_POST['submitDeleteModal'])) {
            $this->deleteModal();
        }

        if (isset($_POST['saveSoldModal'])) {
            $this->saleModal();
        }

        if (isset($_POST['saveUpdateModal'])) {
            $this->updateModal();
        }
    }


    //modal control
    //add modal
    public function addModal()
    {
        $name = $_POST['inputName'];
        $cp = $_POST['inputCp'];
        $sp = $_POST['inputSp'];
        $quantity = $_POST['inputQuantity'];
        $expiry_date = $_POST['inputExpiry'];
        $vendor = $_POST['inputVendor'];
        $result = $this->modelObj->addModalCheck($name);
        if ($result->num_rows > 0) {
        ?>
            <script>
                swal({
                    title: "item already exists in your inventory!",
                    icon: "info"
                });
            </script>
            <?php
        } else {
            if ((strlen($expiry_date) > 0  && $expiry_date >= date("Y-m-d")) || strlen($expiry_date) == 0)
                $this->modelObj->addModal($name, $cp, $sp, $quantity, $expiry_date, $vendor);
            else {
            ?>
                <script>
                    // swal({
                    //     title: "item already expired!",
                    //     icon: "warning"
                    // });
                    alert("item already expired.")
                </script>
            <?php
            }
            ?>
            <script>
                location.reload()
            </script>
        <?php
        }
    }

    //delete modal
    public function deleteModal()
    {
        $deleteId = $_COOKIE['id'];
        $this->modelObj->deleteModal($deleteId);
        ?>
        <script>
            location.reload()
        </script>
<?php
    }

    //sales modal
    public function saleModal()
    {
        $saleId = $_COOKIE['id'];
        $quantity = $_POST['soldQuantity'];
        $this->modelObj->salesModal($saleId, $quantity);
    }

    //update modal
    public function updateModal()
    {
        $updateId = $_COOKIE['id'];
        $quantity = $_POST['updateQuantity'];
        $price = $_POST['updatePrice'];
        $this->modelObj->updateModal($updateId, $quantity, $price);
        echo "<script>
            location.reload()
        </script>";
    }
}
?>