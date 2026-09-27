<div class="card">
    <h1>User Accounts</h1>
    <p>Sample staff/user records (static data source &mdash; no database yet).</p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php if (! empty($users)) : ?>
                <?php foreach ($users as $index => $user) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No user records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
