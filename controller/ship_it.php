<?php 
	 session_start();
	include_once '../controller/show_cart.php';
	include_once '../admin/model/db.php';	
	$wallet = $_SESSION['user_details']['wallet'];
	$cart_details = cart_item($_SESSION['user_details']);
	$mail_content=" ";
	echo "<pre>";
	print_r($_POST);
	$raw_data = $_SESSION['user_details'];
	$message = "";
	$rawdata['use_wallet'] = $_POST['use_wallet'];
	$con = db_connect();
	// echo "<pre>";
	// print_r($cart_details);
	$i = 1;
	$j = 0;
	$final_total = 0;

    $to = "karunakaran.cse.26@gmail.com";
	$subject = "Hey you got an order - Aadukalam";
	$message = "Hi Team,<br><br><div style='margin-left:50px'>" .$raw_data['username']." from " .$raw_data['location']." wanted these products ";
	$message .="<p style='margin-left:50px'>";	
	foreach ($cart_details as $value) {
		$message = $message." ".$i." ".$value['product_name'];
		$message = $message." ".$value['product_quantity'];
		$message = $message." - ".$value['total_price']."<br>";
		$final_total = $final_total + $cart_details[$j]['total_price'];
		$i++;
		$j++;
	}
	if (isset($rawdata['use_wallet'])) {
        if ($rawdata['use_wallet'] == 'true') {
            $new_price = $final_total - $_SESSION['user_details']['wallet'] + $_POST['type'];
            $def =0;
            $condition = "`wallet` = '".$def."'";
            update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['Referral_id'].'"',db_connect());
            $_SESSION['user_details']['wallet'] = 0;

        }
    }
   	if (isset($rawdata['use_wallet'])) {
	 	if ($rawdata['use_wallet'] == 'true') {
	 		$message .="<p style='margin-left:50px'>Wallet amount :- .$wallet<br><br>packageprice:-".$_POST['type']; 
	 	}
	 	} 
	$message .= "</p>
                        <P style='margin-left:20px'>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </p><p style='margin-left:65px'>
                            Total                :- " .$new_price." </p>contact him:- " .$raw_data['phone_no']. "</div><div style='margin-left:25px'>
                        Regards,<br>
                        Greefi Technologies</div>";
		print_r($message);
		$header = "From:greefitech@gmail.com \r\n";
         // $header .= "Cc:greefitech@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            //echo "Message sent successfully...";
            header('Location:../view/home.php?status=order_placed');
         }else {
            //echo "Message could not be sent...";
            header('Location:../index.php?status=order_not_placed');            
         };
	$cart_result = select('*','in_cart',array('user_id' => $_SESSION['user_details']['id']),$con);
	foreach ($cart_result as $value) {
		$value['user_name'] = $_SESSION['user_details']['username'];
		$value['phone_no'] = $_SESSION['user_details']['phone_no'];
		insert('purchase_details',$value ,$con);
		$mail_content = $mail_content.$value['product_name'].'-'.$value['product_quantity'].',';
	}
	 $sql = "DELETE FROM `in_cart` WHERE `user_id` = ".$_SESSION['user_details']['id'];
	 execute_query($sql,$con);
	// header('Location: ../index.php');
 ?>

