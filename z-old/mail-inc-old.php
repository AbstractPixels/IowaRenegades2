<?php
/************** PHP_Email  */
// Description:
//	-- Sends an email using the php mail function.  Optimized for *nix running qmail.
//
// Arguments:  
//	-- $EmailTo 		= array ( 'to' => email [,'cc' => email] [,'bcc' => email] )
//	-- $EmailFrom 		= array ( 'email' => email [,'name' => from name] [,'replyto' => email] )
//	-- $Subject 		= string( subject of the message )
//	-- $Body 			= array ( ['text' => body text] [,'html' => body html] [,'xml' => body xml] )
//	-- $Format 			= array ( ['text'] [,'html'] [,'xml'] )
//	-- $Attachment		= array ( 'type' => 'application/pdf', 'path' => '/path/to/file.pdf', 'name' => 'SalesReport.pdf' )
//
// Returns:
//	-- Boolean			= The result of the delivery.
//
function php_email( $EmailTo, $EmailFrom, $Subject, $Body, $Format = array('text'), $Attachment = false ){

	$eol = "\n";
	$h_eol = "\n"; //"\r\n"

/* __HEADERS__ */
	$Headers = '';
	# From Header
	if( $EmailFrom['email'] != '' && email_validate($EmailFrom['email']) && email_verysafetext($EmailFrom['email']) ){
		$fromEmail_txt = $EmailFrom['email'];
		if( $EmailFrom['name'] != '' && email_verysafetext($EmailFrom['name']) ){
			$fromEmail_txt = $EmailFrom['name'].' <'.$EmailFrom['email'].'>';
		}
		$Headers .= 'From: '.$fromEmail_txt.$h_eol;
	}
	if( $EmailFrom['replyto'] != '' && email_validate($EmailFrom['replyto']) && email_verysafetext($EmailFrom['replyto']) ){
		$Headers .= 'Reply-To: '.$EmailFrom['replyto'].$h_eol;
	}
	# Default
	$Headers .= 'MIME-Version: 1.0'.$h_eol;
  	$Headers .= 'X-Mailer: PHP v'.phpversion().$h_eol;
	# Cc - Bcc
	if( $EmailTo['cc'] != '' && email_validate($EmailTo['cc']) && email_verysafetext($EmailTo['cc']) )
		$Headers .= 'Cc: '.$EmailTo['cc'].$h_eol;
	if( $EmailTo['bcc'] != '' && email_validate($EmailTo['bcc']) && email_verysafetext($EmailTo['bcc']) )
		$Headers .= 'Bcc: '.$EmailTo['bcc'].$h_eol;	
	
/* __BODY__ */
	$Final_MSG_Body = '';
	
	# File for Attachment
	$attachment_included = false;
	if ( is_array($Attachment) ){
		if ( $Attachment['type'] != '' && $Attachment['path'] != '' && $Attachment['name'] != '' ){
			if ( is_file( $Attachment['path'] ) ){			
				$f_name = $Attachment['path'];
				$f_handle = fopen($f_name, 'rb');
				$f_contents = fread($f_handle, filesize($f_name));
				$f_contents = chunk_split(base64_encode($f_contents), 76, "\r"); //Encode The Data For Transition using base64_encode();
				$f_type = filetype($f_name);
				fclose($f_handle);
				# Attachment
				$attachment_included = true;
				$mime_boundary_att = md5(time()).'att';
				$Headers .= 'Content-Type: multipart/mixed; boundary="'.$mime_boundary_att.'"'.$h_eol; // mixed == html and text both show in email; alternative == only html or text will show depending on the email clients settings; related == ??

				$Final_MSG_Body .= '--'.$mime_boundary_att.$eol;
				$Final_MSG_Body .= 'Content-Type: '.$Attachment['type'].'; name="'.$Attachment['name'].'"'.$eol;  //'application/pdf', 'application/msword', 'image/jpeg', 'image/gif', etc...
				$Final_MSG_Body .= 'Content-Transfer-Encoding: base64'.$eol;
				$Final_MSG_Body .= 'Content-Disposition: attachment; filename="'.$Attachment['name'].'"'.$eol.$eol; // !! This line needs TWO end of lines !! IMPORTANT !!
				$Final_MSG_Body .= $f_contents.$eol.$eol;
			}
		}
	}
	
	# Check Body for spam injection
	if( !email_nocontentchange($Body) ){
		return false;
	}
	
	# Content-Type
	if ( is_array($Format) ){
		# Boundry for marking the split & multipart headers
				$mime_boundary = md5(time());
				if ( $attachment_included ){
					$Final_MSG_Body .= '--'.$mime_boundary_att.$eol;
					$Final_MSG_Body .= 'Content-Type: multipart/alternative; boundary="'.$mime_boundary.'"'.$eol.$eol; // mixed == html and text both show in email; alternative == only html or text will show depending on the email clients settings; related == ??
				} else {
					$Headers .= 'Content-Type: multipart/alternative; boundary="'.$mime_boundary.'"'.$h_eol; // mixed == html and text both show in email; alternative == only html or text will show depending on the email clients settings; related == ??
				}

		if ( in_array('text', $Format) || in_array('html', $Format) || in_array('xml', $Format) ){
			if ( in_array('text', $Format) ){
				$Final_MSG_Body .= "--".$mime_boundary.$eol;
				$Final_MSG_Body .= 'Content-Type: text/plain; charset=iso-8859-1'.$eol;
				$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
				if ( is_array($Body) && email_nocontentchange($Body['text']) ){
					$Final_MSG_Body .= $Body['text'].$eol.$eol;
				} else {
					$Final_MSG_Body .= $Body.$eol.$eol;
				}
			}
			if ( in_array('html', $Format) ){
				$Final_MSG_Body .= "--".$mime_boundary.$eol;
				$Final_MSG_Body .= 'Content-Type: text/html; charset=iso-8859-1'.$eol;
				$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
				if ( is_array($Body) && email_nocontentchange($Body['html']) ){
					$Final_MSG_Body .= $Body['html'].$eol.$eol;
				} else {
					$Final_MSG_Body .= $Body.$eol.$eol;
				}
			}
			if ( in_array('xml', $Format) ){
				$Final_MSG_Body .= "--".$mime_boundary.$eol;
				$Final_MSG_Body .= 'Content-Type: application/xml; charset=iso-8859-1'.$eol;
				$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
				if ( is_array($Body) && email_nocontentchange($Body['xml']) ){
					$Final_MSG_Body .= $Body['xml'].$eol.$eol;
				} else {
					$Final_MSG_Body .= $Body.$eol.$eol;
				}
			}
		} else {
			$Final_MSG_Body .= "--".$mime_boundary.$eol;
			$Final_MSG_Body .= 'Content-Type: text/plain; charset=iso-8859-1'.$eol;
			$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
			if ( is_array($Body) && email_nocontentchange($Body['text']) ){
				$Final_MSG_Body .= $Body['text'].$eol.$eol;
			} else {
				$Final_MSG_Body .= $Body.$eol.$eol;
			}
		}
	} else {
		if ( $Format == 'xml' ){
			$Final_MSG_Body .= "--".$mime_boundary.$eol;
			$Final_MSG_Body .= 'Content-Type: application/xml; charset=iso-8859-1'.$eol;
			$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
			if ( is_array($Body) && email_nocontentchange($Body['xml']) ){
				$Final_MSG_Body .= $Body['xml'].$eol.$eol;
			} else {
				$Final_MSG_Body .= $Body.$eol.$eol;
			}
		} else {
			if ( $Format == 'html' ){
				$Final_MSG_Body .= "--".$mime_boundary.$eol;
				$Final_MSG_Body .= 'Content-Type: text/html; charset=iso-8859-1'.$eol;
				$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
				if ( is_array($Body) && email_nocontentchange($Body['html']) ){
					$Final_MSG_Body .= $Body['html'].$eol.$eol;
				} else {
					$Final_MSG_Body .= $Body.$eol.$eol;
				}
			} else {
				$Final_MSG_Body .= "--".$mime_boundary.$eol;
				$Final_MSG_Body .= 'Content-Type: text/plain; charset=iso-8859-1'.$eol;
				$Final_MSG_Body .= 'Content-Transfer-Encoding: 8bit'.$eol.$eol;
				if ( is_array($Body) && email_nocontentchange($Body['text']) ){
					$Final_MSG_Body .= $Body['text'].$eol.$eol;
				} else {
					$Final_MSG_Body .= $Body.$eol.$eol;
				}
			} //end html
		} //end xml
		
		$Final_MSG_Body .= '--'.$mime_boundary.'--'.$eol.$eol;
		
	} //end $Format

	# Finished
	if ( $attachment_included ){
		$Final_MSG_Body .= '--'.$mime_boundary_att.'--'.$eol.$eol;
	}
	
	
	/* testing
	echo 'To: '.$EmailTo['to'].$eol;
	echo 'Subject: '.$Subject.$eol;
	echo 'Headers: '.$eol.$Headers.$eol;
	echo 'Body: '.$eol.$Final_MSG_Body.$eol;
	return true;
	*/
	
/* __EMAIL__ */
	if ( $EmailTo['to'] == '' || !email_validate($EmailTo['to']) || !email_verysafetext($EmailTo['to']) )
		return false;
	if ( !email_verysafetext($Subject) )
		return false;
	return mail($EmailTo['to'], $Subject, $Final_MSG_Body, $Headers);

}

//Check for NewLines and "content-type:"
function email_verysafetext( $eText ){
	if( preg_match("/(%0A|%0D|\\n+|\\r+)/i", $eText) == 0 && substr_count( strtolower($eText), "content-type:" ) == 0 )
		return true;
	else
		return false;
}

//Check for "content-type:"
function email_nocontentchange( $eText ){
	if( substr_count( strtolower($eText), "content-type:" ) == 0 )
		return true;
	else
		return false;
}

//Validates an Email address
function email_validate( $eAddr ){
	if( eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $eAddr) )
		return true;
	else
		return false;
}
?>