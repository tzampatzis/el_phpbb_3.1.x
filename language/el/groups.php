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
	'ALREADY_DEFAULT_GROUP'		=> 'Η επιλεγμένη ομάδα είναι ήδη η προεπιλεγμένη ομάδα σας.',
	'ALREADY_IN_GROUP'			=> 'Είστε ήδη μέλος της επιλεγμένης ομάδας.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ζητήσατε ήδη να ενταχθείτε στην επιλεγμένη ομάδα.',

	'CANNOT_JOIN_GROUP'			=> 'Δεν μπορείτε να ενταχθείτε σε αυτήν την ομάδα. Μπορείτε μόνο να ενταχθείτε σε ανοιχτές και ελεύθερες ομάδες.',
	'CANNOT_RESIGN_GROUP'		=> 'Δεν μπορείτε να παραιτηθείτε από αυτήν την ομάδα. Μπορείτε μόνο να παραιτηθείτε από ανοιχτές και ελεύθερες ομάδες.',
	'CHANGED_DEFAULT_GROUP'		=> 'Αλλάξατε την προεπιλεγμένη ομάδα σας με επιτυχία.',

	'GROUP_AVATAR'						=> 'Ομάδα άβαταρ',
	'GROUP_CHANGE_DEFAULT'				=> 'Είστε σίγουρος (-η) ότι θέλετε να αλλάξετε την προεπιλεγμένη ιδιότητα μέλους σας στην ομάδα “%s”;',
	'GROUP_CLOSED'						=> 'Κλειστή',
	'GROUP_DESC'						=> 'Περιγραφή ομάδας',
	'GROUP_HIDDEN'						=> 'Κρυφή',
	'GROUP_INFORMATION'					=> 'Πληροφορίες ομάδας μελών',
	'GROUP_IS_CLOSED'					=> 'Αυτή είναι μια κλειστή ομάδα, νέα μέλη μπορούν να ενταχθούν μόνον κατόπιν πρόσκλησης ενός συντονιστή ομάδας.',
	'GROUP_IS_FREE'						=> 'Αυτή είναι μια απολύτως ανοικτή ομάδα, όλα τα νέα μέλη είναι ευπρόσδεκτα.',
	'GROUP_IS_HIDDEN'					=> 'Αυτή είναι μια κρυφή ομάδα, μόνον τα μέλη αυτής της ομάδας μπορούν να δουν τις ιδιότητες των μελών της.',
	'GROUP_IS_OPEN'						=> 'Αυτή είναι μια ανοικτή ομάδα, τα μέλη μπορούν να υποβάλουν αίτηση ένταξης.',
	'GROUP_IS_SPECIAL'					=> 'Αυτή είναι μια ειδική ομάδα, οι ειδικές ομάδες διαχειρίζονται από τους διαχειριστές του συστήματος συζητήσεων.',
	'GROUP_JOIN'						=> 'Ένταξη σε ομάδα',
	'GROUP_JOIN_CONFIRM'				=> 'Είστε σίγουρος (-η) ότι θέλετε να ενταχθείτε στην επιλεγμένη ομάδα;',
	'GROUP_JOIN_PENDING'				=> 'Αίτημα για ένταξη στην ομάδα',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να ζητήσετε να ενταχθείτε στην επιλεγμένη ομάδα;',
	'GROUP_JOINED'						=> 'Έχετε ενταχθεί στην επιλεγμένη ομάδα με επιτυχία.',
	'GROUP_JOINED_PENDING'				=> 'Το αίτημα για ένταξη στην ομάδα έγινε με επιτυχία. Παρακαλώ περιμένετε έναν συντονιστή ομάδας να εγκρίνει την ιδιότητα μέλους σας.',
	'GROUP_LIST'						=> 'Διαχείριση μελών',
	'GROUP_MEMBERS'						=> 'Μέλη ομάδας',
	'GROUP_NAME'						=> 'Όνομα ομάδας',
	'GROUP_OPEN'						=> 'Ανοικτή',
	'GROUP_RANK'						=> 'Βαθμός ομάδας',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Παραιτηθείτε από την ιδιότητα μέλους ομάδας',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να παραιτηθείτε από την ιδιότητα μέλους σας από την επιλεγμένη ομάδα;',
	'GROUP_RESIGN_PENDING'				=> 'Παραιτηθείτε από μια εκκρεμή ιδιότητα μέλους ομάδας',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να παραιτηθείτε από την εκκρεμή ιδιότητα μέλους σας από την επιλεγμένη ομάδα;',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Έχετε αφαιρεθεί από την επιλεγμένη ομάδα με επιτυχία.',
	'GROUP_RESIGNED_PENDING'			=> 'Η εκκρεμής ιδιότητα μέλους σας αφαιρέθηκε με επιτυχία από την επιλεγμένη ομάδα.',
	'GROUP_TYPE'						=> 'Τύπος ομάδας',
	'GROUP_UNDISCLOSED'					=> 'Κρυφή ομάδα',
	'FORUM_UNDISCLOSED'					=> 'Συντονίστε κρυφές Δ. Συζητήσεις',

	'LOGIN_EXPLAIN_GROUP'	=> 'Πρέπει να συνδεθείτε για να δείτε τις πληροφορίες της ομάδας.',

	'NO_LEADERS'					=> 'Δεν είστε συντονιστής σε καμία ομάδα.',
	'NOT_LEADER_OF_GROUP'			=> 'Η ζητούμενη λειτουργία δεν μπορεί να γίνει επειδή δεν είστε συντονιστής της επιλεγμένης ομάδας.',
	'NOT_MEMBER_OF_GROUP'			=> 'Η ζητούμενη λειτουργία δεν μπορεί να γίνει επειδή δεν είστε μέλος της επιλεγμένης ομάδας ή η ιδιότητα μέλους σας δεν έχει εγκριθεί ακόμα.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Δεν σας επιτρέπεται να παραιτηθείτε από την προεπιλεγμένη ομάδα σας.',

	'PRIMARY_GROUP'		=> 'Αρχική ομάδα',

	'REMOVE_SELECTED'		=> 'Αφαίρεση επιλεγμένων',

	'USER_GROUP_CHANGE'			=> 'Από “%1$s” ομάδα προς “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Υποβιβασμός συντονισμού',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να υποβιβάσετε ως συντονιστής ομάδας από την επιλεγμένη ομάδα;',
	'USER_GROUP_DEMOTED'		=> 'Μεταβιβάσατε την ηγεσία σας με επιτυχία.',
));
