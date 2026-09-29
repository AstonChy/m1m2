<?= $this->include('templates/header') ?>

<div class="page-heading"><p class="eyebrow">WORK QUEUE</p><h1>Task List</h1><p>Every task in the system, arranged by scheduled date.</p></div>
<div class="table-shell">
    <table>
        <thead><tr><th>Task</th><th>Status</th><th>Scheduled date</th><th>Created</th></tr></thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td class="task-name"><?= esc($task['title']) ?></td>
                <td><span class="status status-<?= url_title($task['status'], '-', true) ?>"><?= esc(ucwords($task['status'])) ?></span></td>
                <td><?= date('M j, Y', strtotime($task['task_date'])) ?></td>
                <td><?= date('M j, Y g:i A', strtotime($task['created_at'])) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footer') ?>
