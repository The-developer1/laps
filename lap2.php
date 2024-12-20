<?php
// إضافة عنصر أو أكثر إلى نهاية المصفوفة
array_push($array, $value);

// إزالة آخر عنصر من المصفوفة وإعادته
$value = array_pop($array);

// إزالة أول عنصر من المصفوفة وإعادته
$value = array_shift($array);

// إضافة عنصر أو أكثر إلى بداية المصفوفة
array_unshift($array, $value);

// قص جزء من المصفوفة
$newArray = array_slice($array, $offset, $length);

// تطبيق دالة على كل عنصر في المصفوفة
$newArray = array_map($callback, $array);

// تصفية العناصر بناءً على دالة معينة
$filteredArray = array_filter($array, $callback);

// دمج مصفوفتين أو أكثر
$mergedArray = array_merge($array1, $array2);
?>
------------------------------------------------------------------------------------
<?php
// الحصول على طول السلسلة
$length = strlen($string);

// العثور على موضع أول ظهور لسلسلة فرعية
$position = strpos($string, $substring);

// قص جزء من السلسلة
$part = substr($string, $start, $length);

// استبدال جزء من السلسلة
$newString = str_replace($search, $replace, $string);

// تحويل السلسلة إلى أحرف صغيرة
$lower = strtolower($string);

// تحويل السلسلة إلى أحرف كبيرة
$upper = strtoupper($string);

// إزالة المسافات الزائدة من بداية ونهاية السلسلة
$trimmed = trim($string);

// تقسيم السلسلة إلى مصفوفة باستخدام فاصل
$array = explode($delimiter, $string);

// دمج عناصر مصفوفة إلى سلسلة باستخدام فاصل
$string = implode($delimiter, $array);
?>