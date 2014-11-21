<script type="text/javascript">
function checked(ischeck, pid)
{
 	if(confirm("Bạn có muốn sửa đổi trạng thái duyệt bài không !") == true) {
 		var strUrl = "<?= base_url('admincp/products/ischeck'); ?>";
 		$.ajax({
 			url: strUrl,
 			type: 'POST',
 			cache: false,
 			data :  {
 				ischeck : ischeck,
 				pid : pid,
 			},
 			success : function (response)
 			{
 				window.location.reload(true);
 			},
 			error: function (xhr, desc, err){
 				 console.log(xhr);
 			     console.log("Details: " + desc + "\nError:" + err);	
 			}
 		});
    } else {
    }
}
</script>
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
				<li class="active">Danh sách sản phẩm <?php  echo $totalProduct;?></li>
			</ul>
            <ul class="buttons">
				<li>
					<a href="<?php echo base_url().'admincp/products/add'?>"><span class="icon-plus"></span><span class="text">Thêm mới</span></a>
				</li>
				<li>
					<a href="javascript: void(0)" onclick="delAllCate(); return false;"><span class="icon-remove"></span><span class="text">Xóa</span></a>
				</li>
			</ul>
        </div>
        <div class="workplace">
           <div class="row-fluid">
                
                <div class="span12"> 
        
        			<form accept-charset="utf-8" method="post" action="<?= base_url('admincp/products') ?>" >
					<div class="popup" id="" style="display:block;">
						<div class="head">
							<div class="arrow"></div>
								<span class="isw-zoom"></span>
								<span class="name">Tìm kiếm</span>
                                <input type="hidden" id="page_product" name="page" value="" />
								<input type="text" name="keysearch" placeholder="nhập từ cần tìm..." value="">
                                	<button type="submit" class="btn">Tìm Kiếm</button>
								<div class="clear"></div>
							</div>
							<div class="body search">
								
								
								<div class="input_row">
								<select style="width: 100%" name="category_id">
									<option value="">Chọn chủng loại sản phẩm</option>
									
									<?php
									foreach ($getMenulv2 as $key => $value){
										if($value['parentID'] == 0){
											echo "<option value=".$value['catID'].">". $value['catName'] ."</option>";
											$id = $value['catID'];
											foreach ($getMenulv2 as $key => $value1) {
												if($value1['parentID'] == $id){
													echo "<option value=". $value1['catID']. "> --- ". $value1['catName'] ."</option>";
												}
											}
										}
									}
									?>
								</select>
								</div>
								<div class="input_row">
									<?php
									//var_dump($getAllBrand); 
									?>
								<select style="width: 100%" name="brand">
									<option value="">Chọn thương hiệu</option>
									<?php
									foreach ($getAllBrand as $getAllBran){
										echo "<option value=".$getAllBran['catID'].">". $getAllBran['catName'] ."</option>";
									}
									?>
								</select>
								</div>
								
								<div class="input_row">
								<select style="width: 100%" name="loaisp">
									<option value="">Sản phẩm thuộc loại(Tất cả)</option>
									<option value="1">SP Khuyến mãi</option>
									<!-- 
									<option value="2">SP Hot</option>
									<option value="3">SP Xem nhiều</option>
									<option value="4">SP Mới</option>
									<option value="5">SP Nổi bật</option>
									 -->
								</select>
								</div>
								 
								<div class="input_row">
								<select style="width: 100%" name="tinhtrangsp">
									<option value="">Tình trạng(Tất cả)</option>
									<option value="1">Còn hàng</option>
									<option value="2">Hết hàng</option>
									<option value="3">Sắp có hàng</option>
								</select>
								</div>
							</div>
							<div class="footer">
						
							
							</div>
					</div>
					</form>
                    </div>
                    </div>
            <div class="row-fluid">
                
                <div class="span12">                    
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>Danh sách sản phẩm</h1>                               
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
	                    <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/products/delete"?>" id="formListCate">
	                        	<input type="hidden" value="" name="id_list" id="id_list">
	                    </form>
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="5%">ID</th>
                                    <th width="20%">Tên sản phẩm</th>
                                    <th width="5%">Mã sp</th>
                                    <th width="10%">Giá</th>
                                    <th width="20%">Danh mục</th>
                                    <th width="5%">Thương hiệu</th>
                                    <th width="10%">Ảnh</th>
                                    <th width="5%">Tình trạng hàng</th>
                                    <th width="10%">Duyệt bài</th>
                                    <th width="5%">Xem</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1 ;?>	
                                <?php foreach($products as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td>
											<div class="checker">
												<span>
													<input type="checkbox" name="checkbox[]" class="check_cat" style="opacity: 0;" value="<?= $val['productID'] ?>">
												</span>
											</div>
										</td>
										<td><?=  $val['productID']  ?></td>
										<td><a href="<?php echo base_url('admincp/products/edit');?>/<?= $val['productID'] ?>"><?=  $val['productName']  ?></a></td>
										<td><?=  $val['productCode']  ?></td>
										<td><?=  $val['gia']  ?></td>
										<td><?=  $val['cateName']  ?></td>
										<td><?=  $val['brandName']  ?></td>
										<td>
										    <img src="<?= base_url().$val['productImage'] ?>" width="74px" height="59px"/>
										</td>
										
										<td>
										<?php  if($val['tinhtranghang'] == 1){ ?>
											<img src="<?= base_url().'public/libs/icons/tick.png'; ?>">
										<?php }else if($val['tinhtranghang'] == 2) { ?>
											<img src="<?= base_url().'public/libs/icons/b_drop.png'; ?>"/>
										<?php }else { ?>
											<img src="<?= base_url().'public/libs/icons/clock_48.png'; ?>" width='25px' height='12px'/>
										<?php } ?>
										</td>
										<td><?php  if($val['adstatus'] == 1){ ?>
											<a href="javascript:void(0)" onclick="checked(0, <?= $val['productID'] ?>)"><img src="<?= base_url('assets/back-end/img/daduyet.png'); ?>" style="width: 80px;height: 25px;"></a>
										<?php }else { ?>
											<a href="javascript:void(0)" onclick="checked(1, <?= $val['productID'] ?>)"><img src="<?= base_url().'assets/back-end/img/chuaduyet.png'; ?> " style="width: 80px;height: 25px;"></a>
										<?php } ?>
										</td>
										
										<!-- <td><a href="<?php echo base_url('admincp/category/edit');?>/<?= $val['catID'] ?>"><?= $val['catName'] ?></a></td> -->
										
										<td><a href="<?= base_url($val['seo_name']).'.html' ?>" target="_blank"><img src="<?= base_url().'public/libs/icons/Preview.png'?>" width='25px' height='12px'/></a></td>
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
    
