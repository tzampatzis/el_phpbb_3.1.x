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
	'ADMIN_SIG_PREVIEW'		=> 'Προεπισκόπιση υπογραφής',
	'AT_LEAST_ONE_FOUNDER'	=> 'Δεν μπορείτε να αλλάξετε αυτόν τον ιδρυτή σε ένα κανονικό μέλος. Πρέπει να υπάρχει τουλάχιστον ένας ιδρυτής ενεργοποιημένος για αυτό το σύστημα συζητήσεων. Εάν θέλετε να αλλάξετε αυτήν την κατάσταση του μέλους ιδρυτή, προάγετε πρώτα ένα άλλο μέλος να είναι ένας ιδρυτής.',

	'BAN_ALREADY_ENTERED'	=> 'Ο αποκλεισμός είχε προηγουμένως εισαχθεί με επιτυχία. Η λίστα αποκλεισμού δεν έχει ενημερωθεί.',
	'BAN_SUCCESSFUL'		=> 'Ο αποκλεισμός ενημερώθηκε με επιτυχία.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Δεν μπορείτε να αποκλείσετε τον λογαριασμό του anonymous. Τα δικαιώματα για τους anonymous χρήστες μπορούν να ρυθμιστούν στην καρτέλα των προσβάσεων.',
	'CANNOT_BAN_FOUNDER'			=> 'Δεν μπορείτε να αποκλείσετε λογαριασμούς ιδρυτή.',
	'CANNOT_BAN_YOURSELF'			=> 'Δεν μπορείτε να αποκλείσετε τον εαυτό σας.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Δεν μπορείτε να απενεργοποιήσετε bot λογαριασμούς. Παρακαλώ απενεργοποιήστε το bot μέσα στη σελίδα των bot αντί αυτού.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Δεν σας επιτρέπετε να απενεργοποιήσετε λογαριασμούς ιδρυτών.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Δεν μπορείτε να απενεργοποιήσετε τον δικό σας λογαριασμό.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Δεν μπορείτε να επανενεργοποιήσετε bot λογαριασμούς. Παρακαλώ επανενεργοποιήσετε τη στατική διεύθυνση του bot μέσα στη σελίδα.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Δεν μπορείτε να εξαναγκάσετε επανενεργοποίηση σε λογαριασμούς ιδρυτών.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Δεν μπορείτε να εξαναγκάσετε επανενεργοποίηση δικού σας λογαριασμού .',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Δεν μπορείτε να αφαιρέσετε τον λογαριασμό του μέλους επισκέπτη.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Δεν μπορείτε να αφαιρέσετε λογαριασμούς ιδρυτών.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Δεν μπορείτε να αφαιρέσετε τον δικό σας λογαριασμό μέλους.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Δεν μπορείτε να προάγετε σε ιδρυτές, μέλη που είναι σε αγνόηση.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Πρέπει να ενεργοποιήσετε τον λογαριασμό των μελών πριν τους προωθήσετε σε ιδρυτές, μόνον ενεργοποιημένα μέλη μπορούν να προωθηθούν.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Πρέπει να προσδιοριστεί αυτό, μόνον εάν αλλάξετε τη διεύθυνση ηλεκτρονικού ταχυδρομείου μελών.',

	'DELETE_POSTS'			=> 'Διαγραφή δημοσιεύσεων',
	'DELETE_USER'			=> 'Διαγραφή μέλους',
	'DELETE_USER_EXPLAIN'	=> 'Παρακαλώ σημειώστε ότι η διαγραφή ενός μέλους είναι οριστική, αυτό δεν μπορεί να ανακτηθεί. Τα μη αναγνωσμένα προσωπικά μηνύματα που αποστάλθηκαν από το μέλος θα διαγραφούν και δεν θα είναι διαθέσιμα στους παραλήπτες τους.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Η επανενεργοποίηση εξαναγκάστηκε με επιτυχία.',
	'FOUNDER'						=> 'Ιδρυτής',
	'FOUNDER_EXPLAIN'				=> 'Οι ιδρυτές έχουν όλα τα δικαιώματα διαχείρισης και δεν μπορούν ποτέ να αποκλειστούν, να διαγραφούν ή να αλλάξουν από μέλη μη ιδρυτές.',

	'GROUP_APPROVE'					=> 'Έγκριση μέλους',
	'GROUP_DEFAULT'					=> 'Κάνετε προεπιλεγμένη ομάδα για το μέλος',
	'GROUP_DELETE'					=> 'Διαγραφή μέλους από ομάδα',
	'GROUP_DEMOTE'					=> 'Υποβιβασμός αρχηγού της ομάδας',
	'GROUP_PROMOTE'					=> 'Προαγωγή σε αρχηγό ομάδας',

	'IP_WHOIS_FOR'			=> 'Αναζήτηση για διεύθυνση IP %s',

	'LAST_ACTIVE'			=> 'Τελευταία επίσκεψη',

	'MOVE_POSTS_EXPLAIN'	=> 'Παρακαλώ επιλέξτε τη Δ. Συζήτηση που επιθυμείτε να μετακινήσετε όλες τις δημοσιεύσεις που αυτό το μέλος έχει κάνει.',

	'NO_SPECIAL_RANK'		=> 'Δεν έχει ανατεθεί ειδικός βαθμός',
	'NO_WARNINGS'			=> 'Καμία προειδοποίηση.',
	'NOT_MANAGE_FOUNDER'	=> 'Προσπαθήσατε να διαχειριστείτε ένα μέλος με την ιδιότητα του ιδρυτή. Μόνον οι ιδρυτές μπορούν να διαχειρίζονται άλλους ιδρυτές.',

	'QUICK_TOOLS'			=> 'Γρήγορα εργαλεία',

	'REGISTERED'			=> 'Έχει εγγραφεί',
	'REGISTERED_IP'			=> 'Έχει εγγραφεί από τη διεύθυνση IP',
	'RETAIN_POSTS'			=> 'Διατήρηση δημοσιεύσεων',

	'SELECT_FORM'			=> 'Επιλογή φόρμας',
	'SELECT_USER'			=> 'Επιλογή μέλους',

	'USER_ADMIN'					=> 'Διαχείριση μέλους',
	'USER_ADMIN_ACTIVATE'			=> 'Ενεργοποίηση λογαριασμού',
	'USER_ADMIN_ACTIVATED'			=> 'Η ενεργοποίηση του λογαριασμού μέλους έγινε με επιτυχία.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Η διαγραφή του άβαταρ από τον λογαριασμό του μέλους έγινε με επιτυχία.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Αποκλεισμός μέσω ηλεκτρονικού ταχυδρομείου',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου αποκλείστηκε μέσω της διαχείρισης μέλους',
	'USER_ADMIN_BAN_IP'				=> 'Απαγόρευση μέσω IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Διεύθυνση IP αποκλείστηκε μέσω της διαχείρισης μέλους',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Όνομα μέλους αποκλείστηκε μέσω της διαχείρισης μέλους',
	'USER_ADMIN_BAN_USER'			=> 'Αποκλεισμός με όνομα μέλους',
	'USER_ADMIN_DEACTIVATE'			=> 'Απενεργοποίηση λογαριασμού',
	'USER_ADMIN_DEACTIVED'			=> 'Η απενεργοποίηση μέλους έγινε με επιτυχία.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Διαγραφή όλων των συνημμένων',
	'USER_ADMIN_DEL_AVATAR'			=> 'Διαγραφή άβαταρ',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Άδειασμα ΠΜ γραμματοκιβωτίου εξερχομένων',
	'USER_ADMIN_DEL_POSTS'			=> 'Διαγραφή όλων των δημοσιεύσεων',
	'USER_ADMIN_DEL_SIG'			=> 'Διαγραφή υπογραφής',
	'USER_ADMIN_EXPLAIN'			=> 'Εδώ μπορείτε να αλλάξετε τα στοιχεία των μελών σας και ορισμένες συγκεκριμένες επιλογές.',
	'USER_ADMIN_FORCE'				=> 'Εξαναγκασμός επανενεργοποίησης',
	'USER_ADMIN_LEAVE_NR'			=> 'Αφαίρεση από «πρόσφατο εγγεγραμμένο μέλος»',
	'USER_ADMIN_MOVE_POSTS'			=> 'Μετακίνηση όλων των δημοσιεύσεων',
	'USER_ADMIN_SIG_REMOVED'		=> 'Επιτυχής αφαίρεση υπογραφής από τον λογαριασμό μέλους.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Επιτυχής αφαίρεση όλων των συνημμένων που έγιναν από αυτό το μέλος.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Το άβαταρ δεν μπορεί να εμφανιστεί επειδή τα άβαταρ δεν επιτρέπονται.',
	'USER_AVATAR_UPDATED'			=> 'Επιτυχής ενημέρωση των λεπτομερειών του άβαταρ μέλους.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Το τρέχον άβαταρ δεν μπορεί να εμφανιστεί επειδή ο τύπος του δεν επιτρέπεται.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Προσαρμοσμένα πεδία προφίλ',
	'USER_DELETED'					=> 'Το μέλος διαγράφηκε με επιτυχία.',
	'USER_GROUP_ADD'				=> 'Προσθήκη μέλους σε ομάδα',
	'USER_GROUP_NORMAL'				=> 'Καθορισμένες ομάδες μέλους, στις οποίες το μέλος ανήκει',
	'USER_GROUP_PENDING'			=> 'Ομάδες στις οποίες το μέλος είναι σε εκκρεμή κατάσταση',
	'USER_GROUP_SPECIAL'			=> 'Προεπιλεγμένες ομάδες στις οποίες ανήκει το μέλος',
	'USER_LIFTED_NR'				=> 'Επιτυχής αφαίρεση του μέλους από «πρόσφατο εγγεγραμμένο μέλος» κατάσταση.',
	'USER_NO_ATTACHMENTS'			=> 'Δεν υπάρχουν συνημμένα αρχεία για εμφάνιση.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Το μέλος δεν έχει δημοσιεύσεις για να διατηρήσετε ή να διαγράψετε.',
	'USER_OUTBOX_EMPTIED'			=> 'Το γραμματοκιβώτιο εξερχομένων προσωπικών μηνυμάτων του μέλους άδειασε με επιτυχία.',
	'USER_OUTBOX_EMPTY'				=> 'Το γραμματοκιβώτιο εξερχομένων προσωπικών μηνυμάτων τους μέλους ήταν ήδη κενό.',
	'USER_OVERVIEW_UPDATED'			=> 'Οι πληροφορίες του μέλους ενημερώθηκαν.',
	'USER_POSTS_DELETED'			=> 'Όλες οι δημοσιεύσεις που δημιουργήθηκαν από αυτό το μέλος αφαιρέθηκαν με επιτυχία .',
	'USER_POSTS_MOVED'				=> 'Οι δημοσιεύσεις του μέλους στη στοχευμένη Δ. Συζήτηση μετακινήθηκαν με επιτυχία.',
	'USER_PREFS_UPDATED'			=> 'Οι προτιμήσεις του μέλους ενημερώθηκαν.',
	'USER_PROFILE'					=> 'Προφίλ μέλους',
	'USER_PROFILE_UPDATED'			=> 'Το προφίλ μέλους ενημερώθηκε.',
	'USER_RANK'						=> 'Βαθμός μέλους',
	'USER_RANK_UPDATED'				=> 'Ο βαθμός μέλους ενημερώθηκε.',
	'USER_SIG_UPDATED'				=> 'Η υπογραφή μέλους ενημερώθηκε με επιτυχία.',
	'USER_WARNING_LOG_DELETED'		=> 'Δεν υπάρχουν διαθέσιμες πληροφορίες. Ενδεχομένως η καταχώριση ιστορικού έχει διαγραφεί.',
	'USER_TOOLS'					=> 'Βασικά εργαλεία',
));
