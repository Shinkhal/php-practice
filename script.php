<?php
for ($i = 1; $i <= 60; $i++) {
    $commits = rand(1, 3);
    for ($j = 0; $j < $commits; $j++) {
        $month = rand(9, 11);
        $day = rand(1, 30);
        $year = 2024;
        $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
        file_put_contents('file.txt', $date . PHP_EOL, FILE_APPEND);
        exec('git add .');
        exec('git commit --date="' . $date . '" -m "latest commit"');
    }
}
exec('git push -u origin main');
?>
