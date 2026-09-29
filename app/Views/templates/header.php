<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks Today') ?> | Tasks Today</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= base_url('/') ?>"><span class="brand-mark">✓</span> Tasks Today</a>
            <nav aria-label="Main navigation">
                <a class="<?= ($title ?? '') === 'Welcome' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Welcome</a>
                <a class="<?= ($title ?? '') === 'Task List' ? 'active' : '' ?>" href="<?= base_url('tasks') ?>">Task List</a>
                <a class="<?= ($title ?? '') === 'Profile' ? 'active' : '' ?>" href="<?= base_url('profile') ?>">Profile</a>
                <a class="<?= ($title ?? '') === 'About' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
            </nav>
        </div>
    </header>
    <main class="container main-content">
