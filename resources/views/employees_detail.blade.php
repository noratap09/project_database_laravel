<html>
    <head>
        <title>2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://localhost/laravel/blog/resources/views/css/main.css"> <!--import css file-->
    </head>
    <body class="bg-image">
        <div class="row">
            <div class="column-left"><img src="http://localhost/laravel/blog/resources/views/image/logo.png" class="login-logo-image"></div>
            <div class="column-center"><h1>Company name</h1></div>
            <div class="column-right">
                Employee code<br>
                Employee name<br>
                Department of "Admin"
            </div>
        </div>
        <ul class="ul-menu-bar">
            <li class="li-menu-bar"><a href="http://localhost:8000/project/products">products</a></li>
            <li class="li-menu-bar"><a href="http://localhost:8000/project/orders">orders</a></li>
            <li class="li-menu-bar"><a href="http://localhost:8000/project/customers">customers</a></li>
            <li class="li-menu-bar"><a href="http://localhost:8000/project/employees">employees</a></li>
            <li class="li-menu-bar" style="float:right"><a class="active" href="logout.php">logout</a></li>
        </ul>
		<div class="row" style="margin:0px">
			<div class="column-left-body">
				<?php
					echo App\Http\Controllers\database_project_controller::display_catelog();
				?>
			</div>
			<div class="column-center-body">
				<table class="document" cellpadding="10">
			<tr>
				<td width="50%" align="right"><b>Employee ID:</b></td>
				<td width="50%" align="left"><?php echo $data_em['employeeNumber'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>First Name:</b></td>
				<td width="50%" align="left"><?php echo $data_em['firstName'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Last Name:</b></td>
				<td width="50%" align="left"><?php echo $data_em['lastName'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Extension:</b></td>
				<td width="50%" align="left"><?php echo $data_em['extension'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Email:</b></td>
				<td width="50%" align="left"><?php echo $data_em['email'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>JobTitle:</b></td>
				<td width="50%" align="left"><?php echo $data_em['jobTitle'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Office Code:</b></td>
				<td width="50%" align="left"><?php echo $data_em['officeCode'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Address1:</b></td>
				<td width="50%" align="left"><?php echo $data_off['addressLine1'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Address2:</b></td>
				<td width="50%" align="left"><?php echo $data_off['addressLine2'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>State:</b></td>
				<td width="50%" align="left"><?php echo $data_off['state'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>City:</b></td>
				<td width="50%" align="left"><?php echo $data_off['city'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Country:</b></td>
				<td width="50%" align="left"><?php echo $data_off['country'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Postal Code:</b></td>
				<td width="50%" align="left"><?php echo $data_off['postalCode'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Phone No:</b></td>
				<td width="50%" align="left"><?php echo $data_off['phone'] ?></td>
			</tr>
			<tr>
				<td width="50%" align="right"><b>Territory:</b></td>
				<td width="50%" align="left"><?php echo $data_off['territory'] ?></td>
			</tr>
        </table>
			</div>
		</div>
    </body>
</html>