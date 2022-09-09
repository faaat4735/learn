<?php
        // require_once('smtp.php');
        // //使用163邮箱服务器
        // $smtpserver = "smtp.ehaving.com";
        // //163邮箱服务器端口
        // $smtpserverport = 25;
        // //你的163服务器邮箱账号
        // $smtpusermail = "customer_service@ehaving.com";
        // //收件人邮箱
        // $smtpemailto = "zjf580@163.com";
        // //你的邮箱账号(去掉@163.com)
        // $smtpuser = "customer_service@ehaving.com";//SMTP服务器的用户帐号
        // //你的邮箱密码
        // $smtppass = "JIAjin456"; //SMTP服务器的用户密码
        // //邮件主题
        // $mailsubject = "E得网邮件验证";
        // //邮件内容
        // $mailbody = "您在E得网平台验证码为请勿将验证码提供给他人。";
        // //邮件格式（HTML/TXT）,TXT为文本邮件
        // $mailtype = "TXT";
        // //这里面的一个true是表示使用身份验证,否则不使用身份验证.
        // $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
        // //是否显示发送的调试信息
        // $smtp->debug = TRUE;
        // //发送邮件
        // $data=$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
        // 
        require_once('smtp.php');
        //使用163邮箱服务器
        $smtpserver = "smtp.ehaving.com";
        //163邮箱服务器端口
        $smtpserverport = 25;
        //你的163服务器邮箱账号
        $smtpusermail = "customer_service@ehaving.com";
        //收件人邮箱
        $smtpemailto = "zjf580@163.com";
        //你的邮箱账号(去掉@163.com)
        $smtpuser = "customer_service@ehaving.com";//SMTP服务器的用户帐号
        //你的邮箱密码
        $smtppass = "JIAjin456"; //SMTP服务器的用户密码
        //邮件主题
        $mailsubject = "E得网邮件验证";
        //邮件内容
        $mailbody = "您在E得网平台验证码为请勿将验证码提供给他人。";
        //邮件格式（HTML/TXT）,TXT为文本邮件
        $mailtype = "TXT";
        //这里面的一个true是表示使用身份验证,否则不使用身份验证.
        $smtp = new smtp($smtpserver,$smtpserverport,$smtpuser,$smtppass,true);
        //是否显示发送的调试信息
        // $smtp->debug = TRUE;
        //发送邮件
        $data=$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
// $str_pp = "/^(13\d|15[^4,\D]|17[13678]|18\d)\d{8}|170[^346,\D]\d{7}/";
// $str = '13955424735';
// $b = preg_match($str_pp, $str, $a);
// var_dump($b);
// var_dump($a);

// $a = preg_match("/^(http:\/\/)?([^h]{3})/", "http://www.5idev.com/index.html", $matches);
// //UTF-8 使用：
// // preg_match_all("/[x{4e00}-x{9fa5}]+/u", $str, $match);
// print_r($a);
// print_r($matches);
// 
//创建可抛出一个异常的函数
// function checkNum($number)
//  {
//  if($number>1)
//   {
//   throw new Exception("1Value must be 1 or below");
//   }
//  return true;
//  }
// function checkNum1($number)
//  {
//  if($number>1)
//   {
//   throw new Exception("2Value must be 1 or below");
//   }
//  return true;
//  }

// //在 "try" 代码块中触发异常
// try
//  {
//  checkNum(1);
//  checkNum1(2);
//  //If the exception is thrown, this text will not be shown
//  echo 'If you see this, the number is 1 or below';
//  }

// //捕获异常
// catch(Exception $e)
//  {
//  echo 'Message: ' .$e->getMessage();
//  }
 // 	include_once('Email.php');
 //    ini_set('SMTP', 'smtp.ehaving.com');
 //    $mail = new Email();  
 //    $mail->setTo("zjf580@163.com"); //收件人      
 //    // $mail->setCC("wanghaiyang@139.com"); //抄送      
 //    // $mail->setCC("wanghaiyang@139.com"); //秘密抄送      
 //    $mail->setFrom("435800667@qq.com");//发件人      
 //    $mail->setSubject("主题") ; //主题      
 //    $mail->setText("文本格式") ;//发送文本格式也可以是变量      
 // //    $mail->setHTML("html格式") ;//发送html格式也可以是变量      
 // //    //$mail->setAttachments(“c:a.jpg”) ;//添加附件,需表明路径      
 //    var_dump($mail->send());
	// 	 echo "0";
	// 	 exit;
	// }
	// echo "1";

?>