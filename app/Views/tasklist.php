<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Task List | TaskFlow</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<header>
    <h1>TaskFlow</h1>
    <p>Tasks for Today Management System</p>
</header>

<nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a class="active" href="<?= base_url('tasks') ?>">Task List</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <h2>Complete Task List</h2>
    <p class="subtitle">View all your scheduled tasks and their current status.</p>

    <div class="card">
        <p>
            Total tasks:
            <strong><?= count($tasks) ?></strong>
        </p>
    </div>

    <?php if (!empty($tasks)): ?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['id']) ?></td>
                            <td><?= esc($task['title']) ?></td>
                            <td>
                                <span class="status <?= esc(strtolower($task['status'])) ?>">
                                    <?= esc(ucfirst($task['status'])) ?>
                                </span>
                            </td>
                            <td><?= esc($task['task_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="empty-message">
            No tasks are available.
        </div>
    <?php endif; ?>
</main>

<footer>
    Tasks for Today Management System
</footer>

</body>
</html>