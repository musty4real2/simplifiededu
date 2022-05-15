<?php 
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("../connect.php");
session_start();
$object=new library();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>welcome to Gmu e-Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
<script type="text/javascript" src="../tinybox.js"></script>

<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
<script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
<script type="text/javascript">
$('document').ready(function(){
	updatestatus();
	scrollalert();
});
function updatestatus(){
	//Show number of loaded items
	var totalItems=$('#content p').length;
	$('#status').text('Loaded '+totalItems+' Items');
}
function scrollalert(){
	var scrolltop=$('#scrollbox').attr('scrollTop');
	var scrollheight=$('#scrollbox').attr('scrollHeight');
	var windowheight=$('#scrollbox').attr('clientHeight');
	var scrolloffset=20;
	if(scrolltop>=(scrollheight-(windowheight+scrolloffset)))
	{
		//fetch new items
		$('#status').text('Loading more items...');
		$.get('new-items.html', '', function(newitems){
			$('#content').append(newitems);
			updatestatus();
		});
	}
	setTimeout('scrollalert();', 1500);
}
</script>
<style type="text/css" >
	#container{ width:550px; margin:0px auto; padding:40px 0; }
	#scrollbox{ width:600px; height:400px;  overflow:auto; overflow-x:hidden; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:5px; margin:0; text-align:right;}
</style>
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php" class="active">ABOUT GMU</a></li>
      <li><a href="../partners.php">PARTNERS</a></li>
      <li><a href="../howitworks.php">HOW IT WORKS</a></li>
       <li><a href="../study_lab.php">STUDY LAB</a></li>
      <li><a href="../library/library_menu1.php">ENTER LIBRARY</a></li>
      <li><a href="../contact.php">CONTACT</a></li>
            <li><a href="../bookshop.php">BOOK SHOP</a></li>


    </ul>

  </div> 
  
  <div id="main">
    <div class="box2">
    

      <h2> TERMS AND CONDITION FOR BUYING A BOOK</h2>
      <br/>
      
      <a href="index.php">Go Back</a><br/>
         <?php
		 $id=$_GET['id2'];
	if(isset($_POST['submit'])){
	$agree=addslashes($_POST['agree']);
	
	if($agree=="yes"){
	header("location:order.php?id=$id");
	}
	if($agree==""){
		echo "<p style='color:#F00;' >You would have to accept or decline the terms and conditions for downloading </p>";
	
	}
		if($agree=="no"){
		
		header("location:index.php");
	}
	}
	
	?>
    
  <div id="container">
    <div id="scrollbox" >
		<div id="content">
             <p>
 <br/> Terms & Conditions  <br/>
 Your order is subject to the following terms and conditions (unless you have made special arrangements directly with us). These may change from time to time but your order will be subject to the version of the terms and conditions on this website when you place your order. If any term on this website conflicts with the standard terms and conditions printed on the back of your invoice, then the term on this website will apply.

 
1.Your order
We will do our best to fulfil your order but cannot guarantee to do so. Our delivery dates are only estimates. No order is accepted by us unless and until confirmed by us in writing (either by invoice submitted with goods delivered, email or otherwise).

 
2. Price
Pearson Education Limited VAT registration number is GB278 5371 21.Prices are as stated from time to time on this Website and are subject to change without notice. Post and packing charges are also indicated separately on the invoice you will receive on supply/with the goods or on your digital receipt.

The price stated on our Website is exclusive of any applicable value added or other sales tax. However, we will show the final price less any applicable discounts and including all delivery costs and the breakdown of any applicable value added tax (VAT) payable with your order on the page before you submit your order and on the invoice you will receive on supply/with the goods or on your digital receipt.

 
3. Payment
All credit/charge card payments are subject to authorisation by the card issuer. If your payment is not authorised, we will cancel your order (and notify you that we have done so) and you must return the goods to us (if you have already received them) at your own expense. The goods remain our property until you have paid for them. In the case of online resources and electronically delivered products or services, see below.

4. Title and Risk (physical goods)
If your order is for delivery outside the UK and the Republic of Ireland, you are solely responsible for the goods from the time they leave our premises and for the importation of those goods into the country of delivery (including arranging for any necessary legal consents and payment of duties or taxes), and we accept no responsibility for any claims arising from such importation.

If your order is for delivery inside the UK and the Republic of Ireland, the risk of loss and/or damage (but not title) to goods supplied by us shall pass to you when they are delivered to you or your nominee and we shall not be liable for the safety of the goods thereafter.

