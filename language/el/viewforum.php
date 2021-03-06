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
	'ACTIVE_TOPICS'			=> 'Ενεργά θέματα',
	'ANNOUNCEMENTS'			=> 'Ανακοινώσεις',

	'FORUM_PERMISSIONS'		=> 'Δικαιώματα σε αυτή τη Δ. Συζήτηση',

	'ICON_ANNOUNCEMENT'		=> 'Ανακοίνωση',
	'ICON_STICKY'			=> 'Σημείωση',

	'LOGIN_NOTIFY_FORUM'	=> 'Έχετε ειδοποιηθεί για αυτή την Δ. Συζήτηση, παρακαλώ συνδεθείτε για να δείτε περισσότερα.',

	'MARK_TOPICS_READ'		=> 'Σημειώστε τα θέματα ως αναγνωσμένα ',

	'NEW_POSTS_HOT'			=> 'Νέες δημοσιεύσεις [ Δημοφιλές ]', // Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Νέες δημοσιεύσεις [ Κλειδωμένο ]', // Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Δεν υπάρχουν νέες δημοσιεύσεις [ Δημοφιλές ]', // Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Δεν υπάρχουν νέες δημοσιεύσεις [ Κλειδωμένο ]', // Not used anymore
	'NO_READ_ACCESS'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα να διαβάσετε τα θέματα στα πλαίσια αυτής της Δ. Συζήτησης.',
	'NO_UNREAD_POSTS_HOT'		=> 'Δεν υπάρχουν μη αναγνωσμένες δημοσιεύσεις [ Δημοφιλές ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Δεν υπάρχουν μη αναγνωσμένες δημοσιεύσεις [ Κλειδωμένο ]',

	'POST_FORUM_LOCKED'		=> 'Η Δ. Συζήτηση είναι κλειδωμένη',

	'TOPICS_MARKED'			=> 'Τα θέματα της Δ. Συζήτησης έχουν σημειωθεί ως αναγνωσμένα',

	'UNREAD_POSTS_HOT'		=> 'Μη αναγνωσμένες δημοσιεύσεις [ Δημοφιλές ]',
	'UNREAD_POSTS_LOCKED'	=> 'Μη  αναγνωσμένες δημοσιεύσεις [ Κλειδωμένο ]',

	'VIEW_FORUM'			=> 'Προβολή Δ. Συζήτησης',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d θέμα',
		2	=> '%d θέματα',
	),
));
