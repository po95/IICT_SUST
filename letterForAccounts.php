
   <!-- author: Syeda Tamanna Alam Monisha
 CSE SUST
 Reg No.: 2014331065 -->
<?php 
	if(!empty($_POST['submit']))
	{
		$date = $_POST['date'];
		$noticeby = $_POST['noticeby']; 
		$post=$_POST['mypost'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	}

	include("mpdf/mpdf.php");

	$mpdf = new mPDF('','A4',12,'nikosh');
	$mpdf->WriteHTML('');
	$text = 'তারিখ: '.$date;
	$noticebypr = '('.$noticeby.')';
	
	/*$txt = $text.' \n পরীক্ষা সংক্রান্ত নোটিশ  \n এতদ্বারা সিএসই বিভাগের সকল নিয়মিত ও অনিয়মিত সেমিস্টারের ছাত্রছাত্রীদের অবগতির জন্য \n
			জানানো যাচ্ছে যে, ল্যাব ফাইনাল পরীক্ষায় অবশ্যই প্রবেশপত্র নিয়ে আসতে হবে। \nপ্রবেশপত্র ছাড়া ল্যাব পরীক্ষা নেয়া হবে না। \n'.$noticebypr.'
			\nবিভাগীয় প্রধান, \nসিএসই বিভাগ। \nবিতরণ: \n০১। সকল শিক্ষক, সিএসই বিভাগ। \n০২। নৌটিশ বোর্ড, সিএসই বিভাগ। \n০৩। নথি। \n';*/
	$mpdf->MultiCell(180,10,"তারিখ: $date\nবরাবর\nহিসাব পরিচালক\nশাবিপ্রবি।\n\nমাধ্যমঃ বিভাগীয় প্রধান, সিএসই।\n\nবিষয়ঃ বেতন বিবরণী প্রদান প্রসঙ্গে। \n\nজনাব, \n\nসবিনয় নিবেদন এই যে, আমি নিম্নস্বাক্ষরকারী সিএসই বিভাগে $post পদে কর্মরত আছি। আমার ব্যক্তি গত কাজের জন্য $month $year মাসের একটি বেতন বিবরণী প্রয়োজন।\n\nঅতএব, উক্ত বেতন বিবরণী প্রদান করার জন্য অনুরোধ করছি।\nধন্যবাদান্তে, \n$noticeby\n$post,\nসিএসই বিভাগ।",0,'L',0); 
	
	$mpdf->Output('');

	exit;
	
 ?>
   <!-- author: Syeda Tamanna Alam Monisha
 CSE SUST
 Reg No.: 2014331065 -->