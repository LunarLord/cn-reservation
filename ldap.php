<?php 
    include_once("config.php");

	exec('wmic COMPUTERSYSTEM Get domain', $domain);
    $ldap_dn = $_POST["Usuario"]."@".$domain[1];
	$ldap_password = $_POST["Senha"];
	
	$ldap_con = ldap_connect("172.16.0.11", 389);
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

	if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)){
		echo "Autenticado como: ";
        print_r($ldap_dn);
        echo "<br> Redirecionando...<br> ";
        session_start();
        $_SESSION['name'] = $_POST['Usuario'];  
        $_SESSION['password'] = $_POST['Senha'];
        header("Refresh: 2; url = index.php");
       $query = $dbconn->query("SELECT * FROM user WHERE user = '$_POST[Usuario]'");
       $dados=mysqli_fetch_array($query);
        if($dados != null){
            $_SESSION['level'] = $dados['level'];
            echo "Acesso de usuário nível 1";
        } ;
    }else{
        echo "error";
        unset ($_SESSION['name']);
        unset ($_SESSION['password']);
        header('location: login.php');
    }