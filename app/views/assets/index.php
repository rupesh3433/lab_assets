<?php require __DIR__ . '/../layout/header.php'; ?>

<h2>Assets List</h2>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Asset Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (empty($assets)): ?>
            <tr>
                <td colspan="5" align="center">No assets found.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($assets as $a): ?>
                <tr>
                    <td><?= $a['id'] ?></td>
                    <td><?= htmlspecialchars($a['asset_name']) ?></td>
                    <td><?= htmlspecialchars($a['category']) ?></td>
                    <td><?= $a['quantity'] ?></td>
                    <td>
                        <a href="index.php?action=edit-asset&id=<?= $a['id'] ?>">Edit</a> |
                        <a
                            href="index.php?action=delete-asset&id=<?= $a['id'] ?>"
                            onclick="return confirm('Delete this asset?')"
                        >
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?php require __DIR__ . '/../layout/footer.php'; ?>
