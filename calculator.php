<?php # Script 3.4 - index.php

$page_title = 'Welcome to this Site!';

include ('includes/header.html');

?>

<?php

$page_title = 'Widget Cost Calculator';

if (isset($_POST['submitted'])) {
	if(is_numeric($_POST['quantity']) && is_numeric($_POST['price']) && is_numeric($_POST['tax']) ) {
		$total = ($_POST['quantity'] * $_POST['price']);
		$taxrate = ($_POST['tax'] / 100);
		$total+= ($total * $taxrate);
		
		echo '<h1>Total Cost</h1>
		<p>The total cost of purchasing ' . $_POST['quantity'] . ' widget(s) at $' . number_format ($_POST['price'], 2) . ' each, including a tax rate of ' . $_POST['tax'] . '%, is $' . number_format ($total, 2) . '.</p>';
		
	} else { echo '<h1>Error!</h1>
	<p> class="error">Please enter a valid quantity, price, and tax.</p>';
	}
}
	?>
    
    <h1>Widget Cost Calculator</h1>
    
    <form action = "calculator.php" method="post">
    	<p>Quantity: <input type="text" name="quantity" size ="5" maxlength="5" /></p>
        <p>Price: <input type="text" name="price" size="5" maxlength="10" /></p>
        <p>Tax(%): <input type="text" name="tax" size="5" maxlength="5" /></p>
        <p><input type="submit" name="submit" value="Calculate" /></p>
        <input type="hidden" name="submitted" value="1" />
        
        </form>
        
        <?php 
		
		include ('includes/footer.html');
		
		?>
																						 