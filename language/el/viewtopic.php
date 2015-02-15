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
	'APPROVE'								=> 'Έγκριση',
	'ATTACHMENT'			=> 'Συνημμένο',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Η λειτουργία των συνημμένων είναι απενεργοποιημένη.',

	'BOOKMARK_ADDED'		=> 'Η προσθήκη του θέματος στους σελιδοδείκτες έγινε με επιτυχία.',
	'BOOKMARK_ERR'			=> 'Η προσθήκη του θέματος στους σελιδοδείκτες απέτυχε. Παρακαλώ προσπαθήστε πάλι.',
	'BOOKMARK_REMOVED'		=> 'Η διαγραφή του θέματος από ττους σελιδοδείκτες έγινε με επιτυχία.',
	'BOOKMARK_TOPIC'		=> 'Προσθήκη στους σελιδοδείκτες',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Διαγραφή από τους σελιδοδείκτες',
	'BUMPED_BY'				=> 'Τελευταία φορά σημειώθηκε ως νέο από %1$s στις %2$s.',
	'BUMP_TOPIC'			=> 'Σημειώστε θέμα ως νέο',

	'CODE'					=> 'Κώδικας',

	'DELETE_TOPIC'			=> 'Διαγραφή θέματος',
	'DELETED_INFORMATION'	=> 'Διαγράφηκε από %1$s στις %2$s',
	'DISAPPROVE'					=> 'Απόρριψη',
	'DOWNLOAD_NOTICE'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να δείτε τα συνημμένα αρχεία σε αυτή την δημοσίευση.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Τελευταία επεξεργασία από %2$s στις %3$s, έχει υποστεί επεξεργασία %1$d φορά συνολικά.',
		2	=> 'Τελευταία επεξεργασία από %2$s στις %3$s, έχει υποστεί επεξεργασία %1$d φορές συνολικά.',
	),
	'EMAIL_TOPIC'			=> 'Αποστολή θέματος με ηλ. ταχ/μείο',
	'ERROR_NO_ATTACHMENT'	=> 'Το επιλεγμένο συνημμένο δεν υπάρχει πλέον',

	'FILE_NOT_FOUND_404'	=> 'Το αρχείο <strong>%s</strong> δεν υπάρχει.',
	'FORK_TOPIC'			=> 'Αντιγραφή θέματος',
	'FULL_EDITOR'			=> 'Πλήρης επεξεργαστής &amp; Προεπισκόπηση',

	'LINKAGE_FORBIDDEN'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα να δείτε τα συνημμένα να μεταφορτώσετε ή να συνδέσετε από/προς αυτήν την περιοχή.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Έχετε ειδοποιηθεί για αυτό το θέμα, παρακαλώ συνδεθείτε για να το δείτε.',
	'LOGIN_VIEWTOPIC'		=> 'Ο διαχειριστής της Δ. Συζήτησης απαιτεί να εγγραφείτε και να συνδεθείτε για να δείτε αυτό το θέμα.',

	'MAKE_ANNOUNCE'				=> 'Κάνετε Ανακοίνωση',
	'MAKE_GLOBAL'				=> 'Κάνετε Γενική',
	'MAKE_NORMAL'				=> 'Κάνετε Κανονική',
	'MAKE_STICKY'				=> 'Κάνετε Σημείωση',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Μπορείτε να κάνετε <strong>%d</strong> επιλογή',
		2	=> 'Μπορείτε να κάνετε μέχρι και <strong>%d</strong> επιλογές',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Το συνημμένο <strong>%s</strong> δεν είναι πλέον διαθέσιμο',
	'MOVE_TOPIC'				=> 'Μετακίνηση θέματος',

	'NO_ATTACHMENT_SELECTED'=> 'Δεν έχετε επιλέξει συνημμένο να δείτε ή να μεταφορτώσετε.',
	'NO_NEWER_TOPICS'		=> 'Δεν υπάρχει κανένα νεότερο θέμα σε αυτή την Δ. Συζήτηση',
	'NO_OLDER_TOPICS'		=> 'Δεν υπάρχει κανένα παλαιότερο θέμα σε αυτή την Δ. Συζήτηση',
	'NO_UNREAD_POSTS'		=> 'Δεν υπάρχει καμία νέα αδιάβαστη δημοσίευση για αυτό το θέμα.',
	'NO_VOTE_OPTION'		=> 'Πρέπει να διευκρινίσετε μια επιλογή κατά την ψηφοφορία.',
	'NO_VOTES'				=> 'Δεν υπάρχουν ψήφοι',

	'POLL_ENDED_AT'			=> 'Το δημοψήφισμα λήγει στις %s',
	'POLL_RUN_TILL'			=> 'Το δημοψήφισμα ισχύει μέχρι %s',
	'POLL_VOTED_OPTION'		=> 'Ψηφίσατε για αυτήν την επιλογή',
	'POST_DELETED_RESTORE'	=> 'Αυτή η δημοσίευσει έχει διαγραφεί, αλλά μπορεί να γίνει επαναφορά της.',
	'PRINT_TOPIC'			=> 'Προβολή Εκτύπωσης',

	'QUICK_MOD'				=> 'Γρήγορο εργαλείο',
	'QUICKREPLY'			=> 'Γρήγορη απάντηση',	
	'QUOTE'					=> 'Παράθεση',

	'REPLY_TO_TOPIC'		=> 'Απαντήστε στο θέμα',
	'RESTORE'				=> 'Επαναφορά',
	'RESTORE_TOPIC'			=> 'Επαναφορά θέματος',
	'RETURN_POST'			=> 'Πατήστε %sΕδώ%s για να επιστρέψετε στην δημοσίευση',

	'SUBMIT_VOTE'			=> 'Υποβολή ψήφου',

	'TOPIC_TOOLS'			=> 'Εργαλείο θέματος',
	'TOTAL_VOTES'			=> 'Σύνολο ψήφων',

	'UNLOCK_TOPIC'			=> 'Ξεκλείδωμα θέματος',

	'VIEW_INFO'				=> 'Λεπτομέρειες δημοσίευσης',
	'VIEW_NEXT_TOPIC'		=> 'Επόμενο',
	'VIEW_PREVIOUS_TOPIC'	=> 'Προηγούμενο',
	'VIEW_RESULTS'			=> 'Προβολή αποτελεσμάτων',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d Δημοσίευση',
		2	=> '%d Δημοσιεύσεις',
	),
	'VIEW_UNREAD_POST'		=> 'Πρώτη αδιάβαστη δημοσίευση',
	'VOTE_SUBMITTED'		=> 'Η ψήφος σας έχει καταμετρηθεί.',
	'VOTE_CONVERTED'		=> 'Η αλλαγή της ψήφου δεν υποστηρίζεται για ψηφοφορίες που έχουν μετατραπεί.',

));
