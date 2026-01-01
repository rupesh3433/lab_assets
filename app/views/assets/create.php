<?php require __DIR__ . '/../layout/header.php'; ?>

<h2>Add New Asset</h2>

<form method="POST" action="index.php?action=add-asset">
    <input
        type="text"
        name="name"
        placeholder="Asset Name"
        required
    >

    <input
        type="text"
        name="category"
        placeholder="Category"
    >

    <input
        type="number"
        name="quantity"
        min="1"
        placeholder="Quantity"
        required
    >

    <button type="submit">Add Asset</button>
</form>

<p><a href="index.php?action=assets">← Back to Assets</a></p>

<?php require __DIR__ . '/../layout/footer.php'; ?>
