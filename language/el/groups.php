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
	'ALREADY_DEFAULT_GROUP'		=> 'Η επιλεγμένη ομάδα είναι ήδη η ομάδα προεπιλογής σας.',
	'ALREADY_IN_GROUP'			=> 'Είστε ήδη μέλος της επιλεγμένης ομάδας.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ζητήσατε ήδη να γίνετε μέλος στην επιλεγμένη ομάδα.',

	'CANNOT_JOIN_GROUP'			=> 'Δεν μπορείτε να μπείτε σε αυτή την ομάδα. Μπορείτε μόνο να μπείτε σε ανοιχτές και ελεύθερες ομάδες.',
	'CANNOT_RESIGN_GROUP'		=> 'Δεν μπορείτε να φύγετε από αυτή την ομάδα. Μπορείτε μόνο να φύγετε από ανοιχτές και ελεύθερες ομάδες.',
	'CHANGED_DEFAULT_GROUP'		=> 'Αλλάξατε επιτυχώς την ομάδα προεπιλογής.',

	'GROUP_AVATAR'						=> 'Άβαταρ ομάδας',
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CHANGE_DEFAULT'				=> 'Σίγουρα θέλετε να αλλάξετε την ιδιότητα μέλους προεπιλογής σας στην ομάδα “%s”;',
	'GROUP_CLOSED'						=> 'Κλειστή',
	'GROUP_DESC'						=> 'Περιγραφή Ομάδας',
	'GROUP_HIDDEN'						=> 'Κρυμμένη',
	'GROUP_INFORMATION'					=> 'Πληροφορίες Ομάδας μελών',
	'GROUP_IS_CLOSED'					=> 'Αυτή είναι μια κλειστή ομάδα, τα νέα μέλη μπορούν μόνο να ενωθούν με την πρόσκληση ενός συντονιστή ομάδας.',
	'GROUP_IS_FREE'						=> 'Αυτή είναι μια ανοικτή ομάδα, όλα τα νέα μέλη είναι ευπρόσδεκτα.',
	'GROUP_IS_HIDDEN'					=> 'Αυτή είναι μια κρυμμένη ομάδα, μόνο τα μέλη αυτής της ομάδας μπορούν να δουν την ιδιότητα του μέλους της.',
	'GROUP_IS_OPEN'						=> 'Αυτή είναι μια ανοικτή ομάδα, τα μέλη μπορούν να ζητήσουν να ενταχθούν.',
	'GROUP_IS_SPECIAL'					=> 'Αυτή είναι μια  πρόσθετη ομάδα, οι πρόσθετες ομάδες ρυθμίζονται από τους διαχειριστές της Δ. Συζήτησης.',
	'GROUP_JOIN'						=> 'Επιλογή Ομάδας',
	'GROUP_JOIN_CONFIRM'				=> 'Σίγουρα θέλετε να ενταχθείτε στην επιλεγμένη ομάδα;',
	'GROUP_JOIN_PENDING'				=> 'Αίτημα για να ένταξη στην ομάδα',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Σίγουρα θέλετε να ζητήσετε να ενταχθείτε στην επιλεγμένη ομάδα;',
	'GROUP_JOINED'						=> 'Έχετε ενταχθεί επιτυχώς στην επιλεγμένη ομάδα.',
	'GROUP_JOINED_PENDING'				=> 'Η αίτηση για ένταξη στην ομάδα έγινε με επιτυχία. Παρακαλώ περιμένετε μέχρι ένας συντονιστή ομάδας να εγκρίνει την ιδιότητα μέλους σας.',
	'GROUP_LIST'						=> 'Διαχείριση μέλους',
	'GROUP_MEMBERS'						=> 'Διαχείριση μελών',
	'GROUP_NAME'						=> 'Όνομα Ομάδας',
	'GROUP_OPEN'						=> 'Ανοικτή',
	'GROUP_RANK'						=> 'Βαθμός Ομάδας',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Παραιτηθείτε από την ιδιότητα μέλους ομάδας',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Σίγουρα θέλετε να παραιτηθείτε από την ιδιότητα μέλους σας από την επιλεγμένη ομάδα;',
	'GROUP_RESIGN_PENDING'				=> 'Παραιτηθείτε από μια εκκρεμή ιδιότητα μέλους ομάδας',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Σίγουρα θέλετε να παραιτηθείτε από την εκκρεμή ιδιότητα μέλους σας από την επιλεγμένη ομάδα;',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Η παραίτησή σας από την επιλεγμένη ομάδα έγινε επιτυχώς.',
	'GROUP_RESIGNED_PENDING'			=> 'Η εκκρεμής ιδιότητα μέλους σας αφαιρέθηκε επιτυχώς από την επιλεγμένη ομάδα.',
	'GROUP_TYPE'						=> 'Τύπος Ομάδας',
	'GROUP_UNDISCLOSED'					=> 'Κρυμμένη ομάδα',
	'FORUM_UNDISCLOSED'					=> 'Συντονίστε κρυμμένες Δ. Συζητήσεις ',

	'LOGIN_EXPLAIN_GROUP'	=> 'Πρέπει να συνδεθείτε για να δείτε τις πληροφορίες της ομάδας.',

	'NO_LEADERS'					=> 'Δεν είστε συντονιστής σε καμία ομάδα.',
	'NOT_LEADER_OF_GROUP'			=> 'Η ζητούμενη λειτουργία δεν μπορεί να εκτελεστεί επειδή δεν είστε συντονιστής της επιλεγμένης ομάδας.',
	'NOT_MEMBER_OF_GROUP'			=> 'Η ζητούμενη λειτουργία δεν μπορεί να εκτελεστεί επειδή δεν είστε μέλος της επιλεγμένης ομάδας ή η ιδιότητα μέλους σας δεν έχει εγκριθεί ακόμα.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Δεν έχετε την άδεια για να παραιτηθείτε από την ομάδα προεπιλογής σας.',

	'PRIMARY_GROUP'		=> 'Αρχική ομάδα',

	'REMOVE_SELECTED'		=> 'Αφαίρεση επιλεγμένων',

	'USER_GROUP_CHANGE'			=> 'Από “%1$s” ομάδα προς “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Μεταβίβαση δικαιώματος συντονισμού',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Σίγουρα θέλετε να μεταβιβάσετε τον συντονισμό ομάδας από την επιλεγμένη ομάδα;',
	'USER_GROUP_DEMOTED'		=> 'Επιτυχώς μεταβιβάσατε την ηγεσία σας.',
));
