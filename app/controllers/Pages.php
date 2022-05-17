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
    public function inventory()
    {
        $this->result = $this->modelObj->inventory();
        $this->view("pages/inventory");

        if (isset($_POST['saveAddModal'])) {
            $this->addModal();
        }

        if (isset($_POST['submitDeleteModal'])) {
            $this->deleteModal();
        }
    }

    //modal control
    public function addModal()
    {
        $name = $_POST['inputName'];
        $cp = $_POST['inputCp'];
        $sp = $_POST['inputSp'];
        $quantity = $_POST['inputQuantity'];
        $result = $this->modelObj->addModalCheck($name);
        if ($result->num_rows > 0) {
        ?>
            <script>
                alert("item already exists in your inventory")
            </script>
        <?php
        } else {
            $this->modelObj->addModal($name, $cp, $sp, $quantity, $result);
        }
    }

    public function deleteModal()
    {
        ?>
        <script>
            alert(<?php echo "hello" ?>)
        </script>
<?php
    }
}
