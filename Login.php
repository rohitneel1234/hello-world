<?PHP 
    include_once("Connection.php"); 
	
		
    if( isset($_POST['Uname']) && isset($_POST['Password']) ) { 
        $username = $_POST['Uname'];
        $password = $_POST['Password'];
       $query = "SELECT Uname,Password,Mobile_Number FROM Registration". 
        " WHERE Uname = '$username' AND Password = '$password'"; 

		//$query = "SELECT Mobile_Number FROM Registration". 
       // " WHERE Uname = 'Rohit' limit 1"; 
		
        $r = mysqli_query($conn, $query);
		
		while($row = mysqli_fetch_array($r))
		{
                echo $row['Mobile_Number']; 
				break;
         }
       
    }
?>