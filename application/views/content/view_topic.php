<div class="container">
            <header class="section-heading p-b-40">
                <h1 class="text-left">Topics</h1>
                <p class="text-left">There are the topics that you post, this post can be deleted and can also be updated. Enjoy it..!</p>
            </header>
            <div class="row">
                <?php foreach ($getDataArticle as  $value) { ?>
                <div class="col-lg-3" >
                
                    <article class="post"><span class="ico icon-document-text"></span>
                        <h2><a href="#"><?php echo $value->article_title; ?></a></h2>
                        <a href="<?php echo base_url(); ?>index.php/blog/show_article/<?php echo $value->article_id; ?>">Read Article</a>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                        <a href="#">Edit Article</a>
                    </article>
                    
                </div>
                <?php   } ?>
                
            </div>
            <!--<nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>-->
        </div>