<?php
session_start();
class Pages extends Controller
{
    protected $chart;
    public function __construct()
    {
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

        $this->modelObj = $this->model("Items");
        $this->result = $this->modelObj->dashboard("pieChart");

        $this->chart->pieStart($this->result);
        $this->chart->pieEnd();

        $this->result = $this->modelObj->dashboard("lineChart");
        $this->chart->lineChart($this->result);
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
