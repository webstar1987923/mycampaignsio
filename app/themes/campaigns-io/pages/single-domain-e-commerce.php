<?php 
// var_dump( $transactions );
?>
<div class="content-row">
                    
	<div class="content-column w-100">

		<div class="content-column-main">
		    
		    <div class="title">
		        <div class="left-pos"><h3>SALES PERFORMANCE</h3></div>
		        <div class="right-pos">
		        	<form class="sales-performance-days-filter relative fr dib tl w-100" style="max-width:20rem">
			        	<select class="w-100 pa2" name="d"><?php 
			        		foreach( $available_days_filter_options as $k => $v ){
			        			echo '<option value="' . $k . '"' . ( (int) $k === $current_days_filter ? ' selected="selected"' : '' ). '>' . $v . '</options>';
			        		} ?>
			        	</select>
			        </form>
		        	<?php /* ?>
		        	<input type="text" readonly="1" placeholder="Select a date..." class="dib mr1 f7 lh-solid pv2 ph3 br1" />
		        	<a href="#" title="" class="profile-edit dib f7 lh-solid btn-color no-underline pv2 ph3 br1"><small class="white">SUBMIT</small></a>
		        	<?php */ ?>
		        </div>
		    </div>
			
		    <div class="fl w-100 w-50-ns w-25-l">
	            <div class="content-column-inner" style="padding-bottom:0;">
	                
	                <div class="circle-stat campaignsio-admin-border-action-color">
						<div class="aspect-ratio aspect-ratio--1x1">
							<div class="dt aspect-ratio--object">
								<div class="dtc tc v-mid"><span><?php echo $transactions['total_sales_summary']; ?></span>TOTAL <br/>SALES</div>
							</div>
						</div>
					</div>

					<?php /* ?>
					<span class="db tc">Total amount of sales <br/>done this month</span>
					<?php */ ?>
	            </div>
	        </div>

	        <div class="fl w-100 w-50-ns w-25-l">
	            <div class="content-column-inner" style="padding-bottom:0;">

	            	<div class="circle-stat campaignsio-admin-border-green">
						<div class="aspect-ratio aspect-ratio--1x1">
							<div class="dt aspect-ratio--object">
								<div class="dtc tc v-mid"><span><?php echo $transactions['total_sales_value']; ?></span>SALES <br/>VALUE</div>
							</div>
						</div>
					</div>
	                
	                <?php /* ?>
	                <span class="db tc">Sales Value <br/>month to date</span>
	                <?php */ ?>
	            </div>
	        </div>

	        <div class="fl w-100 w-50-ns w-25-l">
	            <div class="content-column-inner" style="padding-bottom:0;">

	            	<div class="circle-stat campaignsio-admin-border-yellow">
						<div class="aspect-ratio aspect-ratio--1x1">
							<div class="dt aspect-ratio--object">
								<div class="dtc tc v-mid"><span><?php echo $transactions['average_order']; ?></span>AVERAGE <br/>ORDER</div>
							</div>
						</div>
					</div>

					<?php /* ?>
					<span class="db tc">Average order value <br/>month to date</span>
					<?php */ ?>	                
	            </div>
	        </div>

	        <div class="fl w-100 w-50-ns w-25-l">
	            <div class="content-column-inner" style="padding-bottom:0;">

	            	<div class="circle-stat campaignsio-admin-border-orange">
						<div class="aspect-ratio aspect-ratio--1x1">
							<div class="dt aspect-ratio--object">
								<div class="dtc tc v-mid"><span><?php echo $transactions['abandoned_cart_value']; ?></span>ABANDONDED <br/>CART VALUE</div>
							</div>
						</div>
					</div>

					<?php /* ?>
					<span class="db tc">Value of incomplete <br/>orders month to date</span>
					<?php */ ?>	                
	            </div>
	        </div>

		</div>

	</div>

</div>

<div class="content-row tab-contents-row">
     
    <div class="content-tab-items">
	    <ul>
			<li data-tab-item="1" class="active w-third w-auto-l">PRODUCT DATA</li>
			<li data-tab-item="2" class="w-third w-auto-l">REFERER TYPE</li>
			<li data-tab-item="3" class="w-third w-auto-l">KEYWORDS</li>
		</ul>
	</div>

	<div class="content-column w-100">
		
		<div class="content-column-main">

			<div class="content-column-inner">

				<div data-tab-content="1" class="content-tab-content active">
					<div class="list-table-wrap">
						<table data-table-id="domain-ecommerce-product-data" class="filter-table list-table mv3 collapse tc">
			        		<thead>
			        			<tr>
			        				<th>PRODUCT NAME</th>
			        				<th>REVENUE</th>
			        				<th>QUANTITY</th>
			        				<th>ORDERS</th>
			        				<th>AVERAGE PRICE</th>
			        				<th>AVERAGE QUALITY</th>
			        				<th>CONVERSION RATE</th>
			        			</tr>
			        		</thead>
			        		<tbody><?php 
			        			if( empty( $product_data ) ){
			        				?><tr><td colspan="7">No data found</td></tr><?php
			        			}
			        			else{
			        				foreach($product_data as $k => $v){ ?>
			        					<tr>
			        						<td><?php echo $v['label']; ?></td>
					        				<td><?php echo $v['revenue']; ?></td>
					        				<td><?php echo $v['quantity']; ?></td>
					        				<td><?php echo $v['orders']; ?></td>
					        				<td><?php echo $v['avg_price']; ?></td>
					        				<td><?php echo $v['avg_quantity']; ?></td>
					        				<td><?php echo $v['conversion_rate']; ?></td>
			        					</tr><?php
			        				}
			        			} ?>
			        		</tbody>
			        	</table>
			        </div>
		        </div>

            	<div data-tab-content="2" class="content-tab-content">
            		<div class="list-table-wrap">
		            	<table data-table-id="domain-ecommerce-referer-type" class="filter-table list-table mv3 collapse tc">
		            		<thead>
		            			<tr>
		            				<th>REFERRER TYPE</th>
		            				<th>VISITS</th>
		            				<th>ECOMERCE ORDERS</th>
		            				<th>TOTAL REVENUE</th>
		            				<th>ECOMMERCE ORDER CONVERSION RATE</th>
		            				<th>AVERGAE ORDER VALUE</th>
		            				<th>PURCHASED PRODUCTS</th>
		            				<th>REVENUE PER VISIT</th>
		            			</tr>
		            		</thead>
		            		<tbody>
		            			<tr>
		            				<td colspan="8">N/A</td>
		            			</tr>
		            		</tbody>
		            	</table>
		            </div>
	            </div>

            	<div data-tab-content="3" class="content-tab-content">
            		<div class="list-table-wrap">
		            	<table data-table-id="domain-ecommerce-keywords" class="filter-table list-table mv3 collapse tc">
		            		<thead>
		            			<tr>
		            				<th>REFERRER TYPE</th>
		            				<th>VISITS</th>
		            				<th>ECOMERCE ORDERS</th>
		            				<th>TOTAL REVENUE</th>
		            				<th>ECOMMERCE ORDER CONVERSION RATE</th>
		            				<th>AVERGAE ORDER VALUE</th>
		            				<th>PURCHASED PRODUCTS</th>
		            				<th>REVENUE PER VISIT</th>
		            			</tr>
		            		</thead>
		            		<tbody>
		            			<tr>
		            				<td colspan="8">N/A</td>
		            			</tr>
		            		</tbody>
		            	</table>
		            </div>
            	</div>

			</div>

		</div>

	</div>

</div>
