<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <title><?php echo $page_title; ?> | <?php echo $system_title; ?></title>

        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="description" content="<?php
        echo $description;
        if ($page_name == 'vendor_home') {
            echo ', ' . $this->db->get_where('vendor', array('vendor_id' => $vendor))->row()->description;
        }
        ?>">
        <meta name="keywords" content="<?php
              echo $keywords;
              if ($page_name == 'vendor_home') {
                  echo ', ' . $this->db->get_where('vendor', array('vendor_id' => $vendor))->row()->keywords;
              }
              ?>">
        <meta name="author" content="<?php echo $author; ?>">
        <meta name="revisit-after" content="<?php echo $revisit_after; ?> days">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="expires" content="Mon, 10 Dec 2001 00:00:00 GMT" />
        <style>
            html, body{
                overflow: hidden;
                height: 100%;
            }
        </style>

<?php
if ($page_name == 'product_view') {
    foreach ($product_data as $row) {
        ?>
                <!-- Schema.org markup for Google+ -->
                <meta itemprop="name" content="<?php echo $row['title']; ?>">
                <meta itemprop="description" content="<?php echo strip_tags($row['description']); ?>">
                <meta itemprop="image" content="<?php echo $this->crud_model->file_view('product', $row['product_id'], '', '', 'no', 'src', 'multi', 'one'); ?>">

                <!-- Twitter Card data -->
                <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:site" content="@publisher_handle">
                <meta name="twitter:title" content="<?php echo $row['title']; ?>">
                <meta name="twitter:description" content="<?php echo strip_tags($row['description']); ?>">
                <!-- Twitter summary card with large image must be at least 280x150px -->
                <meta name="twitter:image:src" content="<?php echo $this->crud_model->file_view('product', $row['product_id'], '', '', 'no', 'src', 'multi', 'one'); ?>">

                <!-- Open Graph data -->
                <meta property="og:title" content="<?php echo $row['title']; ?>" />
                <meta property="og:type" content="article" />
                <meta property="og:url" content="<?php echo base_url(); ?>index.php/home/product_view/<?php echo $row['product_id']; ?>" />
                <meta property="og:image" content="<?php echo $this->crud_model->file_view('product', $row['product_id'], '', '', 'no', 'src', 'multi', 'one'); ?>" />
                <meta property="og:description" content="<?php echo strip_tags($row['description']); ?>" />
                <meta property="og:site_name" content="<?php echo $row['title']; ?>" />
                <?php
            }
        }
        if ($page_name == 'vendor_home') {
            $vendor_data = $this->db->get_where('vendor', array('vendor_id' => $vendor))->result_array();
            foreach ($vendor_data as $row) {
                ?>
                <!-- Schema.org markup for Google+ -->
                <meta itemprop="name" content="<?php echo $row['display_name']; ?>">
                <meta itemprop="description" content="<?php echo strip_tags($row['description']); ?>">
                <meta itemprop="image" content="<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $vendor; ?>.png">

                <!-- Twitter Card data -->
                <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:site" content="@publisher_handle">
                <meta name="twitter:title" content="<?php echo $row['display_name']; ?>">
                <meta name="twitter:description" content="<?php echo strip_tags($row['description']); ?>">
                <!-- Twitter summary card with large image must be at least 280x150px -->
                <meta name="twitter:image:src" content="<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $vendor; ?>.png">

                <!-- Open Graph data -->
                <meta property="og:title" content="<?php echo $row['display_name']; ?>" />
                <meta property="og:type" content="article" />
                <meta property="og:url" content="<?php echo base_url(); ?>index.php/home/vendor/<?php echo $row['vendor_id']; ?>" />
                <meta property="og:image" content="<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $vendor; ?>.png" />
                <meta property="og:description" content="<?php echo strip_tags($row['description']); ?>" />
                <meta property="og:site_name" content="<?php echo $system_title; ?>" />
        <?php
    }
}
?>

        <!-- Favicon -->
<?php $ext = $this->db->get_where('ui_settings', array('type' => 'fav_ext'))->row()->value; ?>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/front/assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="<?php echo base_url(); ?>template/front/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/sky-forms.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/line-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/flexslider.css" rel="stylesheet" type="text/css" />

        <!-- REVOLUTION SLIDER -->
        <link href="<?php echo base_url(); ?>template/front/assets/css/revolution-slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/layerslider.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="<?php echo base_url(); ?>template/front/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/header-3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/footer-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/front/assets/css/color_scheme/brown.css" rel="stylesheet" type="text/css" id="color_scheme" />
                
        <!-- Morenizr -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/front/assets/plugins/modernizr.min.js"></script>

        <!--[if lte IE 8]>
                <script src="<?php echo base_url(); ?>template/front/assets/plugins/respond.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>template/front/assets/plugins/jquery/jquery.min.js"></script>
    </head>
<?php
$theme_color = $this->db->get_where('ui_settings', array('type' => 'header_color'))->row()->value;
?>