Ownership of all goods shall remain vested in us (and we reserve the right to dispose of the goods) until we have received payment in full of all debts you owe to us.

5. Paperback and Hardback versions of books
We reserve the right to provide a paperback version where no hardback is available, in which case we will charge the paperback price.

If a paperback version is ordered, but is not available, we may send the customer the hardback version at the paperback price.

6. Cancellation and Returns
If for any reason you are not satisfied with your purchase, you have a right to cancel your contract. In the case of physical product, simply return it to us in its original condition within 30 days from the date of purchase (but no later) unless you are a private individual in the EU dealing as a consumer, in which case you may return the physical product within 7 days of receipt of the goods if that is later than 30 days from the date of purchase, but no later.

In the case of CDs, DVDs, videos and any other audio, video, multimedia or software products sold in hard copy form, your right to cancel and return the goods as set out above only applies where such products are unopened and the seal on the goods remains unbroken. We can only accept the return of opened items if they are faulty.

We will issue a full refund for the price of the item or supply you with a new one, at your option. You will have to bear the return postage cost unless the return is the result of our error (including faulty or damaged goods), in which case please contact us on 0845 630 1111 and we will arrange a free of charge collection. Please enclose either (i) a copy of the paper invoice enclosed with the delivery, or (ii) a printout of the online digital receipt. The package should be securely wrapped and sent to:

Returns
Pearson Distribution Centre
Central Park
Rugby
Warwickshire
CV23 0WB
United Kingdom

We will not be responsible for any damage or loss in transit and recommend that you use a recorded delivery service.

In the case of other digital or electronic product or services, please see clause 8 below.
In the case of events, seminars and conferences (“Events”), please see clause 7 below.

 
7. Events  
Our ability to meet dietary requirements is subject to availability at venues. We can only forward dietary requirements to the venues where bookings are received at least 14 days before the Event date.

You are responsible for informing us of any disability access requirements any of your delegates may have. We will pass these on to the venue concerned. However, we are not liable if any individual is unable to access the venue premises for any reason.

 
Transfers
We may allow you to substitute a delegate to an Event upon notification to us at no additional charge at our absolute discretion.

Non-attendance
If you do not attend an Event, the full fee remains payable.

Cancellation
You may cancel your booking at any time within 14 calendar days of sending us your booking request except that we will NOT accept any cancellations less than 10 days before an Event. If you wish to cancel, please send us the contact details you provided as part of the booking process. We will not make any refunds if a delegate cancels 15 or more calendar days after booking an Event, or if the Event falls within 10 days of the date you cancel.

Unforeseen Circumstances
Events are subject to cancellation or rescheduling at our discretion. If the Event is cancelled, we will credit any Event fees paid to you as soon as possible. If the time, date, venue or content of the Event is changed subsequent to your booking, you will be notified and given the option to cancel your booking for a full refund. We shall not be liable for any additional loss or damage resulting from such cancellation or changes.

Training Materials
Pearson and its licensors own all copyright and all other intellectual property rights in all training materials provided in connection with an Event. You agree not to reproduce, sell, hire or copy such training materials (in whole or in part) and not to use such materials except for the purposes of post-Event reference.
Personal belongings or other items brought with you to Events are at your own risk and we accept no responsibility in relation to their loss or damage, whether at our premises or otherwise.

 
8. Electronic Products, Online Resources and Downloads including Online Subscription Services
 

 

Pearson offers a range of subscription products. These terms and conditions apply to all of them in addition to the terms shown at their respective sites. If there is a conflict between these terms and the terms shown at their respective sites, the terms at their respective sites shall control. Some subscription products are offered in different versions or as a menu consisting of components that you may select, the prices and conditions for these are as set out in their specific terms.In the event that you require us to provide any additional training and/or consultations or additional content packages, you agree to pay for these at our then current rates and they will be subject to these terms and conditions (as amended from time to time).

 
Payment

Online resources or digital files for download or similar services will only be made available to you once your payment has been authorised. Unless we have agreed credit terms with you, no contract of any kind between you and us is formed unless and until you make payment for such products or services.

 

Where we have agreed to provide you with credit terms, we will issue an appropriate VAT invoice and you will pay the subscription fees together with any VAT due at the applicable rate. Invoices are payable within 30 days of the date of the invoice.

 

We may suspend your access to all or part of subscription product if you are late with your payments. We may charge you interest on overdue sums at the rate of four per cent (4%) per annum above the prevailing rate of HSBC Bank plc from the relevant due date until the date payment is made.

 

