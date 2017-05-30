<?php get_header(); ?>
    <div class="banner">
        <section class="box">
            <ul class="texts">
                <p>No road is long with good company.</p>
                <p>A candle lights others and consumes itself.</p>
                <p>Do well and have well.</p>
            </ul>
            <div class="avatar"><a href="<?php bloginfo('url'); ?>"><span>Home</span></a> </div>
        </section>
    </div>
    <div class="template">
        <div class="box">
            <h3>
                <p><span>Eric</span>Recommendation</p>
            </h3>
           <!--  <ul>
                               <li><a href="http://localhost/blog/public/a/2"  target="_blank"><img src="http://localhost/blog/public/uploads/20170110091742986.jpg"></a><span>Why China is the next proving ground for open source software</span></li>
                                <li><a href="http://localhost/blog/public/a/11"  target="_blank"><img src="http://localhost/blog/public/uploads/20170110102557869.jpg"></a><span>Apple might be working on AR glasses with Carl Zeiss</span></li>
                                <li><a href="http://localhost/blog/public/a/8"  target="_blank"><img src="http://localhost/blog/public/uploads/20170110101938116.jpg"></a><span>AFL clubs&#039; move to new Perth stadium clouded with uncertainty</span></li>
                                <li><a href="http://localhost/blog/public/a/6"  target="_blank"><img src="http://localhost/blog/public/uploads/20170110101541221.jpg"></a><span>FIFA to expand World Cup to 48 teams for 2026 tournament</span></li>
                                <li><a href="http://localhost/blog/public/a/7"  target="_blank"><img src="http://localhost/blog/public/uploads/20170110101821971.jpg"></a><span>RLPA determined to see NRL players receive fair cut of extra funding from ARLC</span></li>
                                <li><a href="http://localhost/blog/public/a/9"  target="_blank"><img src="http://localhost/blog/public/uploads/20170110102048702.jpg"></a><span>Tyler Wright nominated for Laureus award in action sportsperson category</span></li> 
                            </ul> -->
        </div>
    </div>
    <article class="blogs">
        <h2 class="title_tj">
            <p><span>Articles</span></p>
        </h2>
        <div class="bloglist left">
            
         <!--   <h3>Apple might be working on AR glasses with Carl Zeiss</h3>
            <figure><img src="http://localhost/blog/public/uploads/20170110102557869.jpg"></figure>
            <ul>
                <p>We heard last year that Apple was exploring the possibility of developing augmented reality hardware, and it seems like the company might be edging closer to that goal in the months since that initial report.</p>
                <a title="Apple might be working on AR glasses with Carl Zeiss" href="http://localhost/blog/public/a/11" target="_blank" class="readmore">Learn More>></a>
            </ul>
            <p class="dateview"><span>2017-01-10</span><span>Author：ABHIMANYU GHOSHAL</span></p> -->
            
            <?php if(have_posts()): ?>
                 <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <figure><img src="images/20170110102557869.jpg"></figure>
                        <ul>
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank" class="readmore">Learn More</a>
                            <p class="dateview"><span><?php the_date(); ?></span><span>Author: <?php  the_author(); ?></span></p>
                        </ul>
                  <?php endwhile(); ?>      
             <?php endif(); ?>       
                
            ?>
                        
            <div class="page">
                <ul class="pagination">  
                    <?php posts_nav_link(); ?>
            <!--        <li class="disabled"><span>&laquo;</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="http://localhost/blog/public?page=2">2</a></li>        
                    <li><a href="http://localhost/blog/public?page=2" rel="next">&raquo;</a> </li> -->
            </ul>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </article>
<?php get_footer(); ?>