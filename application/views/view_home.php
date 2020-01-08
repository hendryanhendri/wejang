<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/basic/favicon.ico" type="image/x-icon">
    <title>WE JA NG</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING</div>
    </div>
</div>

<div id="app" class="paper-loading">
<!-- Header -->
<nav class="mainnav navbar navbar-default justify-content-between">
    <div class="container relative">
        <a class="offcanvas dl-trigger paper-nav-toggle" data-toggle="offcanvas"
           aria-expanded="false" aria-label="Toggle navigation">
            <i></i>
        </a>
        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Home">
            <img class="d-inline-block align-top" alt="" src="<?php echo base_url() ?>assets/img/basic/logo.png" height="70px" widht="170">
        </a>
        <div class="paper_menu">
            <div id="dl-menu" class="xv-menuwrapper responsive-menu">
    <ul class="dl-menu align-items-center">
        <li><a href="<?php echo base_url(); ?>index.php/Home">Home</a></li>
        <li class="parent"><a href="#">Pages</a>
            <ul class="lg-submenu">
                <li><a href="<?php echo base_url(); ?>index.php/Blog/">Post Topics</a>
                <li><a href="<?php echo base_url(); ?>index.php/topics">Topics</a>
                <li><a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
                <li><a href="<?php echo base_url(); ?>index.php/changepassword">Change Password</a>
            </li>
            </ul>
        </li>
       
        <li><a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-default nav-btn">Log
            Out</a>
        </li>
    </ul>
</div>
<!-- Login modal -->
        </div>
    </div>
</nav>
<main>
    <!-- Search Section -->
    <section class="search-section home-search">
        <div class="masthead text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-md-auto">
                        <h1>Knowledgebase</h1>
                        <p class="lead text-muted">The potential for forgetting has an impact on work efficiency, therefore this application <br> is made so that any work that has  been done can be handled quickly.</p>
                        
                        <form>
                            <input type="text" class="search-field" placeholder="Search Something ... ">
                            <button type="submit"><i class="icon icon-search"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Topics -->
    <section class="topics">
        <div class="container">
            <div class="row">
            
                <?php foreach ($getDistictCategory as  $value) { ?>
                <div class="col-xl-4 col-md-6">
                    <div class="topics-wrapper border-style">
                        <h3><a href="#"><span class="icon icon-circle-o text-blue"></span><?php echo $value->category; ?></a></h3>
                        
                        <ul class="topics-list">
                        <?php
                        $this->db->select('*');
                        $this->db->where('category_name', $value->category);
                        $this->db->order_by('article_id', 'desc');
                        $this->db->limit(5);
                        $query = $this->db->get('view_article');
                        foreach ($query->result() as $row) { ?>
                            <li><a href="<?php echo base_url(); ?>index.php/blog/show_article/<?php echo $row->article_id; ?>"> <?php echo $row->article_title; ?> </a>
                            </li>
                            <?php  } ?>
                        </ul> 
                        <ul class="topics-meta">
                        <?php
                        $this->db->select('count(*) as total');
                        $this->db->where('category_name', $value->category);
                        $this->db->group_by('category_name');
                        $query = $this->db->get('view_article');
                        foreach ($query->result() as $row1) { ?>

                            <li><?php echo $row1->total; ?> Topics</li>

                        <?php }?>

                        </ul>
                    </div>     
                 </div>
            
               <?php  } ?>
            </div>
        </div>
    </section>
</main>

<?php $this->view('template/view_footer') ;?>

<!--End Page page_wrrapper -->
<script src="<?php echo base_url() ?>assets/js/app.js"></script>

</body>
</html>