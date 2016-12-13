<?php
$contact_address = $this->db->get_where('general_settings', array('type' => 'contact_address'))->row()->value;
$contact_phone = $this->db->get_where('general_settings', array('type' => 'contact_phone'))->row()->value;
$contact_email = $this->db->get_where('general_settings', array('type' => 'contact_email'))->row()->value;
$contact_website = $this->db->get_where('general_settings', array('type' => 'contact_website'))->row()->value;
$contact_about = $this->db->get_where('general_settings', array('type' => 'contact_about'))->row()->value;

$footer_text = $this->db->get_where('general_settings', array('type' => 'footer_text'))->row()->value;
$footer_category = json_decode($this->db->get_where('general_settings', array('type' => 'footer_category'))->row()->value);
//echo '<pre>';
//printf($contact_about);
//echo '</pre>';
//die();
?>
<!-- Modal -->
<div class="modal fade" id="v_registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id='ajvlup'></div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id='ajlin'></div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id='ajlup'></div> 
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="quick_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:70%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" id="v_close_logup_modal" class="close" type="button">×</button>
                <br>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn-u btn-u-default" type="button" id="v_clsreg" ><?php echo translate('close'); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<a data-toggle="modal" data-target="#login" id="loginss" ></a>
<a data-toggle="modal" data-target="#registration" id="regiss" ></a>
<a data-toggle="modal" data-target="#v_registration" id="v_regiss" ></a>

<!--=== Footer ===-->

<footer id="footer">
    <div class="container">

        <div class="row">            
            <!-- col #1 -->
            <div class=" spaced col-md-4">                
                <h4>CÔNG TY TNHH THIẾT BỊ KỸ THUẬT MINH PHÁT</h4>
                <p class="block">
                    Mang thương hiệu Minh Phát được thành lập năm 2013 với 7 năm tìm hiểu về lĩnh vực cung cấp vật tư cơ điện (M&E) cho nhà thầu Nhật Bản, Hàn Quốc, Đài Loan, Malaysia và Việt Nam.
                    Lựa chọn Công ty Minh Phát làm đối tác, các nhà thầu cơ điện sẽ được cung cấp tất cả sản phẩm tốt nhất, giá cả cạnh tranh, chất lượng đúng chuẩn nhằm đem lại cho khách hàng sự hài lòng và tin tưởng tuyệt đối cho từng công trình của nhà thầu cơ điện.
                    <a href="page-about-basic.html">View More <i class="fa fa-arrow-right"></i></a>
                </p>
                <h3><strong>Tel : </strong>(84.8) 625 78424</h3>
            </div>
            <!-- /col #1 -->

            <!-- col #2 -->
            <div class="spaced col-md-4">
                <h4>ĐĂNG KÝ NHẬN BÁO GIÁ</h4>
                <p>
                    Quý khách hàng có nhu cầu về vật tư cơ điện (M&E) vui lòng điền địa chỉ email vào form bên dưới để nhận được bản tin, báo giá hàng tuần, cũng như các chương trình khuyến mãi của Minh Phát:
                </p>
                <form id="newsletterSubscribe" method="post" action="php/newsletter.php" class="input-group">
                    <input required type="email" class="form-control" name="newsletter_email" id="newsletter_email" value="" placeholder="E-mail Address">
                    <span class="input-group-btn">
                        <button class="btn btn-primary">SUBMIT</button>
                    </span>
                </form>

            </div>
            <!-- /col #2 -->

            <!-- col #3 -->
            <div class="spaced col-md-4">
                <h4>FACEBOOK</h4>               
                <div class="cameronjonesweb_fcebook_page_plugin" data-version="1.5.4" id="fffbc"><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="https://staticxx.facebook.com/connect/xd_arbiter/r/fTmIQU3LxvB.js?version=42#channel=f1b53a20736997c&amp;origin=https%3A%2F%2Fthietbiminhphat.vn" frameborder="0"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/vi/sdk.js#xfbml=1&amp;version=v2.5&amp;appId=846690882110183"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script><div class="fb-page fb_iframe_widget" data-href="https://facebook.com/thietbicodienminhphat" data-width="340" data-max-width="340" data-height="220" data-hide-cover="false" data-show-facepile="true" data-hide-cta="false" data-small-header="false" data-adapt-container-width="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=846690882110183&amp;container_width=360&amp;height=220&amp;hide_cover=false&amp;hide_cta=false&amp;href=https%3A%2F%2Ffacebook.com%2Fthietbicodienminhphat&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=340"><span style="vertical-align: bottom; width: 340px; height: 214px;"><iframe name="f259d0a8911c2f2" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" style="border: medium none; visibility: visible; width: 340px; height: 214px;" src="https://www.facebook.com/v2.5/plugins/page.php?adapt_container_width=true&amp;app_id=846690882110183&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FfTmIQU3LxvB.js%3Fversion%3D42%23cb%3Df631b673011eb%26domain%3Dthietbiminhphat.vn%26origin%3Dhttps%253A%252F%252Fthietbiminhphat.vn%252Ff1b53a20736997c%26relation%3Dparent.parent&amp;container_width=360&amp;height=220&amp;hide_cover=false&amp;hide_cta=false&amp;href=https%3A%2F%2Ffacebook.com%2Fthietbicodienminhphat&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=340" class="" width="340px" height="220px" frameborder="0"></iframe></span></div></div>               
            </div>
            <!-- /col #3 -->
        </div>

    </div>

    <hr />

    <div class="copyright">
        <div class="container text-center fsize12">
            2016 &copy; <?php echo translate('all_rights_reserved'); ?> @ <a target="_blank" href="<?php echo base_url(); ?>" style="color: #cccccc; font-weight: bold "><?php echo $system_title; ?></a>  &bull; 
            <a href="<?php echo base_url(); ?>index.php/home/legal/terms_conditions" class="fsize11"><?php echo translate('terms_&_condition'); ?></a> &bull; 
            <a href="<?php echo base_url(); ?>index.php/home/legal/privacy_policy" class="fsize11"><?php echo translate('privacy_policy'); ?></a>
        </div>
    </div>
</footer>
<!--=== End Footer===-->

</div><!--/wrapper-->