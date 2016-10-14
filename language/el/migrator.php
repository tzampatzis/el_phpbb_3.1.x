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
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com (dimitris):
* (http://phpbbgr.com/team/)
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
	'CONFIG_NOT_EXIST'					=> 'Η ρύθμιση διαμόρφωσης "%s" απροσδόκητα δεν υπάρχει.',

	'GROUP_NOT_EXIST'					=> 'Η ομάδα "%s" απροσδόκητα δεν υπάρχει.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Εφαρμογή των εξαρτήσεων του %s.',
	'MIGRATION_DATA_DONE'				=> 'Εγκατεστημένα δεδομένα: %1$s; Χρόνος: %2$.2f δευτερόλεπτα',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Εγκατάσταση δεδομένων: %1$s; Χρόνος: %2$.2f δευτερόλεπτα',
	'MIGRATION_DATA_RUNNING'			=> 'Εγκατάσταση δεδομένων: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Η ενσωμάτωση έχει ήδη εγκατασταθεί αποτελεσματικά (παραλείπεται): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Κάτι πήγε στραβά κατά τη διάρκεια του αιτήματος και μια εξαίρεση δεν έγινε. Οι αλλαγές που πραγματοποιήθηκαν πριν από το σφάλμα αντιστράφηκαν κατά το καλύτερο των δυνατοτήτων μας, αλλά θα πρέπει να ελέγξετε το σύστημα συζητήσεων για λάθη.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Η ενσωμάτωση "%1$s" δεν είναι πληρώσιμη, λείπει ενσωμάτωση "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s δεν είναι μια έγκυρη ενσωμάτωση.',
	'MIGRATION_SCHEMA_DONE'				=> 'Εγκατεστημένο σχήμα: %1$s; Χρόνος: %2$.2f δευτερόλεπτα',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Εγκατάσταση σχήματος: %1$s; Χρόνος: %2$.2f δευτερόλεπτα',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Εγκατάσταση σχήματος: %s.',
	
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Η ενσωμάτωση δεν είναι έγκυρη. ΄Σε έναν βοηθό συνθήκης if λείπει μια συνθήκη.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Η ενσωμάτωση δεν είναι έγκυρη. Σε έναν βοηθό συνθήκης if λείπει μια έγκυρη κλήση σε ένα βήμα ενσωμάτωσης.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Η ενσωμάτωση δεν είναι έγκυρη. Μια προσαρμοσμένη λειτουργία δεν μπόρεσε να κληθεί.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Η ενσωμάτωση δεν είναι έγκυρη. Αντιμετωπίστηκε ένας άγνωστος τύπος εργαλείου ενσωμάτωσης.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Η ενσωμάτωση δεν είναι έγκυρη. Αντιμετωπίστηκε ένα μη ορισμένο εργαλείο ενσωμάτωσης.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Η ενσωμάτωση δεν είναι έγκυρη. Αντιμετωπίστηκε μια άγνωστη μέθοδος εργαλείου ενσωμάτωσης.',

	'MODULE_ERROR'						=> 'Παρουσιάστηκε σφάλμα κατά τη δημιουργία μιας μονάδας: %s',
	'MODULE_EXISTS'						=> 'Μια μονάδα ήδη υπάρχει: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Αρκετές μονάδες με το συγκεκριμένο όνομα μονάδας γονέα υπάρχουν ήδη: %s. Προσπαθήστε να χρησιμοποιήσετε τα πλήκτρα προηγούμενο/επόμενο για να ορίσετε την τοποθεσία των μονάδων.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Ένα απαραίτητο αρχείο πληροφοριών για τη μονάδα λείπει: %2$s',
	'MODULE_NOT_EXIST'					=> 'Η απαιτούμενη μονάδα δεν υπάρχει: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Αποτυχία ορισμού ταυτότητας μονάδας γονέα: %s',
	'PERMISSION_NOT_EXIST'				=> 'Η ρύθμιση δικαιωμάτων "%s" απροσδόκητα δεν υπάρχει.',

	'ROLE_NOT_EXIST'					=> 'Ο ρόλος δικαιωμάτων "%s" απροσδόκητα δεν υπάρχει.',
));
