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
	'ALL_AVAILABLE'			=> 'Όλους τους διαθέσιμους',
	'ALL_RESULTS'			=> 'Όλα τα αποτελέσματα',

	'DISPLAY_RESULTS'		=> 'Εμφάνιση αποτελεσμάτων ως',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Η αναζήτηση βρήκε %d εγγραφή',
		2	=> 'Η αναζήτηση βρήκε %d εγγραφές',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Αναζήτηση για περισσότερη από %d εγγραφή',
		2	=> 'Αναζήτηση για περισσότερες από %d εγγραφές',
	),

	'GLOBAL'				=> 'Γενική Ανακοίνωση',

	'IGNORED_TERMS'			=> 'αγνοήστε',
	'IGNORED_TERMS_EXPLAIN'	=> 'Οι ακόλουθες λέξεις στο ερώτημα αναζήτησής σας αγνοήθηκαν επειδή υπάρχουν πάρα πολύ κοινές λέξεις: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Μετάβαση στη δημοσίευση',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να δείτε τις δημοσιεύσεις σας.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να δείτε τις μη αναγνωσμένες δημοσιεύσεις σας.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να δείτε νέες δημοσιεύσεις μετά την τελευταία επίσκεψή σας.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Διευκρινίσατε πάρα πολλές λέξεις γι αυτήν την αναζήτηση. Παρακαλώ μη χρησιμοποιείτε πάνω από %1$d λέξη.',
		2	=> 'Διευκρινίσατε πάρα πολλές λέξεις γι αυτήν την αναζήτηση. Παρακαλώ μη χρησιμοποιείτε πάνω από %1$d λέξεις.',
	),

	'NO_KEYWORDS'			=> 'Πρέπει να διευκρινίσετε τουλάχιστον μια λέξη στην αναζήτηση. Κάθε λέξη πρέπει να αποτελείται από τουλάχιστον %s και δεν πρέπει να περιέχει πάνω από %s εξαιρουμένων των μπαλαντέρ.',
	'NO_RECENT_SEARCHES'	=> 'Καμία αναζήτηση δεν έχει πραγματοποιηθεί πρόσφατα',
	'NO_SEARCH'				=> 'Συγνώμη αλλά δεν σας επιτρέπεται να χρησιμοποιήσετε το σύστημα αναζήτησης.',
	'NO_SEARCH_RESULTS'		=> 'Καμία κατάλληλη αντιστοιχία δεν βρέθηκε.',
	'NO_SEARCH_LOAD'		=> 'Λυπούμαστε, αλλά δεν μπορείτε να χρησιμοποιήσετε την αναζήτηση προς το παρόν. Ο διακομιστής έχει μεγάλο φορτίο. Παρακαλώ δοκιμάστε εκ νέου αργότερα.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Συγνώμη αλλά δεν μπορείτε να χρησιμοποιήσετε την αναζήτηση αυτήν τη στιγμή. Προσπαθήστε πάλι σε %d δευτερόλεπτο.',
		2	=> 'Συγνώμη αλλά δεν μπορείτε να χρησιμοποιήσετε την αναζήτηση αυτήν τη στιγμή. Προσπαθήστε πάλι σε %d δευτερόλεπτα.',
	),
	'NO_SEARCH_UNREADS'		=> 'Συγνώμη, η αναζήτηση για μη αναγνωσμένες δημοσιεύσεις έχει απενεργοποιηθεί σε αυτό το σύστημα συζητήσεων.',
	'WORD_IN_NO_POST'		=> 'Καμία δημοσίευση δεν βρέθηκε επειδή η λέξη <strong>%s</strong> δεν περιλαμβάνεται σε οποιαδήποτε δημοσίευση.',
	'WORDS_IN_NO_POST'		=> 'Καμία δημοσίευση δεν βρέθηκε επειδή οι λέξεις <strong>%s</strong> δεν περιλαμβάνονται σε οποιαδήποτε δημοσίευση',

	'POST_CHARACTERS'		=> 'χαρακτήρες δημοσίευσης',
	'PHRASE_SEARCH_DISABLED'	=> 'Αναζήτηση με βάση μια συγκεκριμένη φράση δεν υποστηρίζεται σε αυτό το σύστημα συζητήσεων.',

	'RECENT_SEARCHES'		=> 'Πρόσφατες αναζητήσεις',
	'RESULT_DAYS'			=> 'Περιορισμός αποτελεσμάτων σε πριν από',
	'RESULT_SORT'			=> 'Ταξινόμηση αποτελεσμάτων κατά',
	'RETURN_FIRST'			=> 'Επιστροφή πρώτους',
	'GO_TO_SEARCH_ADV'	=> 'Επιστροφή στην ειδική αναζήτηση',

	'SEARCHED_FOR'				=> 'Αναζήτηση όροι που χρησιμοποιούνται',
	'SEARCHED_TOPIC'			=> 'Αναζήτησης θέμα',
	'SEARCHED_QUERY'			=> 'Αναζήτησης ερώτημα',
	'SEARCH_ALL_TERMS'			=> 'Αναζήτηση όλων των όρων ή του ερωτήματος όπως εισήχθη',
	'SEARCH_ANY_TERMS'			=> 'Αναζήτηση οποιουδήποτε όρου',
	'SEARCH_AUTHOR'				=> 'Αναζήτηση για συγγραφέα',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Χρησιμοποιείστε * ως μπαλαντέρ για μερική αντιστοιχία.',
	'SEARCH_FIRST_POST'			=> 'Στην πρώτη δημοσίευση του θέματος μόνο',
	'SEARCH_FORUMS'				=> 'Αναζήτηση στις Δ. Συζητήσεις',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Επιλέξτε τη Δ. Συζήτηση ή τις Δ. Συζητήσεις στις οποίες θέλετε να αναζητήσετε. Υπό-συζητήσεις θα αναζητηθούν αυτόματα εάν δεν απενεργοποιήσετε την “Αναζήτηση υπό-κατηγοριών“ παρακάτω.',
	'SEARCH_IN_RESULTS'			=> 'Αναζητήστε αυτά τα αποτελέσματα',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Τοποθετήστε το <strong>+</strong> μπροστά από μια λέξη που πρέπει να βρεθεί και <strong>-</strong> μπροστά από μια λέξη που δεν πρέπει να βρεθεί. Βάλτε μια λίστα με λέξεις που χωρίζονται με <strong>|</strong> σε αγκύλες αν πρέπει να βρεθεί μόνο μία από τις λέξεις. Χρησιμοποιείστε * ως μπαλαντέρ για μερική αντιστοιχία.',
	'SEARCH_MSG_ONLY'			=> 'Μόνο σε κείμενο μηνύματος',
	'SEARCH_OPTIONS'			=> 'Ρυθμίσεις αναζήτησης',
	'SEARCH_QUERY'				=> 'Ερώτημα αναζήτησης',
	'SEARCH_SUBFORUMS'			=> 'Αναζήτηση υπό-κατηγοριών',
	'SEARCH_TITLE_MSG'			=> 'Τίτλους θεμάτων και κείμενο μηνύματος',
	'SEARCH_TITLE_ONLY'			=> 'Τίτλους θεμάτων μόνο',
	'SEARCH_WITHIN'				=> 'Αναζήτηση σε',
	'SORT_ASCENDING'			=> 'Αύξουσα',
	'SORT_AUTHOR'				=> 'Συγγραφέα',
	'SORT_DESCENDING'			=> 'Φθίνουσα',
	'SORT_FORUM'				=> 'Δ. Συζήτηση',
	'SORT_POST_SUBJECT'			=> 'Θέμα δημοσίευσης',
	'SORT_TIME'					=> 'Ώρα δημοσίευσης',
	'SPHINX_SEARCH_FAILED'		=> 'Η αναζήτηση απέτυχε: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Συγγνώμη, η αναζήτηση δεν μπορεί να πραγματοποιηθεί. Περισσότερες πληροφορίες σχετικά με το λάθος αυτό έχουν καταγραφεί στο αρχείο καταγραφής σφαλμάτων.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Πρέπει να διευκρινίσετε τουλάχιστον %d χαρακτήρα του ονόματος του συγγραφέα.',
		2	=> 'Πρέπει να διευκρινίσετε τουλάχιστον %d χαρακτήρες του ονόματος του συγγραφέα.',
	),
));
