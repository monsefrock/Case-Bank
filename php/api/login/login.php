<?php
if(!isset($_SESSION))
{
    session_start();
}
else{

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header('Location: /dashboard');
        exit();
    }

}

use App\Models\UserModel;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/PasswordHash.php");
    include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";


    if(isset($_POST['password']) && isset($_POST['username']))
    {
        $pass = $_POST['password'];
        $user = $_POST['username'];

        $result = UserModel::where('email', $user)->where('state', '!=', 0)->first();

        if ($result)
        {
            $passw = new PasswordHash(8,FALSE);

            $password = $result->password;
            $state = $result->state;

            $virefy =  $passw->CheckPassword($pass,$password);

            if ($virefy && $state == 1) {
                $name = $result->name;
                $id = $result->id;

                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['user'] = $id;

                header('Location: /dashboard');
                echo 'Login successful.';
                exit();

            }
            else
            {
                header('Location: /login');
                echo 'Data input does not match.';
                exit();
            }
        }
        else {
            header('Location: /login');
            echo 'Data input does not match.';
            exit();
        }

    }
    else
    {
        header('Location: /login');
        echo 'No Data Send';
        exit();
    }
}
else
{
    header('Location: /404');
    echo '404';
    exit();
}
?>
