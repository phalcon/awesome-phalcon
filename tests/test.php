<?php

$documentLines = file(realpath(dirname(__DIR__)) . '/README.md');
$indexLines    = [];

$copyStart     = null;

$testLines     = [];
$testPass      = true;
$testMessages  = [];

foreach ($documentLines as $index => $line) {
  $line = rtrim($line);
  preg_match('/^(?:##)\s+(?:.+)$/i', $line, $matches);

  if (empty($matches)) {
    continue;
  }

  if (null === $copyStart) {
    $copyStart = $index;
    continue;
  }

  $topic = ltrim($documentLines[$copyStart], '# ');
  $testLines[$topic] = array_slice($documentLines, $copyStart, $index-$copyStart);
  $copyStart = $index;
}

foreach ($testLines as $topic => $lines) {
  $topic = trim($topic);
  $original = [];

  foreach ($lines as $index => $line) {
    $line = trim($line);
    
    if (0 !== strpos($line, '* [')) {
      continue;
    }

    preg_match('#^\* \[(.+)\]\(https?://.+\)\s+-.+$#iu', $line, $matches);

    if (empty($matches) || !isset($matches[1]))  {
      continue;
    }
    
    $original[] = $matches[1];
  }

  $sorted = $original;
  sort($sorted, SORT_STRING | SORT_FLAG_CASE);

  $compare = array_diff_assoc($sorted, $original);
  
  if (empty($compare)) {
    continue;
  }

  $testPass = false;
  $topic = "\033[40;37m " . $topic . " \033[00m";
  //$testMessages[$topic] = [];

  foreach ($compare as $index => $name) {
    $testMessages[$topic][] = sprintf(
      "Expected \033[40;32m %s \033[00m but actual is \033[40;31m %s \033[00m",
      $sorted[$index],
      $original[$index]
    );
  }
}

$errorMessage = function($msg) {
  return "\033[41;37m$msg\033[00m";
};

$successMessage = function($msg) {
  return "\033[42;37m$msg\033[00m";
};

$lineBorder = function($msg) {
  return str_repeat(' ', strlen($msg));
};

if (!$testPass) {
  echo PHP_EOL;
  $totalErrorsCount = 0;

  foreach ($testMessages as $topic => $messages) {
    echo $topic, PHP_EOL;

    foreach ($messages as $message) {
      $totalErrorsCount++;
      echo ' * ', $message, PHP_EOL;
    }
  }
  
  $message = "   The tests failed! Total errors count: $totalErrorsCount   ";
  printf("\n%s\n%s\n%s\n\n", $errorMessage($lineBorder($message)), $errorMessage($message), $errorMessage($lineBorder($message)));
  exit(1);
} else {
  $message = "   Ok. The tests successfully passed; you rock!   ";
  printf("\n%s\n%s\n%s\n\n", $successMessage($lineBorder($message)), $successMessage($message), $successMessage($lineBorder($message)));
  exit(0);
}

