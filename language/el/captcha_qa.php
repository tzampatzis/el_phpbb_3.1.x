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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Αυτή η ερώτηση είναι ένα μέσο για την πρόληψη αυτοματοποιημένων υποβολών φόρμας από κακόβουλη χρήση.',
	'CONFIRM_QUESTION_WRONG'	=> 'Έχετε υποβάλει μια μη έγκυρη απάντηση στην ερώτηση.',
	'CONFIRM_QUESTION_MISSING'	=> 'Οι ερωτήσεις για το captcha δεν μπόρεσαν να ανακτηθούν. Παρακαλώ επικοινωνήστε με το διαχειριστή του συστήματος.',

	'QUESTION_ANSWERS'			=> 'Απαντήσεις',
	'ANSWERS_EXPLAIN'			=> 'Παρακαλώ εισάγετε έγκυρες απαντήσεις στην ερώτηση, μία ανά γραμμή',
	'CONFIRM_QUESTION'			=> 'Ερώτηση',

	'ANSWER'					=> 'Απάντηση',
	'EDIT_QUESTION'				=> 'Επεξεργασία ερώτησης',
	'QUESTIONS'					=> 'Ερωτήσεις',
	'QUESTIONS_EXPLAIN'			=> 'Για κάθε υποβολή φόρμας όπου έχετε ενεργοποιήσει την Q&amp;A μονάδα, τα μέλη θα ερωτηθούν με μια από τις ερωτήσεις που καθορίζονται εδώ. Για να χρησιμοποιήσετε αυτήν τη μονάδα τουλάχιστον μία ερώτηση πρέπει να οριστεί στην προεπιλεγμένη γλώσσα. Αυτές οι ερωτήσεις θα πρέπει να είναι εύκολες για το κοινό στο οποίο απευθύνονται για να απαντήσει, αλλά πέραν της ικανότητας ενός bot να μπορεί να λειτουργεί μια αναζήτηση στο Google™. Χρησιμοποιώντας ένα μεγάλο και τακτικά τροποποιημένο σύνολο ερωτήσεων θα αποφέρει τα καλύτερα αποτελέσματα. Ενεργοποιήστε τον αυστηρό έλεγχο αν η ερώτησή σας βασίζεται σε μικτή περίπτωση, στίξη ή κενά.',
	'QUESTION_DELETED'			=> 'Η ερώτηση διαγράφηκε',
	'QUESTION_LANG'				=> 'Γλώσσα',
	'QUESTION_LANG_EXPLAIN'		=> 'Η γλώσσα στην οποία είναι γραμμένη η ερώτηση και οι απαντήσεις της.',
	'QUESTION_STRICT'			=> 'Αυστηρός έλεγχος ',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ενεργοποιήστε για την επιβολή μικτής περίπτωσης, τα σημεία στίξης και τα κενά.',

	'QUESTION_TEXT'				=> 'Ερώτηση',
	'QUESTION_TEXT_EXPLAIN'		=> 'Η ερώτηση που παρουσιάζεται στο μέλος.',

	'QA_ERROR_MSG'				=> 'Παρακαλώ συμπληρώστε όλα τα πεδία και εισάγετε τουλάχιστον μια απάντηση.',
	'QA_LAST_QUESTION'			=> 'Δεν μπορείτε να διαγράψετε όλες τις ερωτήσεις, ενώ η μονάδα είναι ενεργή.',

));
