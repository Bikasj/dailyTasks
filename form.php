<html>
    <body>
        <form action="form2.php" enctype="multipart/form-data" method="POST">
            <center><table border='5' height='40%' width='80%'>
	   <tr><td colspan="2" style="background-color:yellow;">
		<h2><center>REGISTRATION FORM</center></h2></td></tr>
	   <tr><th> Name    :</th><td> <input type="text" name="name"></td></tr><br>
           <tr><th> Email   :</th><td> <input type="email" name="email"></td></tr><br>
           <tr><th> Address :</th><td> <textarea style="resize:none;"  rows="4" cols="25" name="address">
            </textarea></td></tr><br>
           <tr><th> City    :</th><td> <select name="city">
                        <option name="none">Select city</option>
                        <option name="Delhi">Delhi</option>
                        <option name="Mumbai">Mumbai</option>
                        <option name="Kolkata">Kolkata</option>
                        <option name="Chennai">Chennai</option>
                      </select></td></tr><br>
           <tr><th> State    : </th><td><select name="State">
                        <option name="none">Select state</option>
                        <option name="Punjab">Punjab</option>
                        <option name="Nagaland">Nagaland</option>
                        <option name="Uttar Pradesh">Uttar Pradesh</option>
                        <option name="Tamil Nadu">Tamil Nadu</option>
                      </select></td></tr><br>
           <tr><th> Country    :</th><td> <select name="Country">
                        <option name="none">Select Country</option>
                        <option name="India">India</option>
                        <option name="Pakistan">Pakistan</option>
                        <option name="Japan">Japan</option>
                        <option name="Nepal">Nepal</option>
                      </select></td></tr><br>
            <tr><th> Image       :</th><td> <input type="file" name="file"></td></tr><br>
			
                    
                    <tr><center><td style="text-align:center;"  colspan="2"><input type="checkbox" name="terms"> 
                            I agree to the Terms & Conditions.</td></tr>
			<br>
                        <tr><center><td style="text-align:center;"  colspan="2"><input type="submit" value="Confirm" name="submit"></center></td></tr><br>
                        </table></center>
        </form>
    </body>
</html>



