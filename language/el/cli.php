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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ορίστε αυτή την παράμετρο αν η επιλογή ρύθμισης αλλάζει συχνά, ώστε να αποθηκευτεί στη λανθάνθουσα μνήμη.',
	'CLI_CONFIG_CURRENT'				=> 'Τωρινή τιμής ρύθμισης, χρησιμοποιείστε 0 και 1 για τις δυαδικές τιμές',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Επιτυχής διαγραφής της ρύθμισης %s.',
	'CLI_CONFIG_NEW'					=> 'Η νέα τιμή ρύθμισης, χρησιμοποιείστε 0 και 1 για τις δυαδικές τιμές',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Η ρύθμιση %s δεν υπάρχει',
	'CLI_CONFIG_OPTION_NAME'			=> 'Το όνομα της επιλογής ρύθμισης',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Όρισε αυτή την επιλογή αν η τιμή πρέπει να τυπώνεται χωρίς αλλαγή γραμμής στο τέλος.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Βήμα για να γίνει η αύξηση',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Επιτυχής αύξηση της ρύθμισης %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Δεν ήταν δυνατός ο ορισμός της ρύθμισης %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Επιτυχής ορισμός της ρύθμισης %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Εκτυπώνει μία λίστα με έτοιμες και τις ανέτοιμες cron εργασίες.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Εκτελεί όλες τις cron εργασίες που είναι έτοιμες.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Όνομα της εργασίας προς εκτέλεση',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Ενημερώνει την βάση δεδομένων με εφαρμογή των migrations.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Διαγράφει μία επιλογή ρύθμισης',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Απενεργοποιεί την καθορισμένη επέκταση.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Ενεργοποιεί την καθορισμένη επέκταση.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Βρίσκει migrations που δεν εξαρτώνται.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Εμφανίζει την τιμή μίας επιλογής ρύθμισης',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Αυξάνει την τιμή μίας επιλογής ρύθμισης',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Εμφανίζει όλες τις επεκτάσεις που είναι στη βάση δεδομένων και στο σύστημα αρχείων.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Εκτέλεση σε Ασφαλή Λειτουργία (χωρίς επεκτάσεις).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Εκτέλεση του κέλυφους.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Εκκαθάριση της καθορισμένης επέκτασης.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Επαναυπολογίζει το πεδίο user_email_hash του πίνακα χρηστών.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'		=> 'Ορίζει την τιμή μίας επιλογής ρύθμισης μόνο η παλαιά τιμή είναι ίδια με την καινούργια',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Ορίζει την τιμή μίας επιλογής ρύθμισης',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ανεπιτυχής απενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Επιτυχής απενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ανεπιτυχής ενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Επιτυχής ενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_NAME'				=> 'Όνομα της επέκτασης',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ανεπιτυχής εκκαθάρισης της επέκτασης %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Επιτυχής εκκαθάριση της επέκτασης %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Δεν βρέθηκε καμία επέκταση.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Διαθέσιμη',
	'CLI_EXTENSIONS_DISABLED'			=> 'Απενεργοποιημένη',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ενεργοποιημένη',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Επιτυχής επανυπολογισμός όλων των τιμών κατακερματισμού για όλες τις διευθύνσεις ηλεκτρονικού ταχυδρομείου.',
));
