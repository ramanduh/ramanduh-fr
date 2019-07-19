<?php
/*
 * Quelque fonction utiles
 */
function Rec($text)
{
	$text = trim($text); // delete white spaces after & before text
	if (1 === get_magic_quotes_gpc())
	{
		$stripslashes = create_function('$txt', 'return stripslashes($txt);');
	}
	else
	{
		$stripslashes = create_function('$txt', 'return $txt;');
	}

	// magic quotes ?
	$text = $stripslashes($text);
	$text = htmlspecialchars($text, ENT_QUOTES); // converts to string with " and ' as well
	$text = nl2br($text);
	return $text;
};

function IsEmail($email)
	{
	$pattern = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
	return (preg_match($pattern,$email)) ? true : false;
};

/*
 * Envoi d'un mail
 */
class Model_Mail
{
    static private $destinataire = 'admin@ramanduh.fr';
    
    public function __contruct() {
    
    }
    
    public function send($post) {
        if(IsSet($post['verif_code']) AND !Empty($post['verif_code']) AND IsSet($post['votremail']) AND !Empty($post['votremail']) AND IsSet($post['objet']) AND !Empty($post['objet']) AND IsSet($post['message']) AND !Empty($post['message'])) 
		{ 
     		if($post['verif_code']!=$_SESSION['aleat_nbr']) 
	 		{ 
				return BAD_CAPTCHA;
     		}
     		else 
	 		{
				// formulaire envoyé, on récupère tous les champs.
				$email   = (isset($post['votremail']))   ? Rec($post['votremail'])   : '';
				$objet   = (isset($post['objet']))   ? Rec($post['objet'])   : '';
				$objet='[ramanduh] '.$objet;
				$message = (isset($post['message'])) ? Rec($post['message']) : '';

				if (IsEmail($email))
				{
					// les 4 variables sont remplies, on génère puis envoie le mail
					$headers = 'From: '.$email. "\r\n".'Content-type:text/plain;charset=utf-8'."\r\n";

					// Remplacement de certains caractères spéciaux
					$message = str_replace("&#039;","'",$message);
					$message = str_replace("&#8217;","'",$message);
					$message = str_replace("&quot;",'"',$message);
					$message = str_replace('<br>','',$message);
					$message = str_replace('<br />','',$message);
					$message = str_replace("&lt;","<",$message);
					$message = str_replace("&gt;",">",$message);
					$message = str_replace("&amp;","&",$message);

					if (mail(self::$destinataire, $objet, $message, $headers))
					{
						return SENT;
					}
					else
					{
						return ERR;
					};
				} else {
					return BAD_MAIL;
				}
			}

		} else {
			return INCOMPLETE_FIELD;
		}
    }
}
?>
