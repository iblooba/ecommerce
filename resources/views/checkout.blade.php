<?php
session_start();

//Create 'cart' if it doesn't already exist
if (!isset($_SESSION['SHOPPING_CART'])){ $_SESSION['SHOPPING_CART'] = array(); }

//Add an item only if we have the threee required pices of information: name, price, qty
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['qty'])){
	//Adding an Item
	//Store it in a Array
	$item = array(
		//Item name
		'name' => $Request->input('name'),
		//Product id
		'id' => $Request->input('id'),
		//Item Price
		'price' => $Request->input('price'),
		//Qty wanted of item
		'qty' => $Request->input('qty')
		);

	//Add this item to the shopping cart
	$_SESSION['SHOPPING_CART'][] =  $item;
	//Clear the URL variables
    return view('/cart',$data);
}
//Allowing the modification of individual items no longer keeps this a simple shopping cart.
//We only support emptying and removing
else if (isset($_GET['remove'])){
	//Remove the item from the cart
	unset($_SESSION['SHOPPING_CART'][$_GET['remove']]);
	//Re-organize the cart
	//array_unshift ($_SESSION['SHOPPING_CART'], array_shift ($_SESSION['SHOPPING_CART']));
	//Clear the URL variables
	header('Location: ' . $_SERVER['PHP_SELF']);
}
else if (isset($_GET['empty'])){
	//Clear Cart by destroying all the data in the session
	session_destroy();
	//Clear the URL variables
	header('Location: ' . $_SERVER['PHP_SELF']);

}
else if (isset($_POST['update'])) {
	//Updates Qty for all items
	foreach ($_POST['items_qty'] as $itemID => $qty) {
		//If the Qty is "0" remove it from the cart
		if ($qty == 0) {
			//Remove it from the cart
			unset($_SESSION['SHOPPING_CART'][$itemID]);
		}
		else if($qty >= 1) {
			//Update to the new Qty
	echo		$_SESSION['SHOPPING_CART'][$itemID]['qty'] = $qty;
		}
	}
echo 	$_SESSION['SHOPPING_CART'][$itemID]['qty'] = $qty;
}

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<title>My Shop - ตะกร้าสินค้า</title>
<script Language="Javascript">
<!--
function Conf(object) {
              if (confirm("โปรดยืนยันการสั่งซื้อ ?") == true) {
          return true;
                }
          return false;
                }
//-->
</script>
<style type="text/css">
.style1 {
	text-align: left;
}
.style2 {
	text-align: right;
}
</style>
<style>
BODY {
    FONT-FAMILY: Arial, Helvetica, sans-serif
}
</style>
</head>

<body>
<center>
<u><font size="5" color="#800000">My Shop - ตะกร้าสินค้า</font></u><br><br>
<div id="shoppingCartDisplay">
<form action="" method="post" name="shoppingcart">
	<?php
    ob_start();
    ?>
    <table width="500" border="1" style="border-collapse: collapse; border: 1px dotted #008000" bordercolor="#111111" cellpadding="0" cellspacing="0">
      <tr>
        <th scope="col" style="border: 1px dotted #008000" bgcolor="#FFFFCC"><font color="#000080"><center>ลบ</center></font></th>
        <th scope="col" style="border: 1px dotted #008000" bgcolor="#FFFFCC">
        <font color="#000080">ชื่อสินค้า</font></th>
        <th scope="col" style="border: 1px dotted #008000" bgcolor="#FFFFCC">
        <font color="#000080">ราคาต่อหน่วย</font></th>
        <th scope="col" style="border: 1px dotted #008000" bgcolor="#FFFFCC">
        <font color="#000080"><center>จำนวน</center></font></th>
        <th scope="col" style="border: 1px dotted #008000" bgcolor="#FFFFCC">
        <font color="#000080"><center>รวม</center></font></th>
      </tr>
			<?php
         $_SESSION['total'] = 0;
         //Print all the items in the shopping cart
         foreach ($_SESSION['SHOPPING_CART'][$itemID]['qty'] as $itemNumber => $item) {
         ?>
         <tr id="item<?php echo $itemNumber; ?>">
             <td style="border: 1px dotted #008000" bgcolor="#CCFFFF"><center>
             <font><a href="?remove=<?php echo $itemNumber; ?>">[ลบ]</a></font></center></td>
             <td style="border: 1px dotted #008000" bgcolor="#CCFFFF"><p class="style1">&nbsp;<?php echo $item['name']; ?>&nbsp;</p></td>
             <td style="border: 1px dotted #008000" bgcolor="#CCFFFF"><p class="style2">&nbsp;<?php echo $item['price']; ?>&nbsp;</p></td>
             <td style="border: 1px dotted #008000" bgcolor="#CCFFFF">
             <font><center><input name="items_qty[<?php echo $itemNumber; ?>]" type="text" id="item<?php echo $itemNumber; ?>_qty" value="<?php echo $item['qty']; ?>" size="2" maxlength="5" /></center></font></td>
             <td style="border: 1px dotted #008000" bgcolor="#CCFFFF"><p class="style2">&nbsp;<?php echo number_format($item['qty'] * $item['price'],2,'.',','); ?>&nbsp;</p></td>
         </tr>
         <?php
         $_SESSION['total'] += $item['qty'] * $item['price'];
         }
         ?>
        <tr id="itemtotal">
            <td style="border: 1px dotted #008000" bgcolor="#FFFFCC" colspan="3" align="left">
            <b><font color="#008000">&nbsp;&nbsp;ราคารวม</font></b></td>
            <td style="border: 1px dotted #008000" bgcolor="#FFFFCC" colspan="2">
            <p align="right"><b><font color="#008000"><? echo number_format($_SESSION['total'],2,'.',','); ?>&nbsp;&nbsp;บาท</font></b></td>
        </tr>
        <tr id="vat">
            <td style="border: 1px dotted #008000" bgcolor="#FFFFCC" colspan="3" align="left">
            <b><font color="#008000">&nbsp;&nbsp;ภาษีมูลค่าเพิ่ม (7%)</font></b></td>
            <td style="border: 1px dotted #008000" bgcolor="#FFFFCC" colspan="2">
            <p align="right"><b><font color="#008000"><? echo number_format(0.07*$_SESSION['total'],2,'.',','); ?>&nbsp;&nbsp;บาท</font></b></td>
        </tr>
        <tr id="total">
            <td style="border: 1px dotted #008000" bgcolor="#FFFFCC" colspan="3" align="left">
            <b><font color="#008000">&nbsp;&nbsp;ราคารวมทั้งสิ้น</font></b></td>
            <td style="border: 1px dotted #008000" bgcolor="#FFFFCC" colspan="2">
            <p align="right"><b><font color="#008000"><? echo number_format((0.07*$_SESSION['total'])+$_SESSION['total'],2,'.',','); ?>&nbsp;&nbsp;บาท</font></b></td>
        </tr>
    </table>
	<?php $_SESSION['SHOPPING_CART_HTML'] = ob_get_flush(); ?>
    <p>
      <label>
      <input type="submit" name="update" id="update" value="อัพเดตตะกร้าสินค้า">
      </label>
    </p>
</form>
<p><font> [<a href="javascript:window.close();">กลับไปซื้อต่อ</a>] - [<a href="?empty">ลบสินค้าทุกรายการ</a>] - [<a href="confirm_order.php" OnClick="return Conf(this)">ยืนยันการสั่งซื้อ</a>]</font></p>
</div>
</center>

</body>
</html>
