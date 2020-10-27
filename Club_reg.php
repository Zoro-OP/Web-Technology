  
<?php
  $name="";
  $username="";
  $password="";
  $confirmpassword="";
  $email="";
  $phone="";
  $phonec="";
	$gender="";
  $address="";
  $city="";
  $state="";
  $zip="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	$profession="";
	$err_profession="";
	$name="";
	$err_name="";

	$has_error = false;

	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}

    if(empty($_POST["username"])){
      $err_username="Username Required";
      $has_error = true;
    }elseif(strpos($_POST["username"],"abcd")){
      $err_username="Consequtive abcd cant not be a name";
      $has_error = true;
    }
    else{
      $name=htmlspecialchars($_POST["username"]);
    }


		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$err_hobbies = "Atleast select 1 hobby";
			$has_error = true;
		}
		else{
			$hobbies=$_POST["hobbies"];
		}

		if(!$has_error){
			echo $name;
		}
	}

?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>

		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registration</h1></legend>
				<table >
					<tr>
						<td align='right'>Name:</td>
						<td align='left'><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td align='right'>Username:</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td align='right'>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
          <tr>
						<td align='right'>Confirm Password:</td>
						<td><input type="password" name="confirmpassword"></td>
					</tr>
          <tr>
            <td align='right'>Email:</td>
            <td><input type="text" name="email"></td>
          </tr>
          <tr>
            <td align='right'>Phone:</td>
            <td><input type="text" name="phone" value="" placeholder="Code" size="3">&nbsp&nbsp<span>-</span>
              <input type="text" name="phonec" value="" placeholder="Number" size="9"></td>
            </td>
          </tr>
          <tr>
            <td align='right'>Address:</td>
            <td>
               <input type="text" name="address" placeholder="Street Address">
          </td>
          </tr>
          <tr>
            <td></td>
          <td>  <input type="text" name="city" placeholder="City" size="7"><span>-</span>
            <input type="text" name="state" placeholder="State" size="6">
            </td>
          </tr>
          <tr><td></td>
              <td><input type="text" name="zip" placeholder="postal/Zip-Code" name="" value=""></td>
          </tr>
          <td align='right'>Birth Date:</td>
        <td>
          <select>
            <option disabled selected>Day</option>
          <?php
                    for($i=1;$i<=31;$i++){
                      echo "<option>".$i."</option>";
                    }
           ?>
          </select>

          <select>
            <option disabled selected>Month</option>
            <?php
            $month=array("january","February","march","April","May","June","July","August","September","October","November","December" );
            $arrlength = count($month);
            for($x = 0; $x < $arrlength; $x++) {
             echo "<option>".$month[$x]."</option>";
           }
             ?>

          </select>

          <select>
            <option disabled selected>year</option>
            <?php
            $year=array("1997","1998","march","1999","2000","2001","2002","2003","2004","2005","2006","2007" );
            $arrlength = count($year);
            for($x = 0; $x < $arrlength; $x++) {
             echo "<option>".$year[$x]."</option>";
           }
             ?>

          </select>
        </td>

					<tr>
						<td align='right'>Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td align='right'>What did you hear <br>about us?  <?php echo $err_hobbies;?></td>
						<td>
							<input type="checkbox" name="hobbies[]" value="Movies"> A Friend or Colleague<br>
							<input type="checkbox" name="hobbies[]" value="Music"> Google <br>
							<input type="checkbox" name="hobbies[]" value="Programming"> Blog Post<br>
							<input type="checkbox" name="hobbies[]" value="Travelling"> News Artical <br>
						</td>
					</tr>
					<tr>
						<td align='right'>Bio:</td>
						<td>
							<textarea name="io" ></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>

</html>