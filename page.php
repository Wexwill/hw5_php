<?php require_once './header.php' ?>
<?php require_once './pagesData.php' ?>

        <?php 
            // Страница About Us

        if ($_GET['id'] === 'about'): ?>

            <section class="aboutUs">
                <div class="container">

                    <?php echo $pagesData[$_GET['id']]['title']; 
                    echo $pagesData[$_GET['id']]['body']; 
                    echo $pagesData[$_GET['id']]['image']; ?>

                </div>
            </section>

        <?php endif;
        
        // Страница Our Blog

        if ($_GET['id'] === 'blog'): ?>

            <section class="ourBlog">
                <div class="container">

            <?php echo $pagesData[$_GET['id']]['title']; 
            foreach ($pagesData['blog']['body'] as $key => $article): ?>
                <div class="blog_item">
                    <?php echo $article['name'];
                    if (!empty($article['image'])): echo $article['image']; endif;
                    echo $article['content'];
                     ?>
                </div>
            <?php endforeach; ?>

                </div>
            </section>

        <?php endif;

        if ($_GET['id'] === 'portfolio'): ?>

            <section class="portf">
                <div class="container">

                    <div class="port_top">
                        <?php echo $pagesData[$_GET['id']]['title']; ?>
                    </div>

                    <div class="port_bot">

                        <?php foreach ($pagesData['portfolio']['body'] as $key => $portfolio): ?>
                            <div class="item">
                                <?php echo $portfolio['image'];
                                echo $portfolio['name'];
                                echo $portfolio['content']; ?>
                            </div>
                        <?php endforeach ?>
                            
                    
                    </div> 
                
                </div>
            </section>
            
        <?php endif; 
        
        if ($_GET['id'] === 'contact'): ?>

            <section class="contact"> 
                <div class="container">

                    <?php echo $pagesData['contact']['title']?>

                    <form method="POST" action="/form.php">

                        <?php foreach ($pagesData['contact']['body'] as $key => $form): ?>
                            <div class="form_field">
                                <?php echo $form; ?>
                            </div> 
                        <?php endforeach; ?>

                        <div class="sub"><button type="submit">Accept</button></div>
		                <div class="res"><button type="reset">Reset</button></div>

                    </form>

                </div>
            </section>


        <?php endif; ?>


<?php require_once './footer.php' ?>
<?php require_once './copyright.php' ?>