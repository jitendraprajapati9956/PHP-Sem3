<<?php
date_default_timezone_set('UTC');

$isValidDate = checkdate(2, 29, 2024); 
echo "<b>Is February 29, 2024 valid?</b> " . ($isValidDate ? "Yes" : "No") . "<br>";

$date = date_create();
echo "<b>Current date and time:</b> " . date_format($date, "Y-m-d H:i:s") . "<br>";

date_add($date, date_interval_create_from_date_string("3 days"));
echo "<b>Date after adding 3 days:</b> " . date_format($date, "Y-m-d H:i:s") . "<br>";

$dateString = "2023-10-21 15:30:45";
$date = date_create_from_format("Y-m-d H:i:s", $dateString);
echo "<b>Parsed date:</b> " . date_format($date, "Y-m-d H:i:s") . "<br>";

$defaultTimezone = date_default_timezone_get();
echo "<b>Default timezone:</b> " . $defaultTimezone . "<br>";

$date1 = date_create("2023-10-21");
$date2 = date_create("2023-10-24");
$interval = date_diff($date1, $date2);
echo "<b>Difference between two dates:</b> " . $interval->format("%R%a days") . "<br>";

$date = date_create("2023-10-21");
$formattedDate = date_format($date, "l, F j, Y");
echo "<b>Formatted date:</b> " . $formattedDate . "<br>";

$date = date_create("2023-10-21");
date_modify($date, "+1 week");
echo "<b>Date after modifying:</b> " . date_format($date, "Y-m-d") . "<br>";

$date = date_create("2023-10-21");
date_time_set($date, 14, 30, 0);
echo "<b>Date with time set:</b> " . date_format($date, "Y-m-d H:i:s") . "<br>";

$date = date_create("2023-10-21");
$timestamp = date_timestamp_get($date);
echo "<b>Unix timestamp:</b> " . $timestamp . "<br>";

$date = date_create();
date_timestamp_set($date, 1695907200);
echo "<b>Date from timestamp:</b> " . date_format($date, "Y-m-d H:i:s") . "<br>";

$currentDate = date("Y-m-d H:i:s");
echo "<b>Current date and time using date():</b> " . $currentDate . "<br>";

$dateInfo = getdate();
echo "<b>getdate() results:</b> ";
print_r($dateInfo);
echo "<br>";

$timeInfo = gettimeofday();
echo "<b>gettimeofday() results:</b> ";
print_r($timeInfo);
echo "<br>";

$timestamp = mktime(8, 30, 0, 10, 21, 2023);
echo "<b>Date created using mktime():</b> " . date("Y-m-d H:i:s", $timestamp) . "<br>";

setlocale(LC_TIME, 'en_US');
$formattedTime = strftime("%A, %B %d, %Y %H:%M:%S");
echo "<b>Formatted time using strftime():</b> " . $formattedTime . "<br>";

$timeString = "Monday, October 21, 2023 15:30:45";
$parsedTime = strptime($timeString, "%A, %B %d, %Y %H:%M:%S");
echo "Parsed time using strptime(): ";
print_r($parsedTime);
echo "<br>";

$timestamp = strtotime("next Saturday");
echo "Timestamp for 'next Saturday': " . $timestamp . "<br>";

$timestamp = time();
echo "Current Unix timestamp: " . $timestamp . "<br>";

$timezoneAbbreviations = timezone_abbreviations_list();
echo "Timezone abbreviations: ";
print_r($timezoneAbbreviations);
echo "<br>";

$timezones = timezone_identifiers_list();
echo "Timezones: ";
print_r($timezones);
echo "<br>";
?>
