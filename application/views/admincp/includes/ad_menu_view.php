 <div class="header">
        <a class="logo" href="<?php echo base_url().""?>"><img src="<?php echo base_url().'public/back-end/';?>img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/></a>
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>    
    </div>
    <div class="menu">                
        
        <div class="breadLine">            
            <div class="arrow"></div>
            <div class="adminControl active">
          		<center><a href="<?php echo base_url()?>" style="font-size: 13px;">Xem trang chủ</a></center>
               
            </div>
        </div>
        
        <div class="admin">
            <div class="image">
                <img src="<?php echo base_url().'public/back-end/';?>img/users/aqvatarius.jpg" class="img-polaroid"/>                
            </div>
           
            <ul class="control">
            	<li>                
             	  <?php $user=$this->session->userdata('logged_ad');?>
           		 Chào mừng  <?php echo $user['userName'];
					echo "</li>";
					?>
                <li><span class="icon-share-alt"></span> <a href="<?php echo base_url()."admin/logout"?>">Đăng xuất</a></li>
            </ul>
  
        </div>
        
        <ul class="navigation">
            <li>
                <a href="<?= base_url('admincp/category').'.html'; ?>">
                    <span class="isw-archive"></span><span class="text">Danh mục</span>
                </a>
            </li>
            <!--
            <li class="openable">
                <a href="#">
                    <span class="isw-list"></span><span class="text">Danh mục</span>
                </a>
                <ul>
                    <li>
                        <a href="ui.html">
                            <span class="icon-th"></span><span class="text">Quản lý danh mục sản phẩm</span>
                        </a>                  
                    </li>      
                    <li>
                        <a href="widgets.html">
                            <span class="icon-th-large"></span><span class="text">Widgets</span>
                        </a>                  
                    </li>                    
                    <li>
                        <a href="buttons.html">
                            <span class="icon-chevron-right"></span><span class="text">Buttons</span>
                        </a>                  
                    </li>        
                    <li>
                        <a href="icons.html">
                            <span class="icon-fire"></span><span class="text">Icons</span>
                        </a>                  
                    </li>                    
                </ul>                
            </li>
            --> 
            <?php if($user['accUser'] == 2){ ?>
            	<li>
	                <a href="<?php echo base_url().'admincp/products.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Sản phẩm</span>                 
	                </a>
	            </li>
	                                    
	            <li>
	                <a href="<?php echo base_url().'admincp/cart.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Giỏ hàng</span>
	                </a>
	            </li>             
	            <li>
	                <a href="<?php echo base_url().'admincp/brand.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Thương hiệu</span>
	                </a>
	            </li>              
            <?php }else { ?>
            	<li>
	                <a href="<?php echo base_url().'admincp/athome.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Trang chủ</span>                 
	                </a>
	            </li>
	            
            	<li>
	                <a href="<?php echo base_url().'admincp/products.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Sản phẩm</span>                 
	                </a>
	            </li>
	                                    
	            <li>
	                <a href="<?php echo base_url().'admincp/cart.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Giỏ hàng</span>
	                </a>
	            </li>
	             <li>
	                <a href="<?php echo base_url().'admincp/brand.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Thương hiệu</span>
	                </a>
	            </li>                                        
	                                               
	            <li>
	                  <a href="<?php echo base_url().'admincp/comment.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Ý kiến khách hàng</span>
	                </a>
	            </li>
	            <li>
	                  <a href="<?php echo base_url().'admincp/content.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý bài viết</span>
	                </a>
	            </li>           
	            <li>
	                  <a href="<?php echo base_url().'admincp/faqs.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý hỏi đáp</span>
	                </a>
	            </li>           
	            <li>
	                  <a href="<?php echo base_url().'admincp/news.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý tin tức</span>
	                </a>
	            </li>           
	            <li>
	                  <a href="<?php echo base_url().'admincp/services.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý dịch vụ</span>
	                </a>
	            </li>           
	            <li>
	                  <a href="<?php echo base_url().'admincp/works.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý tuyển dụng</span>
	                </a>
	            </li>
	            <li>
	            	<a href="<?php echo base_url().'admincp/gallery.html'; ?>">
						<span class="isw-archive"></span><span class="text">Gallery</span>
					</a>
	            </li>
	            <li>
	            	<a href="<?php echo base_url().'admincp/config.html'; ?>">
						<span class="isw-archive"></span><span class="text">Cấu hình</span>
					</a>
	            </li>  
	             <li>
	                <a href="<?= base_url('admincp/user').'.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý tài khoản</span>
	                </a>
	            </li> 
	            <li>
	                <a href="<?= base_url('admincp/contact').'.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý liên hệ</span>
	                </a>
	            </li>   
	            <li>
	                <a href="<?= base_url('admincp/member').'.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý thành viên</span>
	                </a>
	            </li>  
	            <li>
	                <a href="<?= base_url('admincp/price').'.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý giá vận chuyển</span>
	                </a>
	            </li>      
	            <li>
	                <a href="<?= base_url('admincp/padding').'.html'; ?>">
	                    <span class="isw-archive"></span><span class="text">Quản lý quảng cáo</span>
	                </a>
	            </li>   
            <?php }?>         
                                                
        </ul>
        <div class="dr"><span></span></div> 
    </div>