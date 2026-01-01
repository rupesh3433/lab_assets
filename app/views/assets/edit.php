<?php require __DIR__ . '/../layout/header.php'; ?>

<h2>Edit Asset</h2>

<form method="POST" action="index.php?action=update-asset">
    <input type="hidden" name="id" value="<?= $asset['id'] ?>">

    <input
        type="text"
        name="name"
        value="<?= htmlspecialchars($asset['asset_name']) ?>"
        required
    >

    <input
        type="text"
        name="category"
        value="<?= htmlspecialchars($asset['category']) ?>"
    >

    <input
        type="number"
        name="quantity"
        value="<?= $asset['quantity'] ?>"
        required
    >

    <button type="submit">Update Asset</button>
</form>

<p><a href="index.php?action=assets">← Back to Assets</a></p>

<?php require __DIR__ . '/../layout/footer.php'; ?>
