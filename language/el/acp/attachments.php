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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Εδώ μπορείτε να διαμορφώσετε τις προεπιλεγμένες ρυθμίσεις για τα συνημμένα και τις σχετικές ειδικές κατηγορίες.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Εδώ μπορείτε να προσθέσετε, να διαγράψετε, να τροποποιήσετε ή να απενεργοποιήσετε τις ομάδες επεκτάσεων σας. Πρόσθετες επιλογές περιλαμβάνουν την εκχώρηση ειδικών κατηγοριών σε αυτές, αλλάζοντας τον μηχανισμό μεταφόρτωσης και τον καθορισμό ενός εικονιδίου φόρτωσης το οποίο θα εμφανίζεται μπροστά από το συνημμένο που ανήκει στην ομάδα.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Εδώ μπορείτε να διαχειριστείτε τις επιτρεπόμενες επεκτάσεις σας. Για να ενεργοποιήσετε τις επεκτάσεις σας, παρακαλούμε μεταβείτε στον πίνακα διαχείριση ομάδων επεκτάσεων συνημμένων. Σας συνιστούμε ανεπιφύλακτα να μην επιτρέψετε καταλήξεις γλωσσών προγραμματισμού (όπως οι <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, και ούτω καθεξής…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Εδώ μπορείτε να δείτε ορφανά αρχεία. Αυτό συμβαίνει κυρίως αν τα μέλη επισυνάπτουν αρχεία, αλλά δεν υποβάλουν τη δημοσίευση. Μπορείτε να διαγράψετε τα αρχεία ή να τα επισυνάψετε σε υπάρχουσες δημοσιεύσεις. Επισύναψη σε δημοσιεύσεις απαιτεί ένα έγκυρο αναγνωριστικό δημοσίευσης (post ID), το οποίο πρέπει να καθορίσετε από μόνοι σας. Αυτό θα τοποθετήσει το ήδη φορτωμένο συνημμένο στη δημοσίευση που έχετε εισάγει.',
	'ADD_EXTENSION'						=> 'Προσθήκη επέκτασης',
	'ADD_EXTENSION_GROUP'				=> 'Προσθήκη ομάδας επέκτασης',
	'ADMIN_UPLOAD_ERROR'				=> 'Σφάλματα κατά την προσπάθεια επισύναψης του αρχείου: “%s”.',
	'ALLOWED_FORUMS'					=> 'Επιτρεπτές Δ. Συζητήσεις',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Δυνατότητα δημοσίευσης των καθορισμένων επεκτάσεων στην επιλεγμένη (ή σε όλες αν επιλεγούν) Δ. Συζητήσεις.',
	'ALLOWED_IN_PM_POST'				=> 'Επιτρέπονται',
	'ALLOW_ATTACHMENTS'					=> 'Επιτρέψτε συνημμένα',
	'ALLOW_ALL_FORUMS'					=> 'Επιτρέπεται σε όλες τις Δ. Συζητήσεις',
	'ALLOW_IN_PM'						=> 'Επιτρέπεται σε προσωπικά μηνύματα',
	'ALLOW_PM_ATTACHMENTS'				=> 'Επιτρέψτε συνημμένα σε προσωπικά μηνύματα',
	'ALLOW_SELECTED_FORUMS'				=> 'Μόνο στις Δ. Συζητήσεις που επιλέγονται παρακάτω',
	'ASSIGNED_EXTENSIONS'				=> 'Εκχωρημένες επεκτάσεις',
	'ASSIGNED_GROUP'					=> 'Εκχωρημένη ομάδα επεκτάσεων',
	'ATTACH_EXTENSIONS_URL'				=> 'Επεκτάσεις',
	'ATTACH_EXT_GROUPS_URL'				=> 'Ομάδες επεκτάσεων',
	'ATTACH_ID'							=> 'Αναγνωριστικό (ID)',
	'ATTACH_MAX_FILESIZE'				=> 'Μέγιστο μέγεθος αρχείου',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Μέγιστο μέγεθος του κάθε αρχείου. Εάν η τιμή είναι 0, το μέγεθος του προς φόρτωση αρχείου περιορίζεται μόνο από τις ρυθμίσεις του PHP σας.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Μέγιστο μέγεθος αρχείου προσωπικών μηνυμάτων',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Μέγιστο μέγεθος του κάθε αρχείου, με το 0 να είναι απεριόριστο, που επισυνάπτεται σε ένα προσωπικό μήνυμα.',
	'ATTACH_ORPHAN_URL'					=> 'Ορφανά συνημμένα',
	'ATTACH_POST_ID'					=> 'Αναγνωριστικό δημοσίευσης (ID)',
	'ATTACH_POST_TYPE'					=> 'Τύπος δημοσίευσης',
	'ATTACH_QUOTA'						=> 'Συνολική ποσόστωση συνημμένων.',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Μέγιστος διαθέσιμος χώρος στη μονάδα δίσκου για ολόκληρo το σύστημα συζητήσεων, με 0 να είναι απεριόριστος.',
	'ATTACH_TO_POST'					=> 'Επισυνάψτε αρχείο στη δημοσίευση',

	'CAT_FLASH_FILES'			=> 'Αρχεία Flash',
	'CAT_IMAGES'				=> 'Εικόνες',
	'CAT_QUICKTIME_FILES'		=> 'Αρχεία πολυμέσων Quicktime',
	'CAT_RM_FILES'				=> 'Αρχεία πολυμέσων RealMedia',
	'CAT_WM_FILES'				=> 'Αρχεία πολυμέσων Windows Media',
	'CHECK_CONTENT'				=> 'Έλεγχος αρχείων συνημμένων',
	'CHECK_CONTENT_EXPLAIN'		=> 'Ορισμένα προγράμματα περιήγησης μπορεί να εξαπατηθούν να υποθέσουν ένα ανακριβές είδος κωδικοποίησης για τα φορτώσιμα αρχεία. Αυτή η επιλογή εξασφαλίζει ότι τέτοια αρχεία που είναι πιθανό να προκαλέσουν αυτό, να απορρίπτονται.',
	'CREATE_GROUP'				=> 'Δημιουργία νέας ομάδας',
	'CREATE_THUMBNAIL'			=> 'Δημιουργία μικρογραφίας',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Δημιουργία μιας μικρογραφίας σε όλες τις δυνατές θέσεις.',

	'DEFINE_ALLOWED_IPS'			=> 'Καθορίστε επιτρεπτές διευθύνσεις IP / ονόματα εξυπηρετητών',
	'DEFINE_DISALLOWED_IPS'			=> 'Καθορίστε μη επιτρεπτές διευθύνσεις IP / ονόματα εξυπηρετητών',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Για να ορίσετε πολλές διαφορετικές διευθύνσεις IP ή ονόματα εξυπηρετητών πληκτρολογήστε το καθένα σε διαφορετική γραμμή. Για να ορίσετε ένα εύρος διευθύνσεων IP διαχωρίστε την αρχή και το τέλος με μια παύλα (-), για να καθορίσετε έναν μπαλαντέρ χρησιμοποιήστε “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Μπορείτε να αφαιρέσετε (ή να από-εξαιρέσετε) πολλαπλές διευθύνσεις IP σε μια κίνηση με τη χρήση του κατάλληλου συνδυασμού του ποντικιού και του πληκτρολογίου του υπολογιστή σας του υπολογιστή και του προγράμματος περιήγησης σας. Εξαιρούμενες διευθύνσεις ΙΡ θα έχουν ένα μπλε φόντο.',
	'DISPLAY_INLINED'				=> 'Εμφάνιση ενσωματωμένων εικόνων',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Εάν ρυθμιστεί σε “Όχι” οι συνημμένες εικόνες θα εμφανίζονται σαν δεσμός.',
	'DISPLAY_ORDER'					=> 'Σειρά εμφάνισης συνημμένων',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Εμφάνιση συνημμένων ταξινομημένα κατά ώρα.',

	'EDIT_EXTENSION_GROUP'			=> 'Επεξεργασία ομάδας επεκτάσεων',
	'EXCLUDE_ENTERED_IP'			=> 'Ενεργοποιήστε αυτό για εξαίρεση της εισαγόμενης διεύθυνσης IP / όνομα εξυπηρετητή.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Εξαίρεση διεύθυνσης IP από τις επιτρεπτές διευθύνσεις IP / ονόματα εξυπηρετητών',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Εξαίρεση διεύθυνσης IP από τις μη επιτρεπτές διευθύνσεις IP/ ονόματα εξυπηρετητών',
	'EXTENSIONS_UPDATED'			=> 'Οι επεκτάσεις ενημερώθηκαν με επιτυχία.',
	'EXTENSION_EXIST'				=> 'Η επέκταση %s υπάρχει ήδη.',
	'EXTENSION_GROUP'				=> 'Ομάδα επεκτάσεων',
	'EXTENSION_GROUPS'				=> 'Ομάδες επεκτάσεων',
	'EXTENSION_GROUP_DELETED'		=> 'Η ομάδα επεκτάσεων διαγράφηκε με επιτυχία.',
	'EXTENSION_GROUP_EXIST'			=> 'Η ομάδα επεκτάσεων %s υπάρχει ήδη.',

	'EXT_GROUP_ARCHIVES'			=> 'Συμπιεσμένα αρχεία',
	'EXT_GROUP_DOCUMENTS'			=> 'Έγγραφα',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Μεταφορτώσιμα αρχεία',
	'EXT_GROUP_FLASH_FILES'			=> 'Αρχεία Flash',
	'EXT_GROUP_IMAGES'				=> 'Εικόνες',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Απλό κείμενο',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime πολυμέσα',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real πολυμέσα',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows πολυμέσα',	

	'FILES_GONE'			=> 'Μερικά από τα συνημμένα που επιλέξατε για διαγραφή δεν υπάρχουν. Μπορεί να έχουν ήδη διαγραφεί. Συνημμένα που υπήρχαν έχουν διαγραφεί.',
	'FILES_STATS_WRONG'		=> 'Το αρχείο στατιστικών στοιχείων σας είναι πιθανόν ανακριβές και πρέπει να επανασυγχρονιστεί. Τρέχουσες τιμές: αριθμός συνημμένων = %1$d, συνολικό μέγεθος συνημμένων = %2$s.<br />Πατήστε %3$sεδώ%4$s για να το επανασυγχρονίσετε.',

	'GO_TO_EXTENSIONS'		=> 'Μεταβείτε στην οθόνη διαχείρισης επεκτάσεων',
	'GROUP_NAME'			=> 'Όνομα ομάδας',

	'IMAGE_LINK_SIZE'			=> 'Διαστάσεις συνδέσμου εικόνας',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Προβολή συνημμένης εικόνας ως σύνδεσμος κειμένου αν η εικόνα είναι μεγαλύτερη από αυτό. Για να απενεργοποιήσετε αυτήν τη συμπεριφορά, ρυθμίστε τις τιμές σε 0px επί 0px.',
	'IMAGICK_PATH'				=> 'ImageMagick διαδρομή',
	'IMAGICK_PATH_EXPLAIN'		=> 'Πλήρης διαδρομή για την εφαρμογή μετατροπής imagemagick, π.χ. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Μέγιστος αριθμός συνημμένων ανά δημοσίευση',
	'MAX_ATTACHMENTS_PM'			=> 'Μέγιστος αριθμός συνημμένων ανά προσωπικό μήνυμα',
	'MAX_EXTGROUP_FILESIZE'			=> 'Μέγιστο μέγεθος αρχείου',
	'MAX_IMAGE_SIZE'				=> 'Μέγιστες διαστάσεις εικόνας',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Μέγιστο μέγεθος συνημμένων εικόνων. Ρυθμίστε αμφότερες τις τιμές σε 0px επί 0px για να απενεργοποιήσετε τον έλεγχο διαστάσεων.',
	'MAX_THUMB_WIDTH'				=> 'Μέγιστο πλάτος/ύψος μικρογραφίας σε εικονοστοιχεία',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Η μικρογραφία που θα δημιουργηθεί δεν θα υπερβαίνει το πλάτος που καθορίζεται εδώ.',
	'MIN_THUMB_FILESIZE'			=> 'Ελάχιστο μέγεθος αρχείου μικρογραφίας',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Να μη δημιουργείται μια μικρογραφία για εικόνες μικρότερες από αυτό.',
	'MODE_INLINE'					=> 'Ενσωματωμένη εμφάνιση',
	'MODE_PHYSICAL'					=> 'Φυσική εμφάνιση',

	'NOT_ALLOWED_IN_PM'			=> 'Επιτρέπεται μόνο σε δημοσιεύσεις',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Δεν επιτρέπεται',
	'NOT_ASSIGNED'				=> 'Δεν εκχωρήθηκε',
	'NO_ATTACHMENTS'			=> 'Δεν βρέθηκαν συνημμένα γι αυτήν την περίοδο.',
	'NO_EXT_GROUP'				=> 'Καμία',
	'NO_EXT_GROUP_NAME'			=> 'Δεν εισήχθη όνομα ομάδας',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Δεν καθορίσθηκε ομάδα επεκτάσεων.',
	'NO_FILE_CAT'				=> 'Καμία',
	'NO_IMAGE'					=> 'Δεν υπάρχει εικόνα',
	'NO_THUMBNAIL_SUPPORT'		=> 'Η υποστήριξη μικρογραφίας έχει απενεργοποιηθεί. Για τη σωστή λειτουργία είτε θα πρέπει να είναι διαθέσιμη η επέκταση GD, είτε να είναι εγκατεστημένο το Ιmagemagick. Αμφότερα δεν βρέθηκαν.',
	'NO_UPLOAD_DIR'				=> 'Ο κατάλογος φόρτωσης που καθορίσατε δεν υπάρχει.',
	'NO_WRITE_UPLOAD'			=> 'Ο κατάλογος φόρτωσης που καθορίσατε δεν μπορεί να εγγραφεί. Παρακαλώ αλλάξτε τα δικαιώματα για να επιτρέψετε στον διακομιστή ιστού να εγγράψει σε αυτόν.',

	'ONLY_ALLOWED_IN_PM'	=> 'Επιτρέπεται μόνο σε προσωπικό μήνυμα',
	'ORDER_ALLOW_DENY'		=> 'Επιτρεπτό',
	'ORDER_DENY_ALLOW'		=> 'Μη Επιτρεπτό',

	'REMOVE_ALLOWED_IPS'		=> 'Αφαίρεση ή από-εξαίρεση <em>επιτρεπτών</em> διευθύνσεων IP / ονόματα εξυπηρετητών',
	'REMOVE_DISALLOWED_IPS'		=> 'Αφαίρεση ή από-εξαίρεση <em>μη επιτρεπτών</em> διευθύνσεων IP / ονόματα εξυπηρετητών',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να επανασυγχρονίσετε τα στατιστικά αρχείων;',

	'SEARCH_IMAGICK'				=> 'Αναζήτηση για ImageMagick',
	'SECURE_ALLOW_DENY'				=> 'Λίστα επιτρεπτών / μη επιτρεπτών',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Αλλάζει την προεπιλεγμένη συμπεριφορά όταν οι ασφαλείς μεταφορτώσεις είναι ενεργοποιημένες στη λίστα επιτρεπτών / μη επιτρεπτών με εκείνη μιας <strong>λίστας επιτρεπόμενων</strong> (Allow) ή μιας <strong>μαύρης λίστας</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Ενεργοποιήστε ασφαλείς μεταφορτώσεις',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Με αυτήν την επιλογή ενεργοποιημένη, οι μεταφορτώσεις είναι περιορισμένες για διευθύνσεις IP / ονόματα εξυπηρετητών που έχετε ορίσει.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Οι ασφαλείς μεταφορτώσεις δεν είναι ενεργοποιημένες. Οι παρακάτω ρυθμίσεις θα εφαρμοστούν μετά την ενεργοποίηση των ασφαλών μεταφορτώσεων.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Η λίστα διευθύνσεων IP ενημερώθηκε με επιτυχία.',
	'SECURE_EMPTY_REFERRER'			=> 'Επιτρέψτε κενό αναφορέα',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Οι ασφαλείς μεταφορτώσεις βασίζονται σε αναφορείς. Θέλετε να επιτρέψετε τις μεταφορτώσεις σε αυτούς παραλείποντας τον αναφορέα;',
	'SETTINGS_CAT_IMAGES'			=> 'Ρυθμίσεις κατηγορίας εικόνων',
	'SPECIAL_CATEGORY'				=> 'Ειδική κατηγορία',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Οι ειδικές κατηγορίες διαφέρουν στον τρόπο απεικόνισής τους μέσα σε δημοσιεύσεις.',
	'SUCCESSFULLY_UPLOADED'			=> 'Επιτυχής αποστολή αρχείου.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Η ομάδα επεκτάσεων προστέθηκε με επιτυχία.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Η ομάδα επεκτάσεων ενημερώθηκε με επιτυχία.',

	'UPLOADING_FILES'				=> 'Φόρτωση αρχείων',
	'UPLOADING_FILE_TO'				=> 'Φόρτωση αρχείου “%1$s” σε αριθμό δημοσίευσης %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Δεν έχετε τα απαραίτητα δικαιώματα για φόρτωση αρχείου στη δημόσια συζήτηση “%s”.',
	'UPLOAD_DIR'					=> 'Κατάλογος φόρτωσης',
	'UPLOAD_DIR_EXPLAIN'			=> 'Διαδρομή αποθήκευσης για συνημμένα. Σημειώστε ότι αν αλλάξετε αυτόν τον κατάλογο, ενώ περιέχει ήδη φορτωμένα συνημμένα, πρέπει να αντιγράψετε χειροκίνητα τα αρχεία στη νέα τους θέση.',
	'UPLOAD_ICON'					=> 'Εικονίδιο φόρτωσης',
	'UPLOAD_NOT_DIR'				=> 'Η τοποθεσία φόρτωσης που καθορίσατε δεν φαίνεται να είναι ένας κατάλογος.',
));
