<?
//StAuth10065: I Kashyap Thakkar, 000742712 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.


function deleteItem($conn,$id)
{

  try {
    $stmt = $conn->prepare("DELETE FROM phonebook WHERE id=?");
    $stmt->execute([$id]);
  }
  catch(PDOException $e)
  {
    echo "Delete failed: " . $e->getMessage();
    exit();
  }	
}

function createItem($conn, $fname, $lname, $email, $phone)
{

  try {
      $stmt = $conn->prepare("INSERT INTO phonebook " .
                             "(id,fname,lname,email,phone) VALUES " . 
                             "(?, ?, ?, ?, ?)");
      $stmt->execute(["null", $fname, $lname, $email, $phone]);
    }
    catch(PDOException $e)
    {
      echo "Insert failed: " . $e->getMessage();
      exit();
    }
}

function updateItem($conn, $id, $fname, $lname, $email, $phone)
{

  try {
      $stmt = $conn->prepare("UPDATE phonebook SET fname = ?, lname = ?, email = ?, phone = ? WHERE id = ?");
      
	  $stmt->execute([$fname, $lname, $email, $phone, $id]);
    }
    catch(PDOException $e)
    {
      echo "Update failed: " . $e->getMessage();
      exit();
    }
}


?>