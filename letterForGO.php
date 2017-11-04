<?php 
	if(!empty($_POST['submit']))
	{
		$date = $_POST['date'];
		$noticeby = $_POST['noticeby']; 
		$post=$_POST['mypost'];
		$country=$_POST['country'];
		$datefr=$_POST['datefr'];
		$dateto=$_POST['dateto'];
		$days=$_POST['days'];
		
	}

	include("mpdf/mpdf.php");

	$mpdf = new mPDF('','A4',12,'nikosh');
	$mpdf->WriteHTML('');
	$text = 'তারিখ: '.$date;
	$noticebypr = '('.$noticeby.')';
	
	/*$txt = $text.' \n পরীক্ষা সংক্রান্ত নোটিশ  \n এতদ্বারা সিএসই বিভাগের সকল নিয়মিত ও অনিয়মিত সেমিস্টারের ছাত্রছাত্রীদের অবগতির জন্য \n
			জানানো যাচ্ছে যে, ল্যাব ফাইনাল পরীক্ষায় অবশ্যই প্রবেশপত্র নিয়ে আসতে হবে। \nপ্রবেশপত্র ছাড়া ল্যাব পরীক্ষা নেয়া হবে না। \n'.$noticebypr.'
			\nবিভাগীয় প্রধান, \nসিএসই বিভাগ। \nবিতরণ: \n০১। সকল শিক্ষক, সিএসই বিভাগ। \n০২। নৌটিশ বোর্ড, সিএসই বিভাগ। \n০৩। নথি। \n';*/
	$mpdf->MultiCell(180,10,"তারিখ: $date\nবরাবর\nরেজিস্ট্রার\nশাবিপ্রবি।\nমাধ্যম: বিভাগীয় প্রধান সিএসই।  \nবিষয়ঃ দেশের বাইরে যাওয়ার জন্য এঙ প্রদান প্রসঙ্গে । \nজনাব,\nআমি নিম্নস্বাক্ষরকারী সিএসই বিভাগের একজন $post । আমি  $country  ভ্রমণের জন্য সংযুক্ত ভিসা পেয়েছি। সেজন্যে আগামী  $datefr থেকে $dateto  তারিখ পর্যন্ত  $days দিন অর্জিত ছুটি নিয়ে  $country  ভ্রমণ করতে ইচ্ছুক। \nঅতএব, এঙ প্রদানসহ বিদেশ গমণের অনুমতি দেয়ার জন্য অনুরোধ করছি। \nধন্যবাদান্তে,\n$noticeby\n$post,\nসিএসই বিভাগ।",0,'L',0); 
	
	$mpdf->Output('');

	exit;
	
 ?>
 
 
   <!-- author: Syeda Tamanna Alam Monisha
 CSE SUST
 Reg No.: 2014331065 -->