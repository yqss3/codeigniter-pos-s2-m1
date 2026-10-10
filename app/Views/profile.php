<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | TaskFlow</title>
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
    <a class="active" href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <h2>Demo User Profile</h2>
    <p class="subtitle">Account information retrieved from the database.</p>

    <?php if (!empty($user)): ?>
        <div class="card">
            <h2><?= esc($user['full_name']) ?></h2>

            <div class="profile-detail">
                <span class="label">Username:</span>
                <?= esc($user['username']) ?>
            </div>

            <div class="profile-detail">
                <span class="label">Email:</span>
                <?= esc($user['email']) ?>
            </div>

            <div class="profile-detail">
                <span class="label">Account Created:</span>
                <?= esc($user['created_at']) ?>
            </div>
        </div>
    <?php else: ?>
        <div class="empty-message">
            No user record was found.
        </div>
    <?php endif; ?>
</main>

<footer>
    Tasks for Today Management System
</footer>

</body>
</html>