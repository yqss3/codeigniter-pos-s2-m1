<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today | TaskFlow</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<header>
    <h1>TaskFlow</h1>
    <p>Tasks for Today Management System</p>
</header>

<nav>
    <a class="active" href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('tasks') ?>">Task List</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <h2>Today's Dashboard</h2>
    <p class="subtitle">Here are your tasks scheduled for today.</p>

    <?php
        $totalTasks = count($tasks);
        $completedTasks = 0;

        foreach ($tasks as $task) {
            if (strtolower($task['status']) === 'completed') {
                $completedTasks++;
            }
        }
    ?>

    <div class="summary-grid">
        <div class="summary-card">
            <p>Today's Tasks</p>
            <h3><?= $totalTasks ?></h3>
        </div>

        <div class="summary-card">
            <p>Completed Tasks</p>
            <h3><?= $completedTasks ?></h3>
        </div>
    </div>

    <h2>Today's Tasks</h2>

    <?php if (!empty($tasks)): ?>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
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
            No tasks are scheduled for today.
        </div>
    <?php endif; ?>
</main>

<footer>
    Tasks for Today Management System
</footer>

</body>
</html>