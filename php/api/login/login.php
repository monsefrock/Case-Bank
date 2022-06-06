<?php
if(!isset($_SESSION))
{
    session_start();
}
else{

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
        header("location: /dashboard");
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\User.php");
    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\PasswordHash.php");
    include "{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php";


    if(isset($_POST['password']) && isset($_POST['username']))
    {
        $user_ = new User();
        $pass =$_POST['password'];
        $user =$_POST['username'];

        $result = $user_->getUser($conn,$user);

        if (!empty($result))
        {
            // output data of each row
            $passw = new PasswordHash(8,FALSE);

            foreach ($result as $use){

                $password = $use["password"];
                $state = $use["state"];
            }

            $virefy =  $passw->CheckPassword($pass,$password);

            if ($virefy && $state == 1) {

                foreach ($result as $use){

                    $name = $use["name"];
                    $id = $use["id"];

                }

                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['user'] = $id;

                header("location: /dashboard");
                echo "Login successful.";

            }
            else
            {
                header("location: /login");
                echo "Data input does not match.";
            }
        }
        else {
            header("location: /login");
            echo "Data input does not match.";
        }

    }
    else
    {
        header("location: /login");
        echo "No Data Send";
    }
}
else
{
    header("location: /404");
    echo "404";
}
?>
