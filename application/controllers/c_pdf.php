<?php
class C_Pdf extends MY_Controller {

	public function index() {
		$this -> load -> library('mpdf');
		$this -> mpdf -> WriteHTML('<p>Hallo World</p>');
		$this -> mpdf -> Output();
	}

	public function generatePDF() {

	}

	public function maternal_health_assessment() {
		//$stylesheet = file_get_contents(base_url().'css/styles.css');
		//$html= $this->load->view('form_child_health');
		//$html = $this ->load->view('instructions');
		$stylesheet = '

		.column, .column-wide {
	padding: 0 20px 10px 10px;
	height: auto;
}
.col {
	width: 33%;
	display: inline-block;
}
.block {
	margin-bottom: 5px;
	width: 95%;
	margin: auto;
	display: block;
	height: auto;
}
.block .column:first-child {
	border-right: 2px solid #999999;
}
.block .column select, .block .column input {
	width: 90%;
}
td input[type=number] {
	float: left;
}
.block .column:nth-child(even) {
	float: right;
}
.col-x4 {
	width: 24%;
}
.column {
	width: 47.5%;
	padding-bottom: 2%;
	display: inline-block;
	position: relative;
}
.column-wide {
	width: 99%;
}
.column input, .column-wide input {
	display: table-row;
}
.column textarea, .column-wide textarea {
	display: block;
	float: right;
	width: 80%;
	height: 120px;
}
.col p, .col label {
}
.column-wide textarea {
	height: 90px;
}
.column label, .column-wide label {
	float: left;
	display: block;
	width: 85%;
}
.row {
	margin: 0;
}
.row, .row2 {
	width: 100%;
}
.row-title {
	width: 100%;
	color: #AA1317;
	display: block;
	margin-top: 10px;
	padding-bottom: 5px;
	padding-top: 5px;
	font-size: 1.1em;
	font-weight: bold;
	border-bottom: #999999 1px solid;
	border-top: #999999 1px solid;
}

.left {
	width: 40%;
}
.right {
	clear: all;
	width: 50%;
	height: 100%;
}
.left-wide {
	width: 45%;
}
.center-wide {
	width: 5%;
}
.right-wide {
	width: 45%;
}
.col-x7 {
	width: 14%;
}
.left, .right, .center {
	display: inline-block;
	height: auto;
}
.column .center {
	width: 10%;
	height: inherit;
}
.column-wide .center {
	width: 30%;
	border-right: 1px solid gray;
	padding: 1%;
}

.column-wide .left, .column-wide .right {
	width: 30%;
	padding: 1%;
}
.column label, .column-wide label {
	padding: 5px 5px 5px 5px;
	border-radius: 5px;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
	display: block;
}
input[type=radio] {
	display: inline-block;
	float: right;
}
input[type=number], select {
	display: inline-block;
	width: 45%;
}
select {
	float: left;
	padding: 1px;
}
option {
	width: 100%;
}
input[type=number] {
	float: right;
}
		.form-nav {
	width: 90%;
	margin: auto;
}
.form-container-menu {
	width: 90%;
	padding: 1%;
	margin-bottom: 2%;
	margin: auto;
}
.form-container-menu li {
	display: inline-block;
}
.form-container {
	margin: auto;
	width: 90%;
	height: 700px;
	overflow: auto;
	padding: 2%;
	margin-top: 3%;
	border: 2px solid #CCC;
	-webkit-box-shadow: inset 0px 0px 6px 0px #000;
	-moz-box-shadow: inset 0px 0px 6px 0px #000;
	box-shadow: inset 0px 0px 6px 0px #000;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: white;
	font-family: Linux Libertine-DR;
}
.form-container section {
	float: left;
	z-index: 1;
}
h3 {
	font-size: 1.4em;
	font-family: Linux Libertine-DR;
	color: #039;
	border-bottom: solid 2px #039;
}
.form-link {
	cursor: pointer;
	display: block;
	color: #039;
}
.form-link li {
	list-style: square;
}
.form-link:hover {
	cursor: hand;
}
.form-instructions {
	height: auto;
	display: block;
	width: 100%;
}
.form-instructions li {
	clear: all;
	list-style: circle;
}
pre::-webkit-scrollbar {
	height: 1ex;
}
pre::-webkit-scrollbar-thumb:horizontal {
	background: rgba(0, 0, 0, .2);
}
.error {
	font-family: inherit;
	font-size: inherit;
	color: #F33;
	border-color: #F33;
}
.left-side {
	right: 2%;
	position: absolute;
	float: right;
	top: 108px;
	width: 200px;
}
.form-sidebar {
	background-color: #FFFFFF;
	width: 14%;
	right: 2%;
	position: absolute;
	float: right;
	top: 15.5em;
	padding-top: 10px;
	border: 2px solid #CCC;
	-webkit-box-shadow: inset 0px 0px 6px 0px #000;
	-moz-box-shadow: inset 0px 0px 6px 0px #000;
	box-shadow: inset 0px 0px 6px 0px #000;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}
.form-sidebar .buttons {
	margin: auto;
	width: 70%;
}
.form-sidebar .buttons a {
	width: 45%;
	text-align: center;
}
.form-container input {
	/*width: 115px;*/
	width: auto;
	padding: 10px auto;
}
input.radio {
	width: 10px;
}
.menu-container {
	background: #FFF;
	width: 12%;
	height: auto;
	position: absolute;
	left: 2%;
	top: 173px;
	margin-bottom: 10px;
	border: 2px solid #CCC;
	-webkit-box-shadow: inset 0px 0px 6px 0px #000;
	-moz-box-shadow: inset 0px 0px 6px 0px #000;
	box-shadow: inset 0px 0px 6px 0px #000;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 5px 20px 5px 20px;
}
.menu-title {
	width: 100%;
}
.menu-container-2 {
	width: 20%;
	height: auto;
	display: inline-block;
}
.menu {
	width: 100%;
	padding-bottom: 20px;
	height: 25px;
	overflow: hidden;
	-webkit-transition-property: height;
	-webkit-transition-duration: 0.25s;
	-webkit-transition-timing-function: linear;
	-moz-transition-property: height;
	-moz-transition-duration: 0.25s;
	-moz-transition-timing-function: linear;
	-o-transition-property: height;
	-o-transition-duration: 0.25s;
	-o-transition-timing-function: linear;
	transition-property: height;
	transition-duration: 0.25s;
	transition-timing-function: linear;
	cursor: pointer;
}
.min, .max {
	float: right;
	display: inline-block;
	width: 10%;
	font-weight: bolder;
	font-size: 25px;
	cursor: pointer;
	color: #999999;
}
.max:hover {
	color: #3333FF;
}
.min:hover {
	color: #FF6666;
}
.menu:click {
	height: 100%;
}
.form-sidebar h3 {
	color: #039;
}
.menu h2 {
	margin-top: 5px;
	text-align: center;
	font-size: 22px;
	padding-bottom: 5px;
	width: 70%;
	display: inline-block;
	margin-left: 10px;
	font-weight: bold;
}
.form-sidebar h3 {
	text-align: center;
	margin: auto;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	padding-bottom: 5px;
	border-bottom: #039 solid 3px;
	width: 70%;
	margin-bottom: 15px;
}
.menu a {
	text-decoration: none;
	margin-left: 5px;
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
	text-align: left;
	cursor: hand;
	color: #000;
	display: block;
	width: 100%;
	cursor: pointer;
}
.form-sidebar a {
	margin-left: 18px;
	margin-top: 20px;
	font-size: 16px;
	font-weight: bold;
}
.menu a:hover, .menu h2:hover {
	color: #039;
	cursor: hand;
}
.menu ul, .menu ul li {
	list-style: none;
	margin: 0;
	padding: 0;
}
.menu ul {
	text-align: center;
}
.menu ul li {
	display: inline;
	margin-right: .75em;
}
#left-radio-buttons, #right-radio-buttons {
	width: 20%;
	display: block;
	position: relative;
}
#right-radio-buttons {
	float: right;
}
.banner {
	width: 100%;
	padding-bottom: 10px;
	border-bottom: 2px solid #999;
	height: 12%;
}
/**
 * Logo
 */
.logo, .credentials {
	display: inline-block;
}
.logo {
	width: 10%;
	float: left;
}
.credentials {
	float: left;
	position: absolute;
	left: 130px;
	font-family: Verdana;
	width: 70%;
}
.date {
	float: right;
	padding: 20px 30px 5px 10px;
	border-bottom: 1px solid #003399;
}
/**
 * Title
 */
.title, .subtitle, .division {
	display: block;
}
.title {
	font-size: 17px;
	font-weight: bold;
	cursor: default
}
.subtitle {
	font-size: 13px;
	font-weight: bold;
}
.division {
	font-size: 12px;
	font-weight: bold;
}
.message {
	background: red;
	background-image: linear-gradient(bottom, rgb(179,43,43) 25%, rgb(194,74,74) 99%);
	background-image: -o-linear-gradient(bottom, rgb(179,43,43) 25%, rgb(194,74,74) 99%);
	background-image: -moz-linear-gradient(bottom, rgb(179,43,43) 25%, rgb(194,74,74) 99%);
	background-image: -webkit-linear-gradient(bottom, rgb(179,43,43) 25%, rgb(194,74,74) 99%);
	background-image: -ms-linear-gradient(bottom, rgb(179,43,43) 25%, rgb(194,74,74) 99%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0.25, rgb(179,43,43)),
	color-stop(0.99, rgb(194,74,74))
	);
	color: white;
	padding: 0.2em;
	border-radius: 5px;
	font-size: 16px;
	-webkit-box-shadow: 0 2px 6px 0.5px #000;
	-moz-box-shadow: 0 2px 6px 0.5px #000;
	box-shadow: 0 2px 6px 0.5px #000;
	-o--box-shadow: 0 2px 6px 0.5px #000;
	text-align: center;
	margin: auto;
	margin-top: 100px;
	width: 33.5%;
	text-align: center;
	font: "Verdana";
}
.message {
	filter: dropshadow(color=#000000, offx=0, offy=-0.5);
	padding: 2px;
	font-size: 1.5em;
	text-align: center;
	color: white;
	box-shadow: 0 0.5px 1px 0.6px #000;
	-moz-box-shadow: 0 0.5px 6px 1px #000;
	-webkit-box-shadow: 0 1px 5px 0 #000;
	-o-box-shadow: 0 0.5px 1px 0.6px #000;
}
.success {
	background-image: linear-gradient(bottom, rgb(71,217,88) 34%, rgb(99,255,117) 67%, rgb(130,255,130) 84%);
	background-image: -o-linear-gradient(bottom, rgb(71,217,88) 34%, rgb(99,255,117) 67%, rgb(130,255,130) 84%);
	background-image: -moz-linear-gradient(bottom, rgb(71,217,88) 34%, rgb(99,255,117) 67%, rgb(130,255,130) 84%);
	background-image: -webkit-linear-gradient(bottom, rgb(71,217,88) 34%, rgb(99,255,117) 67%, rgb(130,255,130) 84%);
	background-image: -ms-linear-gradient(bottom, rgb(71,217,88) 34%, rgb(99,255,117) 67%, rgb(130,255,130) 84%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0.34, rgb(71,217,88)),
	color-stop(0.67, rgb(99,255,117)),
	color-stop(0.84, rgb(130,255,130))
	);
}
.message p {
	font-size: 1em;
	text-shadow: 0px -0.2px 0.4px #333333;
}
/* Parent Container
 *  Login Form */
