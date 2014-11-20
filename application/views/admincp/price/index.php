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
				<li class="active">Quản lý giá vận chuyển</li>
			</ul>
            <ul class="buttons">
				<li>
					<a href="<?php echo base_url()."admincp/price/add"?>"><span class="icon-plus"></span><span class="text">Thêm mới</span></a>
				</li>
				<li>
					<a href="javascript: void(0)" onclick="delAllCate(); return false;"><span class="icon-remove"></span><span class="text">Xóa</span></a>
				</li>
		
			
			
			</ul>
        </div>
        <div class="workplace">
           <div class="row-fluid">
                
                <div class="span12"> 
        		<form accept-charset="utf-8" method="post" action="<?= base_url('admincp/price') ?>" id="formserchproduc">
					<div class="popup" style="display:block;">
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
                        <h1>Danh sách giá vận chuyển</h1>                               
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
	                    <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/price/delete"?>" id="formListCate">
	                        	<input type="hidden" value="" name="id_list" id="id_list">
	                    </form>
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="5%">ID</th>
                                    <th width="25%">Địa điểm</th>
                                    <th width="25%">Thuộc địa điểm</th>
                                    <th width="20%">Giá</th>
                                    <th width="10%">Trạng thái</th>
                                    <th width="20%">STT</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                           
                            	<?php $i = 1 ;?>	
                                <?php foreach($content as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td>
											<div class="checker">
												<span>
													<input type="checkbox" name="checkbox[]" class="check_cat" style="opacity: 0;" value="<?= $val['id'] ?>">
												</span>
											</div>
										</td>
										<td><?=  $val['id']  ?></td>
										<td><a href="<?php echo base_url('admincp/price/edit');?>/<?= $val['id'] ?>"><?= $val['name'] ?></a></td>
										<td>
										
										<?php foreach ($getprice_lv1 AS $getprice) {
											if($val['parentID'] == $getprice['id']){ ?>
												<a href="#"><?= $getprice['name']; ?></a><br/>
											<?php } } ?>
										</td>
										
										<td><?= Utility_model::price_format($val['value']); ?> VNĐ</td>
										<td><?php  if($val['status'] == 1){ ?>
											<img src="<?= base_url().'public/libs/icons/tick.png'; ?>">
										<?php }else { ?>
											<img src="<?= base_url().'public/libs/icons/b_drop.png'; ?>"/>
										<?php } ?>
										</td>
										<td><?=  $val['stt']  ?></td>
										
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
    
