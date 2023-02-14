<article class="l__col-4">
    <div class="c-service l-flex l-flex--center l-flex--vertical">
        <img src="<?= get_the_post_thumbnail_url() ?>">
            <h3 class="c-title">
                <?= the_title() ?>
            </h3>
            <p>
                <?= the_excerpt() ?>
            </p>
    </div>
</article>