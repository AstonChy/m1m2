<?= $this->include('templates/header') ?>

<div class="page-heading"><p class="eyebrow">ACCOUNT</p><h1>Profile</h1><p>The demo user account for this task-management system.</p></div>
<?php if ($user): ?>
<section class="profile-card">
    <div class="avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
    <div><p class="eyebrow">DEMO USER</p><h2><?= esc($user['full_name']) ?></h2><p class="muted">@<?= esc($user['username']) ?></p></div>
    <dl class="profile-details"><div><dt>Email address</dt><dd><?= esc($user['email']) ?></dd></div><div><dt>Account created</dt><dd><?= date('F j, Y', strtotime($user['created_at'])) ?></dd></div></dl>
</section>
<?php else: ?><div class="empty-state"><h3>No profile found</h3><p>Run the TaskSeeder to create the demo user.</p></div><?php endif; ?>

<?= $this->include('templates/footer') ?>
