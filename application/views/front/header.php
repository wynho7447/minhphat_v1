<?php
$facebook = $this->db->get_where('social_links', array('type' => 'facebook'))->row()->value;
$googleplus = $this->db->get_where('social_links', array('type' => 'google-plus'))->row()->value;
$twitter = $this->db->get_where('social_links', array('type' => 'twitter'))->row()->value;
$skype = $this->db->get_where('social_links', array('type' => 'skype'))->row()->value;
$youtube = $this->db->get_where('social_links', array('type' => 'youtube'))->row()->value;
$pinterest = $this->db->get_where('social_links', array('type' => 'pinterest'))->row()->value;
?>
<body class="smoothscroll">
    <div id="wrapper">
        <div id="header" > <!-- class="sticky" for sticky menu -->

            <!-- Top Bar -->
            <header id="topBar" class="styleBackgroundColor">
                <div class="container">

                    <!-- mail , phone -->
                    <div class="call-us fsize13 pull-left margin-top10">
                        Hãy liên hệ cho chúng tôi: <strong>(84.8) 625 78424 </strong>
                        <span class="hide_mobile">
                            &bull; <a href="mailto:thietbiminhphat@gmail.com">thietbiminhphat@gmail.com</a>
                        </span>
                    </div>

                    <div class="pull-right fsize13 hide_mobile">

                        <div class="block text-right"><!-- social -->
                            <a href="<?php echo $facebook; ?>" class="social fa fa-facebook"></a>
                            <a href="<?php echo $twitter; ?>" class="social fa fa-twitter"></a>
                            <a href="<?php echo $googleplus; ?>" class="social fa fa-google-plus"></a>
                            <a href="<?php echo $pinterest; ?>" class="social fa fa-pinterest"></a>
                        </div><!-- /social -->

                    </div>

                </div><!-- /.container -->
            </header>
            <!-- /Top Bar -->


            <!-- Top Nav -->
            <header id="topNav">
                <div class="container">

                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <img src="<?php echo $this->crud_model->logo('home_top_logo'); ?>" height="50" Mat alt="Logo" />
                    </a>

                    <!-- Mobile Menu Button -->
                    <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Search -->
                    <form class="search" method="get" action="page-search.html">
                        <input type="text" class="form-control" name="s" value="" placeholder="Search">
                        <button class="fa fa-search"></button>
                    </form>
                    <!-- /Search -->

                    <!-- Top Nav -->
                    <div class="navbar-collapse nav-main-collapse collapse">
                        <nav class="nav-main">

                            <!--
                                    NOTE
                                    
                                    For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                    Direct Link Example: 

                                    <li>
                                            <a href="#">HOME</a>
                                    </li>
                            -->
                            <ul id="topMain" class="nav nav-pills nav-main colored"><!-- "colored" class = colored active menu -->
                                <li class="mega-menu dropdown active">
                                    <a class="dropdown-toggle" href="#">
                                        <strong>TRANG CHỦ</strong><span>&nbsp;</span>
                                    </a>                                    
                                </li>
                                <li class="dropdown mega-menu">
                                    <a class="dropdown-toggle" href="#">GIỚI THIỆU <span>&nbsp;</span></a>                                    
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">VẬT TƯ CƠ ĐIỆN <span>&nbsp;</span></a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        $this->db->order_by('category_id', 'asc');
                                        $featured = $this->db->get('category')->result_array();
                                        foreach ($featured as $row):
                                            ?>
                                            <li>
                                                <a class="dropdown-toggle" href="#"><?php echo $row['category_name']; ?>&nbsp;&nbsp;</a>                                            
                                                <ul class="dropdown-menu">
                                                    <?php
                                                    $this->db->order_by('sub_category_id', 'asc');
                                                    $featured = $this->db->get_where('sub_category',array('category' => $row['category_id']))->result_array();
                                                    foreach ($featured as $sub_row):
                                                        ?>
                                                        <li><a href="#"><?php echo $sub_row['sub_category_name']; ?>&nbsp;&nbsp;</a></li>
                                                    <?php endforeach; ?> 
                                                </ul>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">DOWNLOAD <span>&nbsp;</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">TIN TỨC <span>&nbsp;</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">LIÊN HỆ <span>&nbsp;</span></a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                    <!-- /Top Nav -->

                </div><!-- /.container -->
            </header>
            <!-- /Top Nav -->

        </div>
