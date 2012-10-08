<?php
class C_Load extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		//print var_dump($this->tValue); exit;
    
	}

	public function form_zinc_ors_inventory(){
		$form_zinc_ors='';
		$form_zinc_ors.='<form name="zinc_ors_inventory" id="zinc_ors_inventory" method="POST" action="' . base_url() . 'submit/c_form/form_zinc_ors_inventory' . '" >
	<!-- form for collecting inventory status information -->
	<h3 align="center"> ZINC &amp; ORS INVENTORY STATUS</h3>
	<p align="center">
		<label class="dcah-label">ZINC AND ORS MAPPING</label>
	</p>
	<section class="block">
		<section class="column">
			<section class="row2">
				<section class="left">
					<label>Date:</label>
				</section>
				<section class="right">
					<input type="date" name="facilityDateOfInventory" id="facilityDateOfInventory" readonly="readonly" class="autoDate" placeholder="click for date"/>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Facility Name:</label>
				</section>
				<section class="right">
					<input type="text" name="facilityName" id="facilityName"/>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Facility Contact Person:</label>
				</section>
				<section class="right">
					<input type="text" name="facilityContactPerson" id="facilityContactPerson"/>
				</section>
			</section>
			<section class="row2">
				<!--section class="left">
					<label>Drugs Dispensed From</label>
				</section>
				<section class="right">
					<input type="text" name="facilityZincOrsDispensedFrom" id="facilityZincOrsDispensedFrom"/>
				</section-->
			</section>
		</section>
		<section class="column" style="margin-bottom:30px">
			<section class="row2">
				<section class="left">
					<label>District:</label>
				</section>
				<section class="right">
					<select name="facilityDistrict" id="facilityDistrict">
						<option value="" selected="selected">Select One</option>
						' . $this -> selectDistricts . '
					</select>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>County:</label>
				</section>
				<section class="right">
					<select name="facilityCounty" id="facilityCounty">
						<option value="" selected="selected">Select One</option>
						' . $this -> selectCounties . '
					</select>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Telephone Contact:</label>
				</section>
				<section class="right">
					<input type="text" name="facilityTelephone" id="facilityTelephone" maxlength="15"/>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Email:</label>
				</section>
				<section class="right">
					<input type="email" name="facilityEmail" id="facilityEmail" maxlength="100"/>
					<input type="hidden"  name="facilityMFC" id="facilityMFC"/>
				</section>
			</section>
		</section>
	</section>
	
	<h3 align="center"> Zinc and ORS Stock at Hand Assessment</h3>
		<p style="text-align: center" style="color:#872300">
			Indicate the quantities of the Zinc &ORS available in this facility at the following units
		</p>
	  <div id="tabs">
	<ul>
		<li><a href="#tabs-1">MCH</a></li>
		<li><a href="#tabs-2">PEDS WARD</a></li>
		<li><a href="#tabs-3">OPD</a></li>
		<li><a href="#tabs-4">PHARMACY</a></li>
		<li><a href="#tabs-5">STORES</a></li>
		<li><a href="#tabs-6">Others*</a></li>
	</ul>
	<div id="tabs-1" class="tab MCH">
		

		<table>
			<thead>
				<tr>
					<td style="color:#872300">Zinc Sulphate 20mg</td>
				</tr>
				<tr>

					<!--td width="144">Batch No</td-->
					<td width="144">Quantities at Hand (Tablets)</td>
					<!--td width="144">Date Supplied to Facility</td-->
					<!--td width="144">Supplier</td-->
					<td width="144">Expiry Date</td>
					<!--td width="144">Comments</td-->

				</tr>
			</thead>
			<tr class="clonable zinc">
				<!--td width="144">
				<input type="text"  name="znStockBatchNo_1" id="znStockBatchNo_1" class="cloned" maxlength="10"/>
				</td-->
				<td width="144">
				<input type="number"  name="znStockQuantity_1" id="znStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				<input type="hidden"  name="znCommodityName_1" id="znCommodityName_1" value="Zinc Sulphate (20mg) Tablet" />
				</td>
				<!--td width="144">
				<input type="date"  name="znStockDispensedDate_1" id="znStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td-->
				<!--td width="144">
				<input type="text"  name="znStockSupplier_1" id="znStockSupplier_1" class="cloned" maxlength="45"/>
				</td-->
				<td width="144">
				<input type="text"  name="znStockExpiryDate_1" id="znStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<!--td width="144">
				<input type="text"  name="znStockComments_1" id="znStockComments_1" class="cloned" maxlength="255"/>
				</td-->
			</tr>
			<tr id="formbuttons_1">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_1" value="Add a Batch" width="auto"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_1" value="Remove Batch" width="auto"/>
			</tr>
		</table>

		<h3 align="center"> Low-Osmolarity Oral Rehydration Salts (ORS):</h3>
		<table>
			<thead>
				<tr>
					<td style="color:#872300;font-weight:bold">Oral Rehydration Salts (ORS)</td>
				</tr>
				<tr>

					<!--td width="144">Batch No</td-->
					<td width="144">Quantities at Hand (Sachets)</td>
					<!--td width="144">Date Supplied to Facility</td-->
					<!--td width="144">Supplier</td-->
					<td width="144">Expiry Date</td>
					<!--td width="144">Comments</td-->

				</tr>
			</thead>
			<!--tr><td>Low-Osmolarity Oral Rehydration Salts (ORS): </td></tr-->
			<tr class="clonable ors">
				<!--td width="144">
				<input type="text"  name="orsStockBatchNo_1" id="orsStockBatchNo_1" class="cloned" maxlength="10"/>
				
				</td-->
				<td width="144">
				<input type="number"  name="orsStockQuantity_1" id="orsStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				<input type="hidden"  name="orsCommodityName_1" id="orsCommodityName_1" value="Oral Rehydration Salts (ORS) Sachet" />
				</td>
				<!--td width="144">
				<input type="date"  name="orsStockDispensedDate_1" id="orsStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td-->
				<!--td width="144">
				<input type="text"  name="orsStockSupplier_1" id="orsStockSupplier_1" class="cloned" maxlength="45"/>
				</td-->
				<td width="144">
				<input type="text"  name="orsStockExpiryDate_1" id="orsStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<!--td width="144">
				<input type="text"  name="orsStockComments_1" id="orsStockComments_1" class="cloned" maxlength="255"/>
				</td-->
			</tr>
			<tr id="formbuttons_2">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_2" value="Add a Batch" width="12"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_2" value="Remove Batch" width="12"/>
			</tr>
		</table>
	</div>
	<div id="tabs-2" class="tab PEDS">
		
		<table>
			<thead>
				<tr>
					<td style="color:#872300">Zinc Sulphate 20mg</td>
				</tr>
				<tr>

					<!--td width="144">Batch No</td-->
					<td width="144">Quantities at Hand (Tablets)</td>
					<!--td width="144">Date Supplied to Facility</td-->
					<!--td width="144">Supplier</td-->
					<td width="144">Expiry Date</td>
					<!--td width="144">Comments</td-->

				</tr>
			</thead>
			<tr class="clonable zinc">
				<!--td width="144">
				<input type="text"  name="znStockBatchNo_1" id="znStockBatchNo_1" class="cloned" maxlength="10"/>
				</td-->
				<td width="144">
				<input type="number"  name="znStockQuantity_1" id="znStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				<input type="hidden"  name="znCommodityName_1" id="znCommodityName_1" value="Zinc Sulphate (20mg) Tablet" />
				</td>
				<!--td width="144">
				<input type="date"  name="znStockDispensedDate_1" id="znStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td-->
				<!--td width="144">
				<input type="text"  name="znStockSupplier_1" id="znStockSupplier_1" class="cloned" maxlength="45"/>
				</td-->
				<td width="144">
				<input type="text"  name="znStockExpiryDate_1" id="znStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<!--td width="144">
				<input type="text"  name="znStockComments_1" id="znStockComments_1" class="cloned" maxlength="255"/>
				</td-->
			</tr>
			<tr id="formbuttons_1">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_1" value="Add a Batch" width="auto"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_1" value="Remove Batch" width="auto"/>
			</tr>
		</table>

		<h3 align="center"> Low-Osmolarity Oral Rehydration Salts (ORS):</h3>
		<table>
			<thead>
				<tr>
					<td style="color:#872300;font-weight:bold">Oral Rehydration Salts (ORS)</td>
				</tr>
				<tr>

					<!--td width="144">Batch No</td-->
					<td width="144">Quantities at Hand (Sachets)</td>
					<!--td width="144">Date Supplied to Facility</td-->
					<!--td width="144">Supplier</td-->
					<td width="144">Expiry Date</td>
					<!--td width="144">Comments</td-->

				</tr>
			</thead>
			<!--tr><td>Low-Osmolarity Oral Rehydration Salts (ORS): </td></tr-->
			<tr class="clonable ors">
				<!--td width="144">
				<input type="text"  name="orsStockBatchNo_1" id="orsStockBatchNo_1" class="cloned" maxlength="10"/>
				
				</td-->
				<td width="144">
				<input type="number"  name="orsStockQuantity_1" id="orsStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				<input type="hidden"  name="orsCommodityName_1" id="orsCommodityName_1" value="Oral Rehydration Salts (ORS) Sachet" />
				</td>
				<!--td width="144">
				<input type="date"  name="orsStockDispensedDate_1" id="orsStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td-->
				<!--td width="144">
				<input type="text"  name="orsStockSupplier_1" id="orsStockSupplier_1" class="cloned" maxlength="45"/>
				</td-->
				<td width="144">
				<input type="text"  name="orsStockExpiryDate_1" id="orsStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<!--td width="144">
				<input type="text"  name="orsStockComments_1" id="orsStockComments_1" class="cloned" maxlength="255"/>
				</td-->
			</tr>
			<tr id="formbuttons_2">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_2" value="Add a Batch" width="12"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_2" value="Remove Batch" width="12"/>
			</tr>
		</table>
	</div>
	
	<div id="tabs-3" class="tab OPD">
		
		<table>
			<thead>
				<tr>
					<td style="color:#872300">Zinc Sulphate 20mg</td>
				</tr>
				<tr>

					<!--td width="144">Batch No</td-->
					<td width="144">Quantities at Hand (Tablets)</td>
					<!--td width="144">Date Supplied to Facility</td-->
					<!--td width="144">Supplier</td-->
					<td width="144">Expiry Date</td>
					<!--td width="144">Comments</td-->

				</tr>
			</thead>
			<tr class="clonable zinc">
				<!--td width="144">
				<input type="text"  name="znStockBatchNo_1" id="znStockBatchNo_1" class="cloned" maxlength="10"/>
				</td-->
				<td width="144">
				<input type="number"  name="znStockQuantity_1" id="znStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				<input type="hidden"  name="znCommodityName_1" id="znCommodityName_1" value="Zinc Sulphate (20mg) Tablet" />
				</td>
				<!--td width="144">
				<input type="date"  name="znStockDispensedDate_1" id="znStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td-->
				<!--td width="144">
				<input type="text"  name="znStockSupplier_1" id="znStockSupplier_1" class="cloned" maxlength="45"/>
				</td-->
				<td width="144">
				<input type="text"  name="znStockExpiryDate_1" id="znStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<!--td width="144">
				<input type="text"  name="znStockComments_1" id="znStockComments_1" class="cloned" maxlength="255"/>
				</td-->
			</tr>
			<tr id="formbuttons_1">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_1" value="Add a Batch" width="auto"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_1" value="Remove Batch" width="auto"/>
			</tr>
		</table>

		<h3 align="center"> Low-Osmolarity Oral Rehydration Salts (ORS):</h3>
		<table>
			<thead>
				<tr>
					<td style="color:#872300;font-weight:bold">Oral Rehydration Salts (ORS)</td>
				</tr>
				<tr>

					<!--td width="144">Batch No</td-->
					<td width="144">Quantities at Hand (Sachets)</td>
					<!--td width="144">Date Supplied to Facility</td-->
					<!--td width="144">Supplier</td-->
					<td width="144">Expiry Date</td>
					<!--td width="144">Comments</td-->

				</tr>
			</thead>
			<!--tr><td>Low-Osmolarity Oral Rehydration Salts (ORS): </td></tr-->
			<tr class="clonable ors">
				<!--td width="144">
				<input type="text"  name="orsStockBatchNo_1" id="orsStockBatchNo_1" class="cloned" maxlength="10"/>
				
				</td-->
				<td width="144">
				<input type="number"  name="orsStockQuantity_1" id="orsStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				<input type="hidden"  name="orsCommodityName_1" id="orsCommodityName_1" value="Oral Rehydration Salts (ORS) Sachet" />
				</td>
				<!--td width="144">
				<input type="date"  name="orsStockDispensedDate_1" id="orsStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td-->
				<!--td width="144">
				<input type="text"  name="orsStockSupplier_1" id="orsStockSupplier_1" class="cloned" maxlength="45"/>
				</td-->
				<td width="144">
				<input type="text"  name="orsStockExpiryDate_1" id="orsStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<!--td width="144">
				<input type="text"  name="orsStockComments_1" id="orsStockComments_1" class="cloned" maxlength="255"/>
				</td-->
			</tr>
			<tr id="formbuttons_2">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_2" value="Add a Batch" width="12"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_2" value="Remove Batch" width="12"/>
			</tr>
		</table>
	</div>
	
	
	<div id="tabs-4" class="tab Pharmacy">
		<table>
			<thead>
				<tr>
					<td style="color:#872300">Zinc Sulphate 20mg</td>
				</tr>
				<tr>

					<td width="144">Batch No</td>
					<!--td width="144">Quantities at Hand (Tablets)</td-->
					<td width="144">Date Supplied to Facility</td>
					<td width="144">Supplier</td>
					<td width="144">Expiry Date</td>
					<td width="144">Comments</td>

				</tr>
			</thead>
			<tr class="clonable zinc">
				<td width="144">
				<input type="text"  name="znStockBatchNo_1" id="znStockBatchNo_1" class="cloned" maxlength="10"/>
				<input type="hidden"  name="znCommodityName_1" id="znCommodityName_1" value="Zinc Sulphate (20mg) Tablet" />
				</td>
				<!--td width="144">
				<input type="number"  name="znStockQuantity_1" id="znStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				</td-->
				<td width="144">
				<input type="date"  name="znStockDispensedDate_1" id="znStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockSupplier_1" id="znStockSupplier_1" class="cloned" maxlength="45"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockExpiryDate_1" id="znStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockComments_1" id="znStockComments_1" class="cloned" maxlength="255"/>
				</td>
			</tr>
			<tr id="formbuttons_1">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_1" value="Add a Batch" width="auto"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_1" value="Remove Batch" width="auto"/>
			</tr>
		</table>

		<h3 align="center"> Low-Osmolarity Oral Rehydration Salts (ORS):</h3>
		<table>
			<thead>
				<tr>
					<td style="color:#872300;font-weight:bold">Oral Rehydration Salts (ORS)</td>
				</tr>
				<tr>

					<td width="144">Batch No</td>
					<!--td width="144">Quantities at Hand (Sachets)</td-->
					<td width="144">Date Supplied to Facility</td>
					<td width="144">Supplier</td>
					<td width="144">Expiry Date</td>
					<td width="144">Comments</td>

				</tr>
			</thead>
			<!--tr><td>Low-Osmolarity Oral Rehydration Salts (ORS): </td></tr-->
			<tr class="clonable ors">
				<td width="144">
				<input type="text"  name="orsStockBatchNo_1" id="orsStockBatchNo_1" class="cloned" maxlength="10"/>
				<input type="hidden"  name="orsCommodityName_1" id="orsCommodityName_1" value="Oral Rehydration Salts (ORS) Sachet" />
				</td>
				<!--td width="144">
				<input type="number"  name="orsStockQuantity_1" id="orsStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				</td-->
				<td width="144">
				<input type="date"  name="orsStockDispensedDate_1" id="orsStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockSupplier_1" id="orsStockSupplier_1" class="cloned" maxlength="45"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockExpiryDate_1" id="orsStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockComments_1" id="orsStockComments_1" class="cloned" maxlength="255"/>
				</td>
			</tr>
			<tr id="formbuttons_2">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_2" value="Add a Batch" width="12"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_2" value="Remove Batch" width="12"/>
			</tr>
		</table>
	</div>
	
	<div id="tabs-5" class="tab Stores">
		<table>
			<thead>
				<tr>
					<td style="color:#872300">Zinc Sulphate 20mg</td>
				</tr>
				<tr>

					<td width="144">Batch No</td>
					<!--td width="144">Quantities at Hand (Tablets)</td-->
					<td width="144">Date Supplied to Facility</td>
					<td width="144">Supplier</td>
					<td width="144">Expiry Date</td>
					<td width="144">Comments</td>

				</tr>
			</thead>
			<tr class="clonable zinc">
				<td width="144">
				<input type="text"  name="znStockBatchNo_1" id="znStockBatchNo_1" class="cloned" maxlength="10"/>
				<input type="hidden"  name="znCommodityName_1" id="znCommodityName_1" value="Zinc Sulphate (20mg) Tablet" />
				</td>
				<!--td width="144">
				<input type="number"  name="znStockQuantity_1" id="znStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				</td-->
				<td width="144">
				<input type="date"  name="znStockDispensedDate_1" id="znStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockSupplier_1" id="znStockSupplier_1" class="cloned" maxlength="45"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockExpiryDate_1" id="znStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockComments_1" id="znStockComments_1" class="cloned" maxlength="255"/>
				</td>
			</tr>
			<tr id="formbuttons_1">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_1" value="Add a Batch" width="auto"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_1" value="Remove Batch" width="auto"/>
			</tr>
		</table>

		<h3 align="center"> Low-Osmolarity Oral Rehydration Salts (ORS):</h3>
		<table>
			<thead>
				<tr>
					<td style="color:#872300;font-weight:bold">Oral Rehydration Salts (ORS)</td>
				</tr>
				<tr>

					<td width="144">Batch No</td>
					<!--td width="144">Quantities at Hand (Sachets)</td-->
					<td width="144">Date Supplied to Facility</td>
					<td width="144">Supplier</td>
					<td width="144">Expiry Date</td>
					<td width="144">Comments</td>

				</tr>
			</thead>
			<!--tr><td>Low-Osmolarity Oral Rehydration Salts (ORS): </td></tr-->
			<tr class="clonable ors">
				<td width="144">
				<input type="text"  name="orsStockBatchNo_1" id="orsStockBatchNo_1" class="cloned" maxlength="10"/>
				<input type="hidden"  name="orsCommodityName_1" id="orsCommodityName_1" value="Oral Rehydration Salts (ORS) Sachet" />
				</td>
				<!--td width="144">
				<input type="number"  name="orsStockQuantity_1" id="orsStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				</td-->
				<td width="144">
				<input type="date"  name="orsStockDispensedDate_1" id="orsStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockSupplier_1" id="orsStockSupplier_1" class="cloned" maxlength="45"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockExpiryDate_1" id="orsStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockComments_1" id="orsStockComments_1" class="cloned" maxlength="255"/>
				</td>
			</tr>
			<tr id="formbuttons_2">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_2" value="Add a Batch" width="12"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_2" value="Remove Batch" width="12"/>
			</tr>
		</table>
	</div>
	
	<div id="tabs-6" class="tab Others">
		<table>
			<thead>
				<tr>
					<td style="color:#872300">Zinc Sulphate 20mg</td>
				</tr>
				<tr>

					<td width="144">Batch No</td>
					<!--td width="144">Quantities at Hand (Tablets)</td-->
					<td width="144">Date Supplied to Facility</td>
					<td width="144">Supplier</td>
					<td width="144">Expiry Date</td>
					<td width="144">Comments</td>

				</tr>
			</thead>
			<tr class="clonable zinc">
				<td width="144">
				<input type="text"  name="znStockBatchNo_1" id="znStockBatchNo_1" class="cloned" maxlength="10"/>
				<input type="hidden"  name="znCommodityName_1" id="znCommodityName_1" value="Zinc Sulphate (20mg) Tablet" />
				</td>
				<!--td width="144">
				<input type="number"  name="znStockQuantity_1" id="znStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				</td-->
				<td width="144">
				<input type="date"  name="znStockDispensedDate_1" id="znStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockSupplier_1" id="znStockSupplier_1" class="cloned" maxlength="45"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockExpiryDate_1" id="znStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="znStockComments_1" id="znStockComments_1" class="cloned" maxlength="255"/>
				</td>
			</tr>
			<tr id="formbuttons_1">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_1" value="Add a Batch" width="auto"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_1" value="Remove Batch" width="auto"/>
			</tr>
		</table>

		<h3 align="center"> Low-Osmolarity Oral Rehydration Salts (ORS):</h3>
		<table>
			<thead>
				<tr>
					<td style="color:#872300;font-weight:bold">Oral Rehydration Salts (ORS)</td>
				</tr>
				<tr>

					<td width="144">Batch No</td>
					<!--td width="144">Quantities at Hand (Sachets)</td-->
					<td width="144">Date Supplied to Facility</td>
					<td width="144">Supplier</td>
					<td width="144">Expiry Date</td>
					<td width="144">Comments</td>

				</tr>
			</thead>
			<!--tr><td>Low-Osmolarity Oral Rehydration Salts (ORS): </td></tr-->
			<tr class="clonable ors">
				<td width="144">
				<input type="text"  name="orsStockBatchNo_1" id="orsStockBatchNo_1" class="cloned" maxlength="10"/>
				<input type="hidden"  name="orsCommodityName_1" id="orsCommodityName_1" value="Oral Rehydration Salts (ORS) Sachet" />
				</td>
				<!--td width="144">
				<input type="number"  name="orsStockQuantity_1" id="orsStockQuantity_1" class="cloned fromZero" maxlength="6"/>
				</td-->
				<td width="144">
				<input type="date"  name="orsStockDispensedDate_1" id="orsStockDispensedDate_1" class="autoDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockSupplier_1" id="orsStockSupplier_1" class="cloned" maxlength="45"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockExpiryDate_1" id="orsStockExpiryDate_1" class="futureDate cloned" readonly="readonly" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="orsStockComments_1" id="orsStockComments_1" class="cloned" maxlength="255"/>
				</td>
			</tr>
			<tr id="formbuttons_2">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger_2" value="Add a Batch" width="12"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove_2" value="Remove Batch" width="12"/>
			</tr>
		</table>
	</div>
</div><!--end of div tabs-->
	  
	<h3 align="center"> Oral Rehydration Therapy Corner Assessment </h3>
	<section class="block">
		<section class="column">
			<section class="row-title">
				<section class="left">
					ASPECTS
				</section>
				<section class="right" style="float:right">
					<section class="col">
						YES
					</section>
					<section class="col">
						NO
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> Are dehydrated children rehydrated at this facility? </label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="ortQuestion1" id="ortQuestion1_y" value="1" />
					</section>
					<section class="col">
						<input type="radio" name="ortQuestion1" id="ortQuestion1_n" value="0" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> Does the facility have a designated location for oral rehydration ?</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="ortQuestion2" id="ortQuestion2_y"  value="1" />
					</section>
					<section class="col">
						<input type="radio" name="ortQuestion2" id="ortQuestion2_n" value="0" />
					</section>
				</section>
			</section>
			<section class="row hide" style="display:none">
					<label class="dcah-label"> If, YES, mention the various locations:</label>
				</section>
			<section class="row hide" style="display:none">
				<section class="left" >
					<label> MCH</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="checkbox" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
					</section>
				</section>
			</section>
			<section class="row hide" style="display:none">
				<section class="left" >
					<label> OPD</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="checkbox" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
					</section>
				</section>
			</section>
			<section class="row hide" style="display:none">
				<section class="left" >
					<label> WARD </label>
				</section>
				<section class="right">
					<section class="col">
						<input type="checkbox" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
					</section>
				</section>
			</section>
			<section class="row hide" style="display:none">
				<section class="left" >
					<label> Other*?</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="text" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
					</section>
				</section>
			</section>
		</section>
	</section>
	
	<h3 align="center"> State the availability &amp; Quantities of the following Equipment at the ORT Corner-(Assessor should ensure the interviewee responds to each of the questions). </h3>
	<section class="block">
		
	<table id="tableEquipmentList">
	<tr class="row2">
	<input type="button" id="editEquipmentListTopButton" name="editEquipmentList" class="awesome myblue medium" value="Edit List"/>
	</tr>
		<tr>
			<thead >
				<td width="144"><label class="dcah-label" style="font-size:1.0em">Equipment Name</label></td>
				<td width="144"><label class="dcah-label" style="font-size:1.0em">Yes/No</label></td>
				<td width="144"><label class="dcah-label" style="font-size:1.0em">Total Equipment Quantities</label></td>
				<td width="144"><label class="dcah-label" style="font-size:1.0em">Who supplied the supplies to the facility? (respond by item)</label></td>
				<td width="144"><label class="dcah-label" style="font-size:1.0em">Is there a budget for replacement of the missing, stolen or Broken ORT Corner equipment in the Current *AOP/QIP?</label></td>
			</thead>
	   </tr>
	   
	   <tr class="row2" id="tr_1">
			<td width="144">
				<label>Tea spoons </label>
				<input type="hidden"  name="equipCode_1" id="equipCode_1" value="EQP01" />
			</td>
			<td width="144">
				<select name="equipAvailable_1" id="equipAvailable_1" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_1" id="equipQuantity_1" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_1" id="equipSupplier_1" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_1" id="equipBudgetPresent_1" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	  <tr class="row2" id="tr_2">
			<td width="144">
				<label>Table spoons </label>
				<input type="hidden"  name="equipCode_2" id="equipCode_2" value="EQP02" />
			</td>
			<td width="144">
				<select name="equipAvailable_2" id="equipAvailable_2" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_2" id="equipQuantity_2" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_2" id="equipSupplier_2" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_2" id="equipBudgetPresent_2" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	  <tr class="row2" id="tr_3">
			<td width="144">
				<label>Stirring spoon </label>
				<input type="hidden"  name="equipCode_3" id="equipCode_3" value="EQP03" />
			</td>
			<td width="144">
				<select name="equipAvailable_3" id="equipAvailable_3" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_3" id="equipQuantity_3" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_3" id="equipSupplier_3" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_3" id="equipBudgetPresent_3" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_4">
			<td width="144">
				<label>Plastic buckets (with lids for infection prevention) </label>
				<input type="hidden"  name="equipCode_4" id="equipCode_4" value="EQP04" />
			</td>
			<td width="144">
				<select name="equipAvailable_4" id="equipAvailable_4" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_4" id="equipQuantity_4" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_4" id="equipSupplier_4" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_4" id="equipBudgetPresent_4" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_5">
			<td width="144">
				<label> Buckets – for storing cups, spoons </label>
				<input type="hidden"  name="equipCode_5" id="equipCode_5" value="EQP05" />
			</td>
			<td width="144">
				<select name="equipAvailable_5" id="equipAvailable_5" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_5" id="equipQuantity_5" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_5" id="equipSupplier_5" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_5" id="equipBudgetPresent_5" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_6">
			<td width="144">
				<label> Plastic cups (50-100mls) </label>
				<input type="hidden"  name="equipCode_6" id="equipCode_6" value="EQP06" />
			</td>
			<td width="144">
				<select name="equipAvailable_6" id="equipAvailable_6" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_6" id="equipQuantity_6" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_6" id="equipSupplier_6" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_6" id="equipBudgetPresent_6" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>  
	  <tr class="row2" id="tr_7">
			<td width="144">
				<label> Plastic cups (101-200mls) </label>
				<input type="hidden"  name="equipCode_7" id="equipCode_7" value="EQP07" />
			</td>
			<td width="144">
				<select name="equipAvailable_7" id="equipAvailable_7" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_7" id="equipQuantity_7" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_7" id="equipSupplier_7" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_7" id="equipBudgetPresent_7" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_8">
			<td width="144">
				<label> Plastic cups (201mls-499mls) </label>
				<input type="hidden"  name="equipCode_8" id="equipCode_8" value="EQP08" />
			</td>
			<td width="144">
				<select name="equipAvailable_8" id="equipAvailable_8" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_8" id="equipQuantity_8" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_8" id="equipSupplier_8" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_8" id="equipBudgetPresent_8" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_9">
			<td width="144">
				<label> Plastic cups (500mls) </label>
				<input type="hidden"  name="equipCode_9" id="equipCode_9" value="EQP09" />
			</td>
			<td width="144">
				<select name="equipAvailable_9" id="equipAvailable_9" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_9" id="equipQuantity_9" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_9" id="equipSupplier_9" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_9" id="equipBudgetPresent_9" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_10">
			<td width="144">
				<label> 1 litre Calibrated measuring jars  </label>
				<input type="hidden"  name="equipCode_10" id="equipCode_10" value="EQP10" />
			</td>
			<td width="144">
				<select name="equipAvailable_10" id="equipAvailable_10" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_10" id="equipQuantity_10" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_10" id="equipSupplier_10" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_10" id="equipBudgetPresent_10" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_11">
			<td width="144">
				<label> Table Trays  </label>
				<input type="hidden"  name="equipCode_11" id="equipCode_11" value="EQP11" />
			</td>
			<td width="144">
				<select name="equipAvailable_11" id="equipAvailable_11" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_11" id="equipQuantity_11" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_11" id="equipSupplier_11" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_11" id="equipBudgetPresent_11" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_12">
			<td width="144">
				<label> Wash Basins </label>
				<input type="hidden"  name="equipCode_12" id="equipCode_12" value="EQP12" />
			</td>
			<td width="144">
				<select name="equipAvailable_12" id="equipAvailable_12" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_12" id="equipQuantity_12" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_12" id="equipSupplier_12" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_12" id="equipBudgetPresent_12" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_13">
			<td width="144">
				<label>  Water heating equipment,(e.g..hot plate/Meko )  </label>
				<input type="hidden"  name="equipCode_13" id="equipCode_13" value="EQP13" />
			</td>
			<td width="144">
				<select name="equipAvailable_13" id="equipAvailable_13" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_13" id="equipQuantity_13" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_13" id="equipSupplier_13" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_13" id="equipBudgetPresent_13" class="cloned ">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_14">
			<td width="144">
				<label>  Hot plate-Electric/Solar powered  </label>
				<input type="hidden"  name="equipCode_14" id="equipCode_14" value="EQP14" />
			</td>
			<td width="144">
				<select name="equipAvailable_14" id="equipAvailable_14" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_14" id="equipQuantity_14" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_14" id="equipSupplier_14" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_14" id="equipBudgetPresent_14" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_15">
			<td width="144">
				<label>  Heater- Gas powered  </label>
				<input type="hidden"  name="equipCode_15" id="equipCode_15" value="EQP15" />
			</td>
			<td width="144">
				<select name="equipAvailable_15" id="equipAvailable_15" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_15" id="equipQuantity_15" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_15" id="equipSupplier_15" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_15" id="equipBudgetPresent_15" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_16">
			<td width="144">
				<label>  Charcoal or Firewood  stove/Heater  </label>
				<input type="hidden"  name="equipCode_16" id="equipCode_16" value="EQP16" />
			</td>
			<td width="144">
				<select name="equipAvailable_16" id="equipAvailable_16" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_16" id="equipQuantity_16" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_16" id="equipSupplier_16" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_16" id="equipBudgetPresent_16" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_17">
			<td width="144">
				<label>  Paraffin Stove/Heater </label>
				<input type="hidden"  name="equipCode_17" id="equipCode_17" value="EQP17" />
			</td>
			<td width="144">
				<select name="equipAvailable_17" id="equipAvailable_17" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_17" id="equipQuantity_17" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_17" id="equipSupplier_17" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_17" id="equipBudgetPresent_17" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_18">
			<td width="144">
				<label>  Sufurias  with a Lid (14 inch) </label>
				<input type="hidden"  name="equipCode_18" id="equipCode_18" value="EQP18" />
			</td>
			<td width="144">
				<select name="equipAvailable_18" id="equipAvailable_18" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_18" id="equipQuantity_18" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_18" id="equipSupplier_18" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_18" id="equipBudgetPresent_18" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_19">
			<td width="144">
				<label>  Waste Container </label>
				<input type="hidden"  name="equipCode_19" id="equipCode_19" value="EQP19" />
			</td>
			<td width="144">
				<select name="equipAvailable_19" id="equipAvailable_19" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_19" id="equipQuantity_19" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_19" id="equipSupplier_19" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_19" id="equipBudgetPresent_19" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_20">
			<td width="144">
				<label>  Wall Clock /Timing device </label>
				<input type="hidden"  name="equipCode_20" id="equipCode_20" value="EQP20" />
			</td>
			<td width="144">
				<select name="equipAvailable_20" id="equipAvailable_20" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_20" id="equipQuantity_20" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_20" id="equipSupplier_20" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_20" id="equipBudgetPresent_20" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_21">
			<td width="144">
				<label> Table- for mixing ORS </label>
				<input type="hidden"  name="equipCode_21" id="equipCode_21" value="EQP21" />
			</td>
			<td width="144">
				<select name="equipAvailable_21" id="equipAvailable_21" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_21" id="equipQuantity_21" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_21" id="equipSupplier_21" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_21" id="equipBudgetPresent_21" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	  <tr class="row2" id="tr_22">
			<td width="144">
				<label> Benches/chair(s) </label>
				<input type="hidden"  name="equipCode_22" id="equipCode_22" value="EQP22" />
			</td>
			<td width="144">
				<select name="equipAvailable_22" id="equipAvailable_22" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_22" id="equipQuantity_22" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_22" id="equipSupplier_22" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_22" id="equipBudgetPresent_22" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	  <tr class="row2" id="tr_23">
			<td width="144">
				<label> Water Storage Container ( at least 40lts)- With Tap </label>
				<input type="hidden"  name="equipCode_23" id="equipCode_23" value="EQP23" />
			</td>
			<td width="144">
				<select name="equipAvailable_23" id="equipAvailable_23" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_23" id="equipQuantity_23" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_23" id="equipSupplier_23" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_23" id="equipBudgetPresent_23" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_24">
			<td width="144">
				<label> Water Storage Container ( at least 40lts)- Without Tap </label>
				<input type="hidden"  name="equipCode_24" id="equipCode_24" value="EQP24" />
			</td>
			<td width="144">
				<select name="equipAvailable_24" id="equipAvailable_24" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_24" id="equipQuantity_24" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_24" id="equipSupplier_24" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_24" id="equipBudgetPresent_24" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_25">
			<td width="144">
				<label> Locally available measuring containers – e.g. cooking fat Tins. </label>
				<input type="hidden"  name="equipCode_25" id="equipCode_25" value="EQP25" />
			</td>
			<td width="144">
				<select name="equipAvailable_25" id="equipAvailable_25" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_25" id="equipQuantity_25" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_25" id="equipSupplier_25" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_25" id="equipBudgetPresent_25" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_26">
			<td width="144">
				<label> Weighing scale </label>
				<input type="hidden"  name="equipCode_26" id="equipCode_26" value="EQP26" />
			</td>
			<td width="144">
				<select name="equipAvailable_26" id="equipAvailable_26" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_26" id="equipQuantity_26" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_26" id="equipSupplier_26" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_26" id="equipBudgetPresent_26" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_27">
			<td width="144">
				<label> Hand Washing Facility/Point e.g. tippy taps. </label>
				<input type="hidden"  name="equipCode_27" id="equipCode_27" value="EQP27" />
			</td>
			<td width="144">
				<select name="equipAvailable_27" id="equipAvailable_27" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_27" id="equipQuantity_27" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_27" id="equipSupplier_27" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_27" id="equipBudgetPresent_27" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_28">
			<td width="144">
				<label>  Safe water source  </label>
				<input type="hidden"  name="equipCode_28" id="equipCode_28" value="EQP28" />
			</td>
			<td width="144">
				<select name="equipAvailable_28" id="equipAvailable_28" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_28" id="equipQuantity_28" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_28" id="equipSupplier_28" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_28" id="equipBudgetPresent_28" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_29">
			<td width="144">
				<label>  Thermometer  </label>
				<input type="hidden"  name="equipCode_29" id="equipCode_29" value="EQP29" />
			</td>
			<td width="144">
				<select name="equipAvailable_29" id="equipAvailable_29" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_29" id="equipQuantity_29" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_29" id="equipSupplier_29" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_29" id="equipBudgetPresent_29" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <tr class="row2" id="tr_30">
			<td width="144">
				<label>  MUAC Tape  </label>
				<input type="hidden"  name="equipCode_30" id="equipCode_30" value="EQP30" />
			</td>
			<td width="144">
				<select name="equipAvailable_30" id="equipAvailable_30" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
			<td width="144">
				<input type="number"  name="equipQuantity_30" id="equipQuantity_30" class="cloned fromZero" maxlength="6"/>
			</td>
			<td width="144">
				<input type="text"  name="equipSupplier_30" id="equipSupplier_30" class="cloned"  maxlength="45"/>
			</td>
			<td width="144">
				<select name="equipBudgetPresent_30" id="equipBudgetPresent_30" class="cloned">
						<option value="" selected="selected">Select One</option>
					    <option value="1">Yes</option>
					    <option value="0">No</option>
				</select>
			</td>
	 </tr>
	 <!--tr class="row2">
	 <input type="button" id="editEquipmentListBottomButton" name="editEquipmentList" class="awesome myblue medium" value="Edit List"/-->
	 </tr>
   </table>
	</section>
	
</form>';

		$data['form'] = $form_zinc_ors;
		$data['form_id'] = 'zinc_ors_inventory';

		$this -> load -> view('form', $data);
	}

	public function form_mnh_equipment_assessment() {
		$form_mnh_assessment = '';
		$form_mnh_assessment.= '<form name="form_assessment_equiqment" id="form_assessment_equiqment" method="POST" action="' . base_url() . 'submit/c_form/form_assessment_equiqment' . '" >
	<!-- form for collecting inventory status information -->
	<h3 align="center"> ASSESSMENT OF EQUIPMENT AND SUPPLIES FOR EmONC</h3>

	<section class="block">
		<section class="column-wide">
			<section class="row-title">
				<label class="dcah-label">FACILILTY DETAILS</label>
			</section>
			<section class="row">
				<section class="left">
					1. Faciliy Name
				</section>
				<section class="right">
					<input type="text" />
				</section>

			</section>

			<section class="row">
				<section class="left">
					2. Faciliy Number
				</section>
				<section class="right">
					<input type="number" />
				</section>

			</section>

			<!--
			<section class="row">
			<section class="left">
			</section>
			<section class="center">
			</section>
			-->

			<section class="row">
				<section class="left">
					3. Keph Level
				</section>
				<section class="right">
					<select>
						<option>Keph 1</option>
						<option>Keph 2</option>
						<option>Keph 3</option>
						<option>Keph 4</option>
						<option>Keph 5</option>
						<option>Keph 6</option>
					</select>
				</section>
			</section>

			<section class="row">
				<section class="left">
					4. Date<em>(Today)</em>
				</section>
				<section class="right">
					<input type="date" class="autoDate" />
				</section>
			</section>
		</section>
	</section>

	<table>

		<section class="block">
			<section class="column-wide">
				<section class="row-title">
					<section class="left">
						<label class="dcah-label">Inventory Type: Labor & Delivery</label>
					</section>
					<section class="center">
						<label class="dcah-label">ANSWER</label>
					</section>
					<section class="right">
						<label class="dcah-label">COMMENTS (On Why NOT)</label>
					</section>
					
				</section>

				<section class="row">
					<section class="left">
						5. Does this facility provide delivery services
					</section>
					<section class="center">
						<select>
							<option>Yes</option>
							<option>No</option>
						</select>
					</section>
					<section class="right">
						<input type="text" id="qn1Comment" name="qn1Comment"/>
					</section>

				</section>
				<section class="row">
					<section class="left">
						6. Does the facility provide 24 hour coverage for delivery services?
					</section>
					<section class="center">
						<select>
							<option>Yes</option>
							<option>No</option>
						</select>
					</section>
					<section class="right">
						<input type="text" id="qn1Comment" name="qn1Comment"/>
					</section>

				</section>
				<section class="row">
					<section class="left">
						7. Is a person skilled in conducting deliveries present  at the facility or on call 24 hours a day,
						including weekends, to provide delivery care?
					</section>
					<section class="center">
						<select>
							<option>Yes, present, schedule observed</option>
							<option>Yes, present, schedule reported, not seen</option>
							<option>Yes, on-call schedule observed</option>
							<option>Yes, on-call, schedule reported, not seen</option>
							<option>No</option>
						</select>
					</section>
					

				</section>
				<section class="row">
					<section class="left">
						8. Please tell me the total number of beds in the maternity ward / unit in this facility*
					</section>
					<section class="right">
						<input type="number" />
					</section>

				</section>

				<section class="row-title">
					<label class="dcah-label">*Ask to see the room where Normal Deliveries are conducted</label>
				</section>

				<section class="row">
					<section class="left">
						9. Describe the setting of the Delivery Room
					</section>
					<section class="right">
						<select>
							<option>private room, visual & auditory privacy</option>
							<option>non-private room, visual & auditory privacy</option>
							<option>visual privacy only</option>
							<option>no privacy</option>
						</select>
					</section>

				</section>

				<h3>NOTE THE AVAILABILITY AND CONDITION OF SUPPLIES AND EQUIPMENT REQUIRED FOR DELIVERY SERVICES. EQUIPMENT MAY BE IN DELIVERY ROOM OR AN ADJACENT ROOM.</h3>

			</section>
			<section class="column-wide">
				<section class="row">

					<section class="row-title">
						<section class="left">
							<label class="dcah-label">10. EQUIPMENT REQUIRED FOR DELIVERY SERVICES</label>
						</section>
						<section class="center">
								<label class="dcah-label">Availability (A)</label>
						</section>
						<section class="right">
								<label class="dcah-label">Functioning (B)</label>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="left">
						10a. Examination light
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10b. Delivery bed/ couch
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10c. Clean or sterile gloves
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10d.Mackintosh
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10e. Linen
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10f. Disposable Needles (gauge 21, 23)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10g. Sharps container
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10h. At least five or more 2-ml or 5-ml disposable syringes
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10i. Three properly labeled or colour coded IP buckets
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10j. Jik
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10k. Soap for washing instruments
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10l.Soap for handwashing
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10m.Properly Labelled or colour coded waste segragation bins
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10n. Drip stand
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10o. Single-use hand-drying towels
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10p. Running  Water for handwashing
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>
			</section>

			<section class="column-wide">
				<section class="row">

					<section class="row-title">
						<section class="left">
							<label class="dcah-label">11. Inspect the contents of available delivery kits</label>
						</section>
						<section class="center">
							<label class="dcah-label">Quantity</label>
						</section>
						<section class="right">
							<label class="dcah-label">Comments</label>
						</section>
					</section>

				</section>

				<section class="row">
					<section class="left">
						11a. Cord scissors-1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11b. Cord clamps/ ties
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11c. Long artery Forceps (straight, lockable)-2
					</section>

					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11d. Episiotomy scissors  -1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11e. Kidney dishes  -2
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11f. Gallipots -1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11g. Sponge-holding forceps -1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11h. Needle holder-1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11i. Dissecting forceps -toothed-1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11j. Instrument tray with cover -1
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11k. Total number of delivery kits in the labour ward
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						11l. Total number of delivery kits with all required items above (17C)
					</section>
					<section class="center">
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>
				<section class="row-title">
					<section class="left">
						<label class="dcah-label">12. Other Equipment and supplies</label>
					</section>
					<section class="center">
						<section class="center">
							<label class="dcah-label">Availability (A)</label>
						</section>

					</section>
					<section class="right">
							<label class="dcah-label">Functioning (B)</label>
					</section>
				</section>

				<section class="row">
					<section class="left">
						12a. Stethoscopes  adult and neonatal
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12b. BP machine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>
				<section class="row">
					<section class="left">
						12c. Thermometer
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>
				<section class="row">
					<section class="left">
						12d. Fetoscope or sonicaid
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>
				<section class="row">
					<section class="left">
						12e. Suction Machine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12f. Weighing Scale for babies
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12g. Weighing scale for premature/ LBW babies; (digital/ graduated)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12h. Adult resuscitation tray
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12i. Autoclave or steriliser
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12j. Manual Vacuum Aspiration kit
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12k. Ventouse or Kiwi vacuum extractor
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12l. Dilatation and curretage kit
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12m. Raytech gauze
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12n. Sanitary pads
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12o. Elbow length gloves
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12p. Patellar Hammer
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12q. Sutures
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

			</section>

			<section class="column-wide">

				<section class="row-title">
					<section class="left">
						<label class="dcah-label">13. Medications in the Maternity/Labour ward</label>
					</section>
					<section class="center">
						<label class="dcah-label">Availability</label>
					</section>
					<section class="right">
						<label class="dcah-label">Comments</label>
					</section>
				</section>

				<section class="row">
					<section class="left">
						13a. Intravenous solutions: either Ringers lactate, D5NS, or NS infusion
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13b. Injectable ergometrine/ methergine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13c. Injectable oxytocin/ syntocin
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13d. Injectable Hydralazine or Apresoline
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13e. Injectable diazepam
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13f. Injectable magnesium sulfate
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13g. Injectable amoxicillin or ampicillin
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13h. Injectable gentamicin
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13i. Calcium gluconate
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13j. Methyldopa/Aldomet
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13k. Lidocaine (lignocaine) or other local anesthetic
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13l. Nifedipine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13m. Vitamin A
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13n. Vitamin K
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13o. Oxygen
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						13p. Other / specify
					</section>
					<section class="center">
						<textarea></textarea>
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
				<section class="row-title">
					<section class="left">
						<label class="dcah-label">QUESTION</label>
					</section>
					<section class="center">
						<label class="dcah-label">ANSWER</label>
					</section>
				</section>
				</section>
					<section class="left">
						14a. Does this facility perform newborn resuscitation?
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
						</select>
					</section>
				<section class="row">
					<section class="left">
						14b. Has this facility performed newborn resuscitation in the last 3 months with bag and mask?
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>
				<section class="row-title">
					<section class="left">
						<label class="dcah-label">15. EQUIPMENT AND SUPPLIES FOR NEWBORN CARE</label>
					</section>
					<section class="center">
						<label class="dcah-label">OBSERVED (a)</label>
					</section>
					<section class="center">
						<label class="dcah-label">FUNCTIONING(b)</label>
					</section>
					<section class="center">

					</section>
				</section>

				<section class="row">
					<section class="left">
						15a. Self inflating Neonatal Ambu bag ( 500 mls)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						15b. Infant masks  (size 0-preterm)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						15c. Infant mask size 1 (term new born)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15d. Infant mask size 2 (infant up to 1 yr)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15de. Clock  with seconds arm
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15f. Neonatal Incubator
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15g. A Radiant Heater
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15h. Infant Scale
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15i. Suction bulb for mucus extraction
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						15j. Suction apparatus for use with catheter
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15k. A flat, clean, dry and warm newborn resuscitation surface
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15L. Disposable cord ties or clamps
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						15m. Clean and warm towels/cloths for drying / warming / wrapping baby
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="right">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
					</section>
				</section>

				<section class="row-title">
					<section class="left">
						<label class="dcah-label">QUESTION</label>
					</section>
					<section class="center">
						<label class="dcah-label">ANSWER</label>
					</section>
				</section>

				<section class="row">
					<section class="left">
						16. Does this facility perform blood transfusions? (IF YES, Is there a blood bank or are there transfusion  services only)
					</section>
					<section class="center">
						<select>
							<option> Yes, blood bank available in facility </option>
							<option> Yes, transfusion done but  no blood bank in the facility</option>
							<option> No blood transfusion</option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						17. Does this facility ever perform caesarean sections?
					</section>
					<section class="center">
						<select>
							<option> Yes</option>
							<option> No</option>
						</select>
					</section>
				<section class="row hide" style="display:true">
				<section class="left" >
					<label class="dcah-label"> If Yes, how many caesarean sections were performed in August 2012</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="number" name="ortDehydrationLocation" id="ortDehydrationLocation"  value=""/>
					</section>
				</section>
			</section>
				</section>

				

				<section class="row">
					<section class="left">
						18a. Operating Table
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>

				</section>

				<section class="row">
					<section class="left">
						18b. Operating Light
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18c. Anaesthetic machine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18d. Laryngoscopes
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18e. Endotracheal tubes
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18f. Anaesthetic drugs e.g ketamine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18g. Anaesthetic gases (halothane, NO2, Oxygen, etc)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18h. Drugs and supplies for spinal anesthesia (e.g. Spinal needle)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18i. Scrub area adjacent to or in the operating room
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18j. Running Water
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18k. Suction Machine
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18l. Standard Cesaerian section kit
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18m. Sterile operation gowns
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18n. Sterile Drapes
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18o. Sterile gloves in various sizes (6.5 -9)
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18p. IV canulas
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18q. Drip Stand
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18r. Blood transfusion set
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						18s. Recovery room/ recovery area
					</section>
					<section class="center">
						<select>
							<option> Observed </option>
							<option> Reported, Not Seen </option>
							<option> Not Available </option>
							<option> Dont Know </option>
						</select>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
					</section>
				</section>
					 <label class="dcah-label" style="text-align:center">End of Questionnaire</label>
			</section>
        
		</section>

</form>
		';

		$data['form'] = $form_mnh_assessment;
		$data['form_id'] = 'form_mnh_assessment';

		$this -> load -> view('form', $data);

	}
		
			

}