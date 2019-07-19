/* fonction qui change le captcha */
function rechargerCaptcha()
{
var captcha = document.getElementById("captcha_im"); 
captcha.src="images/gen_captcha.php?test="+(Math.random()*500000000);
}
