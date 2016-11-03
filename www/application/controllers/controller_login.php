<?php

class Controller_Login extends Controller
{
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index()
	{

		if(isset($_POST['login']) && isset($_POST['password']))
		{  

			$login = $_POST['login'];
			$password = $_POST['password'];
			$isChecked = $this->model->check_user($login, $password);
			if ($isChecked) {
				$_SESSION['user'] = $login;
				header( "Location: http://" .$_SERVER['HTTP_HOST']."/login" );
			}
			else
			{
				$data["login_err"] = true;
			}
		}
		else
		{
			$data["login_err"] = false;
		}
		
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
	function action_logout()
	{
		unset($_SESSION['user']);
		header( "Location: http://" .$_SERVER['HTTP_HOST']."/login" );
	}
	
}
