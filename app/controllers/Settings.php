<?php require_once APPROOT . "/views/includes/header.php" ?>

<?php
session_start();
//redirects to login if not logged in
if (empty($_SESSION)) {
?>
    <script>
        window.location.replace("<?php echo URLROOT . "users/login" ?>");
    </script>
<?php
}


class Settings extends Controller
{
    public function __construct()
    {
    }
    public function changePassword()
    {
        $this->view("settings/changePassword");
    }
    public function updateProfile()
    {
        $this->view("settings/updateProfile");
    }
}
