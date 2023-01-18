<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;

use App\Models\SettingModel;

class EmailSending extends Controller {

    public static function verifyUserEmail($data) {

        $template = view('templates.email.user.vwVerifyUserEmailTemp', $data)->render();

        $emailComposer = new EmailSending();
        return $emailComposer->composeEmail(array(
            'to' => $data['email'],
            'subject' => 'Email Verification',
            'body' => $template
        ));
    }

	public static function adminTwoFactorAuth($data) {

		$template = view('templates.email.admin.vwTwoStepEmailTemp', $data)->render();

		$emailComposer = new EmailSending();
		return $emailComposer->composeEmail(array(
			'to' => $data['email'],
			'subject' => 'Two-Factor Authentication',
			'body' => $template
		));
	}

	public static function adminResetPassword($data) {

		$template = view('templates.email.admin.vwResetPassword', $data)->render();

		$emailComposer = new EmailSending();
		return $emailComposer->composeEmail(array(
			'to' => $data['email'],
			'subject' => 'Reset Password',
			'body' => $template
		));
	}

	public static function adminPassChangeNotify($data) {

		$template = view('templates.email.admin.vwChangePassword', $data)->render();

		$emailComposer = new EmailSending();
		return $emailComposer->composeEmail(array(
			'to' => $data['email'],
			'subject' => 'Security Alert - Password Changed',
			'body' => $template
		));
	}

    public static function adminEmailChangeNotify($data) {

        $template = view('templates.email.admin.vwChangeEmail', $data)->render();

        $emailComposer = new EmailSending();
        return $emailComposer->composeEmail(array(
            'to' => $data['email'],
            'subject' => 'Security Alert - Email Changed',
            'body' => $template
        ));
    }

	public function composeEmail($mailInfo) {
        require base_path("vendor/autoload.php");
        
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        $getMailSettings = SettingModel::first();

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = $getMailSettings->mail_host;             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = $getMailSettings->mail_username;   //  sender username
            $mail->Password = $getMailSettings->mail_password;       // sender password
            $mail->SMTPSecure = $getMailSettings->mail_encryption;                  // encryption - ssl/tls
            $mail->Port = $getMailSettings->mail_port;                          // port - 587/465

            $mail->setFrom($getMailSettings->mail_from_address, $getMailSettings->mail_from_name);
            
            $mail->addAddress($mailInfo['to']);
            
            if (isset($mailInfo['cc'])) {
            	$mail->addCC($mailInfo['cc']);
            }

            if (isset($mailInfo['bcc'])) {
            	$mail->addBCC($mailInfo['bcc']);
            }            

            // $mail->addReplyTo('sender-reply-email', 'sender-reply-name');

            // if(isset($_FILES['emailAttachments'])) {
            //     for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            //     }
            // }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $mailInfo['subject'];
            $mail->Body    = $mailInfo['body'];

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                //return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
                return false;
            } else {
                //return back()->with("success", "Email has been sent.");
                return true;
            }

        } catch (Exception $e) {
             //return back()->with('error','Message could not be sent.');
        	return false;
        }
    }
	
}