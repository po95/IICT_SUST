<?php 
	if(!empty($_POST['submit']))
	{
		$date = $_POST['date'];
		$noticeby = $_POST['noticeby']; 
		$post=$_POST['mypost'];
		$basisd=$_POST['basisd'];
		$datefr=$_POST['datefr'];
		$day=$_POST['day'];
		$sharok=$_POST['sharok'];
		
	}

	include("mpdf/mpdf.php");

	$mpdf = new mPDF('','A4',12,'nikosh');
	$mpdf->WriteHTML('');
	$text = 'তারিখ: '.$date;
	$noticebypr = '('.$noticeby.')';
	
	/*$txt = $text.' \n পরীক্ষা সংক্রান্ত নোটিশ  \n এতদ্বারা সিএসই বিভাগের সকল নিয়মিত ও অনিয়মিত সেমিস্টারের ছাত্রছাত্রীদের অবগতির জন্য \n
			জানানো যাচ্ছে যে, ল্যাব ফাইনাল পরীক্ষায় অবশ্যই প্রবেশপত্র নিয়ে আসতে হবে। \nপ্রবেশপত্র ছাড়া ল্যাব পরীক্ষা নেয়া হবে না। \n'.$noticebypr.'
			\nবিভাগীয় প্রধান, \nসিএসই বিভাগ। \nবিতরণ: \n০১। সকল শিক্ষক, সিএসই বিভাগ। \n০২। নৌটিশ বোর্ড, সিএসই বিভাগ। \n০৩। নথি। \n';*/
	$mpdf->MultiCell(180,10,"তারিখ: $date\nবরাবর\nরেজিস্ট্রার\nশাবিপ্রবি।\nমাধ্যম: বিভাগীয় প্রধান, সিএসই বিভাগ।\nবিষয়:  $post পদে যোগদান প্রসঙ্গে।\nজনাব,\nপ্রেরিত পত্র স্মারক নং রেজিঃ $sharok , তারিখঃ $basisd এর প্রেক্ষিতে আমি নিম্নস্বাক্ষরকারী অদ্য $datefr তারিখ রোজ $day সিএসই বিভাগে $post পদে যোগদান করলাম। \nঅতএব, আমার যোগদান পত্র গ্রহণের প্রয়োজনীয় ব্যবস্থা নেয়ার জন্য অনুরোধ করছি।\nধন্যবাদান্তে,\n$noticeby\n$post,\nসিএসই বিভাগ।",0,'L',0); 
	
	$mpdf->Output('');

	exit;
	
 ?>
  <!-- author: Syeda Tamanna Alam Monisha
 CSE SUST
 Reg No.: 2014331065 -->