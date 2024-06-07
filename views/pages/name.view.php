<?php if (empty($data)): ?>
    <h3>No data found for this name :/</h3>
<?php else : ?>
    <h1>Statistics for the name: <?php echo e($name) ?></h1>
    <table>
        <thead>
        <tr>
            <th scope="col">Year</th>
            <th scope="col">Number of Babies born</th>
        </tr>
        <tbody>
        <?php foreach ($data as $info) : ?>
            <tr>
                <td> <?php echo e($info['year']); ?></td>
                <td><?php echo e($info['count']); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </thead>
    </table>
<?php endif; ?>