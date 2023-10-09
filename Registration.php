<html>
<head>
	<title></title>
</head>
<h1>Registration</h1>
	
        <form>
        
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>General infortmation</legend>
                        <table>
    
                            <tr>
                
                                <td>
                
                                    
                                    <p><b>First name :</b><?php echo $_POST["fstname"]?></p>
									<p><b>Last name :</b><?php echo $_POST["lstname"]?></p>
									<p><b>Last name :</b><?php echo $_POST["gender"]?></p>
									<p><b>Last name :</b><?php echo $_POST["fname"]?></p>
									<p><b>Last name :</b><?php echo $_POST["mname"]?></p>
									<p><b>Last name :</b><?php echo $_POST["bday"]?></p>
									<p><b>Last name :</b><?php echo $_POST["bg"]?></p>
									<p><b>Last name :</b><?php echo $_POST["religion"]?></p>
                                
                
    
                
                                </td>
                                
                                <td>
									<p><b>Select a file :</b><?php echo $_POST["myfile"]?></p>
                                </td>
    
                            </tr>
                            
                            
                        </table>
                       
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Contract infortmation</legend>
                        <table>
                      <tr>
                         
                        <td>

							<p><b>Email :</b><?php echo $_POST["email"]?></p>
							<p><b>Phone/Mobile :</b><?php echo $_POST["mobileNum"]?></p>
							<p><b>Website :</b><?php echo $_POST["webAdd"]?></p>
                            <p><b> Address :</b><?php echo $_POST["Address"]?></p>
                            

        
                        </td>
                      </tr>
            
                        
            
                    </table>
                       
                    </fieldset>
                </td>
            </tr>
        </table>  

		
    </form>
    

    </body>
</html>