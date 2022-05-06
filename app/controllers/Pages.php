<?php
session_start();

class Pages extends Controller
{
    public function __construct()
    {
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
    }


    //dashboard
    public function dashboard()
    {
        $this->modelObj = $this->model("Items");
        $this->result = $this->modelObj->dashboard();
        $this->view("pages/dashboard");
    }


    //pl
    public function pl()
    {
        $this->modelObj = $this->model("Items");
        $this->result = $this->modelObj->pl();
        $this->view("pages/pl");
    }


    //inventory
    public function inventory()
    {
        $this->modelObj = $this->model("Items");
        $this->result = $this->modelObj->inventory();
        $this->view("pages/inventory");
    }
}
