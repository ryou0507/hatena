<?php

/*
Template Name: schedule
*/
get_header(); // ヘッダーの読み込み
?>


<div class="movies-all-container">
    <section class="movies-firstview-section">
        <div class="movies-firstview-container">
            <div class="vertical-bar"></div>
            <p class="movies-subtitle">schedule</p>
            <div class="horizontal-bar">
                <h1 class="movies-title">スケジュール</h1>
            </div>
        </div>
    </section>

    <section class="schedule-list-section">
        <div class="schedule-list-content">
            <div class="schedule-list-bar"></div>
            <div class="schedule-list-container">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                echo do_shortcode('[schedule_list posts_per_page="10" show_pagination="true"]'); // スケジュールページでは10件を表示
                ?>
            </div>
        </div>
    </section>
</div>






<?php get_footer(); ?>