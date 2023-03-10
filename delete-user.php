<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        exit('User does not exist!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the user!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: view-user.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>


<?=template_header('Delete')?>

<div class="content delete">
	<h2>Delete User</h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <!-- Asking admin confirmation to delete the user -->
    <?php else: ?>
	<p>Are you sure you want to delete user?</p>
    <div class="yesno">
        <a href="delete-user.php?id=<?=$user['id']?>&confirm=yes">Yes</a>
        <a href="delete-user.php?id=<?=$user['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>