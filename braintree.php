<?php
require_once 'config.php';
require_once 'header.php';
require_once 'menu.php';
?>
		
<div class="container">

  <table>
    <tr>
      <td colspan="2">
      <h1>Please select an option</h1></td>
    </tr>
    <tr>
      <td> One month subscription </td>
      <td> $30 </td> 
      <td> <button type="button" name="btn_six_month" onclick="call_login();" >Click Me!</button> </td>
    </tr>
    <tr>
      <td> Six month subscription </td>
      <td> $60 </td>
      <td> <button type="button" name="btn_six_month" onclick="call_login();" >Click Me!</button> </td>          
    </tr>
  </table>

  <br />
  <br />

  <div type="button" name="toggle" class="toggle_btn">View test data </div>

  <div class="toggle_target">
    <table>
      <tr>
        <td>test data</td>
      </tr>
      <tr>
        <td>Card Number: </td>
        <td>4111 1111 1111 1111</td>
      </tr>
      <tr>
        <td>CVV</td>
        <td>321</td>
      </tr>
      <tr>
        <td>Month</td>
        <td>02</td>
      </tr>   
      <tr>
        <td>Year</td>
        <td>17</td>
      </tr>             
    </table>
  </div>

  <br />
  <br />

  <?php require_once 'gigya.php'; ?>

  <br />
  <br />

  <h1>Braintree Customer Form</h1>
  <form action="customer.php" method="POST" id="braintree-payment-form">
    <h2>Customer Information</h2>
    <p>
      <label>First Name</label>
      <input type="text" name="first_name" id="first_name"></input>
    </p>
    <p>
      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" id="last_name"></input>
    </p>
    <p>
      <label for="postal_code">Postal Code</label>
      <input type="text" name="postal_code" id="postal_code"></input>
    </p>
    <h2>Credit Card</h2>
    <p>
      <label>Card Number</label>
      <input type="text" size="20" autocomplete="off" data-encrypted-name="number" />
    </p>
    <p>
      <label>CVV</label>
      <input type="text" size="4" autocomplete="off" data-encrypted-name="cvv" />
    </p>
    <p>
      <label>Expiration (MM/YYYY)</label>
      <input type="text" size="2" data-encrypted-name="month" /> / <input type="text" size="4" data-encrypted-name="year" />
    </p>

    <input class="submit-button" type="submit" />
  </form>

	<br />
	<br />
    
</div><!-- /.container -->

<?php
require_once 'footer.php';
?>

