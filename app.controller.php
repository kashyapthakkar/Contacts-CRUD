<?
//StAuth10065: I Kashyap Thakkar, 000742712 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
include 'app.config.php';
include 'app.model.php';

$TPL['controller'] = $_SERVER['PHP_SELF'];
$TPL['edit'] = false;
$TPL['create'] = true;
$TPL['update'] = array();


// Switch controller
//
switch ($_REQUEST['act'])
{
  
 
  case 'create':
	$TPL['cMessage'] = true;
	createItem($conn, $_POST[fname], $_POST[lname], $_POST[email], $_POST[phone]);
	  

    break;



  case 'edit':
	$TPL['edit'] = true;
	$TPL['create'] = false;
	// build the select query
	  $stmt = $conn->prepare("SELECT * FROM phonebook where id = ?");

	  // execute the query, save reference to results
	  $stmt->execute([$_REQUEST['id']]);
	  $TPL['update'] = $stmt->fetch();

    break;
  
  case 'update':
  $TPL['uMessage'] = true;
  
	updateItem($conn, $_REQUEST['id'], $_REQUEST['fname'], $_REQUEST['lname'], $_REQUEST['email'], $_REQUEST['phone']);
	break;
	
  
  case 'deleteask':
	
	$TPL['deleteConf'] = true;
	break;
  case 'delete':
	$TPL['dMessage'] = true;
    deleteItem($conn, $_REQUEST['id']);

    break;
	
  case 'sort':
	$TPL['sort'] = true;
	$TPL['unsort'] = false;
	if($_REQUEST['field'] == "id"){
		if($_REQUEST['dir'] == "up"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY id ASC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}else if($_REQUEST['dir'] == "down"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY id DESC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}
		
	}
	
	if($_REQUEST['field'] == "fname"){
		if($_REQUEST['dir'] == "up"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY fname ASC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}else if($_REQUEST['dir'] == "down"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY fname DESC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}
		
	}
	
	if($_REQUEST['field'] == "lname"){
		if($_REQUEST['dir'] == "up"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY lname ASC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}else if($_REQUEST['dir'] == "down"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY lname DESC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}
		
	}
	
	if($_REQUEST['field'] == "email"){
		if($_REQUEST['dir'] == "up"){
			
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY phone ASC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}else if($_REQUEST['dir'] == "down"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY phone DESC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}
		
	}
	
	if($_REQUEST['field'] == "phone"){
		if($_REQUEST['dir'] == "up"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY email ASC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}else if($_REQUEST['dir'] == "down"){
			try 
			{
			  // build the select query
			  $stmt = $conn->prepare("SELECT * FROM phonebook ORDER BY email DESC");

			  // execute the query, save reference to results
			  $stmt->execute();

			  // grab results of query for as long as results, store in TPL
			  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
			  
			}
			catch(PDOException $e)
			{
				echo "Select failed: " . $e->getMessage();
				exit();
			}
		}
		
	}
	
	
	break;
  
}


try 
	{
		
	  // build the select query
	  $stmt = $conn->prepare("SELECT * FROM phonebook");

	  // execute the query, save reference to results
	  $stmt->execute();
		
	  // grab results of query for as long as results, store in TPL
	  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
	  
	}
	catch(PDOException $e)
	{
		echo "Select failed: " . $e->getMessage();
		exit();
	}
	

include 'app.view.php';

?>
