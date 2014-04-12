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

    <br />
    <br />
    <form action="customer.php" method="POST" id="braintree-payment-form">
      <table>
        <tr>
          <td colspan="2"> <span><strong>Please select an option</strong></span> </td>
        </tr>
        <tr>
          <td style="padding-right:10px;"> One month subscription </td>
          <td> $30 </td> 
        </tr>
        <tr>
          <td style="padding-right:10px;"> Six month subscription </td>
          <td> $60 </td>
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
