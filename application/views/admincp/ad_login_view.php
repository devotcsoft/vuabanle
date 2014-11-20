<?php $this->load->view('admincp/includes/ad_header_view') ?>
    <div class="loginBox">        
        <div class="loginHead">
            <img src="<?php echo base_url()."public/back-end/";?>img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/>
        </div>
        <form class="form-horizontal" action="<?php echo base_url()."admin/kiem-tra"?>" method="POST">            
            <div class="control-group">
                <label for="inputEmail">Tên đăng nhập</label>                
                <input type="text" name="username"/>
            </div>
            <div class="control-group">
                <label for="inputPassword">Mật khẩu</label>                
                <input type="password" name="password"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <?php echo validation_errors(); ?>                                          
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block" name="login">Đăng nhập</button>
            </div>
        </form>        
        
    </div>    
<?php $this->load->view('admincp/includes/ad_footer_view') ?>   
