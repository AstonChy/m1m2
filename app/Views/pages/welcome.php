<?= $this->include('templates/header') ?>

<section class="hero">
    <div>
        <p class="eyebrow">DAILY WORKSPACE</p>
        <h1>Good day, Ashton.</h1>
        <p class="hero-copy">Here are the tasks scheduled for today. Keep your momentum going.</p>
    </div>
    <div class="date-card"><span>Today</span><strong><?= date('F j, Y', strtotime($today)) ?></strong></div>
</section>

<section class="section-heading">
    <div><p class="eyebrow">TODAY'S PLAN</p><h2>Tasks for today</h2></div>
    <a class="button button-light" href="<?= base_url('tasks') ?>">View all tasks <span>→</span></a>
</section>

<?php if (empty($tasks)): ?>
    <div class="empty-state"><div class="empty-icon">✓</div><h3>No tasks scheduled</h3><p>Your schedule is clear for today.</p></div>
<?php else: ?>
    <div class="task-grid">
        <?php foreach ($tasks as $task): ?>
            <article class="task-card">
                <div class="task-top"><span class="status status-<?= url_title($task['status'], '-', true) ?>"><?= esc(ucwords($task['status'])) ?></span><span class="task-time"><?= date('g:i A', strtotime($task['created_at'])) ?></span></div>
                <h3><?= esc($task['title']) ?></h3>
                <p>Scheduled for today</p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?= $this->include('templates/footer') ?>
