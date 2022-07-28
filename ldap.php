<?php 
	exec('wmic COMPUTERSYSTEM Get domain', $domain);
    $ldap_dn = $_POST["Usuario"]."@".$domain[1];
	$ldap_password = $_POST["Senha"];
	
	$ldap_con = ldap_connect("172.16.16.92", 389);
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

	if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)){
		echo "Authenticated as: ";
        print_r($ldap_dn);
        echo "<br> redirecting... ";
        session_start();
        $_SESSION['name'] = $_POST['Usuario'];  
        $_SESSION['password'] = $_POST['Senha'];
        header("Refresh: 2; url = index.php");
    }else{
        unset ($_SESSION['name']);
        unset ($_SESSION['password']);
        header('location: login.php');;
    }