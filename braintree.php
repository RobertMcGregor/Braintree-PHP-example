<script type="text/javascript">
  gigya.accounts.getAccountInfo({ callback: getAccountInfoResponseValue });
  function getAccountInfoResponseValue(response, value)
  {
      if ( response.errorCode == 0 ) { 
          var profile = response['profile'];
          $('#first_name').val(profile['firstName']);
          $('#last_name').val(profile['lastName']);
          $('#postal_code').val(profile['zip']);
      }
      else {
           alert('no user')
      }    
  }

</script>


    <div type="button" name="toggle" class="toggle_btn">View test data </div>

    <div class="toggle_target">
      <table>
        <tr>
          <td style="padding-right:10px;">Card Number: </td>
          <td>4111 1111 1111 1111</td>
        </tr>
        <tr>
          <td style="padding-right:10px;">CVV</td>
          <td>321</td>
        </tr>
        <tr>
          <td style="padding-right:10px;">Month</td>
          <td>02</td>
        </tr>   
        <tr>
          <td style="padding-right:10px;">Year</td>
          <td>17</td>
        </tr>             
      </table>
    </div>

    <br />

    <form action="create_subscription.php" method="POST" id="braintree-payment-form">
      <table>
        <tr>
          <td colspan="2"> <span><strong>Please select an option</strong></span> </td>
        </tr>
        <tr>
          <td style="padding-right:10px;">$30 - One month subscription </td>
          <td> <input type="radio" name="subscription" value="one_month_plan"> </td> 
        </tr>
        <tr>
          <td style="padding-right:10px;">$100 - Six month subscription </td>
          <td> <input type="radio" name="subscription" value="six_month_plan"> </td>
        </tr>

        <tr>
          <td colspan="2"> <span><strong>Customer Information</strong></span> </td>
        </tr>
        <tr>
          <td>First Name</td>
          <td><input type="text" name="first_name" id="first_name"></input></td>
        </tr>        
        <tr>
          <td>Last Name</td>
          <td><input type="text" name="last_name" id="last_name"></input></td>
        </tr>
        <tr>
          <td>Postal Code</td>
          <td><input type="text" name="postal_code" id="postal_code"></input></td>          
        </tr>

        <tr>
          <td colspan="2"> <span><strong>Credit Card</strong></span> </td>
        </tr>
        <tr>
          <td>Card Number</td>
          <td><input type="text" size="20" autocomplete="off" data-encrypted-name="number" /></td>          
        </tr>
        <tr>
          <td>CVV</td>
          <td><input type="text" size="4" autocomplete="off" data-encrypted-name="cvv" /></td>          
        </tr>
        <tr>
          <td>Expiration (MM/YYYY)</td>
          <td><input type="text" size="2" data-encrypted-name="month" /> / <input type="text" size="4" data-encrypted-name="year" /></td>          
        </tr>
        <tr>
          <td colspan="2"> <input class="submit-button" type="submit" /> </td>
        </tr>

      </table>

    </form>

<?php
require_once 'footer.php';
?>