<?php

$documentLines = file('README.md');
$indexLines    = [];

$copyStart     = null;
$copyEnd       = null;
$i = 1;

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
  $sorted   = [];

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
  sort($sorted);

  $compare = array_diff_assoc($sorted, $original);
  
  if (empty($compare)) {
    continue;
  }

  $testPass = false;

  foreach ($compare as $index => $name) {
    $testMessages[] = sprintf(
      "For \033[40;37m %s \033[00m section expected \033[40;32m %s \033[00m but actual is \033[40;31m %s \033[00m",
      $topic,
      $sorted[$index],
      $original[$index]
    );
  }
}

if (!$testPass) {
  echo PHP_EOL;

  foreach ($testMessages as $message) {
    echo $message, PHP_EOL;
  }

  exit(1);
} else {
  echo "\033[40;37m The tests successfully passed \033[00m", PHP_EOL;
  exit(0);
}

