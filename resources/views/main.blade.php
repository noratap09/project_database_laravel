<html>
    <head>
        <title>main</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://localhost/laravel/blog/resources/views/css/main.css"> <!--import css file-->
    </head>
    <body class="bg-image">
        <div class="row" style="margin:0px">
            <div class="column-left"><img src="http://localhost/laravel/blog/resources/views/image/logo.png" class="login-logo-image"></div>
            <div class="column-center"><h1>Company name</h1></div>
            <div class="column-right">
                Employee code<br>
                Employee name<br>
                Department of ""
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
				<table class="table table-hover" style="background-image: url('http://localhost/laravel/blog/resources/views/image/bg_table.png')">
            <tr>
				<?php  
					foreach($colum as $c)
					{
							echo "<th>";
							echo $c;
							echo "</th>";
                    }
				?>
            </tr>
				<?php
					foreach($data as $row)
					{
						if($category=="products")
						{
							echo "<tr onclick=\"window.location='http://localhost:8000/project/products/$row[productCode]'\">";
						}
						else if($category=="employees")
						{
							echo "<tr onclick=\"window.location='http://localhost:8000/project/employees/$row[employeeNumber]'\">";
						}
						else
						{
							echo "<tr>";
						}
						foreach($colum as $c)
						{
							echo "<td> $row[$c] </td>";
						}
						echo "</tr>";
					}
				?>
        </table>
		<div class="container">
			@foreach ($data as $d)
				{{ $d->name }}
			@endforeach
		</div>

		{{ $data->links() }}
			</div>
		</div>
    </body>
</html>