.login {
	margin: auto;
	margin-top: 40px;
	width: 35%;
	background: #CCC;
	height: auto;
	border: 2px solid #999;
}

/* Child Form
 Contents :
 1. Input Fields:  Username
 2. Password
 3. Button: Login
 *
 * */
.form-login {
	width: 80%;
	margin: auto;
}
.form-title {
	border-bottom: 1px solid #999;
	font-size: 20px;
	width: 100%;
	margin-bottom: 10px;
}
.form-title .title-text {
	padding: 5px 10px 5px 10px;
}
/*
 Input fields within Login Form
 Attribute => Default
 * */
.form-login input:not([type=submit]) {
	padding: 10px 10px 10px 10px;
	width: 100%;
	border: 1px solid #999;
	outline: none;
	font-family: Quicksand;
	font-size: 100%;
}
/*
 Input fields within Login Form
 Attribute => Focus
 * */
.form-login input:not([type=submit]):focus {
	font-family: Quicksand Bold;
}
/*
 Button within Login Form
 * */
.form-login button {
	font-family: Quicksand;
}
form input:not([type=submit]), form textarea {
	border: 1px solid #999;
	outline: none;
	padding: 5px 5px 5px 5px;
	margin: 5px 0 5px 0;
}
.form-login input:not([type=submit]):focus, form input:not([type=submit]):focus, form textarea:focus {
	-webkit-box-shadow: inset 0px 3px 6px -3px #000;
	-moz-box-shadow: inset 0px 3px 6px -3px #000;
	box-shadow: inset 0px 3px 6px -3px #000;
	border: 1px solid #3333FF;
}
.confirm {
	padding: 2%;
	width: 95%;
	border: 1px black solid;
	font-family: Quicksand;
	font-size: 100%;
	margin: auto;
	margin-left: 2%;
	margin-bottom: 3%;
}
.fancyModal {
	display: block;
	width: 560px;
	position: absolute;
	top: -310px;
	left: 170px;
	padding: 90px 20px 20px 20px;
	border: solid 1px #999;
	background: -webkit-gradient(linear, left top, left bottom, from(rgb(255,255,255)), to(rgb(230,230,230)));
	-webkit-box-shadow: 0px 3px 6px rgba(0,0,0,0.25);
	-webkit-border-bottom-left-radius: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-webkit-transition: -webkit-transform 0.25s ease-out;
	-webkit-transform: translateY(-57.row0px);
}
#profile-before {
	width: 100%;
	height: 28px;
	overflow: hidden;
	background: -webkit-gradient(linear, left top, left bottom, from(rgb(255,255,255)), to(rgb(230,230,230)));
	background: -moz-gradient(linear, left top, left bottom, from(rgb(255,255,255)), to(rgb(230,230,230)));
	-webkit-border-bottom-left-radius: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-moz-border-bottom-left-radius: 6px;
	-moz-border-bottom-right-radius: 6px;
	border-bottom-left-radius: 6px;
	border-bottom-right-radius: 6px;
	padding-bottom: 15px;
	-webkit-transition-property: height;
	-webkit-transition-duration: 0.75s;
	-webkit-transition-timing-function: linear;
	-moz-transition-property: height;
	-moz-transition-duration: 0.75s;
	-moz-transition-timing-function: linear;
	-o-transition-property: height;
	-o-transition-duration: 0.75s;
	-o-transition-timing-function: linear;
	transition-property: height;
	transition-duration: 0.75s;
	transition-timing-function: linear;
	margin-bottom: 23px;
}
#profile-before:hover {
	height: 100px;
}
#profile-before p {
	text-align: center;
	padding-bottom: 5px;
}
#profile-before .title {
	padding: 10px 10px 12px 10px;
	height: 22px;
	text-align: center;
	border-left: 2px groove #999;
	border-right: 2px groove #999;
	color: #fff;
	text-shadow: 0px -0.7px 0.9px #333333;
	font-family: Linux Libertine-DR;
	font-size: 20px;
}
#profile-fancy {
	display: block;
	width: 300px;
	position: absolute;
	top: -310px;
	left: 80%;
	padding: 90px 20px 20px 20px;
	border: solid 1px #999;
	background: -webkit-gradient(linear, left top, left bottom, from(rgb(255,255,255)), to(rgb(230,230,230)));
	-webkit-box-shadow: 0px 3px 6px rgba(0,0,0,0.25);
	-webkit-border-bottom-left-radius: 6px;
	-webkit-border-bottom-right-radius: 6px;
	-webkit-transition: -webkit-transform 0.25s ease-out;
	-webkit-transform: translateY(-570px);
}
#profile-fancy h3, #profile-fancy p, #profile-before h3, #profile-before p {
	text-shadow: 0px 1px 1px #fff;
	color: rgba(0,0,0,0.75)
}
#profile-before p {
	margin-left: 30px;
}
#profile-fancy.show {
	-webkit-transform: translateY(-80px);
	-moz-transform: translatey(-80px);
}';
		$html = ('<form name="form_mnh_assessment" id="form_mnh_assessment" method="POST" action="' . base_url() . 'submit/c_form/form_mnh_equipment_assessment11' . '" >
	<!-- form for collecting inventory status information -->

	<!-- begin facility  div --->
	<div id="facility_div" class="step">
		<h3 align="center">FACILITY REGISTRATION</h3>

		<div class="block">
			<div class="column">
				<div class="row-title">
					Facility Information
				</div>
				<!--div class="row2">
				<div class="left">
				<label>Date:</label>
				</div>
				<div class="right">
				<input type="date" name="facilityDateOfInventory" id="facilityDateOfInventory" readonly="readonly" class="autoDate" placeholder="click for date"/>
				</div>

				</div-->

				<div class="row2">
					<div class="left">
						<label>Facility Name:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityName" id="facilityName"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Facility Type:</label>
					</div>
					<div class="right">
						<select name="facilityType" id="facilityType">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectFacilityType . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Facility Level:</label>
					</div>
					<div class="right">
						<select name="facilityLevel" id="facilityLevel">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectFacilityLevel . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Owned By:</label>
					</div>
					<div class="right">
						<select name="facilityOwner" id="facilityOwner">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectFacilityOwner . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Province:</label>
					</div>
					<div class="right">
						<select name="facilityProvince" id="facilityProvince">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectProvince . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">

						<label>District:</label>
					</div>
					<div class="right">
						<select name="facilityDistrict" id="facilityDistrict">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectDistricts . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>County:</label>
					</div>
					<div class="right">
						<select name="facilityCounty" id="facilityCounty">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectCounties . '
						</select>
					</div>
				</div>

			</div>
			<div class="column" style="margin-bottom:30px">
				<div class="row-title">
					In Charge Contact Information
				</div>
				<div class="row2">
					<div class="left">
						<label>Name:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityContactPerson" id="facilityContactPerson"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Telephone:</label>
					</div>
					<div class="right">

					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 1:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityTelephone" id="facilityTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 2:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityAltTelephone" id="facilityAltTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Email:</label>
					</div>
					<div class="right">
						<input type="email" name="facilityEmail" id="facilityEmail" maxlength="90"/>
						<input type="hidden"  name="facilityMFC" id="facilityMFC"/>
					</div>
				</div>
			</div>
		</div>
		<div class="block">
			<div class="column" style="margin-bottom:30px">
				<div class="row-title">
					MCH Contanct
				</div>
				<div class="row2">
					<div class="left">
						<label>Name:</label>
					</div>
					<div class="right">
						<input type="text" name="MCHContactPerson" id="MCHContactPerson"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Telephone:</label>
					</div>
					<div class="right">

					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 1:</label>
					</div>
					<div class="right">
						<input type="text" name="MCHTelephone" id="MCHTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 2:</label>
					</div>
					<div class="right">
						<input type="text" name="MCHAltTelephone" id="MCHAltTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Email:</label>
					</div>
					<div class="right">
						<input type="email" name="MCHEmail" id="MCHEmail" maxlength="90"/>
						<input type="hidden"  name="MCHMFC" id="MCHMFC"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end facility div-->

	<!--begin diarrhoiea morbidity factor div-->
	<div id="diarrhoea_cases" class="step">
		<h3 align="center">Diarrhoea Morbidity Data </h3>

		<div class="row2">
			<div class="left">
				<label>Indicate number of diarrhoea cases seen in this facility in the month of August 2012</label>
			</div>
			<div class="center">

				<input type="text" id="diarrhoeaCases" name="diarrhoeaCases" class="cloned"/>
			</div>
		</div>
	</div>

	<!--end diarrhoiea morbidity factor div-->

	<!-- form for collecting inventory status information -->

	<!--begin emonc div-->
	<div id="emonc" class="step">
		<h3 align="center"> ASSESSMENT OF EQUIPMENT AND SUPPLIES FOR EmONC</h3>

		<div class="block">
			<div class="column-wide">
				<div class="row-title">
					<div class="left">
						<label class="dcah-label">Inventory Type: Labor &amp; Delivery</label>
					</div>
					<div class="center">
						<label class="dcah-label">ANSWER</label>
					</div>

				</div>

				<div class="row">
					<div class="left">
						<label>4. Does the facility provide for delivery services?</label>
					</div>
					<div class="center cloned" >

						<select name="lndq4FacilityDelivery" id="lndq4FacilityDelivery" class="cloned left-combo">
							<option value="" selected="selected">Select One</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div id="q4comm" class="right" style="display: none">
						<input type="text" name="lndq4Comment" id="lndq4Comment" class="cloned"/>

					</div>

				</div>

				<div class="row">
					<div class="left">
						<label>5. Does the facility provide 24 hour coverage for delivery services?</label>
					</div>
					<div class="center cloned" >

						<select name="lndq5FacilityDelivery" id="lndq5FacilityDelivery" class="cloned left-combo">
							<option value="" selected="selected">Select One</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>

					<div id="q5comm" class="right" style="display: none">
						<input type="text" name="lndq5Comment" id="lndq5Comment" class="cloned"/>

					</div>

				</div>
				<div class="row">
					<div class="left">
						<label>6a. Is a person skilled in conducting deliveries present  at the facility or on call 24 hours a day,
							including weekends, to provide delivery care?</label>
					</div>
					<div class="center cloned">

						<select name="lndq6aConductingDelivery" id="lndq6aConductingDelivery" class="cloned left-combo">
							<option value="" selected="selected">Select One</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<div id="q6ay" class="row" style="display: none">
					<div class="left">
						<label>6b. Who conducts deliveries in this facility?</label>
					</div>
					<div class="center cloned" >
						<select name="lndq6bSkilledProviders[]" multiple="multiple" id="lndq6bSkilledProviders">

							<option>Mid-wife</option>
							<option>Trained Medical Officer</option>
							<option>Clinicial Officer</option>
							<option>Nursing Officer</option>
							<option>Doctor</option>
							<option>Community Health Worker</option>

						</select>
						<label for="lndq6otherProvider">Others(Specify)</label>
						<input type="text" id="lndq6otherProvider" name="lndq6otherProvider" maxlength="55" placeholder="provider1,provider2,...,"/>

					</div>
				</div>
				<div class="row">
					<div class="left">
						<label>7. Indicate the total number of beds in the maternity ward / unit in this facility*</label>
					</div>
					<div class="right">

						<input type="number" name="lndq7TotalBeds" id="lndq7TotalBeds" class="cloned fromZero" min="0" style="float:left"/>

					</div>

				</div>
			</div>
		</div>

	</div>
	<!--end emonc div-->

	<!--begin delivery place description div-->
	<div id="delivery_div" class="step">
		<div class="block">
			<div class="row-title">
				<label class="dcah-label">*Ask to see the room where Normal Deliveries are conducted</label>
			</div>

			<div class="row">
				<div class="left">
					<label>8. What is the setting of the Delivery Room?</label>
				</div>
				<div class="right">

					<select name="lndq8DeliveryRoom" id="lndq8DeliveryRoom" class="cloned">

						<option value="" selected="selected">Select One</option>
						<option>Private Room (accomodates one client)</option>
						<option>Partitioned Shared Room</option>
						<option>Non-Partitioned Shared Room</option>
					</select>
				</div>

			</div>
		</div>
		<!--end delivery place description div-->
	</div>

	<!--begin delivery services equipment div-->
	<div id="delivery_serv_equip" class="step">
		<h3>NOTE THE AVAILABILITY AND FUNCTIONALITY OF SUPPLIES AND EQUIPMENT REQUIRED FOR DELIVERY SERVICES. EQUIPMENT MAY BE IN DELIVERY ROOM OR AN ADJACENT ROOM.</h3>

		<div class="column-wide">
			<div class="row">

				<div class="row-title">
					<div class="left">
						<label class="dcah-label">9. EQUIPMENT REQUIRED FOR DELIVERY SERVICES</label>
					</div>
					<div class="center">
						<label class="dcah-label" style="width:45%">Availability (A)</label>
						<label class="dcah-label" style="float:right;width:45%">Quantity</label>

					</div>
					<div class="right">
						<label class="dcah-label" style="width:45%">Functioning (b)</label>
						<label class="dcah-label" style="float:right;width:45%">Quantity</label>
					</div>
				</div>
			</div>

			<div id="tableEquipmentList">
				<div class="row2">
					<input type="button" id="editEquipmentListTopButton" name="editEquipmentListTopButton" class="awesome myblue medium" value="Edit List"/>
				</div>

				<div class="row" id="tr_1">
					<div class="left">
						<label>9a. Examination light</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_1" id="q9equipAvailability_1">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_1" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q9equipFunctioning_1" id="q9equipFunctioning_1" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_1" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q9equipCode_1" id="q9equipCode_1" value="EQP31" />
				</div>

				<div class="row" id="tr_2">
					<div class="left">
						<label>9b. Delivery bed/ couch</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_2" id="q9equipAvailability_2">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_2" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">

						<select name="q9equipFunctioning_2" id="q9equipFunctioning_2" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_2" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q9equipCode_2" id="q9equipCode_2" value="EQP32" />
				</div>

				<div class="row" id="tr_3">
					<div class="left">
						<label>9c. Drip stand</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_3" id="q9equipAvailability_3">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_3" type="number" class="cloned fromZero" min="0"/>
					</div>

					<div class="right">
						<select name="q9equipFunctioning_3" id="q9equipFunctioning_3" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_3" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q9equipCode_3" id="q9equipCode_3" value="EQP33" />
				</div>

				<div class="row" id="tr_4">
					<div class="left">
						<label>9d.Mackintosh (On the Delivery Couch)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_4" id="q9equipAvailability_4">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_4" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q9equipFunctioning_4" id="q9equipFunctioning_4" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_4" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q9equipCode_4" id="q9equipCode_4" value="EQP34" />
				</div>

				<div class="row" id="tr_5">
					<div class="left">
						<label>9e. Linen(Draping)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_5" id="q9equipAvailability_5">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_5" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">

						<select name="q9equipFunctioning_5" id="q9equipFunctioning_5" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_5" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q9equipCode_5" id="q9equipCode_5" value="EQP35" />
				</div>

				<div class="row" id="tr_6">
					<div class="left">
						<label>9f.i. Linen(Delivery Couch)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_6" id="q9equipAvailability_6">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_6" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q9equipFunctioning_6" id="q9equipFunctioning_6" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_6" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q9equipCode_6" id="q9equipCode_6" value="EQP36" />
				</div>

				<div class="row" id="tr_7">
					<div class="left">
						<label>9f.ii. Linen(Green Towels)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_7" id="q9equipAvailability_7">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_7" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q9equipFunctioning_7" id="q9equipFunctioning_7" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_7" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q9equipCode_7" id="q9equipCode_7" value="EQP37" />
				</div>

				<div class="row" id="tr_8">
					<div class="left">
						<label>9g. Sharps container</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_8" id="q9equipAvailability_8">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_8" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">

						<select name="q9equipFunctioning_8" id="q9equipFunctioning_8" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q9equipFQty_8" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q9equipCode_8" id="q9equipCode_8" value="EQP38" />
				</div>

				<div class="row" id="tr_9">
					<div class="left">
						<label>9h. At least five or more 2-ml or 5-ml disposable syringes</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_9" id="q9equipAvailability_9">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_9" id="q9equipCode_9" value="EQP39" />
				</div>

				<div class="row" id="tr_10">
					<div class="left">
						<label>9i. Three properly labeled or colour coded IP buckets</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_10" id="q9equipAvailability_10">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_10" id="q9equipCode_10" value="EQP40" />
				</div>

				<div class="row" id="tr_11">
					<div class="left">
						<label>9j. High Level Chemical Disinfectant (Jik, Cidex)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_11" id="q9equipAvailability_11">
							<option value="" selected="selected">Select One</option>
							<option>Always </option>
							<option>Sometimes </option>
							<option>Never </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_11" id="q9equipCode_11" value="EQP41" />
				</div>

				<div class="row" id="tr_12">
					<div class="left">
						<label>9k. Soap for washing instruments (constantly available)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_12" id="q9equipAvailability_12">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<div class="right">
						<select name="q9equipFunctioning_12" id="q9equipFunctioning_12" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_12" id="q9equipCode_12" value="EQP42" />
				</div>

				<div class="row" id="tr_13">
					<div class="left">
						<label>9l.Soap for handwashing (constantly available)</label>
					</div>
					<div class="center">
						<select class="cloned left-combo" name="q9equipAvailability_13" id="q9equipAvailability_13">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<div class="right">
						<select name="q9equipFunctioning_13" id="q9equipFunctioning_13" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_13" id="q9equipCode_13" value="EQP43" />
				</div>

				<div class="row" id="tr_14">
					<div class="left">
						<label>9m.Properly Labelled or colour coded waste segragation bins</label>
					</div>

					<div class="center">

						<select class="cloned left-combo" name="q9equipAvailability_14" id="q9equipAvailability_14">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q9equipAQty_14" type="number" class="cloned fromZero" min="0"/>
						<input type="hidden"  name="q9equipCode_14" id="q9equipCode_14" value="EQP44" />
					</div>
				</div>

				<div class="row" id="tr_15">
					<div class="left">
						<label>9o. Single-use hand-drying towels (constantly available)</label>
					</div>

					<div class="center">

						<select class="cloned left-combo" name="q9equipAvailability_15" id="q9equipAvailability_15">
							<option value="" selected="selected">Select One</option>

							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<div class="right">

						<select name="q9equipFunctioning_15" id="q9equipFunctioning_15" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_15" id="q9equipCode_15" value="EQP45" />
				</div>

				<div class="row" id="tr_16">
					<div class="left">
						<label>9p. Running  Water for handwashing (constantly available)</label>
					</div>

					<div class="center">

						<select class="cloned left-combo" name="q9equipAvailability_16" id="q9equipAvailability_16">
							<option value="" selected="selected">Select One</option>

							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<div class="right">
						<select name="q9equipFunctioning_16" id="q9equipFunctioning_16" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</div>
					<input type="hidden"  name="q9equipCode_16" id="q9equipCode_16" value="EQP46" />
				</div>

			</div>
			<!--close editTable-->
		</div>

	</div>
	<!--end delivery place description div-->

	<!--begin delivery kit contents div-->
	<div id="del_kit_content" class="step">
		<div class="column-wide">
			<div class="row">

				<div class="row-title">
					<div class="left">
						<label class="dcah-label">10. Indicate the quantities available of the following delivery instruments</label>
					</div>
					<div class="center">
						<label class="dcah-label" style="float:right;width:45%">Quantity</label>
					</div>

				</div>

			</div>

			<div class="row">
				<div class="left">
					<label>10a. Cord scissors</label>
				</div>
				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_1" id="q10equipAQty_1" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_1" id="q10equipCode_1" value="EQP47"/>
			</div>

			<div class="row">
				<div class="left">
					<label>10b. Long artery Forceps (straight, lockable)</label>
				</div>
				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_2" id="q10equipAQty_2" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_2" id="q10equipCode_2" value="EQP48" />
			</div>

			<div class="row">
				<div class="left">
					<label>10c. Episiotomy scissors</label>
				</div>

				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_3" id="q10equipAQty_3" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_3" id="q10equipCode_3" value="EQP49" />

			</div>

			<div class="row">
				<div class="left">
					<label>10d. Kidney dishes</label>
				</div>

				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_4" id="q10equipAQty_4" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_4" id="q10equipCode_4" value="EQP50" />
			</div>

			<div class="row">
				<div class="left">
					<label>10e. Gallipots</label>
				</div>
				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_5" id="q10equipAQty_5" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_5" id="q10equipCode_5" value="EQP51" />
			</div>

			<div class="row">
				<div class="left">
					<label>10f. Sponge-holding forceps</label>
				</div>

				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_6" id="q10equipAQty_6" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_6" id="q10equipCode_6" value="EQP52" />
			</div>

			<div class="row">
				<div class="left">
					<label>10g. Needle holder</label>
				</div>

				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_7" id="q10equipAQty_7" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_7" id="q10equipCode_7" value="EQP53" />
			</div>

			<div class="row">
				<div class="left">
					<label>
						10h. Dissecting forceps -toothed</label>
				</div>

				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_8" id="q10equipAQty_8" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_8" id="q10equipCode_8" value="EQP54" />
			</div>

			<div class="row">
				<div class="left">
					<label>10i. Instrument tray</label>
				</div>

				<div class="center">
					<input type="number" class="cloned fromZero" name="q10equipAQty_9" id="q10equipAQty_9" min="0"/>
				</div>
				<input type="hidden"  name="q10equipCode_9" id="q10equipCode_9" value="EQP55" />

			</div>
		</div>

	</div>
	</div>
	<!--end delivery kit contents div-->

	<!--begin other equipments div-->
	<div id="other_equip_sec" class="step">
		<div class="column-wide">
			<div class="row-title">
				<div class="left">

					<label class="dcah-label">11. Other Equipment and supplies</label>
				</div>
				<div class="center">
					<label class="dcah-label" style="width:45%">Availability (A)</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>

				<div class="right">
					<label class="dcah-label" style="width:45%">Functioning (b)</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>
			</div>

			<div id="tableEquipmentList_2">
				<div class="row2">
					<input type="button" id="editEquipmentListTopButton_2" name="editEquipmentListTopButton_2" class="awesome myblue medium" value="Edit List"/>
				</div>

				<div class="row" id="tr_17">
					<div class="left">
						<label>11a. Stethoscopes (Adult)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_17" id="q11equipAvailability_17">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_17" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_17" id="q11equipFunctioning_17" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_17" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_17" id="q11equipCode_17" value="EQP56" />
				</div>

				<div class="row" id="tr_18">
					<div class="left">
						<label>11b. Stethoscopes (Paediatric)</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_18" id="q11equipAvailability_18">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_18" type="number" class="cloned fromZero" min="0"/>

					</div>
					<div class="right">

						<select name="q11equipFunctioning_18" id="q11equipFunctioning_18" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_18" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_18" id="q11equipCode_18" value="EQP57" />
				</div>

				<div class="row" id="tr_19">
					<div class="left">
						<label>11c. BP machine</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_19" id="q11equipAvailability_19">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

					</div>
					<div class="right">

						<select name="q11equipFunctioning_19" id="q11equipFunctioning_19" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</div>
					<input type="hidden"  name="q11equipCode_19" id="q11equipCode_19" value="EQP58" />
				</div>

				<div class="row" id="tr_20">
					<div class="left">
						<label>11d.i. Clinical Thermometer</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_20" id="q11equipAvailability_20">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_20" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_20" id="q11equipFunctioning_20" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_20" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_20" id="q11equipCode_20" value="EQP59" />
				</div>

				<div class="row" id="tr_21">
					<div class="left">
						<label>11d.ii. Room Thermometer</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_21" id="q11equipAvailability_21">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_21" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_21" id="q11equipFunctioning_21" class="cloned">
							<option value="" selected="selected">Select One</option>

							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_21" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_21" id="q11equipCode_21" value="EQP60" />
				</div>

				<div class="row" id="tr_22">
					<div class="left">
						<label>11e. Fetoscope</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_22" id="q11equipAvailability_22">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_22" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_22" id="q11equipFunctioning_22" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_22" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_22" id="q11equipCode_22" value="EQP61" />
				</div>

				<div class="row" id="tr_23">
					<div class="left">
						<label>11f. Sonicaid</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_23" id="q11equipAvailability_23">
							<option value="" selected="selected">Select One</option>

							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_23" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_23" id="q11equipFunctioning_23" class="cloned">

							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_23" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_23" id="q11equipCode_23" value="EQP62" />
				</div>

				<div class="row" id="tr_24">
					<div class="left">
						<label>11g. Suction Machine</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_24" id="q11equipAvailability_24">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_24" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_24" id="q11equipFunctioning_24" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_24" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_24" id="q11equipCode_24" value="EQP63" />
				</div>

				<div class="row" id="tr_25">
					<div class="left">
						<label>11h. Weighing Scale for babies</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_25" id="q11equipAvailability_25">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_25" type="number" class="cloned fromZero" min="0"/>

						<select name="q11equipAType_25" id="q11equipAType_25" class="cloned">
							<option value="" selected="selected">Select Type</option>
							<option>Digital</option>
							<option>Graduated</option>
						</select>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_25" id="q11equipFunctioning_25" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_25" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_25" id="q11equipCode_25" value="EQP64" />
				</div>

				<div class="row" id="tr_26">
					<div class="left">
						<label>11i. Adult resuscitation tray</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_26" id="q11equipAvailability_26">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_26" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">

						<select name="q11equipFunctioning_26" id="q11equipFunctioning_26" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_26" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_26" id="q11equipCode_26" value="EQP65" />
				</div>

				<div class="row" id="tr_27a">
					<div class="left">
						<label>11j. Indicate the Sterilization Method(s) used or avaialable in this facility</label>
					</div>

					<div class="center">
						<select name="sterilizationMethod" id="sterilizationMethod" class="cloned">

							<option selected="selected" value="">Select One</option>
							<option>Autoclave</option>
							<option>HLD</option>
							<option value="other">Other(specify)</option>

						</select>

						<input type="text" style="display:none" name="sterilizationMethodOther" id="sterilizationMethodOther"/>

					</div>
				</div>

				<div class="row" id="tr_27">
					<div class="left">
						<label>11k. Indicate if a Manual Vacuum Aspiration kit is available in this unit or else where in the facility</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_27" id="q11equipAvailability_27">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_27" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_27" id="q11equipFunctioning_27" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_27" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q11equipCode_27" id="q11equipCode_27" value="EQP66" />
				</div>

				<div class="row" id="tr_29a">
					<div class="left">
						<label>11l. Indicate the Vacuum Extractors available in this unit/facility</label>
					</div>
					<div class="center">
						<select class="cloned left-combo" name="q1_1_equipCode_28" id="q1_1_equipCode_28">
							<option value="">Select One</option>
							<option value="EQP67">Ventouse </option>
							<option value="EQP68">Kiwi Vacuum Extractor </option>
						</select>

						<input name="q11equipAQty_28" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_28" id="q11equipFunctioning_28" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_28" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_28" id="q11equipCode_28" />
				</div>

				<div class="row" id="tr_29">
					<div class="left">
						<label>11n. Dilatation and curretage kit</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_29" id="q11equipAvailability_29">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_29" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_29" id="q11equipFunctioning_29" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_29" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_29" id="q11equipCode_29" value="EQP69" />
				</div>

				<div class="row" id="tr_30">
					<div class="left">
						<label>11o. Sterile gauze</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_30" id="q11equipAvailability_30">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<input type="hidden"  name="q11equipCode_30" id="q11equipCode_30" value="EQP70" />
				</div>

				<div class="row" id="tr_31">
					<div class="left">
						<label>11p. Sanitary pads</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_31" id="q11equipAvailability_31">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<input type="hidden"  name="q11equipCode_31" id="q11equipCode_31" value="EQP71" />
				</div>

				<div class="row" id="tr_32">
					<div class="left">
						<label>11q. Elbow length gloves</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_32" id="q11equipAvailability_32">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_32" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q11equipFunctioning_32" id="q11equipFunctioning_32" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_32" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_32" id="q11equipCode_32" value="EQP72" />
				</div>

				<div class="row" id="tr_33">
					<div class="left">
						<label>11r. Patellar Hammer</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q11equipAvailability_33" id="q11equipAvailability_33">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<div class="right">
						<select name="q11equipFunctioning_33" id="q11equipFunctioning_33" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</div>
					<input type="hidden"  name="q11equipCode_33" id="q11equipCode_33" value="EQP73" />
				</div>

				<div class="row" id="tr_34">
					<div class="left">
						<lable>
							11s. Sutures
						</lable>
					</div>

					<div class="center">
						<select name="q11equipAvailability_34" id="q11equipAvailability_34" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q11equipAQty_34" type="number" class="cloned fromZero" min="0"/>

					</div>
					<div class="right">
						<select name="q11equipFunctioning_34" id="q11equipFunctioning_34" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q11equipFQty_34" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_34" id="q11equipCode_34" value="EQP74" />
				</div>

				<div class="row" id="tr_35">
					<div class="left">
						<label>11s.i. Oxygen-Cylinder</label>
					</div>

					<div class="center">
						<select name="q11equipAvailability_35" id="q11equipAvailability_35" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

						<input name="q11equipAQty_35" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_35" id="q11equipCode_35" value="EQP75" />
				</div>

				<div class="row" id="tr_36">
					<div class="left">
						<label>11s.ii. Oxygen-Concentrator</label>
					</div>

					<div class="center">
						<select name="q11equipAvailability_36" id="q11equipAvailability_36" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

						<input name="q11equipAQty_36" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q11equipCode_36" id="q11equipCode_36" value="EQP76" />
				</div>

			</div>
			<!--close editList_2-->
		</div>
		<!--close div wide-->

	</div><!--end other equipments div-->

	<!--begin medications in the maternity/labour ward div -->
	<div id="mlw_medication" class="step">
		<div class="column-wide">

			<div class="row-title">
				<div class="left">
					<label class="dcah-label">12. Medications in the Maternity/Labour ward</label>
				</div>
				<div class="center">
					<label class="dcah-label" style="float:left;width:45%">Availability</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>

			</div>

			<div class="row" id="tr_37">
				<div class="left">
					<label>12a.i. Injectable-Oxytocin(or Injectable-Syntocin)</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_1" id="q12mnhCommodityName_1" value="Injectable-Oxytocin" />

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_1" id="q12equipAvailability_1">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>

					<input name="q12equipAQty_1" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<!--div class="row" id="tr_39">
			<div class="left">
			12a.ii. Injectable-Syntocin
			</div>
			<input type="hidden"  name="q12mnhCommodityName_2" id="q12mnhCommodityName_2" value="Injectable-Syntocin" />
			<div class="center">
			<select class="cloned left-combo" name="q12equipAvailability_2" id="q12equipAvailability_2">
			<option value="" selected="selected">Select One</option>
			<option>Always Available</option>
			<option>Sometimes Available</option>
			<option>Never Available</option>
			</select>

			<input name="q12equipAQty_2" type="number" class="cloned fromZero" min="0"/>

			</div>

			</div-->

			<div class="row" id="tr_40">
				<div class="left">
					<label>12b.i. Indicate the available Intravenous fluids</label>
				</div>

				<div class="center">
					<select class="cloned left-combo" name="q12mnhCommodityName_3" id="q12mnhCommodityName_3">
						<option value="" selected="selected">Select Type</option>
						<option value="Intravenous solution-Ringers Lactate">Ringers Lactate</option>
						<option value="Intravenous solution-D5NS">D5NS</option>
						<option value="Intravenous solution-NS Infusion">NS Infusion</option>

					</select>
					<input name="q12equipAQty_3" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_41">
				<div class="left">
					<label>12b.ii. Intravenous Metronidazole</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_4" id="q12mnhCommodityName_4" value="Intravenous Metronidazole"/>
				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_4" id="q12equipAvailability_4">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>

					<input name="q12equipAQty_4" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<!--div class="row" id="tr_42">
			<div class="left">
			12c. Injectable methergine
			</div>
			<input type="hidden"  name="q12mnhCommodityName_5" id="q12mnhCommodityName_5" value="Injectable methergine"/>

			<div class="center">
			<select class="cloned left-combo" name="q12equipAvailability_5" id="q12equipAvailability_5">
			<option value="" selected="selected">Select One</option>
			<option>Always Available</option>
			<option>Sometimes Available</option>
			<option>Never Available</option>
			</select>
			<input name="q12equipAQty_5" type="number" class="cloned fromZero" min="0"/>
			</div>

			</div-->

			<div class="row" id="tr_43i">
				<div class="left">
					<label>12di. Injectable Hydralazine/Apresoline</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_6" id="q12mnhCommodityName_6" value="Injectable Hydralazine"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_6" id="q12equipAvailability_6">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>

					<input name="q12equipAQty_6" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>
			<!--div class="row" id="tr_43ii">
			<div class="left">
			12dii. Injectable Apresoline
			</div>
			<input type="hidden"  name="q12mnhCommodityName_7" id="q12mnhCommodityName_7" value="Injectable Apresoline"/>

			<div class="center">
			<select class="cloned left-combo" name="q12equipAvailability_7" id="q12equipAvailability_7">
			<option value="" selected="selected">Select One</option>
			<option>Always Available</option>
			<option>Sometimes Available</option>
			<option>Never Available</option>
			</select>

			<input name="q12equipAQty_7" type="number" class="cloned fromZero" min="0"/>
			</div>

			</div-->

			<div class="row" id="tr_44">
				<div class="left">
					<label>12e. Injectable diazepam</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_8" id="q12mnhCommodityName_8" value="Injectable diazepam"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_8" id="q12equipAvailability_8">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_8" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_45">
				<div class="left">
					<label>12f. Injectable magnesium sulfate</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_9" id="q12mnhCommodityName_9" value="Injectable magnesium sulfate"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_9" id="q12equipAvailability_9">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_9" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_46">
				<div class="left">
					<label>12g. Injectable penicillin</label>

				</div>
				<input type="hidden"  name="q12mnhCommodityName_10" id="q12mnhCommodityName_10" value="Injectable amoxicillin/ampicillin"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_10" id="q12equipAvailability_10">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>

					<input name="q12equipAQty_10" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_47">
				<div class="left">
					<label>12h. Injectable gentamicin</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_11" id="q12mnhCommodityName_11" value="Injectable gentamicin"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_11" id="q12equipAvailability_11">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_11" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_48">
				<div class="left">
					<label>12i. Calcium gluconate</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_12" id="q12mnhCommodityName_12" value="Calcium gluconate"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_12" id="q12equipAvailability_12">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_12" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_49">
				<div class="left">
					<label>12j. Methyldopa/Aldomet</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_13" id="q12mnhCommodityName_13" value="Methyldopa/Aldomet"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_13" id="q12equipAvailability_13">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_13" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_50">
				<div class="left">
					<label>12k. Lidocaine (lignocaine) or other local anesthetic</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_14" id="q12mnhCommodityName_14" value="Lidocaine(lignocaine)/other local anesthetic"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_14" id="q12equipAvailability_14">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_14" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_51">
				<div class="left">
					<label>12l. Nifedipine Tablets</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_15" id="q12mnhCommodityName_15" value="Nifedipine Tablets"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_15" id="q12equipAvailability_15">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_15" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_52">
				<div class="left">
					<label>12m. Vitamin A</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_16" id="q12mnhCommodityName_16" value="Vitamin A"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_16" id="q12equipAvailability_16">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_16" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>

			<div class="row" id="tr_53">
				<div class="left">
					<label>12n. Vitamin K</label>
				</div>
				<input type="hidden"  name="q12mnhCommodityName_17" id="q12mnhCommodityName_17" value="Vitamin K"/>

				<div class="center">
					<select class="cloned left-combo" name="q12equipAvailability_17" id="q12equipAvailability_17">
						<option value="" selected="selected">Select One</option>
						<option>Always Available</option>
						<option>Sometimes Available</option>
						<option>Never Available</option>
					</select>
					<input name="q12equipAQty_17" type="number" class="cloned fromZero" min="0"/>
				</div>

			</div>
		</div>

	</div><!--end medications in the maternity/labour ward div -->

	<!--begin newborn care div-->
	<div id="nbc_div_1" class="step">

		<h3>New-Born Care</h3>
		<div class="row">
			<div class="row-title">
				<div class="left">
					<label class="dcah-label">QUESTION</label>
				</div>
				<div class="center">
					<label class="dcah-label">ANSWER</label>
				</div>
			</div>
		</div>
		<div class="left">
			13. Does this facility perform newborn resuscitation?
		</div>
		<div class="right">

			<select name="nbcgqnewBornResuscitated" id="nbcgqnewBornResuscitated" class="cloned">

				<option value="" selected="selected">Select One</option>
				<option> Yes </option>
				<option> No </option>
			</select>

		</div>

	</div>
	<!--end of new born care div 1-->

	<!--begin new born care div 2-->
	<div id="nbc_div_2" class="step">
		<div class="column-wide">

			<div class="row-title">
				<div class="left">
					<label class="dcah-label">14. EQUIPMENT AND SUPPLIES FOR NEWBORN CARE</label>
				</div>
				<div class="center">
					<label class="dcah-label" style="width:45%">Availability (A)</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>
				<div class="center">
					<label class="dcah-label" style="width:45%">Functioning (b)</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>
				<div class="center">

				</div>
			</div>

			<div id="tableEquipmentList_3a">
				<div class="row2">
					<input type="button" id="editEquipmentListTopButton_3a" name="editEquipmentListTopButton_3a" class="awesome myblue medium" value="Edit List"/>
				</div>
				<div class="row" id="tr_54">
					<div class="left">

						<label>14a. Self inflating Neonatal Ambu bag (500 mls)</label>
					</div>
					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_54" id="q12equipAvailability_54">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q14equipAQty_54" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q14equipFunctioning_54" id="q14equipFunctioning_54" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q14equipFQty_54" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q14equipCode_54" id="q14equipCode_54" value="EQP78" />
				</div>

				<div class="row" id="tr_55">
					<div class="left">
						<label>14b.i. Infant masks-Size 0</label>
					</div>
					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_55" id="q12equipAvailability_55">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

						<input name="q14equipAQty_55" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q14equipCode_55" id="q14equipCode_55" value="EQP79" />
				</div>

				<div class="row" id="tr_56">
					<div class="left">
						<label>14b.ii. Infant masks-Size 1</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_56" id="q12equipAvailability_56">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

						<input name="q14equipAQty_56" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q14equipCode_56" id="q14equipCode_56" value="EQP80" />
				</div>

				<div class="row" id="tr_57">
					<div class="left">
						<label>14b.iii. Infant masks-Size 2</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_57" id="q12equipAvailability_57">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

						<input name="q14equipAQty_57" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q14equipCode_57" id="q14equipCode_57" value="EQP81" />

				</div>
			</div><!--close the tableEquipmentList_3a div -->
		</div>
		<!--end div column-wide -->
	</div><!--end new born care div 2-->

	<!--begin neonatal unit div-->
	<div id="neonatal_unit" class="step">

		<div class="column-wide">

			<div class="row">
				<h3> Neonatal Unit</h3>
			</div>

			<div class="row-title">
				<div class="left">
					<label class="dcah-label">14. EQUIPMENT AND SUPPLIES FOR NEWBORN CARE</label>
				</div>
				<div class="center">
					<label class="dcah-label" style="width:45%">Availability (A)</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>
				<div class="center">
					<label class="dcah-label" style="width:45%">Functioning (b)</label>
					<label class="dcah-label" style="float:right;width:45%">Quantity</label>
				</div>
				<div class="center">

				</div>
			</div>

			<div id="tableEquipmentList_3b">
				<div class="row2">
					<input type="button" id="editEquipmentListTopButton_3b" class="awesome myblue medium" value="Edit List"/>
				</div>

				<div class="row" id="tr_58">
					<div class="left">
						<label>14c. Clock  with seconds arm</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_58" id="q14equipAvailability_58">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

					</div>
					<input type="hidden"  name="q14equipCode_58" id="q14equipCode_58" value="EQP82" />
				</div>

				<div class="row" id="tr_59">
					<div class="left">
						<label>14d. Neonatal Incubator</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_59" id="q14equipAvailability_59">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>
						<input name="q14equipAQty_59" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q14equipFunctioning_59" id="q14equipFunctioning_59" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q14equipFQty_59" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q14equipCode_59" id="q14equipCode_59" value="EQP83" />
				</div>

				<div class="row" id="tr_60">
					<div class="left">
						<label>14e. A Radiant Heater</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_60" id="q14equipAvailability_60">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>
						<input name="q14equipAQty_60" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q14equipFunctioning_60" id="q14equipFunctioning_60" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q14equipFQty_60" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q14equipCode_60" id="q14equipCode_60" value="EQP84" />
				</div>

				<div class="row" id="tr_61">
					<div class="left">
						<label>14f. Infant Scale</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_61" id="q14equipAvailability_61">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>
						<input name="q14equipAQty_61" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q14equipFunctioning_61" id="q14equipFunctioning_61" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q14equipFQty_61" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q14equipCode_61" id="q14equipCode_61" value="EQP85" />
				</div>

				<div class="row" id="tr_62">
					<div class="left">
						<label>14g. Suction bulb for mucus extraction</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_62" id="q14equipAvailability_62">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q14equipAQty_62" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">

						<select name="q14equipFunctioning_62" id="q14equipFunctioning_62" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q14equipFQty_62" type="number" class="cloned fromZero" min="0"/>

					</div>
					<input type="hidden"  name="q14equipCode_62" id="q14equipCode_62" value="EQP86" />
				</div>

				<div class="row" id="tr_63">
					<div class="left">
						<label>14h. Suction apparatus for use with catheter</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_63" id="q14equipAvailability_63">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

						<input name="q14equipAQty_63" type="number" class="cloned fromZero" min="0"/>
					</div>
					<div class="right">
						<select name="q14equipFunctioning_63" id="q14equipFunctioning_63" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

						<input name="q14equipFQty_63" type="number" class="cloned fromZero" min="0"/>
					</div>
					<input type="hidden"  name="q14equipCode_63" id="q14equipCode_63" value="EQP87" />
				</div>

				<div class="row" id="tr_64">
					<div class="left">
						<label>14i. A flat, clean, dry and warm newborn resuscitation surface</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_64" id="q14equipAvailability_64">
							<option value="" selected="selected">Select One</option>
							<option>Yes </option>
							<option>No </option>
						</select>

					</div>
					<input type="hidden"  name="q14equipCode_64" id="q14equipCode_64" value="EQP88" />
				</div>

				<div class="row" id="tr_65">
					<div class="left">
						<label>14j. Disposable cord ties or clamps</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_65" id="q14equipAvailability_65">
							<option value="" selected="selected">Select One</option>
							<option>Yes</option>
							<option>No</option>
						</select>

					</div>
					<div class="right">
						<select name="q14equipFunctioning_65" id="q14equipFunctioning_65" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<input type="hidden"  name="q14equipCode_65" id="q14equipCode_65" value="EQP89" />
				</div>

				<div class="row" id="tr_66">
					<div class="left">
						<label>14k. Clean and warm towels/cloths for drying / warming / wrapping baby</label>
					</div>

					<div class="center">
						<select class="cloned left-combo" name="q14equipAvailability_66" id="q14equipAvailability_66">
							<option value="" selected="selected">Select One</option>
							<option>Select One</option>
							<option>Yes</option>
							<option>No</option>

						</select>

					</div>
					<div class="right">
						<select name="q14equipFunctioning_66" id="q14equipFunctioning_66" class="cloned">
							<option value="" selected="selected">Select One</option>
							<option>Always Available</option>
							<option>Sometimes Available</option>
							<option>Never Available</option>
						</select>

					</div>
					<input type="hidden"  name="q14equipCode_66" id="q14equipCode_66" value="EQP90" />

				</div>
			</div>
			<!--close div tableEquipmentList_3b-->

		</div>
		<!--close div column-wide -->
	</div>
	<!--end neonatal unit div-->

	<!--begin blood transfusion div-->
	<div id="blood_transfusion" class="step">
		<div class="column-wide">
			<h3>Blood Transfusion Services Assessment</h3>

			<div class="row-title">
				<div class="left">

					<label class="dcah-label">QUESTION</label>
				</div>
				<div class="center">
					<label class="dcah-label">ANSWER</label>
				</div>
			</div>

			<div class="row">
				<div class="left">

					<label>15. Does this facility perform blood transfusions?</label>
				</div>
				<div class="center">

					<select name="nbcgqBloodTransfusionsDone" class="cloned">
						<option value="" selected="selected">Select One</option>
						<option>Yes</option>
						<option>No</option>
					</select>
				</div>
				<div class="right">
					<label for="q15BloodTransfusions_2">Specify:</label>

					<select name="nbcgqBloodBank" class="cloned">
						<option selected="selected" value="">Select One</option>

						<option>Blood Bank available</option>
						<option>Transfusions done but no blood bank</option>
					</select>
				</div>
			</div>

			<!--div class="row">
			<div class="left">
			16. Does this facility ever perform caesarean section?
			</div>
			<div class="center">

			<select name="nbcgqCSDone" class="cloned">
			<option selected="selected" value="">Select One</option>

			<option> Yes</option>
			<option> No</option>
			</select>
			</div>
			<div class="row hide" style="display:true">
			<div class="left" >
			<label class="dcah-label"> If Yes, how many caesarean sections were performed in September 2012</label>
			</div>
			<div class="right">
			<div class="col">

			<input type="number" class="cloned fromZero" name="nbcgqNoOfDone" id="nbcgqNoOfDone"  value=""/>

			</div>
			</div>
			</div>
			</div-->
		</div>
		<!--close div column-wide -->

	</div>
	<!--end blood transfusion div-->

	<!--begin level-4-and-above-->

	<div id="level_4_above" class="step">
		<div class="column-wide">
			<div class="hide-level">
				<div class="row">
					<h3>Complete this section for Level 4, 5 and 6 Facilities</h3>
				</div>

				<div class="row">
					<div class="row-title">
						<div class="left">

							<label class="dcah-label">Supply/Equipment</label>
						</div>
						<div class="center">
							<label class="dcah-label" style="width:45%">Availability (A)</label>
							<label class="dcah-label" style="float:right;width:45%">Quantity</label>
						</div>
						<div class="right">
							<label class="dcah-label" style="width:45%">Functioning(b)</label>
							<label class="dcah-label" style="float:right;width:45%">Quantity</label>
						</div>
					</div>

					<div id="tableEquipmentList_4">
						<div class="row2">
							<input type="button" id="editEquipmentListTopButton_4" name="editEquipmentListTopButton_4" class="awesome myblue medium" value="Edit List"/>
						</div>
						<div class="row" id="tr_67">
							<div class="left">
								<label>18a. Operating Table</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_67" id="q18equipAvailability_67">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_67" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_67" id="q18equipFunctioning_67" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_67" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_67" id="q18equipCode_67" value="EQP91" />
						</div>

						<div class="row" id="tr_68">
							<div class="left">
								<label>18b. Operating Light</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_68" id="q18equipAvailability_68">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_68" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_68" id="q18equipFunctioning_68" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input type="number" class="cloned fromZero" />
							</div>
							<input type="hidden"  name="q18equipCode_68" id="q18equipCode_68" value="EQP92" />
						</div>

						<div class="row" id="tr_69">
							<div class="left">
								<label>18c. Anaesthetic machine</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_69" id="q18equipAvailability_69">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_69" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_69" id="q18equipFunctioning_69" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_69" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_69" id="q18equipCode_69" value="EQP93" />
						</div>

						<div class="row" id="tr_70">
							<div class="left">
								<label>18d. Laryngoscopes</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_70" id="q18equipAvailability_70">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_70" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_70" id="q18equipFunctioning_70" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_70" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_70" id="q18equipCode_70" value="EQP94" />
						</div>

						<div class="row" id="tr_71">
							<div class="left">
								<label>18e. Endotracheal tubes</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_71" id="q18equipAvailability_71">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_71" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_71" id="q18equipFunctioning_71" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_71" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_71" id="q18equipCode_71" value="EQP95" />
						</div>

						<div class="row" id="tr_72">
							<div class="left">
								<label>18f. Anaesthetic drugs e.g ketamine</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_72" id="q18equipAvailability_72">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_72" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_72" id="q18equipFunctioning_72" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q18equipFQty_72" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_72" id="q18equipCode_72" value="EQP96" />
						</div>

						<div class="row" id="tr_73">
							<div class="left">
								<label>18g. Anaesthetic gases (halothane, NO2, Oxygen, etc)</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_73" id="q18equipAvailability_73">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_73" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_73" id="q18equipFunctioning_73" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q18equipFQty_73" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_73" id="q18equipCode_73" value="EQP97" />
						</div>

						<div class="row" id="tr_74">
							<div class="left">
								<label>18h. Drugs and supplies for spinal anesthesia (e.g. Spinal needle)</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_74" id="q18equipAvailability_74">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_74" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_74" id="q18equipFunctioning_74" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q18equipFQty_74" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_74" id="q18equipCode_74" value="EQP98" />
						</div>

						<div class="row" id="tr_75">
							<div class="left">
								<label>18i. Scrub area adjacent to or in the operating room</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_75" id="q18equipAvailability_75">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_75" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_75" id="q18equipFunctioning_75" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_75" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_75" id="q18equipCode_75" value="EQP99" />
						</div>

						<div class="row" id="tr_76">
							<div class="left">
								<label>18j. Running Water</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_76" id="q18equipAvailability_76">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_76" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_76" id="q18equipFunctioning_76" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_76" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_76" id="q18equipCode_76" value="EQP100" />
						</div>

						<div class="row" id="tr_77">
							<div class="left">
								<label>18k. Suction Machine</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_77" id="q18equipAvailability_77">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_77" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_77" id="q18equipFunctioning_77" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_77" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_77" id="q18equipCode_77" value="EQP101" />
						</div>

						<div class="row" id="tr_78">
							<div class="left">
								<label>18l. Standard Cesaerian Section kit</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_78" id="q18equipAvailability_78">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_78" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_78" id="q18equipFunctioning_78" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_78" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_78" id="q18equipCode_78" value="EQP102" />
						</div>

						<div class="row" id="tr_79">
							<div class="left">
								<label>18m. Sterile operation gowns</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_79" id="q18equipAvailability_79">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_79" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_79" id="q18equipFunctioning_79" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_79" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_79" id="q18equipCode_79" value="EQP103" />
						</div>

						<div class="row" id="tr_80">
							<div class="left">
								<label>18n. Sterile Drapes</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_80" id="q18equipAvailability_80">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_80" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_80" id="q18equipFunctioning_80" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_80" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_80" id="q18equipCode_80" value="EQP104" />
						</div>

						<div class="row" id="tr_81">
							<div class="left">
								<label>18o. Sterile gloves in various sizes</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_81" id="q18equipAvailability_81">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>
								<label>Sizes (Hold down Ctrl and click to select many)</label>
								<select multiple="multiple" name="q18equipAType_81[]" id="q18equipAType_81" class="cloned">

									<option value="1">Size 1</option>

									<option value="2">Size 2</option>
									<option value="3">Size 3</option>
									<option value="4">Size 4</option>
									<option value="5">Size 5</option>
									<option value="6">Size 6</option>
									<option value="6.5">Size 6.5</option>
									<option value="7">Size 7</option>

									<option value="7.5">Size 7.5 </option>

									<option value="8">Size 8</option>
									<option value="8.5">Size 8.5</option>
									<option value="9">Size 9</option>
								</select>

								<input name="q18equipAQty_81" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_81" id="q18equipFunctioning_81" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_81" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_81" id="q18equipCode_81" value="EQP105" />
						</div>

						<div class="row" id="tr_82">
							<div class="left">
								<label>18p. IV canulas</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_82" id="q18equipAvailability_82">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_82" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_82" id="q18equipFunctioning_82" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_82" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_82" id="q18equipCode_82" value="EQP106" />
						</div>

						<div class="row" id="tr_83">
							<div class="left">
								<label>18q. Drip Stand</label>
							</div>
							<input type="hidden"  name="q18equipCode_105" id="q18equipCode_105" value="EQP107" />

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_83" id="q18equipAvailability_83">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_83" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_83" id="q18equipFunctioning_83" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>
								<input name="q18equipFQty_83" type="number" class="cloned fromZero" min="0"/>
							</div>
						</div>

						<div class="row" id="tr_84">
							<div class="left">
								<label>18r. Blood transfusion set</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_84" id="q18equipAvailability_4">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_84" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_84" id="q18equipFunctioning_84" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_84" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_84" id="q18equipCode_84" value="EQP108" />
						</div>

						<div class="row" id="tr_85">
							<div class="left">
								<label>18s. Recovery room/ recovery area</label>
							</div>

							<div class="center">
								<select class="cloned left-combo" name="q18equipAvailability_85" id="q18equipAvailability_85">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q18equipAQty_85" type="number" class="cloned fromZero" min="0"/>
							</div>
							<div class="center">
								<select name="q18equipFunctioning_85" id="q18equipFunctioning_85" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Dont Know </option>
								</select>

								<input name="q18equipFQty_85" type="number" class="cloned fromZero" min="0"/>
							</div>
							<input type="hidden"  name="q18equipCode_85" id="q18equipCode_85" value="EQP109" />
						</div>
						<!--close div tableEquipmentList_4-->
					</div>

					<label class="dcah-label" style="text-align:center">End of Questionnaire</label>

				</div>
			</div><!--close div level-hide-->
		</div><!--close div column-wide-->

	</div>
	<!--end level-4-and-above-->
	<div class="buttons">
		<input title="To move to the previous step" id="back" class="awesome magenta medium" type="reset"/>
		<input title="To move to the next step" id="next" class="awesome blue medium"  type="submit"/>
		<!--a title="To close the form." id="close_opened_form" class="awesome red medium">Close</a-->
	</div>
</form>
<hr />
<p id="data"></p>');
		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF();
		$this -> mpdf -> SetTitle('Test');

		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Maternal Health Assessment' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

	public function child_health_assessment() {
		//$stylesheet = file_get_contents(base_url().'css/styles.css');
		//$html= $this->load->view('form_child_health');
		//$html = $this ->load->view('instructions');
		$stylesheet = base_url() . 'css/styles.css';
		$html = ('<form name="zinc_ors_inventory" id="zinc_ors_inventory" method="POST" action="' . base_url() . 'submit/c_form/form_zinc_ors_inventory' . '" >
	<!-- form for collecting inventory status information -->

	<!-- begin facility  div --->
	<div id="facility_div" class="step">
		<h3 align="center">FACILITY REGISTRATION</h3>

		<div class="block">
			<div class="column">
				<div class="row-title">
					Facility Information
				</div>
				<!--div class="row2">
				<div class="left">
				<label>Date:</label>
				</div>
				<div class="right">
				<input type="date" name="facilityDateOfInventory" id="facilityDateOfInventory" readonly="readonly" class="autoDate" placeholder="click for date"/>
				</div>

				</div-->

				<div class="row2">
					<div class="left">
						<label>Facility Name:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityName" id="facilityName"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Facility Type:</label>
					</div>
					<div class="right">
						<select name="facilityType" id="facilityType">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectFacilityType . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Facility Level:</label>
					</div>
					<div class="right">
						<select name="facilityLevel" id="facilityLevel">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectFacilityLevel . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Owned By:</label>
					</div>
					<div class="right">
						<select name="facilityOwner" id="facilityOwner">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectFacilityOwner . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Province:</label>
					</div>
					<div class="right">
						<select name="facilityProvince" id="facilityProvince">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectProvince . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">

						<label>District:</label>
					</div>
					<div class="right">
						<select name="facilityDistrict" id="facilityDistrict">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectDistricts . '
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>County:</label>
					</div>
					<div class="right">
						<select name="facilityCounty" id="facilityCounty">
							<option value="" selected="selected">Select One</option>
							' . $this -> selectCounties . '
						</select>
					</div>
				</div>

			</div>
			<div class="column">
				<div class="row-title">
					In Charge Contact Information
				</div>
				<div class="row2">
					<div class="left">
						<label>Name:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityContactPerson" id="facilityContactPerson"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Telephone:</label>
					</div>
					<div class="right">

					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 1:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityTelephone" id="facilityTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 2:</label>
					</div>
					<div class="right">
						<input type="text" name="facilityAltTelephone" id="facilityAltTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Email:</label>
					</div>
					<div class="right">
						<input type="email" name="facilityEmail" id="facilityEmail" maxlength="90"/>
						<input type="hidden"  name="facilityMFC" id="facilityMFC"/>
					</div>
				</div>
			</div>
		</div>
		<div class="block">
			<div class="column" style="margin-bottom:30px">
				<div class="row-title">
					MCH Contact
				</div>
				<div class="row2">
					<div class="left">
						<label>Name:</label>
					</div>
					<div class="right">
						<input type="text" name="MCHContactPerson" id="MCHContactPerson"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Telephone:</label>
					</div>
					<div class="right">

					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 1:</label>
					</div>
					<div class="right">
						<input type="text" name="MCHTelephone" id="MCHTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 2:</label>
					</div>
					<div class="right">
						<input type="text" name="MCHAltTelephone" id="MCHAltTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Email:</label>
					</div>
					<div class="right">
						<input type="email" name="MCHEmail" id="MCHEmail" maxlength="90"/>
						<input type="hidden"  name="MCHMFC" id="MCHMFC"/>
					</div>
				</div>
			</div>

			<div class="column" style="margin-bottom:30px">
				<div class="row-title">
					Maternity Contact
				</div>
				<div class="row2">
					<div class="left">
						<label>Name:</label>
					</div>
					<div class="right">
						<input type="text" name="MaternityContactPerson" id="MaternityContactPerson"/>
					</div>
				</div>
				<div class="row2">
					<div class="left">
						<label>Telephone:</label>
					</div>
					<div class="right">

					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 1:</label>
					</div>
					<div class="right">
						<input type="text" name="MaternityTelephone" id="MaternityTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Cell 2:</label>
					</div>
					<div class="right">
						<input type="text" name="MaternityAltTelephone" id="MaternityAltTelephone" maxlength="14"/>
					</div>

				</div>

				<div class="row2">
					<div class="left">
						<label>Email:</label>
					</div>
					<div class="right">
						<input type="email" name="MaternityEmail" id="MaternityEmail" maxlength="90"/>
						<input type="hidden"  name="MaternityMFC" id="MaternityMFC"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end facility div-->

	<!--begin diarrhoiea morbidity factor div-->
	<div id="diarrhoea_cases" class="step">
		<h3 align="center">Diarrhoea Morbidity Data </h3>
		<div class="row2">
			<div class="left">
				<lable>
					Indicate number of diarrhoea cases seen in this facility in the month of August 2012</label>
			</div>
			<div class="center">
				<input type="text" id="diarrhoeaCases" name="diarrhoeaCases" class="cloned"/>
			</div>
		</div>
	</div>

	<!--end diarrhoiea morbidity factor div-->

	<!--begin child health drug div -->
	<div id="childhealth_drugs" class="step">
		<h3 align="center"> CHILD HEALTH COMMODITIES ASSESSMENT</h3>

		<h3 align="center"> Commodities Assessment </h3>
		<p style="text-align: center;color:#872300">
			Indicate the quantities of the Zinc,ORS,Ciprofloxacin &amp; Metronidazole (Flagyl) available in this facility at the following units

		</p>
		<div id="tabs">
			<ul>
				<li>
					<a href="#tabs-1">MCH</a>
				</li>
				<li>
					<a href="#tabs-2">PEDS WARD</a>
				</li>
				<li>
					<a href="#tabs-3">OPD</a>
				</li>
				<li>
					<a href="#tabs-4">PHARMACY</a>
				</li>
				<li>
					<a href="#tabs-5">STORES</a>
				</li>
				<li>
					<a href="#tabs-6">Others*</a>
				</li>
			</ul>
			<div id="tabs-1" class="tab MCH">

				<h3 align="center">Zinc Sulphate 20mg Assessment</h3>
				<table>
					<thead>
						<tr></tr>
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

				<h3 align="center"> Ciprofloxacin Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Metronidazole (Flagyl) Assessment</h3>
				<table>
					<thead>
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
			<!--close tabs-1-->

			<div id="tabs-2" class="tab PEDS">
				<h3 align="center">Zinc Sulphate 20mg Assessment</h3>
				<table>
					<thead>

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

				<h3 align="center"> Ciprofloxacin Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Metronidazole (Flagyl) Assessment</h3>
				<table>
					<thead>
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
			<!--close tabs-2-->

			<div id="tabs-3" class="tab OPD">
				<h3 align="center">Zinc Sulphate 20mg Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Ciprofloxacin Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Metronidazole (Flagyl) Assessment</h3>
				<table>
					<thead>
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
			<!--close tabs-3-->

			<div id="tabs-4" class="tab Pharmacy">
				<h3 align="center">Zinc Sulphate 20mg Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Ciprofloxacin Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Metronidazole (Flagyl) Assessment</h3>
				<table>
					<thead>
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
			<!--close tabs-4-->

			<div id="tabs-5" class="tab Stores">
				<h3 align="center">Zinc Sulphate 20mg Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Ciprofloxacin Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Metronidazole (Flagyl) Assessment</h3>
				<table>
					<thead>
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
			<!--close tabs-5-->

			<div id="tabs-6" class="tab Others">
				<h3 align="center">Zinc Sulphate 20mg Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Ciprofloxacin Assessment</h3>
				<table>
					<thead>
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

				<h3 align="center"> Metronidazole (Flagyl)</h3>
				<table>
					<thead>
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
			<!--end of tabs-6-->
		</div><!--end of div tabs-->
	</div>
	<!--end child health drug div -->

	<!--begin ort corner div-->
	<div id="ort_part1" class="step">
		<h3 align="center"> Oral Rehydration Therapy Corner Assessment </h3>
		<div class="block">
			<div class="column">
				<div class="row-title">
					<div class="left">
						ASPECTS
					</div>
					<div class="right" style="float:right">
						<div class="col">
							YES
						</div>
						<div class="col">
							NO
						</div>
					</div>
				</div>
				<div class="row">
					<div class="left">
						<label> Are dehydrated children rehydrated at this facility? </label>
					</div>
					<div class="right">
						<div class="col">
							<input type="radio" name="ortQuestion1" id="ortQuestion1_y" value="1" />
						</div>
						<div class="col">
							<input type="radio" name="ortQuestion1" id="ortQuestion1_n" value="0" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="left">
						<label> Does the facility have a designated location for oral rehydration ?</label>
					</div>
					<div class="right">
						<div class="col">
							<input type="radio" name="ortQuestion2" id="ortQuestion2_y"  value="1" />
						</div>
						<div class="col">
							<input type="radio" name="ortQuestion2" id="ortQuestion2_n" value="0" />
						</div>
					</div>
				</div>
				<div class="row hide" style="display:none">
					<label class="dcah-label"> Check the various locations where rehydration is carried out</label>
				</div>
				<div class="row hide" style="display:none">
					<div class="left" >
						<label> MCH</label>
					</div>
					<div class="right">
						<div class="col">
							<input type="checkbox" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
						</div>
					</div>
				</div>
				<div class="row hide" style="display:none">
					<div class="left" >
						<label> OPD</label>
					</div>
					<div class="right">
						<div class="col">
							<input type="checkbox" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
						</div>
					</div>
				</div>
				<div class="row hide" style="display:none">
					<div class="left" >
						<label> WARD </label>
					</div>
					<div class="right">
						<div class="col">
							<input type="checkbox" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
						</div>
					</div>
				</div>
				<div class="row hide" style="display:none">
					<div class="left" >
						<label> Other*?</label>
					</div>
					<div class="right">
						<div class="col">
							<input type="text" name="ortDehydrationLocation" id="ortDehydrationLocation"  value="" maxlength="50"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end of ort corner part1 -->
	<div id="ort_questions" class="step">
		<h3 align="center"> Oral Rehydration Therapy Corner Assessment ...</h3>
		<div class="block">
			<div class="row">
				<label class="dcah-label" style="font-size:1.0em">Who supplied the supplies to the facility?</label>
				<input style="font-size:1.0em" type="text" />
			</div>

			<div class="row">
				<label class="dcah-label" style="font-size:1.0em">Is there a budget for replacement of the missing or Broken ORT Corner equipment?</label>
				<input style="font-size:1.0em" type="text" />
			</div>
		</div>
	</div>
	<div id="ort_part2" class="step">
		<div class="row-title">
			<label class="dcah-label">EQUIPMENT</label>
		</div>
		<h3 align="center"> State the availability &amp; Quantities of the following Equipment at the ORT Corner-(Assessor should ensure the interviewee responds to each of the questions). </h3>
		<div class="block">
			<table id="tableEquipmentList">
				<tr class="row2">
					<input type="button" id="editEquipmentListTopButton" name="editEquipmentListTopButton" class="awesome myblue medium" value="Edit List"/>
				</tr>
				<tr>
					<thead >
						<td width="400"><label class="dcah-label" style="font-size:1.0em">Equipment Name</label></td>
						<td width="400"><label class="dcah-label" style="font-size:1.0em">Yes/No</label></td>
						<td width="400"><label class="dcah-label" style="font-size:1.0em">Total Equipment Quantities</label></td>
					</thead>

				</tr>

				<tr class="row2" id="tr_1">
					<td width="400"><label>Tea spoons </label>
					<input type="hidden"  name="equipCode_1" id="equipCode_1" value="EQP01" />
					</td>
					<td width="400">
					<select name="equipAvailable_1" id="equipAvailable_1" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_1" id="equipQuantity_1" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_2">
					<td width="400"><label>Table spoons </label>
					<input type="hidden"  name="equipCode_2" id="equipCode_2" value="EQP02" />
					</td>
					<td width="400">
					<select name="equipAvailable_2" id="equipAvailable_2" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_2" id="equipQuantity_2" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_3">
					<td width="400"><label>Stirring spoon </label>
					<input type="hidden"  name="equipCode_3" id="equipCode_3" value="EQP03" />
					</td>
					<td width="400">
					<select name="equipAvailable_3" id="equipAvailable_3" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_3" id="equipQuantity_3" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_4">
					<td width="400"><label>Plastic buckets (with lids for infection prevention) </label>
					<input type="hidden"  name="equipCode_4" id="equipCode_4" value="EQP04" />
					</td>
					<td width="400">
					<select name="equipAvailable_4" id="equipAvailable_4" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_4" id="equipQuantity_4" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_5">
					<td width="400"><label> Buckets – for storing cups, spoons </label>
					<input type="hidden"  name="equipCode_5" id="equipCode_5" value="EQP05" />
					</td>
					<td width="400">
					<select name="equipAvailable_5" id="equipAvailable_5" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_5" id="equipQuantity_5" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_6">
					<td width="400"><label> Plastic cups (50-100mls) </label>
					<input type="hidden"  name="equipCode_6" id="equipCode_6" value="EQP06" />
					</td>
					<td width="400">
					<select name="equipAvailable_6" id="equipAvailable_6" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_6" id="equipQuantity_6" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_7">
					<td width="400"><label> Plastic cups (101-200mls) </label>
					<input type="hidden"  name="equipCode_7" id="equipCode_7" value="EQP07" />
					</td>
					<td width="400">
					<select name="equipAvailable_7" id="equipAvailable_7" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_7" id="equipQuantity_7" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_8">
					<td width="400"><label> Plastic cups (201mls-499mls) </label>
					<input type="hidden"  name="equipCode_8" id="equipCode_8" value="EQP08" />
					</td>
					<td width="400">
					<select name="equipAvailable_8" id="equipAvailable_8" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_8" id="equipQuantity_8" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_9">
					<td width="400"><label> Plastic cups (500mls) </label>
					<input type="hidden"  name="equipCode_9" id="equipCode_9" value="EQP09" />
					</td>
					<td width="400">
					<select name="equipAvailable_9" id="equipAvailable_9" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_9" id="equipQuantity_9" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_10">
					<td width="400"><label> 1 litre Calibrated measuring jars </label>
					<input type="hidden"  name="equipCode_10" id="equipCode_10" value="EQP10" />
					</td>
					<td width="400">
					<select name="equipAvailable_10" id="equipAvailable_10" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_10" id="equipQuantity_10" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_11">
					<td width="400"><label> Table Trays </label>
					<input type="hidden"  name="equipCode_11" id="equipCode_11" value="EQP11" />
					</td>
					<td width="400">
					<select name="equipAvailable_11" id="equipAvailable_11" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_11" id="equipQuantity_11" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_12">
					<td width="400"><label> Wash Basins </label>
					<input type="hidden"  name="equipCode_12" id="equipCode_12" value="EQP12" />
					</td>
					<td width="400">
					<select name="equipAvailable_12" id="equipAvailable_12" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_12" id="equipQuantity_12" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_13">
					<td width="400"><label> Water heating equipment,(e.g..hot plate/Meko ) </label>
					<input type="hidden"  name="equipCode_13" id="equipCode_13" value="EQP13" />
					</td>
					<td width="400">
					<select name="equipAvailable_13" id="equipAvailable_13" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_13" id="equipQuantity_13" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_14">
					<td width="400"><label> Hot plate-Electric/Solar powered </label>
					<input type="hidden"  name="equipCode_14" id="equipCode_14" value="EQP14" />
					</td>
					<td width="400">
					<select name="equipAvailable_14" id="equipAvailable_14" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_14" id="equipQuantity_14" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_15">
					<td width="400"><label> Heater- Gas powered </label>
					<input type="hidden"  name="equipCode_15" id="equipCode_15" value="EQP15" />
					</td>
					<td width="400">
					<select name="equipAvailable_15" id="equipAvailable_15" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_15" id="equipQuantity_15" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_16">
					<td width="400"><label> Charcoal or Firewood  stove/Heater </label>
					<input type="hidden"  name="equipCode_16" id="equipCode_16" value="EQP16" />
					</td>
					<td width="400">
					<select name="equipAvailable_16" id="equipAvailable_16" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_16" id="equipQuantity_16" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_17">
					<td width="400"><label> Paraffin Stove/Heater </label>
					<input type="hidden"  name="equipCode_17" id="equipCode_17" value="EQP17" />
					</td>
					<td width="400">
					<select name="equipAvailable_17" id="equipAvailable_17" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_17" id="equipQuantity_17" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_18">
					<td width="400"><label> Sufurias  with a Lid (14 inch) </label>
					<input type="hidden"  name="equipCode_18" id="equipCode_18" value="EQP18" />
					</td>
					<td width="400">
					<select name="equipAvailable_18" id="equipAvailable_18" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_18" id="equipQuantity_18" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_19">
					<td width="400"><label> Waste Container </label>
					<input type="hidden"  name="equipCode_19" id="equipCode_19" value="EQP19" />
					</td>
					<td width="400">
					<select name="equipAvailable_19" id="equipAvailable_19" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_19" id="equipQuantity_19" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_20">
					<td width="400"><label> Wall Clock /Timing device </label>
					<input type="hidden"  name="equipCode_20" id="equipCode_20" value="EQP20" />
					</td>
					<td width="400">
					<select name="equipAvailable_20" id="equipAvailable_20" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_20" id="equipQuantity_20" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_21">
					<td width="400"><label> Table- for mixing ORS </label>
					<input type="hidden"  name="equipCode_21" id="equipCode_21" value="EQP21" />
					</td>
					<td width="400">
					<select name="equipAvailable_21" id="equipAvailable_21" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_21" id="equipQuantity_21" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_22">
					<td width="400"><label> Benches/chair(s) </label>
					<input type="hidden"  name="equipCode_22" id="equipCode_22" value="EQP22" />
					</td>
					<td width="400">
					<select name="equipAvailable_22" id="equipAvailable_22" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_22" id="equipQuantity_22" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_23">
					<td width="400"><label> Water Storage Container ( at least 40lts)- With Tap </label>
					<input type="hidden"  name="equipCode_23" id="equipCode_23" value="EQP23" />
					</td>
					<td width="400">
					<select name="equipAvailable_23" id="equipAvailable_23" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_23" id="equipQuantity_23" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_24">
					<td width="400"><label> Water Storage Container ( at least 40lts)- Without Tap </label>
					<input type="hidden"  name="equipCode_24" id="equipCode_24" value="EQP24" />
					</td>
					<td width="400">
					<select name="equipAvailable_24" id="equipAvailable_24" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_24" id="equipQuantity_24" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_25">
					<td width="400"><label> Locally available measuring containers e.g. cooking fat Tins. </label>
					<input type="hidden"  name="equipCode_25" id="equipCode_25" value="EQP25" />
					</td>
					<td width="400">
					<select name="equipAvailable_25" id="equipAvailable_25" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_25" id="equipQuantity_25" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_26">
					<td width="400"><label> Weighing scale </label>
					<input type="hidden"  name="equipCode_26" id="equipCode_26" value="EQP26" />
					</td>
					<td width="400">
					<select name="equipAvailable_26" id="equipAvailable_26" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_26" id="equipQuantity_26" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_27">
					<td width="400"><label> Hand Washing Facility/Point e.g. tippy taps. </label>
					<input type="hidden"  name="equipCode_27" id="equipCode_27" value="EQP27" />
					</td>
					<td width="400">
					<select name="equipAvailable_27" id="equipAvailable_27" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_27" id="equipQuantity_27" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_28">
					<td width="400"><label> Safe water source </label>
					<input type="hidden"  name="equipCode_28" id="equipCode_28" value="EQP28" />
					</td>
					<td width="400">
					<select name="equipAvailable_28" id="equipAvailable_28" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_28" id="equipQuantity_28" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_29">
					<td width="400"><label> Thermometer </label>
					<input type="hidden"  name="equipCode_29" id="equipCode_29" value="EQP29" />
					</td>
					<td width="400">
					<select name="equipAvailable_29" id="equipAvailable_29" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_29" id="equipQuantity_29" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<tr class="row2" id="tr_30">
					<td width="400"><label> MUAC Tape </label>
					<input type="hidden"  name="equipCode_30" id="equipCode_30" value="EQP30" />
					</td>
					<td width="400">
					<select name="equipAvailable_30" id="equipAvailable_30" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select></td>
					<td width="400">
					<input type="number"  name="equipQuantity_30" id="equipQuantity_30" class="cloned fromZero" maxlength="6"/>
					</td>

				</tr>
				<!--tr class="row2">
				<input type="button" id="editEquipmentListBottomButton" name="editEquipmentList" class="awesome myblue medium" value="Edit List"/-->
				</tr>
			</table>
		</div>
	</div>
	<!--end of ort corner part 2 -->
	<!--end ort corner div-->

	<div class="buttons">
		<input title="To move to the previous step" id="back" class="awesome magenta medium" type="reset"/>
		<input title="To move to the next step" id="next" class="awesome blue medium"  type="submit"/>
		<!--a title="To close the form." id="close_opened_form" class="awesome red medium">Close</a-->
	</div>
</form>

<p id="data"></p>
		');
		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Test');

		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Child Health Assessment' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}
	
}
