<?php
session_start();

$page = 'index.php';
$connection = mysqli_connect("mysql2.000webhost.com","a3020274_root","sharma123","a3020274_product");
if(isset($_GET['add']))
{
	if(array_key_exists('cart_'.$_GET['add'], $_SESSION))
		$_SESSION['cart_'.$_GET['add']]+= 1;
	else
		$_SESSION['cart_'.$_GET['add']] = 0;
	header("Location: cartindex.php");
}
if(isset($_GET['remove']))
{
	$_SESSION['cart_'.$_GET['remove']]--;
	header("Location: cartindex.php");
}
if(isset($_GET['delete']))
{
	$_SESSION['cart_'.$_GET['delete']]=0;;
	header("Location: cartindex.php");
}
function cart()
{
	global $connection;
	$total = 0;
	?>
	 <table class="table table-striped"><tr><th>ID</th><th>Name </th><th>Price Per Item</th><th>Cost</th><th>Value</th><th>ADD</th><th>Substract</th><th>Delete</th></tr>
	<?php foreach ($_SESSION as $key => $value) {
		
		if($value > 0)
		{
		$id = substr($key,5,strlen($key)-1);
		
		$result = mysqli_query($connection ,'select id,name,price from products where id ='.$id);
		while($row = mysqli_fetch_assoc($result))
			{
			$cost = $row['price'] * $value;
			echo '<tr class="success"><td>'.$row['id'].' </td><td> '.$row['name'].'</td><td>'.$row['price'].'</td><td>'.$value.'</td><td>'.$cost.'</td><td><a href="cart.php?add='.$id.'">[+]</a></td><td>'.'<a href="cart.php?remove='.$id.'">[-]</a></td><td>'.'<a href="cart.php?delete='.$id.'">[delete]</a></td><td></tr>';
			$total = $total + $cost;
			}
		}
	}
	?>
</table>
	<?php
	if($total==0)
	{
		///
	}
	else
	{
		$dis="'payment made'";
		echo 'Total cost is '.$total.'<br>';
		echo '<br><button type="button" class="btn btn-success" onclick="alert(\'Payment accepted\');">Success</button>';
	}
}
function product()
{
	$connection = mysqli_connect("mysql2.000webhost.com","a3020274_root","sharma123","a3020274_product");
if(mysqli_connect_errno())
{
	die("not connected to db ".mysqli_connect_error());
}
	$get = mysqli_query($connection , "select id,name,description,price from products where quantity > 0 order by id DESC");
	
		while($row = mysqli_fetch_assoc($get))
		{
			echo '<div class="boxed">'.$row['name'].'<br>'.$row['price'].'<br>'.$row['description'].'<br><a href="cart.php?add='.$row['id'].'" class="btn btn-primary btn-lg" role="button">ADD</a>'.'<br>'.'</div>';
		}
}

?>
