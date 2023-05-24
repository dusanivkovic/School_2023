<?php 
/* 
Template Name: Contact Us 
*/
get_header(); ?>
<section class="page">
    <div class="container-fluid">
        <div class="wrapper col-lg-8 p-3 py-5 p-lg-5 mb-2">
            <div class="row justify-content-center p-5">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><?php the_field('mejl-adresa'); ?></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><?php the_field('mejl-textarea'); ?></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <a class="btn btn-outline-primary my-2 display-4"><?php the_field('mejl-proslijedi'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>