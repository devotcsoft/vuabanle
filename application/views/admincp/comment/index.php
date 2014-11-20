<style type="text/css">
<!--
.aview {
	color: red;
	font-weight: bold;
}
-->
</style>    
    <div class="content">
        <div class="breadLine">
            <ul class="breadcrumb">
				<li><a href="">Quản trị</a> <span class="divider">&gt;</span></li>
				<li class="active">Ý kiến sản phẩm</li>
			</ul>
            <ul class="buttons">
				<li><?php /**
					 <a href="<?php echo base_url()."admincp/comment/add"?>"><span class="icon-plus"></span><span class="text">Thêm mới</span></a>
					*/ ?>
				</li>
				<li>
					<a href="javascript: void(0)" onclick="delAllCate(); return false;"><span class="icon-remove"></span><span class="text">Xóa</span></a>
				</li>
			
			
							</ul>
        </div>
        <div class="workplace">
        <div class="row-fluid">
                
                <div class="span12">
        		<form accept-charset="utf-8" method="post" action="<?= base_url('admincp/comment') ?>" id="formserchproduc">
					<div class="popup"  style="display:block;">
						<div class="head">
							<div class="arrow"></div>
								<span class="isw-zoom"></span>
								<span class="name">Tìm kiếm</span>
                                	<input type="hidden" id="page_product" name="page" value="" />
								<input type="text" name="keysearch" placeholder="nhập từ cần tìm..." value="">
                                	<button type="submit" class="btn">Tìm Kiếm</button>
								<div class="clear"></div>
							</div>
						
					</div>
					</form>
                    </div>
                    </div>
            <div class="row-fluid">
                
                <div class="span12">                    
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>Ý Kiến khách hàng</h1>                               
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
	                    <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/comment/delete"?>" id="formListCate">
	                        	<input type="hidden" value="" name="id_list" id="id_list">
	                    </form>
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="5%">ID</th>
                                    <th width="15%">Họ và tên</th>
                                    <th width="30%">Nội dung</th>
                                    <th width="20%">Sản phẩm</th>
                                    <th width="10%">Email</th>
                                    <th width="15%">Ngày đăng</th>
                                    <th width="5%">TT</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1 ;?>	
                                <?php foreach($comment as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td>
											<div class="checker">
												<span>
													<input type="checkbox" name="checkbox[]" class="check_cat" style="opacity: 0;" value="<?= $val['commentID'] ?>">
												</span>
											</div>
										</td>
										<td><?=  $val['commentID']  ?></td>
										<td><?= $val['fullname'] ?></td>
										<td><a href="<?php echo base_url('admincp/comment/edit');?>/<?= $val['commentID'] ?>"><?= word_limiter($val['content'], 10); ?></a></td>
										<td><?= word_limiter($val['productName'], 10) ?></td>
										<td><?= $val['email'] ?></td>
										<td><?= $val['postdate'] ?></td>
										<td><?php  if($val['status'] == 1){ ?>
											<img src="<?= base_url().'public/libs/icons/tick.png'; ?>">
										<?php }else { ?>
											<img src="<?= base_url().'public/libs/icons/b_drop.png'; ?>"/>
										<?php } ?>
										</td>
										<?php $i++ ?>
									</tr>
								<?php } ?>
                                                
                            </tbody>
                        </table>
                        <?php echo $pagination;?>
                        <div class="clear"></div>
                    </div>
                </div>                                
                
            </div>   
        
    </div>   
    
