<ul>
    <?php foreach ($names as $name): ?>
        <li>
            <a href="name.php?<?php echo http_build_query(['name' => $name]) ?>"><?php echo e($name); ?></a>
        </li>
    <?php endforeach; ?>
</ul>


<?php for ($i = 1; $i < $pagination['count'] / $pagination['perPage'] + 1; $i++): ?>
    <a class="button" href="char.php?<?php echo http_build_query(['char' => $char, 'page' => $i]); ?>">

        <?php if ($i === $pagination['page']): ?>
            <strong><u><?php echo e($i); ?></u></strong>
        <?php else: ?>
            <?php echo e($i); ?>
        <?php endif; ?>
    </a>
<?php endfor; ?>
