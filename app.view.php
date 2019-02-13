<html>
<!--StAuth10065: I Kashyap Thakkar, 000742712 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Lab 2 Part B: CRUD </title>

</style>
</head>
<body>
<div class="container-fluid">
	<h1 class="text-center">Lab 2 Part B: CRUD </h1>
	<?if($TPL['create']){?>
		
		<?if($TPL['deleteConf']){?>
			<div class="p-3 mb-2 bg-warning text-dark text-danger">Click <a href="<?=$TPL['controller']?>?act=delete&id=<?echo $_REQUEST['id'];?>">here</a> if you really want to delete user: <?echo $_REQUEST['fname'] . " " . $_REQUEST['lname'];?> ( <?echo $_REQUEST['id'];?> )</div>
		<?}?>
		<?if($TPL['uMessage']){?>
			<div class="p-3 mb-2 bg-success text-white">Record successfully updated.</div>
		<?}?>
		<?if($TPL['dMessage']){?>
			<div class="p-3 mb-2 bg-success text-white">Record successfully deleted.</div>
		<?}?>
		
		<?if($TPL['cMessage']){?>
			<div class="p-3 mb-2 bg-success text-white">Record successfully created.</div>
		<?}?>
		
		<form method="post" class="form-horizontal p-3 mb-2 bg-info text-white" action="<? $TPL['controller']?>?act=create">

			<h3 class="text-center">Create Contact</h3>
			<div class="form-group">
				<label class="col-sm-2 col-md-2 col-lg-2 control-label">Firts Name:</label>
				<div class="col-sm-8 col-lg-8 col-md-8">			  
					<input name="fname" class="form-control" type="text"  size="40" required  /> <br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-md-2 col-lg-2 control-label">Last Name:</label>
				<div class="col-sm-8 col-lg-8 col-md-8">
					<input name="lname" type="text"  class="form-control" size="40" required  /> <br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-md-2 col-lg-2 control-label">Email:</label> 
				<div class="col-sm-8 col-lg-8 col-md-8">
					<input name="email" class="form-control" type="text"  size="40" required class="form-control"  /> <br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-md-2 col-lg-2 control-label">Phone:</label>
				<div class="col-sm-8 col-lg-8 col-md-8 ">
					<input name="phone" type="text"  size="40" required class="form-control" /> <br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2 col-lg-2 col-md-2 ">
				
				</div>
				<div class="col-sm-8 col-lg-8 col-md-8 ">
					<button type="submit" class="btn btn-primary" class="btn btn-default">Add New Listing</button>
				</div>
			</div> 
			 

			  
			
		</form>
	<?}?>
	<?if($TPL["edit"]){?>
		
		<form id='contactForm' class="form-horizontal p-3 mb-2 bg-info text-white" method="post" action="<? $TPL['controller']?>?act=update">
			
			
			<h3 class="text-center">Update Contact</h3>
				
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-lg-2 control-label">Firts Name:</label>
					<div class="col-sm-8 col-lg-8 col-md-8">			  
						<input name="fname" class="form-control" value="<?echo $TPL['update']['fname']?>" type="text"  size="40" required class='field' /> <br>
					</div>
				</div>

			  <div class="form-group">
					<label class="col-sm-2 col-md-2 col-lg-2 control-label">Last Name:</label>
					<div class="col-sm-8 col-lg-8 col-md-8">			  
						<input name="lname" class="form-control" value="<?echo $TPL['update']['lname']?>" type="text"  size="40" required class='field' /> <br>
					</div>
				</div>
			  
			  <div class="form-group">
					<label class="col-sm-2 col-md-2 col-lg-2 control-label">Email:</label>
					<div class="col-sm-8 col-lg-8 col-md-8">			  
						<input name="email" class="form-control" value="<?echo $TPL['update']['email']?>" type="text"  size="40" required class='field' /> <br>
					</div>
				</div>
			  
			  <div class="form-group">
					<label class="col-sm-2 col-md-2 col-lg-2 control-label">Phone:</label>
					<div class="col-sm-8 col-lg-8 col-md-8">			  
						<input name="phone" class="form-control" value="<?echo $TPL['update']['phone']?>" type="text"  size="40" required class='field' /> <br>
					</div>
				</div>

			  <div class="form-group">
					<label class="col-sm-2 col-md-2 col-lg-2 control-label">ID:</label>
					<div class="col-sm-8 col-lg-8 col-md-8">			  
						<input name="id" class="form-control" value="<?echo $TPL['update']['id']?>" type="text"  size="40" required class='field' /> <br>
					</div>
				</div>


			  <div class="form-group">
				<div class="col-sm-2 col-lg-2 col-md-2 ">
				
				</div>
				<div class="col-sm-8 col-lg-8 col-md-8 ">
					<button type="submit" class="btn btn-primary" class="btn btn-default">Update Listing</button>
				</div>
			</div> 
			
		</form>
	<?}?>

	<table class="table table-striped">
	<tr>
	  <td><strong>ID <a href="<?=$TPL['controller']?>?act=sort&field=id&dir=up"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a> <a href="<?=$TPL['controller']?>?act=sort&field=id&dir=down"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></strong></td>
	  <td><strong>First Name<a href="<?=$TPL['controller']?>?act=sort&field=fname&dir=up"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a> <a href="<?=$TPL['controller']?>?act=sort&field=fname&dir=down"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></strong></td>
	  <td><strong>Last Name<a href="<?=$TPL['controller']?>?act=sort&field=lname&dir=up"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a> <a href="<?=$TPL['controller']?>?act=sort&field=lname&dir=down"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></strong></td>
	  <td><strong>Phone<a href="<?=$TPL['controller']?>?act=sort&field=email&dir=up"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a> <a href="<?=$TPL['controller']?>?act=sort&field=email&dir=down"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></strong></td>
	  <td><strong>Email<a href="<?=$TPL['controller']?>?act=sort&field=phone&dir=up"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a> <a href="<?=$TPL['controller']?>?act=sort&field=phone&dir=down"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></strong></td>
	  <td><strong>Delete</strong></td>
	  <td><strong>Edit</strong></td>
	</tr>


		<? foreach ($TPL['results'] as $row) { ?>
		<tr>
		   <td><?=$row['id']?></td>
		   <td><?=$row['fname']?></td>
		   <td><?=$row['lname']?></td>
		   <td><?=$row['phone']?></td>
		   <td><?=$row['email']?></td>
		   <td><a href="<?=$TPL['controller']?>?act=deleteask&id=<?=$row['id']?>&fname=<?=$row['fname']?>&lname=<?=$row['lname']?>">D</a></td>
		   <td><a href="<?=$TPL['controller']?>?act=edit&id=<?=$row['id']?>">E</a>
		</tr>
		<? } ?>



	</table>
	<a href="<?=$TPL['controller']?>">
		<button type="button" class="btn btn-default btn-lg btn-info">
		   Refresh Page&nbsp;<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
		</button>
	</a>
</div>
</body>
</html>