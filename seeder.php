<?php
$users = [
    ['name' => 'petras', 'email' => 'petras@petras.com', 'pass' => md5('123')],
    ['name' => 'ona', 'email' => 'petras1@petras.com', 'pass' => md5('023')],
    ['name' => 'bebras', 'email' => 'petras2@petras.com', 'pass' => md5('223')]
];
$users = json_encode($users);
file_put_contents(__DIR__ . '/users.json', $users);
?>