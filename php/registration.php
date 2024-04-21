<?php
function checkPost($post) {
    foreach($post as $element) {
        if(empty($element)) {
            return false;
        }
    }
    return true;
}

function checkReg($Log, $Email, $Pass) {
    $message = false;
    if($Log && $Email) $message = 'Логин и email заняты!';
    else if($Log) $message = 'Логин занят!';
    else if($Email) $message = 'Email занят!';
    else if(!$Pass) $message = 'Введенные пароли не совпадают!';
    return $message;
}

if (isset($_POST['buttonReg'])
    && isset($_POST['fio'])
    && isset($_POST['login'])
    && isset($_POST['email'])
    && isset($_POST['telephon'])
    && isset($_POST['password'])
    && checkPost($_POST)) {
        require_once '../db/connection.php';

        $data = array($_POST['login'], $_POST['email']);
        $checkData=$conn->query("select login, email from users where login='$data[0]' or email='$data[1]'");
        $checkData=$checkData->fetch();

        if ($_POST['password']==$_POST['repPassword'])
            $passwordPass=true;
        else
            $passwordPass=false;

        if(!checkReg($checkData['login'],$checkData['email'], $passwordPass)) {
            if($conn->prepare("insert into users (fio, login, email, telephon, password) values (?,?,?,?,?)")->execute(array($_POST['fio'],$_POST['login'],$_POST['email'],$_POST['telephon'],$_POST['password']))) {
                mkdir($_SERVER['DOCUMENT_ROOT'].'/users/'.$_POST['login']);

                session_start();
                $_SESSION['regPass']=true;
                $location='../index.php';
            }
        } else {
            session_start();
            $_SESSION['regFail']=true;
			$_SESSION['hint'] = checkReg($checkData['login'],$checkData['email'],$pasOk);
			$location='../registration.php';
        }

}

if (isset($_POST['authButton'])
    && isset($_POST['login'])
    && isset($_POST['password'])
    && checkPost($_POST)) {

        require_once '../db/connection.php';
        $data = array($_POST['login'], $_POST['password']);
        $checkUserData=$conn->query("select * from users where (login='$data[0]' and password='$data[1]')");
        $checkUserData=$checkUserData->fetch();

        if ($checkUserData){
			session_start();
			$_SESSION['userLogin']=$checkUserData['login'];
			$_SESSION['userRole']=$checkUserData['role'];
			$location='../index.php';
		} else {
			session_start();
			$_SESSION['authFail']=true;
			$location='../index.php';
		}
    }
header('location:'.$location);
?>