We expressly reserve the right to increase any and all of the fees from year to year. If in any year the fees have been paid in advance but are subsequently increased, you shall pay the amount of any such increase within 30 days of the date of our invoice. Any right of set off, deduction or withholding is hereby expressly excluded and all sums due from you shall be paid by you to us free from any deductions, withholdings or set off of any kind.

 
DRM

You acknowledge that such items may include security technology which ensures that they may only be used in accordance with the applicable licence rights. Please refer to the product’s or services’ specific terms of supply.

 
Subscription Term

Each subscription is for a period of 12 months starting with the date of your order. This does not apply to Active Learn Go, Active Learn, and Rapid Plus. The terms for these products is as set out in their separate licence agreements.

 

Sometime before the expiry of your subscription period, we will contact you. Your subscription period will automatically extend for a further period of 12 months at the end of your then current subscription period unless you cancel your subscription 30 days before the new period begins. This does not apply to the Active Learn and Rapid Plus services which will not automatically renew, but only renew if you tell us to renew your subscription.

 

Each individual Subscription is for use only by the person(s) or organisation (and its staff and pupils) specified on the order form. If you are a consumer you have the statutory right to cancel your Subscription at any time within 7 working days of submitting your order and receive a full refund, provided that you have not started using the service. Please notify us by email at digital.support@pearson.com if you wish to cancel your Subscription.

 

By submitting your order, you agree that we may process your order and begin the service. We will process your order upon receipt but do not guarantee immediate response or availability of service. You are responsible for all hardware, software, network availability and Internet connectivity required to use subscription product. We will provide you with a specification of the hardware and software required to use subscription product on request.

 
Termination provisions

If you are a consumer in the EU you may cancel for a full refund any contract for digital or online products or services within 7 working days after you pay for them, provided you have not already started to access or download the online/digital products.  You may not cancel if you have started to access or download an online resource.  Please notify us by email at
enquiries@pearson.com if you wish to cancel a contract or request a refund for such products or services.

 

Subject to the above provisions for subscription products, you may not cancel any purchase of a download after your payment has been confirmed and may only return a download if it is defective. If you are unable to complete the download process or wish us to provide a replacement for a file that is defective please contact our helpdesk and, where this is due to our default, we will replace or refund the download.

 
Discontinuation of Service

We may decide to discontinue any subscription product or any part of it at any time. If we decide to discontinue a subscription product, we will notify you and terminate this agreement with 30 days notice. In that event, we may offer you a pro rata refund for any remaining subscription period.

 

 
Permissible Uses

The following terms apply to software and other electronic products ordered through our Website unless otherwise specified in the individual terms of supply:

 

YOU MAY 

    Use (load into temporary memory or permanent storage) a single copy of the product on only one computer at a time. If this computer is linked to a network then the product may only be installed in a manner such that it is not accessible to other machines on the network
    Transfer the product from one computer to another provided that you only use it on one computer at a time unless you have purchased an e-book product which has a licence limited for use on a single computer.

 

YOU MAY NOT 

    Re-sell, rent or lease the product or any part of it
    Copy any part of the product, except where specifically indicated otherwise or for back-up purposes
    Reverse engineer, decompile or disassemble the product or convert it into any other format or medium
    Use the product on more than one computer at a time.

 

All software supplied to you through this Website is our property or that of our affiliates or of third parties who have granted us rights and is protected by United Kingdom and international copyright laws. You will only own any disk on which the software is supplied.


    <p> 
<?php $id=$_GET['id2']; ?>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" />
<input type="hidden" value="<?php $id  ?>" name="id"/>
<table><tr><td>
<input type="radio" name="agree" value="yes" ></td><td>&nbsp;&nbsp;&nbsp;Agree
</td>
</tr>

<tr><td>
<input type="radio" name="agree" value="no"/>
</td><td>&nbsp;&nbsp;&nbsp;i do not agree</td>
</tr>
</table>
<center><table>
<tr>
<td colspan="2">

	<input type="submit" name="submit" value="NEXT"/><input type="submit" name="cancel" value="Cancel"/></td>

</tr>
</table></center></form>
 </p>
		
      </div>
    </div>
    <center></div>
</div>
   <br/><br/>
    
    <div class="box box-bordered last-box">
      <div class="entry">
        <div class="news">
          <img src="../css/images/ad.png" width="274" height="600"/>
        </div>
      </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
  <div class="footer">
    <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved</p>
    <p class="rf"><a href="http://gmu360.com" target="_blank"></a> <a href="http://www.gmu360.com/" target="_blank">Powered by GMU360 CONCEPT</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</html>
<?php
ob_flush();
?>