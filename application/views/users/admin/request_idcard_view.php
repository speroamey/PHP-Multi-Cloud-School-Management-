
<div class="w3-container w3-center w3-white">
<br>
<hr>
<span class="w3-text-theme w3-xlarge w3-center">ID Card Requests</span><br>
<?php
if(isset($_SESSION['action_status_report']))
{

  echo "<hr>".$_SESSION['action_status_report'];
}
?><i class="w3-text-red"><?=validation_errors()?></i>
<hr>
<?= form_open("dashboard_cont/idcard_request") ?>

<div>
	ACCOUNT BALANCE : <span>NGN<?=$school['account_balance'] ?></span>
</div>

<span class="w3-label">Quantity</span><br>
<input  type="number" min="1" placeholder="Quantity" name="quantity" class="w3-padding w3-margin" />
<br> 
<span class="w3-label">IDCARD TYPE</span><br>

<select name="type" class="w3-padding">
	<option value="students">Students</option>
	<option value="staff">Staff</option>
</select>
<br>

<span class="w3-label">Contact Number</span><br>

<input  type="text" name="phone" class="w3-padding w3-margin" placeholder="Contact Number" /><br>

Each Digital ID Card  Cost NGN500 Only

  

   <br>
<input type="submit" name="submit" value="Request" class="w3-button w3-teal w3-hover-white w3-hover-text-teal w3-border w3-border-teal w3-margin">
</form>
<hr>


 </div>
</div>