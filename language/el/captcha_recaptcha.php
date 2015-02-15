<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Για περισσότερες πληροφορίες σχετικά με την ελληνική μετάφραση
* δείτε το language/el/README.md και https://github.com/n-aleha
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'el',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Για να χρησιμοποιήσετε το reCaptcha πρέπει να κάνετε εγγραφή εδώ <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Ο κώδικας οπτικής επιβεβαίωσης που προσθέσατε ήταν λάθος ',

	'RECAPTCHA_PUBLIC'				=> 'Δημόσιο  reCaptcha κλειδί',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Το δικό σας δημόσιο reCaptcha κλειδί. Μπορείτε να λάβετε τα κλειδιά από το <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Προσωπικό reCaptcha κλειδί',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Το προσωπικό σας  reCaptcha κλειδί. Μπορείτε να λάβετε τα κλειδιά από το <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Σε μια προσπάθεια να αποτραπούν οι αυτόματες εγγραφές, θα πρέπει να εισάγετε και τις δύο λέξεις που παρουσιάζονται στην εικόνα στο πεδίο κειμένου από κάτω.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Παρουσίαστηκε πρόβλημα σύνδεσης με την υπηρεσία RECAPTCHA: could not open socket. Δοκιμάστε και πάλι αργότερα.',

));
