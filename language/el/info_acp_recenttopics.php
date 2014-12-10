<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'Πρόσφατα Θέματα',
	'RECENT_TOPICS_LIST'			=> 'Εμφάνιση στα "πρόσφατα θέματα"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Να εμφανίζονται τα θέματα αυτής της συζήτησης στα "πρόσφατα θέματα".',

	'RT_CONFIG'						=> 'Ρυθμίσεις',
	'RT_ANTI_TOPICS'				=> 'Εξαιρούμενα θέματα',
	'RT_ANTI_TOPICS_EXP'			=> 'Χωρισμένα με ", " (Παράδειγμα: "7, 9")<br />Εάν δεν θέλετε να εξαιρέσετε κάποιο θέμα, απλώς εισάγετε 0.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determines the minimum level of the topic type to display. It will display topics of the set level, and higher.<br />(0 = normal, 1 = sticky, 2 = announcement, 3 = global announcement)',
	'RT_NUMBER'						=> 'Πρόσφατα θέματα',
	'RT_NUMBER_EXP'					=> 'Πλήθος θεμάτων εμφανιζόμενα στο ευρετήριο.',
	'RT_PAGE_NUMBER'				=> 'Σελίδες προσφάτων θεμάτων',
	'RT_PAGE_NUMBER_EXP'			=> 'Μπορείτε να εμφανίσετε μερικά ακόμα πρόσφατα θέματα μοιράζοντάς τα σε σελίδες. Απλώς εισάγετε 1 για να απενεργοποιήσετε αυτή τη λειτουργία. Εάν εισάγετε 0 θα υπάρχουν τόσες σελίδες όσες χρειάζονται για να εμφανίζονται όλα τα θέματα.',
	'RT_PARENTS'					=> 'Εμφάνιση μητρικών συζητήσεων',
	'RT_PARENTS_EXP'				=> 'Εμφάνιση των μητρικών συζητήσεων στη γραμμή κάθε θέματος στα πρόσφατα θέματα.',
	'RT_UNREADONLY'					=> 'Εμφάνιση μόνο μη-αναγνωσμένων θεμάτων',
	'RT_UNREADONLY_EXP'				=> 'Αυτή η λειτουργία θα εμφανίζει μόνο μη-αναγνωσμένα θέματα (είτε είναι "πρόσφατα" είτε όχι). Αυτή η λειτουργία χρησιμοποιεί τις ίδιες ρυθμίσεις (εξαιρούμενες συζητήσεις/θέματα κτλ.) με την κανονική. Σημείωση: αυτό λειτουργεί μονάχα για συνδεδεμένους χρήστες. Οι επισκέπτες θα βλέπουν την κανονική λίστα.',

	'RT_VIEW_ON'					=> 'Εμφάνιση προσφάτων θεμάτων σε:',
));
