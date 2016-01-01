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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Εδώ μπορείτε να στείλετε ένα μήνυμα είτε σε όλα τα μέλη σας είτε σε όλα τα μέλη μιας συγκεκριμένης ομάδας <strong>πού έχουν την επιλογή να λαμβάνουν μαζικά μηνύματα ηλεκτρονικού ταχυδρομείου ενεργοποιημένη</strong>. Για να επιτευχθεί αυτό ένα μήνυμα ηλεκτρονικού ταχυδρομείου θα αποσταλεί στη διεύθυνση ηλεκτρονικού ταχυδρομείου του διαχειριστή που παρέσχατε, με την οποία ένα τυφλό πιστό αντίγραφο θα αποσταλεί σε όλους τους παραλήπτες. Η προεπιλεγμένη ρύθμιση είναι να συμπεριλάβει μόνο 20 παραλήπτες σε ένα τέτοιο ηλεκτρονικό ταχυδρομείο, για περισσότερους παραλήπτες περισσότερα μηνύματα ηλεκτρονικού ταχυδρομείου θα σταλούν. Εάν στέλνετε ηλεκτρονικό ταχυδρομείο σε μια μεγάλη ομάδα ατόμων, παρακαλώ να είστε υπομονετικοί μετά την υποβολή και μη διακόψετε τη σελίδα κατά τη διάρκεια της αποστολής. Είναι φυσιολογικό για μια μαζική αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου να πάρει πολύ χρόνο, θα ενημερωθείτε όταν το σενάριο έχει ολοκληρωθεί.',
	'ALL_USERS'						=> 'Όλα τα μέλη',

	'COMPOSE'				=> 'Δημιουργία',

	'EMAIL_SEND_ERROR'		=> 'Υπήρχαν ένα ή περισσότερα σφάλματα κατά την αποστολή του ηλεκτρονικού ταχυδρομείου. Παρακαλώ ελέγξτε το αρχείο καταγραφής %sΙστορικό σφαλμάτων%s για λεπτομερή μηνύματα λάθους.',
	'EMAIL_SENT'			=> 'Αυτό το μήνυμα στάλθηκε.',
	'EMAIL_SENT_QUEUE'		=> 'Αυτό το μήνυμα έχει τοποθετηθεί σε ουρά αναμονής προς αποστολή.',

	'LOG_SESSION'			=> 'Σύνοδος ηλεκτρονικού ταχυδρομείου έχει καταγραφεί στο ιστορικό σφαλμάτων',

	'SEND_IMMEDIATELY'		=> 'Άμεση αποστολή',
	'SEND_TO_GROUP'			=> 'Αποστολή σε ομάδα',
	'SEND_TO_USERS'			=> 'Αποστολή σε μέλη',
	'SEND_TO_USERS_EXPLAIN'	=> 'Εισάγοντας ονόματα εδώ θα αντικαταστήσει οποιαδήποτε ομάδα επιλέξατε παραπάνω. Πληκτρολογήστε κάθε όνομα μέλους σε μια νέα γραμμή.',

	'MAIL_BANNED'			=> 'Ηλεκτρονικό ταχυδρομείο αποκλεισμένων μελών',
	'MAIL_BANNED_EXPLAIN'	=> 'Κατά την αποστολή ενός μαζικού ηλεκτρονικού ταχυδρομείου σε μια ομάδα, μπορείτε να επιλέξετε εδώ αν τα αποκλεισμένα μέλη θα λάβουν επίσης το μήνυμα ηλεκτρονικού ταχυδρομείου.',
	'MAIL_HIGH_PRIORITY'	=> 'Υψηλή',
	'MAIL_LOW_PRIORITY'		=> 'Χαμηλή',
	'MAIL_NORMAL_PRIORITY'	=> 'Κανονική',
	'MAIL_PRIORITY'			=> 'Προτεραιότητα μηνύματος αλληλογραφίας',
	'MASS_MESSAGE'			=> 'Το μήνυμα σας',
	'MASS_MESSAGE_EXPLAIN'	=> 'Σημειώστε ότι μπορείτε να γράψετε μόνον απλό κείμενο. Οτιδήποτε άλλο θα αφαιρεθεί πριν την αποστολή.',

	'NO_EMAIL_MESSAGE'		=> 'Πρέπει να εισάγετε κάποιο κείμενο.',
	'NO_EMAIL_SUBJECT'		=> 'Πρέπει να ορίσετε ένα θέμα για το μήνυμά σας.',
));
