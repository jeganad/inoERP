<div id ="form_header"><span class="heading">Sales Control </span>
 <form action=""  method="post" id="sd_sales_control"  name="sd_sales_control">
  <div class="tabContainer">
   <ul class="column five_column"> 
    <?php echo form::hidden_field('sd_sales_control_id', $$class->sd_sales_control_id); ?>
    <li><label>BU Org :</label>
     <?php echo $f->select_field_from_object('org_id', org::find_all_business(), 'org_id', 'org', $$class->org_id, 'org_id', '', 1, $readonly1); ?>
     <a name="show" href="form.php?class_name=sd_sales_control&<?php echo "mode=$mode"; ?>" class="show document_id sd_sales_control_id"><img src="<?php echo HOME_URL; ?>themes/images/refresh.png"/></a> 
    </li>
   </ul>
  </div>
  <div id ="form_line" class="form_line"><span class="heading">Details </span>
   <div id="tabsLine">
    <ul class="tabMain">
     <li><a href="#tabsLine-1">Defaulting Rules</a></li>
     <li><a href="#tabsLine-2">Future Rules</a></li>
    </ul>
    <div class="tabContainer"> 
     <div id="tabsLine-1" class="tabContent">
      <div> 
       <ul class="column five_column"> 
        <li><label>Price List : </label>
         <?php echo$f->select_field_from_object('mdm_price_list_header_id', mdm_price_list_header::find_all(), 'mdm_price_list_header_id', 'price_list', $$class->mdm_price_list_header_id); ?>
        </li>
        <li><label>Request Date : </label>
         <?php $f->checkBox_field_d('default_requested_date_cb') ?>
        </li>
        <li><label>Schedule Ship Date : </label>
         <?php $f->checkBox_field_d('default_schedule_ship_date_cb') ?>
        </li>
        <li><label>Promise Date : </label>
         <?php $f->checkBox_field_d('default_promise_date_cb') ?>
        </li>
        <li><label>Defer Invoicing : </label>
         <?php $f->checkBox_field_d('deffer_invoicing_cb') ?>
        </li>
               <li><label>AR Transaction Type :</label> 
        <?php echo $f->select_field_from_object('ar_transaction_type_id', ar_transaction_type::find_all(), 'ar_transaction_type_id', 'ar_transaction_type', $$class->ar_transaction_type_id, 'ar_transaction_type_id', '', '', $readonly); ?>	</li>

       </ul> 
      </div> 
      <!--end of tab1 div three_column-->
     </div> 
     <!--              end of tab1-->

     <div id="tabsLine-2"  class="tabContent">
      <div> 
       <ul class="column five_column"> 

       </ul> 
      </div> 
     </div>
    </div>

   </div> 
  </div> 
 </form>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="sd_sales_control" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="org_id" ></li>
  <li class="form_header_id" data-form_header_id="sd_sales_control" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="sd_sales_control_id" ></li>
  <li class="btn1DivId" data-btn1DivId="sd_sales_control_id" ></li>
 </ul>
</div>