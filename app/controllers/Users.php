<?php
session_start();
//handles the user related things like register login etc.

class Users extends Controller
{
    public $modelObj;
    public function __construct()
    {
        $this->modelObj = $this->model("User");
    }

    public function login()
    {
        $this->view("users/login");
        if (isset($_POST['login'])) {
            $result = $this->modelObj->getUserInfo();
            $result = $result->fetch_assoc();
            if ($result) {
                if (password_verify($_POST['password'], $result['password'])) {
                    $_SESSION['user'] = $result;
?>
                    <script>
                        window.location.replace("<?php echo URLROOT ?>");
                    </script>
                <?php
                } else { ?>
                    <script>
                        swal({
                            title: "Error!!!",
                            text: "sorry username or password error",
                            icon: "error",
                        });
                    </script>
                <?php
                }
            } else { ?>
                <script>
                    swal({
                        title: "Error!!!",
                        text: "sorry username or password error",
                        icon: "error",
                    });
                </script>
                <?php
            }
        }
    }

    public function signup()
    {
        $this->view("users/signup");
        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $company = $_POST['company'];
            $password = $_POST['password'];

            if (!empty($name) && !empty($company) && !empty($password)) {
                $result = $this->modelObj->checkUserInfo();
                if ($result->num_rows > 0) {
                ?>
                    <script>
                        swal({
                            title: "Error!!!",
                            text: "sorry company with that name already registered",
                            icon: "error",
                        });
                    </script>
                <?php
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT); // encrypting password
                    $id = $this->modelObj->setUserInfo($name, $company, $password);
                ?>
                    <script>
                        swal({
                            title: "success!!!",
                            text: "your user id is <?php echo $id['id'] ?>",
                            icon: "success",
                        }).then((value) => {
                            window.location.replace("<?php echo URLROOT ?>users/login")
                        });
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    swal({
                        title: "Error!!!",
                        text: "invalid validation",
                        icon: "error",
                    });
                </script>
<?php
            }
        }
    }
}
