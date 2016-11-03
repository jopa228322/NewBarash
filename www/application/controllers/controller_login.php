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
			$password =$_POST['password'];
			$isChecked = $this->model->check_user($login, $password);
			if ($isChecked) {
				//header( "Location: http://" .$_SERVER['PHP_SELF'] );
				echo "da";
			}
			else
			{
				echo "net";
				$data["login_status"] = $login;
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
	
}
