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
	'CONFIG_NOT_EXIST'					=> 'Η ρύθμιση config "%s" απροσδόκητα δεν υπάρχει.',

	'GROUP_NOT_EXIST'					=> 'Η ομάδα "%s" απροσδόκητα δεν υπάρχει.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Εφαρμογή εξαρτήσεων για %s.',
	'MIGRATION_DATA_DONE'				=> 'Εγκατεστημένα Δεδομένα: %1$s; Χρονική διάρκεια: %2$.2f seconds',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Εγκατάσταση Δεδομένων: %1$s; Χρονική διάρκεια: %2$.2f seconds',
	'MIGRATION_DATA_RUNNING'			=> 'Εγκατάσταση Δεδομένων: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Το migration είναι ήδη αποτελεσματικά εγκατεστημένο (παραλείφθηκε): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Κάτι δεν πήγε καλά στο αίτημα και εγέρθηκε μία εξαίρεση. Οι αλλαγές που έγιναν πριν προκύψει το σφάλμα αναιρέθηκαν όσο αυτό ήταν δυνατό, παρολαυτά θα πρέπει να ελένξετε την Δ. Συζήτηση για σφάλματα.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Το migration "%1$s" δεν μπορεί να εκπληρωθεί, λείπει το migration "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s δεν είναι ένα έγκυρο migration.',
	'MIGRATION_SCHEMA_DONE'				=> 'Εγκατεστημένο Σχήμα: %1$s; Χρονική διάρκεια: %2$.2f seconds',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Εγκατάσταση Σχήματος: %s.',

	'MODULE_ERROR'						=> 'Εμφανίστηκε σφάλματα κατά την δημιουργία της μονάδας: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Το απαιτούμενο info αρχείο της μονάδας δεν υπάρχει: %2$s',
	'MODULE_NOT_EXIST'					=> 'Η απαιτούμενη μονάδα δεν υπάρχει: %s',

	'PERMISSION_NOT_EXIST'				=> 'Η ρύθμιση δικαιώματος "%s" απροσδόκητα δεν υπάρχει.',

	'ROLE_NOT_EXIST'					=> 'Ο ρόλος δικαιώματος "%s" απροσδόκητα δεν υπάρχει.',
));
