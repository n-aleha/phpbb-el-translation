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
	'ABOUT_USER'			=> 'Προφίλ',
	'ACTIVE_IN_FORUM'		=> 'Πιο ενεργή Δ. Συζήτηση',
	'ACTIVE_IN_TOPIC'		=> 'Πιο ενεργό θέμα',
	'ADD_FOE'				=> 'Προσθέστε εχθρό',
	'ADD_FRIEND'			=> 'Προσθέστε φίλο',
	'AFTER'					=> 'Μετά',

	'ALL'					=> 'Όλα',

	'BEFORE'				=> 'Πριν',

	'CC_SENDER'				=> 'Αποστολή αντίγραφου του μηνύματος μέσω ηλεκτρονικού ταχυδρομείου σε εμένα.',
	'CONTACT_ADMIN'			=> 'Επικοινωνία με ένα Διαχειριστή',

	'DEST_LANG'				=> 'Γλώσσα',
	'DEST_LANG_EXPLAIN'		=> 'Επιλέξτε μια κατάλληλη γλώσσα (αν είναι διαθέσιμη) για τον παραλήπτη αυτού του μηνύματος.',

	'EDIT_PROFILE'			=> 'Επεξεργασία προφίλ',

	'EMAIL_BODY_EXPLAIN'	=> 'Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode κώδικα. Ως διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί η διεύθυνση ηλεκτρονικού ταχυδρομείου σας.',
	'EMAIL_DISABLED'		=> 'Συγγνώμη, αλλά όλες οι σχετικές με το ηλεκτρονικό ταχυδρομείο λειτουργίες έχουν τεθεί εκτός λειτουργίας.',
	'EMAIL_SENT'			=> 'Το μήνυμα ηλεκτρονικού ταχυδρομείου έχει σταλεί.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode κώδικα. Σημειώστε ότι οι πληροφορίες του θέματος περιλαμβάνονται ήδη στο μήνυμα. Ως διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί η διεύθυνση ηλεκτρονικού ταχυδρομείου σας.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Πρέπει να παρέχετε μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου για τον παραλήπτη.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Πρέπει να εισαγάγετε ένα μήνυμα που στέλνεται με το ηλεκτρονικό ταχυδρομείο.',
	'EMPTY_MESSAGE_IM'		=> 'Πρέπει να προσθέσετε ένα μήνυμα προς αποστολή.',
	'EMPTY_NAME_EMAIL'		=> 'Πρέπει να εισαγάγετε το πραγματικό όνομα του παραλήπτη.',
	'EMPTY_SENDER_EMAIL'	=> 'Θα πρέπει να εισάγετε μία έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείο.',
	'EMPTY_SENDER_NAME'		=> 'Θα πρέπει να εισάγετε ένα όνομα.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Θα πρέπει να εισάγετε ένα τίτλο για το μήνυμα ηλεκτρονικού ταχυδρομείο.',
	'EQUAL_TO'				=> 'Ίσο με',

	'FIND_USERNAME_EXPLAIN'	=> 'Χρησιμοποιήστε αυτήν την μορφή στην αναζήτηση των συγκεκριμένων μελών. Δεν χρειάζεται να συμπληρώσετε όλα τα πεδία. Για να ταιριάξει με τη μερική χρήση στοιχείων χρησιμοποιήστε * μπαλαντέρ. Κατά την εισαγωγή οι ημερομηνίες χρησιμοποιούν το σχήμα <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Χρησιμοποιήστε τα τετραγωνίδια σημαδιών για να επιλέξετε ένα ή περισσότερα ονόματα μελών (διάφορα ονόματα μελών μπορούν να γίνουν αποδεκτά ανάλογα με την ίδια τη μορφή) και να πατήσετε το επίλεκτο χαρακτηρισμένο κουμπί για να επιστρέψετε στην προηγούμενη μορφή.',
	'FLOOD_EMAIL_LIMIT'		=> 'Δεν μπορείτε να στείλετε ένα άλλο μήνυμα ηλεκτρονικού ταχυδρομείου αυτή τη στιγμή. Παρακαλούμε προσπαθήστε πάλι αργότερα.',

	'GROUP_LEADER'			=> 'Συντονιστής Ομάδας',

	'HIDE_MEMBER_SEARCH'	=> 'Απόκρυψη αναζήτησης μελών',

	'IM_ADD_CONTACT'		=> 'Προσθέστε Επικοινωνία ',
	'IM_DOWNLOAD_APP'		=> 'Μεταφορτώστε την εφαρμογή',
	'IM_JABBER'				=> 'Παρακαλούμε σημειώστε ότι τα μέλη μπορεί να έχουν επιλέξει να μην λάβουν τα εκούσια στιγμιαία μηνύματα.',
	'IM_JABBER_SUBJECT'		=> 'Αυτό είναι ένα αυτόματο μήνυμα παρακαλούμε μην απαντήσετε! Μήνυμα από το μέλος %1$s at %2$s.',
	'IM_MESSAGE'			=> 'Το μήνυμά σας',
	'IM_NAME'				=> 'Το όνομά σας',
	'IM_NO_DATA'			=> 'Δεν υπάρχει κανένα κατάλληλο στοιχείο επικοινωνίας για αυτό το μέλος.',
	'IM_NO_JABBER'			=> 'Συγγνώμη, άμεσα μηνύματα με Jabber μέλη δεν υποστηρίζονται από αυτόν τον κεντρικό υπολογιστή. Θα πρέπει να εγκαταστήσετε έναν Jabber-Client στο σύστημά σας για να έρθετε σε επαφή με τον παραλήπτη ανωτέρω.',
	'IM_RECIPIENT'			=> 'Παραλήπτης',
	'IM_SEND'				=> 'Αποστολή μηνύματος',
	'IM_SEND_MESSAGE'		=> 'Αποστολή μηνύματος',
	'IM_SENT_JABBER'		=> 'Το μήνυμά σας προς το μέλος %1$s έχει σταλεί επιτυχώς.',
	'IM_USER'				=> 'Στείλτε ένα στιγμιαίο μήνυμα',

	'LAST_ACTIVE'				=> 'Τελευταία επίσκεψη',
	'LESS_THAN'					=> 'Λιγότερο από',
	'LIST_USERS'				=> array(
		1	=> '%d μέλος',
		2	=> '%d μελη',
	),
	'LOGIN_EXPLAIN_LEADERS'		=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να δείτε τις ομάδες μελών.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να έχετε πρόσβαση στην λίστα μελών.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να αναζητήσετε κάποιο μέλος.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Πρέπει να εγγραφείτε και να συνδεθείτε για να δείτε το προφίλ κάποιου μέλους.',

	'MORE_THAN'				=> 'Περισσότερο από',

	'NO_CONTACT_FORM'		=> 'Η φόρμα επικοινωνίας με τον Διαχειριστή είναι απενεργοποιημένη.',
	'NO_CONTACT_PAGE'		=> 'Η σελίδα επικοινωνίας με τον Διαχειριστή είναι απενεργοποιημένη.',
	'NO_EMAIL'				=> 'Δεν έχετε δικαίωμα να στείλετε μήνυμα ηλεκτρονικού ταχυδρομείου σε αυτό το μέλος.',
	'NO_VIEW_USERS'			=> 'Δεν έχετε δικαίωμα να δείτε την λίστα μελών ή το προφίλ.',

	'ORDER'					=> 'Ταξινόμηση',
	'OTHER'					=> 'Άλλη ένδειξη',

	'POST_IP'				=> 'Δημοσίευση από IP/όνομα τομέα',

	'REAL_NAME'				=> 'Όνομα παραλήπτη',
	'RECIPIENT'				=> 'Παραλήπτης',
	'REMOVE_FOE'			=> 'Διαγραφή εχθρού',
	'REMOVE_FRIEND'			=> 'Διαγραφή φίλου',

	'SELECT_MARKED'			=> 'Επιλογή σημειωμένων',
	'SELECT_SORT_METHOD'	=> 'Επιλέξτε μέθοδο ταξινόμησης',
	'SENDER_EMAIL_ADDRESS'	=> 'Η email διεύθυνσή σας',
	'SENDER_NAME'			=> 'Το όνομά σας',
	'SEND_ICQ_MESSAGE'		=> 'ICQ Αποστολή μηνύματος',
	'SEND_IM'				=> 'Instant messaging αποστολή',
	'SEND_JABBER_MESSAGE'	=> 'Jabber Αποστολή μηνύματος',
	'SEND_MESSAGE'			=> 'Μήνυμα',
	'SEND_YIM_MESSAGE'		=> 'Αποστολή YIM μηνύματος',
	'SORT_EMAIL'			=> 'Ηλεκτρονικό ταχυδρομείο',
	'SORT_LAST_ACTIVE'		=> 'Τελευταία ενέργεια',
	'SORT_POST_COUNT'		=> 'Σύνολο δημοσιεύσεων',

	'USERNAME_BEGINS_WITH'	=> 'Το όνομα μέλους αρχίζει από',
	'USER_ADMIN'			=> 'Διαχείριση μέλους',
	'USER_BAN'				=> 'Αποκλεισμός',
	'USER_FORUM'			=> 'Στατιστικά μέλους',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Δεν έχει αποσταλεί καμία υπενθύμιση αυτήν την περίοδο',
		1		=> '%1$d υπενθύμιση απεστάλη<br />» %2$s',
		2		=> '%1$d υπενθύμίσεις απεστάλησαν<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Σε σύνδεση',
	'USER_PRESENCE'			=> 'Παρουσία στην Δ. Συζήτηση',
	'USERS_PER_PAGE'		=> 'Μέλη ανά σελίδα',

	'VIEWING_PROFILE'		=> 'Προβολή προφίλ - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Προβολή Facebook προφίλ',
	'VIEW_SKYPE_PROFILE'	=> 'Προβολή Skype προφίλ',
	'VIEW_TWITTER_PROFILE'	=> 'Προβολή Twitter προφίλ',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Προβολή YouTube καναλιού',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Προβολή Google+ προφίλ',
));
