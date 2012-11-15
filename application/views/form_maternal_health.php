<form name="form_mnh_assessment" id="form_mnh_assessment" method="POST" action="" >
	<!-- form for collecting inventory status information -->
	<h3 align="center"> ASSESSMENT OF EQUIPMENT AND SUPPLIES FOR EmONC</h3>

	<section class="block">
		<section class="column-wide">
			<section class="row-title">
				<section class="left">
					<label class="dcah-label">Inventory Type: Labor &amp; Delivery</label>
				</section>
				<section class="center">
					<label class="dcah-label">ANSWER</label>
				</section>

			</section>

			<section class="row">
				<section class="left">
					4. Does the facility provide for delivery services?
				</section>
				<section class="center cloned" >

					<select name="lndq4FacilityDelivery" id="lndq4FacilityDelivery" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</section>

				<section id="q4comm" class="right" style="display: none">
					<input type="text" name="lndq4Comment" id="lndq4Comment" class="cloned"/>

				</section>

			</section>

			<section class="row">
				<section class="left">
					5. Does the facility provide 24 hour coverage for delivery services?
				</section>
				<section class="center cloned" >

					<select name="lndq5FacilityDelivery" id="lndq5FacilityDelivery" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</section>

				<section id="q5comm" class="right" style="display: none">
					<input type="text" name="lndq5Comment" id="lndq5Comment" class="cloned"/>

				</section>

			</section>
			<section class="row">
				<section class="left">
					6a. Is a person skilled in conducting deliveries present  at the facility or on call 24 hours a day,
					including weekends, to provide delivery care?
				</section>
				<section class="center cloned">

					<select name="lndq6aConductingDelivery" id="lndq6aConductingDelivery" class="cloned left-combo">
						<option value="" selected="selected">Select One</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</section>
			</section>
			<section id="q6ay" class="row" style="display: none">
				<section class="left">
					6b. Who conducts deliveries in this facility?
				</section>
				<section class="center cloned" >
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

				</section>
			</section>
			<section class="row">
				<section class="left">
					7. Indicate the total number of beds in the maternity ward / unit in this facility*
				</section>
				<section class="right">

					<input type="number" name="lndq7TotalBeds" id="lndq7TotalBeds" class="cloned fromZero" min="0" style="float:left"/>

				</section>

			</section>

			<section class="row-title">
				<label class="dcah-label">*Ask to see the room where Normal Deliveries are conducted</label>
			</section>

			<section class="row">
				<section class="left">
					8. What is the setting of the Delivery Room?
				</section>
				<section class="right">

					<select name="lndq8DeliveryRoom" id="lndq8DeliveryRoom" class="cloned">

						<option value="" selected="selected">Select One</option>
						<option>private room, visual &amp; auditory privacy</option>
						<option>non-private room, visual &amp; auditory privacy</option>
						<option>visual privacy only</option>
						<option>no privacy</option>
					</select>
				</section>

			</section>

			<h3>NOTE THE AVAILABILITY AND FUNCTIONALITY OF SUPPLIES AND EQUIPMENT REQUIRED FOR DELIVERY SERVICES. EQUIPMENT MAY BE IN DELIVERY ROOM OR AN ADJACENT ROOM.</h3>

			<section class="column-wide">
				<section class="row">

					<section class="row-title">
						<section class="left">
							<label class="dcah-label">9. EQUIPMENT REQUIRED FOR DELIVERY SERVICES</label>
						</section>
						<section class="center">
							<label class="dcah-label" style="width:45%">Availability (A)</label>
							<label class="dcah-label" style="float:right;width:45%">Quantity</label>

						</section>
						<section class="right">
							<label class="dcah-label" style="width:45%">Functioning (b)</label>
							<label class="dcah-label" style="float:right;width:45%">Quantity</label>
						</section>
					</section>
				</section>

				<section id="tableEquipmentList">
					<section class="row2">
						<input type="button" id="editEquipmentListTopButton" name="editEquipmentListTopButton" class="awesome myblue medium" value="Edit List"/>
					</section>

					<section class="row" id="tr_1">
						<section class="left">
							9a. Examination light
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_1" id="q9equipAvailability_1">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_1" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">
							<select name="q9equipFunctioning_1" id="q9equipFunctioning_1" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_1" type="number" class="cloned fromZero" min="0"/>
						</section>
						<input type="hidden"  name="q9equipCode_1" id="q9equipCode_1" value="EQP31" />
					</section>

					<section class="row" id="tr_2">
						<section class="left">
							9b. Delivery bed/ couch
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_2" id="q9equipAvailability_2">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_2" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">

							<select name="q9equipFunctioning_2" id="q9equipFunctioning_2" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_2" type="number" class="cloned fromZero" min="0"/>
						</section>
						<input type="hidden"  name="q9equipCode_2" id="q9equipCode_2" value="EQP32" />
					</section>

					<section class="row" id="tr_3">
						<section class="left">
							9c. Drip stand
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_3" id="q9equipAvailability_3">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_3" type="number" class="cloned fromZero" min="0"/>
						</section>

						<section class="right">
							<select name="q9equipFunctioning_3" id="q9equipFunctioning_3" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_3" type="number" class="cloned fromZero" min="0"/>
						</section>
						<input type="hidden"  name="q9equipCode_3" id="q9equipCode_3" value="EQP33" />
					</section>

					<section class="row" id="tr_4">
						<section class="left">
							9d.Mackintosh (On the Delivery Couch)
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_4" id="q9equipAvailability_4">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_4" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">
							<select name="q9equipFunctioning_4" id="q9equipFunctioning_4" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_4" type="number" class="cloned fromZero" min="0"/>

						</section>
						<input type="hidden"  name="q9equipCode_4" id="q9equipCode_4" value="EQP34" />
					</section>

					<section class="row" id="tr_5">
						<section class="left">
							9e. Linen(Draping)
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_5" id="q9equipAvailability_5">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_5" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">

							<select name="q9equipFunctioning_5" id="q9equipFunctioning_5" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_5" type="number" class="cloned fromZero" min="0"/>

						</section>
						<input type="hidden"  name="q9equipCode_5" id="q9equipCode_5" value="EQP35" />
					</section>

					<section class="row" id="tr_6">
						<section class="left">
							9f.i. Linen(Delivery Couch)
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_6" id="q9equipAvailability_6">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_6" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">
							<select name="q9equipFunctioning_6" id="q9equipFunctioning_6" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_6" type="number" class="cloned fromZero" min="0"/>

						</section>
						<input type="hidden"  name="q9equipCode_6" id="q9equipCode_6" value="EQP36" />
					</section>

					<section class="row" id="tr_7">
						<section class="left">
							9f.ii. Linen(Green Towels)
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_7" id="q9equipAvailability_7">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_7" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">
							<select name="q9equipFunctioning_7" id="q9equipFunctioning_7" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_7" type="number" class="cloned fromZero" min="0"/>

						</section>
						<input type="hidden"  name="q9equipCode_7" id="q9equipCode_7" value="EQP37" />
					</section>

					<section class="row" id="tr_8">
						<section class="left">
							9g. Sharps container
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_8" id="q9equipAvailability_8">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_8" type="number" class="cloned fromZero" min="0"/>
						</section>
						<section class="right">

							<select name="q9equipFunctioning_8" id="q9equipFunctioning_8" class="cloned">

								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

							<input name="q9equipFQty_8" type="number" class="cloned fromZero" min="0"/>
						</section>
						<input type="hidden"  name="q9equipCode_8" id="q9equipCode_8" value="EQP38" />
					</section>

					<section class="row" id="tr_9">
						<section class="left">
							9h. At least five or more 2-ml or 5-ml disposable syringes
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_9" id="q9equipAvailability_9">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_9" id="q9equipCode_9" value="EQP39" />
					</section>

					<section class="row" id="tr_10">
						<section class="left">
							9i. Three properly labeled or colour coded IP buckets
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_10" id="q9equipAvailability_10">
								<option value="" selected="selected">Select One</option>
								<option>Yes </option>
								<option>No </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_10" id="q9equipCode_10" value="EQP40" />
					</section>

					<section class="row" id="tr_11">
						<section class="left">
							9j. High Level Chemical Disinfectant (Jik, Cidex)
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_11" id="q9equipAvailability_11">
								<option value="" selected="selected">Select One</option>
								<option>Always </option>
								<option>Sometimes </option>
								<option>Never </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_11" id="q9equipCode_11" value="EQP41" />
					</section>

					<section class="row" id="tr_12">
						<section class="left">
							9k. Soap for washing instruments (constantly available)
						</section>

						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_12" id="q9equipAvailability_12">
								<option value="" selected="selected">Select One</option>
								<option>Always Available</option>
								<option>Sometimes Available</option>
								<option>Never Available</option>
							</select>

						</section>
						<section class="right">
							<select name="q9equipFunctioning_12" id="q9equipFunctioning_12" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_12" id="q9equipCode_12" value="EQP42" />
					</section>

					<section class="row" id="tr_13">
						<section class="left">
							9l.Soap for handwashing (constantly available)
						</section>
						<section class="center">
							<select class="cloned left-combo" name="q9equipAvailability_13" id="q9equipAvailability_13">
								<option value="" selected="selected">Select One</option>
								<option>Always Available</option>
								<option>Sometimes Available</option>
								<option>Never Available</option>
							</select>

						</section>
						<section class="right">
							<select name="q9equipFunctioning_13" id="q9equipFunctioning_13" class="cloned">
								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_13" id="q9equipCode_13" value="EQP43" />
					</section>

					<section class="row" id="tr_14">
						<section class="left">
							9m.Properly Labelled or colour coded waste segragation bins
						</section>

						<section class="center">

							<select class="cloned left-combo" name="q9equipAvailability_14" id="q9equipAvailability_14">
								<option value="" selected="selected">Select One</option>

								<option>Yes </option>
								<option>No </option>
							</select>

							<input name="q9equipAQty_14" type="number" class="cloned fromZero" min="0"/>
							<input type="hidden"  name="q9equipCode_14" id="q9equipCode_14" value="EQP44" />
						</section>
					</section>

					<section class="row" id="tr_15">
						<section class="left">
							9o. Single-use hand-drying towels (constantly available)
						</section>

						<section class="center">

							<select class="cloned left-combo" name="q9equipAvailability_15" id="q9equipAvailability_15">
								<option value="" selected="selected">Select One</option>

								<option>Always Available</option>
								<option>Sometimes Available</option>
								<option>Never Available</option>
							</select>

						</section>
						<section class="right">

							<select name="q9equipFunctioning_15" id="q9equipFunctioning_15" class="cloned">

								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_15" id="q9equipCode_15" value="EQP45" />
					</section>

					<section class="row" id="tr_16">
						<section class="left">
							9p. Running  Water for handwashing (constantly available)
						</section>

						<section class="center">

							<select class="cloned left-combo" name="q9equipAvailability_16" id="q9equipAvailability_16">
								<option value="" selected="Selected">Select One</option>

								<option>Always Available</option>
								<option>Sometimes Available</option>
								<option>Never Available</option>
							</select>

						</section>
						<section class="right">
							<select name="q9equipFunctioning_16" id="q9equipFunctioning_16" class="cloned">

								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>

						</section>
						<input type="hidden"  name="q9equipCode_16" id="q9equipCode_16" value="EQP46" />
					</section>

				</section>
				<!--close editTable-->

				<section class="column-wide">
					<section class="row">

						<section class="row-title">
							<section class="left">
								<label class="dcah-label">10. Indicate the quantities of the contents of the Delivery Kits available in this facility</label>
							</section>
							<section class="center">
								<label class="dcah-label" style="float:right;width:45%">Quantity</label>
							</section>

						</section>

					</section>

					<section class="row">
						<section class="left">
							10a. Cord scissors
						</section>
						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_1" id="q10equipAQty_1" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_1" id="q10equipCode_1" value="EQP47"/>
					</section>

					<section class="row">
						<section class="left">
							10b. Long artery Forceps (straight, lockable)
						</section>
						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_2" id="q10equipAQty_2" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_2" id="q10equipCode_2" value="EQP48" />
					</section>

					<section class="row">
						<section class="left">
							10c. Episiotomy scissors
						</section>

						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_3" id="q10equipAQty_3" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_3" id="q10equipCode_3" value="EQP49" />

					</section>

					<section class="row">
						<section class="left">
							10d. Kidney dishes
						</section>

						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_4" id="q10equipAQty_4" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_4" id="q10equipCode_4" value="EQP50" />
					</section>

					<section class="row">
						<section class="left">
							10e. Gallipots
						</section>
						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_5" id="q10equipAQty_5" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_5" id="q10equipCode_5" value="EQP51" />
					</section>

					<section class="row">
						<section class="left">
							10f. Sponge-holding forceps
						</section>

						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_6" id="q10equipAQty_6" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_6" id="q10equipCode_6" value="EQP52" />
					</section>

					<section class="row">
						<section class="left">
							10g. Needle holder
						</section>

						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_7" id="q10equipAQty_7" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_7" id="q10equipCode_7" value="EQP53" />
					</section>

					<section class="row">
						<section class="left">
							10h. Dissecting forceps -toothed
						</section>

						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_8" id="q10equipAQty_8" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_8" id="q10equipCode_8" value="EQP54" />
					</section>

					<section class="row">
						<section class="left">
							10i. Instrument tray
						</section>

						<section class="center">
							<input type="number" class="cloned fromZero" name="q10equipAQty_9" id="q10equipAQty_9" min="0"/>
						</section>
						<input type="hidden"  name="q10equipCode_9" id="q10equipCode_9" value="EQP55" />

					</section>

					<section class="row-title">
						<section class="left">
							<label class="dcah-label">11. Other Equipment and supplies</label>
						</section>
						<section class="center">
							<label class="dcah-label" style="width:45%">Availability (A)</label>
							<label class="dcah-label" style="float:right;width:45%">Quantity</label>
						</section>

						<section class="right">
							<label class="dcah-label" style="width:45%">Functioning (b)</label>
							<label class="dcah-label" style="float:right;width:45%">Quantity</label>
						</section>
					</section>

					<section id="tableEquipmentList_2">
						<section class="row2">
							<input type="button" id="editEquipmentListTopButton_2" name="editEquipmentListTopButton_2" class="awesome myblue medium" value="Edit List"/>
						</section>

						<section class="row" id="tr_17">
							<section class="left">
								11a. Stethoscopes (Adult)
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_17" id="q11equipAvailability_17">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_17" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_17" id="q11equipFunctioning_17" class="cloned">

									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_17" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_17" id="q11equipCode_17" value="EQP56" />
						</section>

						<section class="row" id="tr_18">
							<section class="left">
								11b. Stethoscopes (Paediatric)
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_18" id="q11equipAvailability_18">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_18" type="number" class="cloned fromZero" min="0"/>

							</section>
							<section class="right">

								<select name="q11equipFunctioning_18" id="q11equipFunctioning_18" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_18" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_18" id="q11equipCode_18" value="EQP57" />
						</section>

						<section class="row" id="tr_19">
							<section class="left">
								11c. BP machine
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_19" id="q11equipAvailability_19">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

							</section>
							<section class="right">

								<select name="q11equipFunctioning_19" id="q11equipFunctioning_19" class="cloned">

									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

							</section>
							<input type="hidden"  name="q11equipCode_19" id="q11equipCode_19" value="EQP58" />
						</section>

						<section class="row" id="tr_20">
							<section class="left">
								11d.i. Clinical Thermometer
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_20" id="q11equipAvailability_20">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_20" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_20" id="q11equipFunctioning_20" class="cloned">

									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_20" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_20" id="q11equipCode_20" value="EQP59" />
						</section>

						<section class="row" id="tr_21">
							<section class="left">
								11d.ii. Room Thermometer
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_21" id="q11equipAvailability_21">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_21" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_21" id="q11equipFunctioning_21" class="cloned">
									<option value="" selected="selected">Select One</option>

									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_21" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_21" id="q11equipCode_21" value="EQP60" />
						</section>

						<section class="row" id="tr_22">
							<section class="left">
								11e. Fetoscope
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_22" id="q11equipAvailability_22">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_22" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_22" id="q11equipFunctioning_22" class="cloned">

									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_22" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_22" id="q11equipCode_22" value="EQP61" />
						</section>

						<section class="row" id="tr_23">
							<section class="left">
								11f. Sonicaid
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_23" id="q11equipAvailability_23">
									<option value="" selected="selected">Select One</option>

									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_23" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_23" id="q11equipFunctioning_23" class="cloned">

									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_23" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_23" id="q11equipCode_23" value="EQP62" />
						</section>

						<section class="row" id="tr_24">
							<section class="left">
								11g. Suction Machine
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_24" id="q11equipAvailability_24">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_24" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_24" id="q11equipFunctioning_24" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_24" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_24" id="q11equipCode_24" value="EQP63" />
						</section>

						<section class="row" id="tr_25">
							<section class="left">
								11h. Weighing Scale for babies
							</section>

							<section class="center">
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
							</section>
							<section class="right">
								<select name="q11equipFunctioning_25" id="q11equipFunctioning_25" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_25" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_25" id="q11equipCode_25" value="EQP64" />
						</section>

						<section class="row" id="tr_26">
							<section class="left">
								11i. Adult resuscitation tray
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_26" id="q11equipAvailability_26">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_26" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">

								<select name="q11equipFunctioning_26" id="q11equipFunctioning_26" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_26" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_26" id="q11equipCode_26" value="EQP65" />
						</section>

						<section class="row" id="tr_27a">
							<section class="left">
								11j. Indicate the Sterilization Method(s) used or avaialable in this facility
							</section>

							<section class="center">
								<select name="sterilizationMethod" id="sterilizationMethod" class="cloned">

									<option selected="selected" value="">Select One</option>
									<option>Autoclave</option>
									<option>HLD</option>
									<option value="other">Other(specify)</option>

								</select>

								<input type="text" style="display:none" name="sterilizationMethodOther" id="sterilizationMethodOther"/>

							</section>
						</section>

						<section class="row" id="tr_27">
							<section class="left">
								11k. Indicate if a Manual Vacuum Aspiration kit is available in this unit or else where in the facility
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_27" id="q11equipAvailability_27">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_27" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_27" id="q11equipFunctioning_27" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_27" type="number" class="cloned fromZero" min="0"/>

							</section>
							<input type="hidden"  name="q11equipCode_27" id="q11equipCode_27" value="EQP66" />
						</section>

						<section class="row" id="tr_29a">
							<section class="left">
								11l. Indicate the Vacuum Extractors available in this unit/facility
							</section>
							<section class="center">
								<select class="cloned left-combo" name="q1_1_equipCode_28" id="q1_1_equipCode_28">
									<option value="">Select One</option>
									<option value="EQP67">Ventouse </option>
									<option value="EQP68">Kiwi Vacuum Extractor </option>
								</select>

								<input name="q11equipAQty_28" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_28" id="q11equipFunctioning_28" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_28" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_28" id="q11equipCode_28" />
						</section>

						<section class="row" id="tr_29">
							<section class="left">
								11n. Dilatation and curretage kit
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_29" id="q11equipAvailability_29">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_29" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_29" id="q11equipFunctioning_29" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_29" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_29" id="q11equipCode_29" value="EQP69" />
						</section>

						<section class="row" id="tr_30">
							<section class="left">
								11o. Sterile gauze
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_30" id="q11equipAvailability_30">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

							</section>
							<input type="hidden"  name="q11equipCode_30" id="q11equipCode_30" value="EQP70" />
						</section>

						<section class="row" id="tr_31">
							<section class="left">
								11p. Sanitary pads
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_31" id="q11equipAvailability_31">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

							</section>
							<input type="hidden"  name="q11equipCode_31" id="q11equipCode_31" value="EQP71" />
						</section>

						<section class="row" id="tr_32">
							<section class="left">
								11q. Elbow length gloves
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_32" id="q11equipAvailability_32">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_32" type="number" class="cloned fromZero" min="0"/>
							</section>
							<section class="right">
								<select name="q11equipFunctioning_32" id="q11equipFunctioning_32" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_32" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_32" id="q11equipCode_32" value="EQP72" />
						</section>

						<section class="row" id="tr_33">
							<section class="left">
								11r. Patellar Hammer
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q11equipAvailability_33" id="q11equipAvailability_33">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

							</section>
							<section class="right">
								<select name="q11equipFunctioning_33" id="q11equipFunctioning_33" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

							</section>
							<input type="hidden"  name="q11equipCode_33" id="q11equipCode_33" value="EQP73" />
						</section>

						<section class="row" id="tr_34">
							<section class="left">
								11s. Sutures
							</section>

							<section class="center">
								<select name="q11equipAvailability_34" id="q11equipAvailability_34" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option>Yes </option>
									<option>No </option>
								</select>

								<input name="q11equipAQty_34" type="number" class="cloned fromZero" min="0"/>

							</section>
							<section class="right">
								<select name="q11equipFunctioning_34" id="q11equipFunctioning_34" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option> Yes </option>
									<option> No </option>
									<option> Do Not Know </option>
								</select>

								<input name="q11equipFQty_34" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_34" id="q11equipCode_34" value="EQP74" />
						</section>

						<section class="row" id="tr_35">
							<section class="left">
								11s.i. Oxygen-Cylinder
							</section>

							<section class="center">
								<select name="q11equipAvailability_35" id="q11equipAvailability_35" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q11equipAQty_35" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_35" id="q11equipCode_35" value="EQP75" />
						</section>

						<section class="row" id="tr_36">
							<section class="left">
								11s.ii. Oxygen-Concentrator
							</section>

							<section class="center">
								<select name="q11equipAvailability_36" id="q11equipAvailability_36" class="cloned">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q11equipAQty_36" type="number" class="cloned fromZero" min="0"/>
							</section>
							<input type="hidden"  name="q11equipCode_36" id="q11equipCode_36" value="EQP76" />
						</section>

					</section>
					<!--close editList_2-->
					<section class="column-wide">

						<section class="row-title">
							<section class="left">
								<label class="dcah-label">12. Medications in the Maternity/Labour ward</label>
							</section>
							<section class="center">
								<label class="dcah-label" style="float:left;width:45%">Availability</label>
								<label class="dcah-label" style="float:right;width:45%">Quantity</label>
							</section>

						</section>

						<section class="row" id="tr_37">
							<section class="left">
								12a.i. Injectable-Oxytocin
							</section>
							<input type="hidden"  name="q12mnhCommodityName_1" id="q12mnhCommodityName_1" value="Injectable-Oxytocin" />

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_1" id="q12equipAvailability_1">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q12equipAQty_1" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_39">
							<section class="left">
								12a.ii. Injectable-Syntocin
							</section>
							<input type="hidden"  name="q12mnhCommodityName_2" id="q12mnhCommodityName_2" value="Injectable-Syntocin" />
							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_2" id="q12equipAvailability_2">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q12equipAQty_2" type="number" class="cloned fromZero" min="0"/>

							</section>

						</section>

						<section class="row" id="tr_40">
							<section class="left">
								12b.i. Indicate the available Intravenous solutions
							</section>

							<section class="center">
								<select class="cloned left-combo" name="q12mnhCommodityName_3" id="q12mnhCommodityName_3">
									<option value="" selected="selected">Select Type</option>
									<option value="Intravenous solution-Ringers Lactate">Ringers Lactate</option>
									<option value="Intravenous solution-D5NS">D5NS</option>
									<option value="Intravenous solution-NS Infusion">NS Infusion</option>

								</select>
								<input name="q12equipAQty_3" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_41">
							<section class="left">
								12b.ii. Intravenous Metronidazole
							</section>
							<input type="hidden"  name="q12mnhCommodityName_4" id="q12mnhCommodityName_4" value="Intravenous Metronidazole"/>
							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_4" id="q12equipAvailability_4">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q12equipAQty_4" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_42">
							<section class="left">
								12c. Injectable methergine
							</section>
							<input type="hidden"  name="q12mnhCommodityName_5" id="q12mnhCommodityName_5" value="Injectable methergine"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_5" id="q12equipAvailability_5">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_5" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_43i">
							<section class="left">
								12di. Injectable Hydralazine
							</section>
							<input type="hidden"  name="q12mnhCommodityName_6" id="q12mnhCommodityName_6" value="Injectable Hydralazine"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_6" id="q12equipAvailability_6">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q12equipAQty_6" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>
						<section class="row" id="tr_43ii">
							<section class="left">
								12dii. Injectable Apresoline
							</section>
							<input type="hidden"  name="q12mnhCommodityName_7" id="q12mnhCommodityName_7" value="Injectable Apresoline"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_7" id="q12equipAvailability_7">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q12equipAQty_7" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_44">
							<section class="left">
								12e. Injectable diazepam
							</section>
							<input type="hidden"  name="q12mnhCommodityName_8" id="q12mnhCommodityName_8" value="Injectable diazepam"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_8" id="q12equipAvailability_8">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_8" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_45">
							<section class="left">
								12f. Injectable magnesium sulfate
							</section>
							<input type="hidden"  name="q12mnhCommodityName_9" id="q12mnhCommodityName_9" value="Injectable magnesium sulfate"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_9" id="q12equipAvailability_9">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_9" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_46">
							<section class="left">
								12g. Injectable amoxicillin or ampicillin

							</section>
							<input type="hidden"  name="q12mnhCommodityName_10" id="q12mnhCommodityName_10" value="Injectable amoxicillin/ampicillin"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_10" id="q12equipAvailability_10">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>

								<input name="q12equipAQty_10" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_47">
							<section class="left">
								12h. Injectable gentamicin
							</section>
							<input type="hidden"  name="q12mnhCommodityName_11" id="q12mnhCommodityName_11" value="Injectable gentamicin"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_11" id="q12equipAvailability_11">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_11" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_48">
							<section class="left">
								12i. Calcium gluconate
							</section>
							<input type="hidden"  name="q12mnhCommodityName_12" id="q12mnhCommodityName_12" value="Calcium gluconate"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_12" id="q12equipAvailability_12">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_12" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_49">
							<section class="left">
								12j. Methyldopa/Aldomet
							</section>
							<input type="hidden"  name="q12mnhCommodityName_13" id="q12mnhCommodityName_13" value="Methyldopa/Aldomet"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_13" id="q12equipAvailability_13">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_13" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_50">
							<section class="left">
								12k. Lidocaine (lignocaine) or other local anesthetic
							</section>
							<input type="hidden"  name="q12mnhCommodityName_14" id="q12mnhCommodityName_14" value="Lidocaine(lignocaine)/other local anesthetic"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_14" id="q12equipAvailability_14">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_14" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_51">
							<section class="left">
								12l. Nifedipine Tablets
							</section>
							<input type="hidden"  name="q12mnhCommodityName_15" id="q12mnhCommodityName_15" value="Nifedipine Tablets"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_15" id="q12equipAvailability_15">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_15" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_52">
							<section class="left">
								12m. Vitamin A
							</section>
							<input type="hidden"  name="q12mnhCommodityName_16" id="q12mnhCommodityName_16" value="Vitamin A"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_16" id="q12equipAvailability_16">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_16" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<section class="row" id="tr_53">
							<section class="left">
								12n. Vitamin K
							</section>
							<input type="hidden"  name="q12mnhCommodityName_17" id="q12mnhCommodityName_17" value="Vitamin K"/>

							<section class="center">
								<select class="cloned left-combo" name="q12equipAvailability_17" id="q12equipAvailability_17">
									<option value="" selected="selected">Select One</option>
									<option>Always Available</option>
									<option>Sometimes Available</option>
									<option>Never Available</option>
								</select>
								<input name="q12equipAQty_17" type="number" class="cloned fromZero" min="0"/>
							</section>

						</section>

						<h3>New-Born Care</h3>
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
							13. Does this facility perform newborn resuscitation?
						</section>
						<section class="right">

							<select name="nbcgqnewBornResuscitated" id="nbcgqnewBornResuscitated" class="cloned">

								<option value="" selected="selected">Select One</option>
								<option> Yes </option>
								<option> No </option>
							</select>
						</section>

						<section class="row-title">
							<section class="left">
								<label class="dcah-label">14. EQUIPMENT AND SUPPLIES FOR NEWBORN CARE</label>
							</section>
							<section class="center">
								<label class="dcah-label" style="width:45%">Availability (A)</label>
								<label class="dcah-label" style="float:right;width:45%">Quantity</label>
							</section>
							<section class="center">
								<label class="dcah-label" style="width:45%">Functioning (b)</label>
								<label class="dcah-label" style="float:right;width:45%">Quantity</label>
							</section>
							<section class="center">

							</section>
						</section>

						<section id="tableEquipmentList_3">
							<section class="row2">
								<input type="button" id="editEquipmentListTopButton_3" name="editEquipmentListTopButton_3" class="awesome myblue medium" value="Edit List"/>
							</section>
							<section class="row" id="tr_54">
								<section class="left">
									14a. Self inflating Neonatal Ambu bag ( 500 mls)
								</section>
								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_54" id="q12equipAvailability_54">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>

									<input name="q14equipAQty_54" type="number" class="cloned fromZero" min="0"/>
								</section>
								<section class="right">
									<select name="q14equipFunctioning_54" id="q14equipFunctioning_54" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option> Yes </option>
										<option> No </option>
										<option> Do Not Know </option>
									</select>

									<input name="q14equipFQty_54" type="number" class="cloned fromZero" min="0"/>

								</section>
								<input type="hidden"  name="q14equipCode_54" id="q14equipCode_54" value="EQP78" />
							</section>

							<section class="row" id="tr_55">
								<section class="left">
									14b.i. Infant masks-Size 0
								</section>
								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_55" id="q12equipAvailability_55">
										<option value="" selected="selected">Select One</option>
										<option>Always Available</option>
										<option>Sometimes Available</option>
										<option>Never Available</option>
									</select>

									<input name="q14equipAQty_55" type="number" class="cloned fromZero" min="0"/>

								</section>
								<input type="hidden"  name="q14equipCode_55" id="q14equipCode_55" value="EQP79" />
							</section>

							<section class="row" id="tr_56">
								<section class="left">
									14b.ii. Infant masks-Size 1
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_56" id="q12equipAvailability_56">
										<option value="" selected="selected">Select One</option>
										<option>Always Available</option>
										<option>Sometimes Available</option>
										<option>Never Available</option>
									</select>

									<input name="q14equipAQty_56" type="number" class="cloned fromZero" min="0"/>
								</section>
								<input type="hidden"  name="q14equipCode_56" id="q14equipCode_56" value="EQP80" />
							</section>

							<section class="row" id="tr_57">
								<section class="left">
									14b.iii. Infant masks-Size 2
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_57" id="q12equipAvailability_57">
										<option value="" selected="selected">Select One</option>
										<option>Always Available</option>
										<option>Sometimes Available</option>
										<option>Never Available</option>
									</select>

									<input name="q14equipAQty_57" type="number" class="cloned fromZero" min="0"/>

								</section>
								<input type="hidden"  name="q14equipCode_57" id="q14equipCode_57" value="EQP81" />
							</section>

							<section class="row">
								<h3> Neonatal Unit</h3>
							</section>

							<section class="row" id="tr_58">
								<section class="left">
									14c. Clock  with seconds arm
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_58" id="q14equipAvailability_58">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>

								</section>
								<input type="hidden"  name="q14equipCode_58" id="q14equipCode_58" value="EQP82" />
							</section>

							<section class="row" id="tr_59">
								<section class="left">
									14d. Neonatal Incubator
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_59" id="q14equipAvailability_59">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>
									<input name="q14equipAQty_59" type="number" class="cloned fromZero" min="0"/>
								</section>
								<section class="right">
									<select name="q14equipFunctioning_59" id="q14equipFunctioning_59" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option> Yes </option>
										<option> No </option>
										<option> Do Not Know </option>
									</select>

									<input name="q14equipFQty_59" type="number" class="cloned fromZero" min="0"/>
								</section>
								<input type="hidden"  name="q14equipCode_59" id="q14equipCode_59" value="EQP83" />
							</section>

							<section class="row" id="tr_60">
								<section class="left">
									14e. A Radiant Heater
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_60" id="q14equipAvailability_60">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>
									<input name="q14equipAQty_60" type="number" class="cloned fromZero" min="0"/>
								</section>
								<section class="right">
									<select name="q14equipFunctioning_60" id="q14equipFunctioning_60" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option> Yes </option>
										<option> No </option>
										<option> Do Not Know </option>
									</select>

									<input name="q14equipFQty_60" type="number" class="cloned fromZero" min="0"/>
								</section>
								<input type="hidden"  name="q14equipCode_60" id="q14equipCode_60" value="EQP84" />
							</section>

							<section class="row" id="tr_61">
								<section class="left">
									14f. Infant Scale
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_61" id="q14equipAvailability_61">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>
									<input name="q14equipAQty_61" type="number" class="cloned fromZero" min="0"/>
								</section>
								<section class="right">
									<select name="q14equipFunctioning_61" id="q14equipFunctioning_61" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option> Yes </option>
										<option> No </option>
										<option> Do Not Know </option>
									</select>

									<input name="q14equipFQty_61" type="number" class="cloned fromZero" min="0"/>

								</section>
								<input type="hidden"  name="q14equipCode_61" id="q14equipCode_61" value="EQP85" />
							</section>

							<section class="row" id="tr_62">
								<section class="left">
									14g. Suction bulb for mucus extraction
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_62" id="q14equipAvailability_62">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>

									<input name="q14equipAQty_62" type="number" class="cloned fromZero" min="0"/>
								</section>
								<section class="right">

									<select name="q14equipFunctioning_62" id="q14equipFunctioning_62" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option> Yes </option>
										<option> No </option>
										<option> Do Not Know </option>
									</select>

									<input name="q14equipFQty_62" type="number" class="cloned fromZero" min="0"/>

								</section>
								<input type="hidden"  name="q14equipCode_62" id="q14equipCode_62" value="EQP86" />
							</section>

							<section class="row" id="tr_63">
								<section class="left">
									14h. Suction apparatus for use with catheter
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_63" id="q14equipAvailability_63">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>

									<input name="q14equipAQty_63" type="number" class="cloned fromZero" min="0"/>
								</section>
								<section class="right">
									<select name="q14equipFunctioning_63" id="q14equipFunctioning_63" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option> Yes </option>
										<option> No </option>
										<option> Do Not Know </option>
									</select>

									<input name="q14equipFQty_63" type="number" class="cloned fromZero" min="0"/>
								</section>
								<input type="hidden"  name="q14equipCode_63" id="q14equipCode_63" value="EQP87" />
							</section>

							<section class="row" id="tr_64">
								<section class="left">
									14i. A flat, clean, dry and warm newborn resuscitation surface
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_64" id="q14equipAvailability_64">
										<option value="" selected="selected">Select One</option>
										<option>Yes </option>
										<option>No </option>
									</select>

								</section>
								<input type="hidden"  name="q14equipCode_64" id="q14equipCode_64" value="EQP88" />
							</section>

							<section class="row" id="tr_65">
								<section class="left">
									14j. Disposable cord ties or clamps
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_65" id="q14equipAvailability_65">
										<option>Select One</option>
										<option>Yes</option>
										<option>No</option>
									</select>

								</section>
								<section class="right">
									<select name="q14equipFunctioning_65" id="q14equipFunctioning_65" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option>Always Available</option>
										<option>Sometimes Available</option>
										<option>Never Available</option>
									</select>

								</section>
								<input type="hidden"  name="q14equipCode_65" id="q14equipCode_65" value="EQP89" />
							</section>

							<section class="row" id="tr_66">
								<section class="left">
									14k. Clean and warm towels/cloths for drying / warming / wrapping baby
								</section>

								<section class="center">
									<select class="cloned left-combo" name="q14equipAvailability_66" id="q14equipAvailability_66">
										<option value="" selected="selected">Select One</option>
										<option>Select One</option>
										<option>Yes</option>
										<option>No</option>

									</select>

								</section>
								<section class="right">
									<select name="q14equipFunctioning_66" id="q14equipFunctioning_66" class="cloned">
										<option value="" selected="selected">Select One</option>
										<option>Always Available</option>
										<option>Sometimes Available</option>
										<option>Never Available</option>
									</select>

								</section>
								<input type="hidden"  name="q14equipCode_66" id="q14equipCode_66" value="EQP90" />
							</section>
						</section>
						<!--close section tableEquipmentList_3-->

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
								15. Does this facility perform blood transfusions?
							</section>
							<section class="center">

								<select name="nbcgqBloodTransfusionsDone" class="cloned">

									<option>Yes</option>
									<option>No</option>
								</select>
							</section>
							<section class="right">
								<label for="q15BloodTransfusions_2">Specify:</label>

								<select name="nbcgqBloodBank" class="cloned">
									<option selected="selected" value="">Select One</option>

									<option>Blood Bank available</option>
									<option>Transfusions done but no blood bank</option>
								</select>
							</section>
						</section>

						<section class="row">
							<section class="left">
								16. Does this facility ever perform caesarean sections?
							</section>
							<section class="center">

								<select name="nbcgqCSDone" class="cloned">
									<option selected="selected" value="">Select One</option>

									<option> Yes</option>
									<option> No</option>
								</select>
							</section>
							<section class="row hide" style="display:true">
								<section class="left" >
									<label class="dcah-label"> If Yes, how many caesarean sections were performed in September 2012</label>
								</section>
								<section class="right">
									<section class="col">

										<input type="number" class="cloned fromZero" name="nbcgqNoOfDone" id="nbcgqNoOfDone"  value=""/>

									</section>
								</section>
							</section>
						</section>
						<section class="hide-level" style="display: true">
							<section class="row">
								<h3>Complete this section for Level 4, 5 and 6 Facilities</h3>
							</section>

							<section class="row">
								<section class="row-title">
									<section class="left">
										<label class="dcah-label">Supply/Equipment</label>
									</section>
									<section class="center">
										<label class="dcah-label" style="width:45%">Availability (A)</label>
										<label class="dcah-label" style="float:right;width:45%">Quantity</label>
									</section>
									<section class="right">
										<label class="dcah-label" style="width:45%">Functioning(b)</label>
										<label class="dcah-label" style="float:right;width:45%">Quantity</label>
									</section>
								</section>

								<section id="tableEquipmentList_4">
									<section class="row2">
										<input type="button" id="editEquipmentListTopButton_4" name="editEquipmentListTopButton_4" class="awesome myblue medium" value="Edit List"/>
									</section>
									<section class="row" id="tr_67">
										<section class="left">
											18a. Operating Table
										</section>
										<input type="hidden"  name="q18equipCode_89" id="q18equipCode_89" value="EQP91" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>

									</section>

									<section class="row" id="tr_68">

										<section class="left">
											18b. Operating Light
										</section>

										<input type="hidden"  name="q18equipCode_90" id="q18equipCode_90" value="EQP92" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_69">
										<section class="left">
											18c. Anaesthetic machine
										</section>
										<input type="hidden"  name="q18equipCode_91" id="q18equipCode_91" value="EQP93" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_70">
										<section class="left">
											18d. Laryngoscopes
										</section>
										<input type="hidden"  name="q18equipCode_92" id="q18equipCode_92" value="EQP94" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_71">
										<section class="left">
											18e. Endotracheal tubes
										</section>
										<input type="hidden"  name="q18equipCode_93" id="q18equipCode_93" value="EQP95" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_72">
										<section class="left">
											18f. Anaesthetic drugs e.g ketamine
										</section>
										<input type="hidden"  name="q18equipCode_94" id="q18equipCode_94" value="EQP96" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option>Always Available</option>
												<option>Sometimes Available</option>
												<option>Never Available</option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_73">
										<section class="left">
											18g. Anaesthetic gases (halothane, NO2, Oxygen, etc)
										</section>
										<input type="hidden"  name="q18equipCode_95" id="q18equipCode_95" value="EQP97" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option>Always Available</option>
												<option>Sometimes Available</option>
												<option>Never Available</option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_74">
										<section class="left">
											18h. Drugs and supplies for spinal anesthesia (e.g. Spinal needle)
										</section>
										<input type="hidden"  name="q18equipCode_96" id="q18equipCode_96" value="EQP98" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option>Always Available</option>
												<option>Sometimes Available</option>
												<option>Never Available</option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_75">
										<section class="left">
											18i. Scrub area adjacent to or in the operating room
										</section>
										<input type="hidden"  name="q18equipCode_97" id="q18equipCode_97" value="EQP99" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_76">
										<section class="left">
											18j. Running Water
										</section>
										<input type="hidden"  name="q18equipCode_98" id="q18equipCode_98" value="EQP100" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_77">
										<section class="left">
											18k. Suction Machine
										</section>
										<input type="hidden"  name="q18equipCode_99" id="q18equipCode_99" value="EQP101" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_78">
										<section class="left">
											18l. Standard Cesaerian section kit
										</section>
										<input type="hidden"  name="q18equipCode_100" id="q18equipCode_100" value="EQP102" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_79">
										<section class="left">
											18m. Sterile operation gowns
										</section>
										<input type="hidden"  name="q18equipCode_101" id="q18equipCode_101" value="EQP103" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_80">
										<section class="left">
											18n. Sterile Drapes
										</section>
										<input type="hidden"  name="q18equipCode_102" id="q18equipCode_102" value="EQP104" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_81">
										<section class="left">
											18o. Sterile gloves in various sizes
										</section>
										<input type="hidden"  name="q18equipCode_103" id="q18equipCode_103" value="EQP105" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>
											<label>Sizes (Hold down Ctrl and click to select many)</label>
											<select multiple="multiple" name="sterileGloveSizes[]">

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

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_82">
										<section class="left">
											18p. IV canulas
										</section>
										<input type="hidden"  name="q18equipCode_104" id="q18equipCode_104" value="EQP106" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_83">
										<section class="left">
											18q. Drip Stand
										</section>
										<input type="hidden"  name="q18equipCode_105" id="q18equipCode_105" value="EQP107" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_84">
										<section class="left">
											18r. Blood transfusion set
										</section>
										<input type="hidden"  name="q18equipCode_106" id="q18equipCode_106" value="EQP108" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>

									<section class="row" id="tr_85">
										<section class="left">
											18s. Recovery room/ recovery area
										</section>
										<input type="hidden"  name="q18equipCode_107" id="q18equipCode_107" value="EQP109" />

										<section class="center">
											<select class="cloned left-combo" name="" id="">
												<option>Yes </option>
												<option>No </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
										<section class="center">
											<select>
												<option value="" selected="selected">Select One</option>
												<option> Yes </option>
												<option> No </option>
												<option> Dont Know </option>
											</select>

											<input type="number" class="cloned fromZero" />
										</section>
									</section>
									<!--close section tableEquipmentList_4-->
								</section>

								<label class="dcah-label" style="text-align:center">End of Questionnaire</label>
							</section>
						</section>
</form>