<section class="c-section c-section--gray c-section--more-padding-top c__center" id="servicos">
    <div class="c__container">
        <h2 class="c-title c-title--decoration">
            Serviços
        </h2>
        <p>
            A Enertec possui um leque variado de serviços para melhor atender
            suas necessidades.
        </p>

        <div class="c-services">
            <div class="l-flex l-flex--center l-flex--negative l-flex--wrap l-flex--stretch">
            <?php
                        //Selects the 6 lasts services in the database and shows then
                        $args = array('post_type' => 'servico', 'posts_per_page' => -1, 'orderby'=>"title", 'order'=>'asc');
                        $query = new WP_Query($args);
                        while ($query->have_posts()) : $query->the_post();
                            include('partials/service-item.php');
                        endwhile; ?>
            </div>
        </div>
    </div>
</section>