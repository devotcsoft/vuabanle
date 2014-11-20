<script type="text/javascript">
$(document).ready(function(){
    $("#contact").validate({
        errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
    });
}); 
</script>
<div class="content">
 <div class="breadLine">
	 <ul class="breadcrumb">
	                <li><a href="<?php echo base_url().'admincp/price/'?>">Quản lý giá vận chuyển</a> <span class="divider">></span></li>                
	                <li class="active">Cập nhập</li>
	 </ul>
 </div>
  <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head">
                        <div class="isw-documents"></div>
                        <h1>Quản lý giá vận chuyển</h1>
                        <div class="clear"></div>
                    </div>
                    <?php $id = $this->uri->segment(4);?>  
               <form accept-charset="utf-8" method="post" action="<?php echo base_url().'admincp/price/edit/'.$id;?>" id="">     
                    <div class="block-fluid">    
                        
					
                            <div class="span3"></div>
                            <div class="span4">
                            <p>
						<?php echo validation_errors(); ?> 
						</p>
                            </div>
                            <div class="clear"></div>
                    
                        <div class="row-form">
                       
                            <div class="span3">Địa điểm :</div>
                            <div class="span4">
                            <input type="text" name ="name"  placeholder="Mời bạn nhập địa điểm" value="<?php echo $info['name'];?>" /></div>
                            <div class="clear"></div>
                        </div>                          
						<div class="row-form">
                           <div class="span3">Thuộc địa điểm :</div>
                            <div class="span4">
                            	
                                <select name="parentID" id="menu_type">
                                	<option value="0">Thuộc địa điểm</option>
                                	<?php
									foreach ($getprice_lv2 as $key => $value){
										if($value['parent'] == 0){
											echo "<option value=".$value['id'].">". $value['name'] ."</option>";
											$id = $value['id'];
											foreach ($getprice_lv2 as $key => $value1) {
												if($value1['parent'] == $id){
													echo "<option value=". $value1['id']. "> --- ". $value1['name'] ."</option>";
												}
											}
										}
										 
									}
									
									?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Giá :</div>
                            <div class="span4">
                            <input type="text" name="value" placeholder="Mời bạn nhập giá" value="<?php echo $info['value'];?>" /></div>
                            <div class="clear"></div>
                        </div>
                        
                       <div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<label><input type="radio" name="status" value="1" <?php if($info['status'] == 1){ echo "checked";}?>></input>Hiện</label>
								<label><input type="radio" name="status" value="2" <?php if($info['status'] == 2){ echo "checked";}?>></input>Ẩn</label>
							</div>
							<div class="clear"></div>
						</div>  
                        <div class="row-form">
                            <div class="span3">STT :</div>
                            <div class="span4">
                            <input type="text" name="stt" value="<?php echo $info['stt'];?>" /></div>
                            <div class="clear"></div>
                        </div>
                                                                                   
						<div class="row-form">
							<div class="span4">
								<p>
									<button class="btn" type="submit" id="add">Cập nhập</button>
								</p>
							</div>
							<div class="clear"></div>
						</div>
                                                                   
                        
                    </div>
                </form>
                </div>
                
            </div>
</div>
</div>