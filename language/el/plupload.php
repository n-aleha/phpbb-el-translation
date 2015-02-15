<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Προσθήκη αρχείων',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Προσθέστε αρχεία στην ουρά φόρτωσης και πατήστε το πλήκτρο έναρξης.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s ήδη υπάρχει στην ουρά.',
	'PLUPLOAD_CLOSE'			=> 'Κλείσιμο',
	'PLUPLOAD_DRAG'				=> 'Σύρετε αρχεία εδώ.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Σφάλμα διπλής καταχώρησης αρχείου.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Μπορείτε να επισυνάψετε αρχεία αν τα σύρετε στο πλαίσιο μηνύματος.',
	'PLUPLOAD_ERR_INPUT'		=> 'Αποτυχία στο άνοιγμα της ροής εισόδου.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Αποτυχία στην μετακίνηση του φορτωμένου αρχείου.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Αποτυχία στο άνοιγμα της ροής εξόδου.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Το αρχείο είναι πολύ μεγάλο:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Σφάλμα μέτρησης πλήθους αρχείων.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Μη έγκυρη επέκταση αρχείου:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Η εκτέλεση βγήκε εκτός της διαθέσιμης μνήμης.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Το URL αποστολής μπορεί να είναι λάθος ή δεν υπάρχει.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Σφάλματα επέκτασης του αρχείου.',
	'PLUPLOAD_FILE'				=> 'Αρχείο: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Αρχείο: %s, μέγεθος: %d, μέγιστο μέγεθος αρχείου: %d',
	'PLUPLOAD_FILENAME'			=> 'Όνομα αρχείου',
	'PLUPLOAD_FILES_QUEUED'		=> '%d αρχεία στην ουρά',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Γενικό σφάλμα.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP σφάλμα.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Ο τύπος εικόνας είναι λανθασμένος ή δεν υποστηρίζεται.',
	'PLUPLOAD_INIT_ERROR'		=> 'Σφάλμα αρχικοποίησης.',
	'PLUPLOAD_IO_ERROR'			=> 'IO σφάλμα.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Σφάλμα ασφαλείας.',
	'PLUPLOAD_SELECT_FILES'		=> 'Επιλέξτε αρχεία',
	'PLUPLOAD_SIZE'				=> 'Μέγεθος',
	'PLUPLOAD_SIZE_ERROR'		=> 'Σφάλμα μεγέθους αρχείου.',
	'PLUPLOAD_STATUS'			=> 'Κατάσταση',
	'PLUPLOAD_START_UPLOAD'		=> 'Έναρξη μεταφοράς',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Έναρξη μεταφοράς ουράς',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Διακοπή μεταφοράς',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Διακοπή τρέχουσας μεταφοράς',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Φορτώθηκαν %d/%d αρχεία',
));
