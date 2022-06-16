<?php

require 'kirby/bootstrap.php';

// Names of weekdays used for date formatting
const WEEKDAY_NAMES = [
  'de' => ['Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag'],
  'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
];

echo (new Kirby)->render();

/**
 * Format date
 * @param $date
 * @return string
 */
function getFormattedDate($date) {
  $kirby = Kirby::instance();
  $lang = $kirby->language();
	$langCode = $lang->code();
  $phpdate = strtotime($date);
  $numChars = $langCode === 'en' ? 3 : 2;
  return substr(WEEKDAY_NAMES[$langCode][date('N', $phpdate) - 1], 0, $numChars) . ', ' . date('d.m.Y', $phpdate);
}