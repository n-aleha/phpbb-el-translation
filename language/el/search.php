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
	'ALL_AVAILABLE'			=> 'Όλα τα διαθέσιμα',
	'ALL_RESULTS'			=> 'Όλα τα αποτελέσματα',

	'DISPLAY_RESULTS'		=> 'Εμφάνιση αποτελεσμάτων ανά',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Η αναζήτηση βρήκε %d εγγραφή',
		2	=> 'Η αναζήτηση βρήκε %d εγγραφές',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Η αναζήτηση βρήκε περισσότερες από %d εγγραφή',
		2	=> 'Η αναζήτηση βρήκε περισσότερες %d εγγραφές',
	),

	'GLOBAL'				=> 'Γενική Ανακοίνωση',

	'IGNORED_TERMS'			=> 'αγνοήστε',
	'IGNORED_TERMS_EXPLAIN'	=> 'Οι ακόλουθες λέξεις στην ερώτηση αναζήτησής σας αγνοήθηκαν επειδή υπάρχουν πάρα πολύ κοινές λέξεις : <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Μετάβαση στη δημοσίευση',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Η κοινότητα απαιτεί να εγγραφείτε ή να συνδεθείτε για να δείτε τις δημοσιεύσεις σας.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Η κοινότητα απαιτεί να εγγραφείτε ή να συνδεθείτε για να δείτε τις μη αναγνωσμένες δημοσιεύσεις σας.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Η κοινότητα απαιτεί να εγγραφείτε ή να συνδεθείτε για να δείτε τις μη αναγνωσμένες δημοσιεύσεις , μετά την τελευταία επίσκεψή σας.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Εισάγατε πάρα πολλές λέξεις προς αναζήτηση. Παρακαλούμε μην εισάγετε περισσότερες από %1$d λέξη.',
		2	=> 'Εισάγατε πάρα πολλές λέξεις προς αναζήτηση. Παρακαλούμε μην εισάγετε περισσότερες από %1$d λέξεις.',
	),

	'NO_KEYWORDS'			=> 'Πρέπει να διευκρινίσετε τουλάχιστον μια λέξη στην αναζήτηση. Κάθε λέξη πρέπει να αποτελείται από τουλάχιστον %s χαρακτήρες αλλά όχι περισσότερους από %s χαρακτήρες αποκλείοντας τους μπαλαντέρ.',
	'NO_RECENT_SEARCHES'	=> 'Καμία αναζήτηση δεν έχει πραγματοποιηθεί πρόσφατα',
	'NO_SEARCH'				=> 'Λυπούμαστε αλλά δεν σας επιτρέπεται να χρησιμοποιήσετε το σύστημα αναζήτησης.',
	'NO_SEARCH_RESULTS'		=> 'Καμία κατάλληλη αντιστοιχία δεν βρέθηκε.',
	'NO_SEARCH_LOAD'		=> 'Λυπούμαστε αλλά δεν μπορείτε να χρησιμοποιήσετε τώρα την αναζήτηση λόγω φόρτου εργασίας του διακομιστή. Προσπαθείστε και πάλι σε λίγο.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Λυπούμαστε αλλά δεν μπορείτε να χρησιμοποιήσετε τώρα την αναζήτηση. Παρακαλώ δοκιμάστε και πάλι σε %d δευτερόλεπτο.',
		2	=> 'Λυπούμαστε αλλά δεν μπορείτε να χρησιμοποιήσετε τώρα την αναζήτηση. Παρακαλώ δοκιμάστε και πάλι σε %d δευτερόλεπτα.',
	),
	'NO_SEARCH_UNREADS'		=> 'Συγνώμη, η αναζήτηση για μη αναγνωσμένες δημοσιεύσεις έχει απενεργοποιηθεί σε αυτή την Δ. Συζήτηση.',
	'WORD_IN_NO_POST'		=> 'Δεν βρέθηκε καμία δημοσίευση επειδή η λέξη <strong>%s</strong> δεν περιλαμβάνεται σε καμία δημοσίευση.',
	'WORDS_IN_NO_POST'		=> 'Δεν βρέθηκε καμία δημοσίευση επειδή οι λέξεις <strong>%s</strong> δεν περιλαμβάνονται σε καμία δημοσίευση',

	'POST_CHARACTERS'		=> 'Χαρακτήρες δημοσίευσης',
	'PHRASE_SEARCH_DISABLED'	=> 'Δεν υποστηρίζεται αναζήτηση με ακριβή φράση.',

	'RECENT_SEARCHES'		=> 'Πρόσφατες αναζητήσεις',
	'RESULT_DAYS'			=> 'Παλαιότητα αποτελεσμάτων',
	'RESULT_SORT'			=> 'Ταξινόμηση αποτελεσμάτων ανά',
	'RETURN_FIRST'			=> 'Επιστροφή των πρώτων',
	'GO_TO_SEARCH_ADV'	=> 'Επιστροφή στην Ειδική αναζήτηση',

	'SEARCHED_FOR'			=> 'Αναζήτησε χρησιμοποιούμενους όρους',
	'SEARCHED_TOPIC'		=> 'Αναζήτησε θέμα',
	'SEARCHED_QUERY'			=> 'Αναζήτησης ερώτηση',
	'SEARCH_ALL_TERMS'		=> 'Αναζήτηση όλων των όρων ή όπως εισήχθη το ερώτημα',
	'SEARCH_ANY_TERMS'		=> 'Αναζήτηση οποιουδήποτε όρου',
	'SEARCH_AUTHOR'			=> 'Αναζήτηση συγγραφέα',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Ο χαρακτήρας * χρησιμοποιείται ως μπαλαντέρ',
	'SEARCH_FIRST_POST'			=> 'Πρώτη δημοσίευση του θέματος, μόνο',
	'SEARCH_FORUMS'				=> 'Αναζήτηση στην Δ. Συζήτηση',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Επιλέξτε την Δ. Συζήτηση ή τις Δ. Συζητήσεις που θέλετε να αναζητήσετε. Μπορείτε να εξαιρέσετε τις υποκατηγορίες από την αναζήτηση με την αποκάτω επιλογή.',
	'SEARCH_IN_RESULTS'		=> 'Αναζήτηση σε αυτά τα αποτελέσματα',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Μπορείτε να χρησιμοποιήσετε το <strong>+</strong> για να συμπεριλάβετε τις λέξεις που πρέπει να βρίσκονται στο αποτέλεσμα, <strong>|</strong> για να συμπεριλάβετε τις λέξεις που μπορούν να βρίσκονται στο αποτέλεσμα, <strong>-</strong> για να συμπεριλάβετε τις λέξεις που δεν πρέπει να βρίσκονται στο αποτέλεσμα. Ο χαρακτήρας * χρησιμοποιείται ως μπαλαντέρ',
	'SEARCH_MSG_ONLY'		=> 'Κείμενο της δημοσίευσης, μόνο',
	'SEARCH_OPTIONS'			=> 'Ρυθμίσεις αναζήτησης',
	'SEARCH_QUERY'				=> 'Ερώτημα αναζήτησης',
	'SEARCH_SUBFORUMS'			=> 'Αναζήτηση σε υποκατηγορίες',
	'SEARCH_TITLE_MSG'			=> 'Τίτλο θέματος και κείμενο δημοσίευσης',
	'SEARCH_TITLE_ONLY'			=> 'Τίτλο θέματος, μόνο',
	'SEARCH_WITHIN'				=> 'Αναζήτηση σε',
	'SORT_ASCENDING'			=> 'Αύξουσα',
	'SORT_AUTHOR'				=> 'Συγγραφέας',
	'SORT_DESCENDING'			=> 'Φθίνουσα',
	'SORT_FORUM'				=> 'Δ. Συζήτηση',
	'SORT_POST_SUBJECT'			=> 'Θέμα δημοσίευσης',
	'SORT_TIME'					=> 'Ώρα δημοσίευσης',
	'SPHINX_SEARCH_FAILED'		=> 'Αποτυχία αναζήτησης: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Λυπούμαστε αλλά δεν ήταν δυνατόν να γίνει η αναζήτηση. Περισσότερες πληροφορίες για αυτή την αποτυχία υπάρχουν στο ιστορικό σφαλμάτων.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Πρέπει να εισάγετε τουλάχιστον %d χαρακτήρα από το όνομα του συγγραφέα.',
		2	=> 'Πρέπει να εισάγετε τουλάχιστον %d χαρακτήρες από το όνομα του συγγραφέα.',
	),
));
