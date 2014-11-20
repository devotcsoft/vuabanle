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
				<li class="active">Danh mục sản phẩm</li>
			</ul>
			<?php if($this->sessionAll['accUser'] == 3){ ?>
            <ul class="buttons">
				<li>
					<a href="<?php echo base_url()."admincp/category/add.html"?>"><span class="icon-plus"></span><span class="text">Thêm mới</span></a>
				</li>
				<li>
					<a href="javascript: void(0)" onclick="delAllCate(); return false;"><span class="icon-remove"></span><span class="text">Xóa</span></a>
				</li>
			</ul>
			<?php }?>
        </div>
        <div class="workplace">
         <div class="row-fluid">
                
                <div class="span12"> 
        <form accept-charset="utf-8" method="post" action="<?= base_url('admincp/category') ?>" id="formserchproduc">
					<div class="popup" style="display:block;">
						<div class="head">
							<div class="arrow"></div>
								<span class="isw-zoom"></span>
								<span class="name">Tìm kiếm </span>
                                <input type="hidden" id="page_product" name="page" value="" />
								<input type="text" name="keysearch" placeholder="nhập từ cần tìm..." value="">
								<div class="clear"></div>
							</div>
							<div class="body search">                         
								
								
								<div class="input_row">
								<select style="width: 100%" name="category_id">
									<option value="">Chọn Danh mục sản phẩm</option>
									<?php
									foreach ($getMenulv2 as $key => $value){
										if($value['parent'] == 0){
											echo "<option value=".$value['id'].">". $value['name'] ."</option>";
											$id = $value['id'];
											foreach ($getMenulv2 as $key => $value1) {
												if($value1['parent'] == $id){
													echo "<option value=". $value1['id']. "> --- ". $value1['name'] ."</option>";
												}
											}
										}
									}
									?>
								</select>
								</div>
                                <div class="footer">
							<button type="submit" class="btn">Tìm Kiếm</button>
							
							</div>
							</div>
							
					</div>
					</form>
                    </div>
                    </div>
            <div class="row-fluid">
                
                <div class="span12">                    
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>Danh mục sản phẩm</h1>                               
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
	                    <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/category/delete"?>" id="formListCate">
	                        	<input type="hidden" value="" name="id_list" id="id_list">
	                    </form>
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="5%">ID</th>
                                    <th width="20%">Tên danh mục</th>
                                    <th width="20%">URL SEO</th>
                                    <th width="15%">Ảnh</th>
                                    <th width="25%">Chuyên mục con</th>
                                    <th width="10%">Trạng thái</th>
                                    <th width="5%">Số STT</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1 ;?>	
                                <?php foreach($category as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td>
											<div class="checker">
												<span>
													<input type="checkbox" name="checkbox[]" class="check_cat" style="opacity: 0;" value="<?= $val['catID'] ?>">
												</span>
											</div>
										</td>
										<td><?=  $val['catID']  ?></td>
										<?php if($this->sessionAll['accUser'] == 3){ ?>
										<td><a href="<?php echo base_url('admincp/category/edit');?>/<?= $val['catID'] ?>"><?= $val['catName'] ?></a></td>
										<?php }else { ?>
											<td><?= $val['catName'] ?></td>
										<?php } ?>
										
										<td><?= $val['keypage'] ?></td>
										<td>
											<?php if(isset($val['anhngoai']) && $val['anhngoai'] != ""){ ?>
												<img src="<?= base_url().$val['anhngoai'] ?>" width="200px" height="100px"/>		
											<?php } ?>
										<div>
										<!-- 
										<td>
											<?php foreach ($getAllCate AS $getAllCates) {
											if($val['catID'] == $getAllCates['parentID']){ ?>
												<a href="<?= base_url('admincp/category/cat-').$getAllCates['catID']; ?>"><?= $getAllCates['catName']; if(Utility_model::getCountAllCate($getAllCates['catID']) > 0 ) { ?> -- (<?= Utility_model::getCountAllCate($getAllCates['catID'])?>) <?php } ?> </a><br/>
											<?php } } ?>
										</td>
										 -->
										
										<td>
											<?php if($this->sessionAll['accUser'] == 3){ ?>
											<?php foreach ($getAllCate AS $getAllCates) {
												if($val['catID'] == $getAllCates['parentID']){ ?>
													<?php if(Utility_model::getCountAllCate($getAllCates['catID']) > 0){ ?>
														<a href="<?= base_url('admincp/category/edit');?>/<?= $getAllCates['catID'] ?>"><?= $getAllCates['catName']; ?></a>
														<a class="aview" alt="Danh sách các thư mục con" href="<?= base_url('admincp/category/cat-').$getAllCates['catID']; ?>">  -- (<?= Utility_model::getCountAllCate($getAllCates['catID'])?>)</a> 
														<br/>
													<?php }else {?>
														<a href="<?= base_url('admincp/category/edit');?>/<?= $getAllCates['catID'] ?>"><span><?= $getAllCates['catName']; ?></span></a><br/>
														
													<?php }?>
											<?php } 
											} ?>
											<?php }else { ?>
											<?php foreach ($getAllCate AS $getAllCates) {
												if($val['catID'] == $getAllCates['parentID']){ ?>
													<?php if(Utility_model::getCountAllCate($getAllCates['catID']) > 0){ ?>
														<?= $getAllCates['catName']; ?>
														 -- (<?= Utility_model::getCountAllCate($getAllCates['catID'])?>) 
														<br/>
													<?php }else {?>
														<span><?= $getAllCates['catName']; ?></span><br/>
													<?php }?>
											<?php } 
											} ?>	
											<?php } ?>
										</td>
										<td><?php if ($val['status'] == '1') {echo 'Hiện';} else {echo 'Ẩn';} ?></td>
										<td><?= $val['stt'] ?></td>
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
    
