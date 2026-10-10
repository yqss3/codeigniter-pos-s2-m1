<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Developer | TaskFlow</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<header>
    <h1>TaskFlow</h1>
    <p>Tasks for Today Management System</p>
</header>

<nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('tasks') ?>">Task List</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a class="active" href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <h2>About the Developer</h2>
    <p class="subtitle">Information about this project and its developer.</p>

    <div class="card">
        <h2>Tasks for Today Management System</h2>

        <p>
            This application organizes and displays daily tasks
            using PHP, CodeIgniter 4, and MySQL.
        </p>

        <hr>

        <p><span class="label">Developer:</span> Ryan Dela Cruz</p>
        <p><span class="label">Course:</span> IT0049 - Web System Technologies</p>
        <p><span class="label">Framework:</span> CodeIgniter 4</p>
        <p><span class="label">Database:</span> MySQL</p>

        <p class="about-accent">
            Stay organized. Track your tasks. Make progress every day.
        </p>
    </div>
</main>

<footer>
    Developed by Ryan Dela Cruz
</footer>

</body>
</html>