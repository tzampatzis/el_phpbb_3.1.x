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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Εδώ μπορείτε να διαχειρίζεστε ευρετήρια του συστημάτων υποστήριξης αναζήτησης. Από τη στιγμή που χρησιμοποιείτε κανονικά μόνον ένα σύστημα υποστήριξης θα πρέπει να διαγράψετε όλα τα ευρετήρια τα οποία δεν κάνετε χρήση τους. Μετά τη μεταβολή ορισμένων από τις ρυθμίσεις αναζήτησης Μετά τη μεταβολή ορισμένων από τις ρυθμίσεις αναζήτησης (π.χ. του αριθμού των ελάχιστων / μέγιστων χαρακτήρων) ίσως αξίζει να δημιουργήσετε εκ νέου το ευρετήριο έτσι ώστε να αντανακλά τις μεταβολές αυτές.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Εδώ μπορείτε να καθορίσετε ποιο πρόγραμμα υποστήριξης αναζήτησης θα χρησιμοποιείται για τη δημιουργία ευρετηρίου δημοσιεύσεων και και την εκτέλεση αναζητήσεων. Μπορείτε να ορίσετε διάφορες επιλογές που μπορούν να επηρεάσουν πόσο πολύ επεξεργασία απαιτούν οι ενέργειες αυτές. Ορισμένες από αυτές τις ρυθμίσεις είναι οι ίδιες για όλα τα συστήματα υποστήριξης μηχανής αναζήτησης.',

	'COMMON_WORD_THRESHOLD'					=> 'Κατώτατο όριο κοινών λέξεων',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Οι λέξεις οι οποίες περιέχονται σε ένα μεγαλύτερο ποσοστό του συνόλου των δημοσιεύσεων θα εκλαμβάνονται ως συνηθισμένες. Οι συνηθισμένες λέξεις αγνοούνται σε ερωτήματα αναζήτησης. Ρυθμίστε στο μηδέν για να το απενεργοποιήσετε. Τίθεται σε ισχύ μόνον εάν υπάρχουν περισσότερες από 100 δημοσιεύσεις. Εάν θέλετε λέξεις που οι οποίες τώρα θεωρούνται ως συνηθισμένες να αναθεωρηθούν πρέπει να ξαναδημιουργήσετε το ευρετήριο.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Είστε σίγουρος (-η) ότι επιθυμείτε να μεταβείτε σε ένα διαφορετικό σύστημα υποστήριξης αναζήτησης; Μετά την αλλαγή του σύστημα υποστήριξης αναζήτησης θα πρέπει να δημιουργήσετε ένα ευρετήριο για το νέο σύστημα υποστήριξης αναζήτησης. Αν δεν σχεδιάζετε εναλλαγή πίσω στο παλιό σύστημα υποστήριξης αναζήτησης μπορείτε επίσης να διαγράψετε το ευρετήριο το παλιό σύστημα υποστήριξης, προκειμένου να εξοικονομηθούν πόροι του συστήματος.',
	'CONTINUE_DELETING_INDEX'				=> 'Συνέχιση προηγούμενης διαδικασίας αφαίρεσης ευρετηρίου',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Μια διαδικασία αφαίρεσης ευρετηρίου έχει ξεκινήσει. Για να αποκτήσετε πρόσβαση στη σελίδα ευρετηρίου αναζήτησης θα πρέπει να την ολοκληρώσετε ή να την ακυρώσετε.',
	'CONTINUE_INDEXING'						=> 'Συνέχιση προηγούμενης διαδικασίας ευρετηρίασης',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Μια διαδικασία ευρετηρίασης έχει ξεκινήσει. Για να αποκτήσετε πρόσβαση στη σελίδα ευρετηρίου αναζήτησης θα πρέπει να την ολοκληρώσετε ή να την ακυρώσετε.',
	'CREATE_INDEX'							=> 'Δημιουργία ευρετηρίου',

	'DELETE_INDEX'							=> 'Διαγραφή ευρετηρίου',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Διαγραφή του ευρετηρίου σε εξέλιξη',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Το πρόγραμμα υποστήριξης της αναζήτησης βρίσκεται στη διαδικασία εκκαθάρισης του ευρετηρίου του. Αυτό μπορεί να διαρκέσει μερικά λεπτά.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Το πρόγραμμα υποστήριξης MySQL fulltext μπορεί να χρησιμοποιηθεί μόνο με MySQL4 και πάνω.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'MySQL fulltext ευρετήρια μπορούν να χρησιμοποιηθούν μόνο με πίνακες MyISAM ή InnoDB. MySQL 5.6.8 ή νεότερη έκδοση απαιτείται για fulltext ευρετήρια σε πίνακες',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Συνολικός αριθμός δημοσιεύσεων που ευρετηριάστηκαν',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Οι λέξεις με τουλάχιστον αυτούς τους χαρακτήρες θα γίνεται ευρετηρίαση στην αναζήτηση. Λέξεις με τουλάχιστον τόσους πολλούς χαρακτήρες θα πρέπει να ευρετηριάζονται για αναζήτηση. Μόνον εσείς ή ο πάροχος σας μπορεί να αλλάξετε αυτήν τη ρύθμιση αλλάζοντας τη ρύθμιση παραμέτρων mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Οι λέξεις με όχι περισσότερους από τόσους πολλούς χαρακτήρες θα πρέπει να ευρετηριάζονται για αναζήτηση. Μόνον εσείς ή ο πάροχος σας μπορεί να αλλάξετε αυτήν τη ρύθμιση αλλάζοντας τη ρύθμιση παραμέτρων mysql.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Το πρόγραμμα υποστήριξης PostgreSQL fulltext μπορεί να χρησιμοποιηθεί μόνο με PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Συνολικός αριθμός δημοσιεύσεων που ευρετηριάστηκαν',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL έκδοση',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Κείμενο αναζήτησης διαμόρφωσης προφίλ:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Ελάχιστο μήκος λέξης για λέξεις-κλειδιά',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Μέγιστο μήκος λέξης για λέξεις-κλειδιά',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Αυτό το πρόγραμμα υποστήριξης αναζήτησης απαιτεί PostgreSQL έκδοση 8.3 και άνω.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Το αναζήτηση κειμένου προφίλ ρύθμισης παραμέτρων που χρησιμοποιείται για τον προσδιορισμό της μονάδας ανάλυσης και λεξικού.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Οι λέξεις με τουλάχιστον τόσους πολλούς χαρακτήρες θα συμπεριληφθούν στο ερώτημα στη βάση δεδομένων.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Οι λέξεις με όχι περισσότερους από τόσους πολλούς χαρακτήρες θα συμπεριληφθούν στο ερώτημα στη βάση δεδομένων.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Διαμορφώστε τις ακόλουθες ρυθμίσεις για να δημιουργήσετε το αρχείο ρυθμίσεων sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Διαδρομή στον κατάλογο δεδομένων',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Θα χρησιμοποιηθεί για να αποθηκεύσει τα ευρετήρια και τα αρχεία καταγραφής. Θα πρέπει να δημιουργήσετε αυτόν τον κατάλογο εκτός των προσβάσιμων καταλόγων από τον ιστό. (θα πρέπει να έχει μία κάθετο)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Αριθμός δημοσιεύσεων που θα ενημερώνονται συχνά στο ευρετήριο delta',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon διακομιστής',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Ο διακομιστής στον οποίο ανταποκρίνεται το sphinx search daemon (searchd). Αφήστε κενό για να χρησιμοποιήσετε την προεπιλογή localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Όριο μνήμης ευρετηραστή',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Ο αριθμός αυτός θα πρέπει ανά πάσα στιγμή να είναι χαμηλότερος από τη διαθέσιμη μνήμη RAM στο μηχάνημα σας. Εάν αντιμετωπίζετε περιοδικά προβλήματα απόδοσης αυτό μπορεί να οφείλεται στο ότι ο ευρετηριαστής καταναλώνει πάρα πολλούς πόρους. Μπορεί να βοηθήσει αν μειώσετε το ποσό της μνήμης που είναι διαθέσιμη στον ευρετηριαστή.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Αριθμός δημοσιεύσεων στο κύριο ευρετήριο',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon θύρα',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Η θύρα που χρησιμοποιεί το sphinx search daemon (searchd). Αφήστε κενό να να χρησιμοποιήσετε την προεπιλεγμένη Sphinx API θύρα 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Η sphinx αναζήτηση για το phpBB υποστηρίζει MySQL και PostgreSQL μόνο.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx αρχείο ρυθμίσεων',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Το περιεχόμενο που δημιουργείται από το sphinx αρχείο ρυθμίσεων. Τα δεδομένα αυτά πρέπει να επικολληθούν στο sphinx.conf το οποίο χρησιμοποιείται από το sphinx search daemon. Αντικαταστήστε τα [dbuser] και [dbpassword] κράτησης θέσης με τα διαπιστευτήρια της βάσης δεδομένων σας.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Η διαδρομή καταλόγου δεδομένων sphinx δεν έχει προσδιοριστεί. Παρακαλώ την προσδιορίσετε και πατήστε υποβολή για να δημιουργηθεί το αρχείου ρυθμίσεων.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Γενικές ρυθμίσεις αναζήτησης',
	'GO_TO_SEARCH_INDEX'					=> 'Μετάβαση στη σελίδα ευρετηρίου αναζήτησης',

	'INDEX_STATS'							=> 'Στατιστικά ευρετηρίου',
	'INDEXING_IN_PROGRESS'					=> 'Ευρετηρίαση σε εξέλιξη',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Το πρόγραμμα υποστήριξης αναζήτησης ευρετηριάζει όλες τις δημοσιεύσεις του συστήματος συζητήσεων. Αυτό μπορεί να διαρκέσει από μερικά λεπτά ως μερικές ώρες εξαρτάται από το μέγεθος του συστήματος συζητήσεων.',

	'LIMIT_SEARCH_LOAD'						=> 'Όριο φορτίου συστήματος σελίδας αναζήτησης',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Εάν το μέσο φορτίο συστήματος του 1 λεπτού (load average) υπερβεί αυτήν την τιμή, η σελίδα αναζήτησης θα περάσει σε εκτός σύνδεση (offline), 1.0 ισοδυναμεί με ~100% χρησιμοποίησης ενός επεξεργαστή. Αυτό λειτουργεί μόνο σε διακομιστές βασισμένους σε UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Μέγιστο μέγεθος χαρακτήρων που ευρετηριάστηκαν από την αναζήτηση',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Οι λέξεις με όχι περισσότερους από τόσους πολλούς χαρακτήρες θα πρέπει να ευρετηριάζονται για αναζήτηση.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Μέγιστος αριθμός επιτρεπόμενων κλειδιών',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Ο μέγιστος αριθμός λέξεων που το μέλος έχει τη δυνατότητα να αναζητήσει. Μία τιμή 0 επιτρέπει απεριόριστο αριθμό λέξεων.',
	'MIN_SEARCH_CHARS'						=> 'Ελάχιστο μέγεθος χαρακτήρων που ευρετηριάστηκαν από την αναζήτηση',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Λέξεις με τουλάχιστον τόσους πολλούς χαρακτήρες θα πρέπει να ευρετηριάζονται για αναζήτηση.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Ελάχιστο μέγεθος χαρακτήρων ονόματος συγγραφέα',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Τα μέλη πρέπει να εισάγουν τουλάχιστον τόσους πολλούς χαρακτήρες του ονόματος όταν εκτελούν μία αναζήτηση συγγραφέα με χαρακτήρα μπαλαντέρ. Εάν όνομα μέλους του συγγραφέα είναι μικρότερο από τον αριθμό αυτό μπορείτε να αναζητήσετε για τις δημοσιεύσεις του συγγραφέα εισάγοντας το πλήρες όνομα μέλους.',

	'PROGRESS_BAR'							=> 'Μπάρα προόδου',

	'SEARCH_GUEST_INTERVAL'					=> 'Όριο αναμονής αναζήτησης επισκέπτη',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Ο αριθμός σε δευτερόλεπτα που πρέπει να περιμένουν οι επισκέπτες μεταξύ αναζητήσεων. Εάν αναζητεί ένας επισκέπτης όλοι οι άλλοι πρέπει να περιμένουν μέχρι το χρονικό διάστημα να παρέλθει.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Όλες οι δημοσιεύσεις πάνω από τη δημοσίευση με αριθμό %2$d έχουν ευρετηριαστεί τώρα, από τις οποίες %1$d δημοσιεύσεις ήταν μέσα σε αυτό βήμα.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Ο τρέχον ρυθμός της ευρετηρίασης είναι περίπου %1$.1f δημοσιεύσεις ανά δευτερόλεπτο.<br />Ευρετηρίαση σε εξέλιξη…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> ' Όλες οι δημοσιεύσεις πάνω από τη δημοσίευση με αριθμό %2$d έχουν αφαιρεθεί από το ευρετήριο αναζήτησης.<br />Διαγραφή σε εξέλιξη…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Επιτυχής ευρετηρίαση σε όλες τις δημοσιεύσεις στη βάση δεδομένων του συστήματος συζητήσεων.',
	'SEARCH_INDEX_REMOVED'					=> 'Επιτυχής διαγραφή του ευρετηρίου αναζήτησης για αυτό το πρόγραμμα υποστήριξης.',
	'SEARCH_INTERVAL'						=> 'Όριο αναμονής αναζήτησης μέλους',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Ο αριθμός σε δευτερόλεπτα που πρέπει να περιμένουν τα μέλη μεταξύ αναζητήσεων. Αυτό το χρονικό διάστημα είναι επιλεγμένο ανεξάρτητα για κάθε μέλος.',
	'SEARCH_STORE_RESULTS'					=> 'Μήκος προσωρινής μνήμης αποτελεσμάτων αναζήτησης',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Τα προσωρινά αποθηκευμένα αποτελέσματα αναζήτησης θα λήξουν μετά από αυτό το χρονικό διάστημα, σε δευτερόλεπτα. Ρυθμίστε στο 0, εάν θέλετε να απενεργοποιήσετε την προσωρινή μνήμη αναζήτησης.',
	'SEARCH_TYPE'							=> 'Πρόγραμμα υποστήριξης αναζήτησης',
	'SEARCH_TYPE_EXPLAIN'					=> 'Το phpBB σας επιτρέπει να επιλέξετε το πρόγραμμα υποστήριξης που χρησιμοποιείται για την αναζήτηση κειμένου σε περιεχόμενα δημοσιεύσεων. Από προεπιλογή η αναζήτηση χρησιμοποιεί την πλήρους κειμένου αναζήτηση (fulltext) το ίδιου του phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Έχετε αλλάξει το σύστημα υποστήριξης αναζήτησης. Για να χρησιμοποιήσετε το νέο σύστημα υποστήριξης αναζήτησης θα πρέπει να βεβαιωθείτε ότι υπάρχει ένα ευρετήριο για το σύστημα υποστήριξης που επιλέξατε.',

	'TOTAL_WORDS'							=> 'Συνολικός αριθμός λέξεων που ευρετηριάστηκαν',
	'TOTAL_MATCHES'							=> 'Συνολικός αριθμός λέξεων σε σχέση με δημοσιεύσεις που ευρετηριάστηκαν',

	'YES_SEARCH'							=> 'Ενεργοποίηση λειτουργιών αναζήτησης',
	'YES_SEARCH_EXPLAIN'					=> 'Ενεργοποιεί τη δυνατότητα μέλους λειτουργία αναζήτησης συμπεριλαμβανομένης της αναζήτησης μέλους.',
	'YES_SEARCH_UPDATE'						=> 'Ενεργοποίηση ενημέρωσης πλήρους κειμένου (fulltext)',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Η ενημέρωση των πλήρους κειμένου (fulltext) ευρετηρίων κατά τη δημοσίευση, παρακάμπτεται εάν η αναζήτηση είναι απενεργοποιημένη.',
));
