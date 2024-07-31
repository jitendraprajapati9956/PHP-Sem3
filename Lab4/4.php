<<?php
date_default_timezone_set('UTC');

$isValidDate = checkdate(2, 29, 2024); 
echo "Is February 29, 2024 valid? " . ($isValidDate ? "Yes" : "No") . "<br>";

$date = date_create();
echo "Current date and time: " . date_format($date, "Y-m-d H:i:s") . "<br>";

date_add($date, date_interval_create_from_date_string("3 days"));
echo "Date after adding 3 days: " . date_format($date, "Y-m-d H:i:s") . "<br>";

$dateString = "2023-10-21 15:30:45";
$date = date_create_from_format("Y-m-d H:i:s", $dateString);
echo "Parsed date: " . date_format($date, "Y-m-d H:i:s") . "<br>";

$defaultTimezone = date_default_timezone_get();
echo "Default timezone: " . $defaultTimezone . "<br>";

$date1 = date_create("2023-10-21");
$date2 = date_create("2023-10-24");
$interval = date_diff($date1, $date2);
echo "Difference between two dates: " . $interval->format("%R%a days") . "<br>";

$date = date_create("2023-10-21");
$formattedDate = date_format($date, "l, F j, Y");
echo "Formatted date: " . $formattedDate . "<br>";

$date = date_create("2023-10-21");
date_modify($date, "+1 week");
echo "Date after modifying: " . date_format($date, "Y-m-d") . "<br>";

$date = date_create("2023-10-21");
date_time_set($date, 14, 30, 0);
echo "Date with time set: " . date_format($date, "Y-m-d H:i:s") . "<br>";

$date = date_create("2023-10-21");
$timestamp = date_timestamp_get($date);
echo "Unix timestamp: " . $timestamp . "<br>";

$date = date_create();
date_timestamp_set($date, 1695907200);
echo "Date from timestamp: " . date_format($date, "Y-m-d H:i:s") . "<br>";

$currentDate = date("Y-m-d H:i:s");
echo "Current date and time using date(): " . $currentDate . "<br>";

$dateInfo = getdate();
echo "getdate() results: ";
print_r($dateInfo);
echo "<br>";

$timeInfo = gettimeofday();
echo "gettimeofday() results: ";
print_r($timeInfo);
echo "<br>";

$timestamp = mktime(8, 30, 0, 10, 21, 2023);
echo "Date created using mktime(): " . date("Y-m-d H:i:s", $timestamp) . "<br>";

setlocale(LC_TIME, 'en_US');
$formattedTime = strftime("%A, %B %d, %Y %H:%M:%S");
echo "Formatted time using strftime(): " . $formattedTime . "<br>";

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
