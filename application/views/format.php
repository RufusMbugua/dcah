<form name="form_assessment_equiqment" id="form_assessment_equiqment" method="POST" action="' . base_url() . 'submit/c_form/form_assessment_equiqment' . '" >
	<!-- form for collecting inventory status information -->
	<h3 align="center"> ASSESSMENT OF EQUIPMENT AND SUPPLIES FOR EmONC</h3>

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
					<label>Facility Type:</label>
				</section>
				<section class="right">
					<input type="text" name="facilityType" id="facilityType"/>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Facility Level:</label>
				</section>
				<section class="right">
					<input type="text" name="facilityLevel" id="facilityLevel"/>
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
					<label>Facility-In-Charge Contact:</label>
				</section>
				<section class="right">
					<input type="text" name="facilityContactPerson" id="facilityContactPerson"/>
				</section>
			</section>
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
					<label>Telephone Contact(s):</label>
				</section>
				<section class="right">
					<input type="text" name="facilityTelephone" id="facilityTelephone" maxlength="14"/>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Email:</label>
				</section>
				<section class="right">
					<input type="email" name="facilityEmail" id="facilityEmail" maxlength="90"/>
					<input type="hidden"  name="facilityMFC" id="facilityMFC"/>
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
						5. Does the facility provide 24 hour coverage for delivery services?
					</section>
					<section class="center" name="q5FacilityDelivery_1" id="q5FacilityDelivery_1">
						<select>
							<option>Yes</option>
							<option>No</option>
						</select>
					</section>
					<section class="right">
						<input type="text" name="q5Comment_1" id="q5Comment"/>
					</section>

				</section>
				<section class="row">
					<section class="left">
						6a. Is a person skilled in conducting deliveries present  at the facility or on call 24 hours a day,
						including weekends, to provide delivery care?
					</section>
					<section class="center">
						<select name="q6aConductingDelivery_1" id="q6aConductingDelivery_1">
							<option>Yes</option>
							<option>No</option>
						</select>
					</section>
				</section>
				<section class="row">
					<section class="left">
						6b. Which skilled providers were available?
					</section>
					<section class="center">
						<select name="q6bSkilledProviders_1" id="q6bSkilledProviders_1">
							<option>Mid-wife</option>
							<option>...</option>
						</select>
					</section>
				</section>
				<section class="row">
					<section class="left">
						7. Please tell me the total number of beds in the maternity ward / unit in this facility*
					</section>
					<section class="right">
						<input type="number" name="q7TotalBeds_1" id="q7TotalBeds_1"/>
					</section>

				</section>

				<section class="row-title">
					<label class="dcah-label">*Ask to see the room where Normal Deliveries are conducted</label>
				</section>

				<section class="row">
					<section class="left">
						8. Describe the setting of the Delivery Room
					</section>
					<section class="right">
						<select name="q8DeliveryRoom_1" id="q8DeliveryRoom_1">
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
							<label class="dcah-label">9. EQUIPMENT REQUIRED FOR DELIVERY SERVICES</label>
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
						9a. Examination light
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9aExamninatioLight_1" id="q9aExamninatioLight_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9aYAD_1" id="q9aYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9b. Delivery bed/ couch
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9bDeliveryBed_1" id="q9bDeliveryBed_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9bYAD_1" id="q9bYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9c.Mackintosh (Delivery Couch)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="qc9dMackintosh_1" id="qc9dMackintosh_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9dYAD_1" id="q9dYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9d. Linen(Draping)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9dLinenDraping_1" id="q9dLinenDraping_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9dYAD_1" name="q9dYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9e. Linen(Bed)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9eLinenBed_1" id="q9eLinenBed_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9eYAD_1" name="q9eYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9g. Sharps container
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9gSharpsContainer_1" id="q9gSharpsContainer_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9gYAD_1" id="q9gYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9h. At least five or more 2-ml or 5-ml disposable syringes
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9hDisposableSyringes_1" id="q9hDisposableSyringes_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9hYAD_1" id="q9hYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9i. Three properly labeled or colour coded IP buckets
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9iIPBuckets_1" id="q9iIPBuckets_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>
					<section class="right">
						<select name="q9iYAD_1" id="q9iYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>

				</section>

				<section class="row">
					<section class="left">
						9j. HLD (Jik, Cidex)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9jJik_1" id="q9jJik_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9jYAD_1" id="q9jYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9k. Soap for washing instruments (constantly available)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9kWashingInstruments_1" id="q9kWashingInstruments_1">
							<option>Always</option>
							<option>Sometimes</option>
							<option>Never</option>
						</select>

					</section>
					<section class="right">
						<select name="q9kYAD_1" id="q9kYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>

				</section>

				<section class="row">
					<section class="left">
						9l.Soap for handwashing (constantly available)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9lSoapHandwashing_1" id="q9lSoapHandwashing_1">
							<option>Always</option>
							<option>Sometimes</option>
							<option>Never</option>
						</select>

					</section>
					<section class="right" name="q9lYAD_1" id="q9lYAD_1">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>

				</section>

				<section class="row">
					<section class="left">
						9m.Properly Labelled or colour coded waste segragation bins
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9mLabelledColor_1" id="q9mLabelledColor_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q9mYAD_1" id="q9mYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9n. Drip stand
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9nDripStand_1" id="q9nDripStand_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right" name="q9nYAD_1" id="q9nYAD_1">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						9o. Single-use hand-drying towels (constantly available)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9oSingleTowels_1" id="q9oSingleTowels_1">
							<option>Always</option>
							<option>Sometimes</option>
							<option>Never</option>
						</select>

					</section>
					<section class="right">
						<select name="q9oYAD_1" id="q9oYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>

				</section>

				<section class="row">
					<section class="left">
						9p. Running  Water for handwashing (constantly available)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q9pRunningWater_1" id="q9pRunningWater_1">
							<option>Always</option>
							<option>Sometimes</option>
							<option>Never</option>
						</select>

					</section>
					<section class="right">
						<select name="q9pYAD_1" id="q9pYAD_1">
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
							<label class="dcah-label">10. Indicate the contents of available delivery kits</label>
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
						10a. Cord scissors
					</section>
					<section class="center">
						<input type="number" name="q10aCordScissors_1" id="q10aCordScissors_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10aComment_1" id="q10aComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10b. Long artery Forceps (straight, lockable)
					</section>

					<section class="center">
						<input type="number" name="q10bLongArtery_1" id="q10bLongArtery_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10bComment_1" id="q10bComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10c. Episiotomy scissors
					</section>
					<section class="center">
						<input type="number" name="q10cEpisotomy_1" id="q10cEpisotomy_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10cComment_1" id="q10cComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10d. Kidney dishes
					</section>
					<section class="center">
						<input type="number" name="q10dKidneyDishes_1" id="q10dKidneyDishes_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10dComment_1" id="q10dComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10e. Gallipots
					</section>
					<section class="center">
						<input type="number" name="q10eGallipots_1" id="q10eGallipots_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10eComment_1" id="q10eComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10f. Sponge-holding forceps
					</section>
					<section class="center">
						<input type="number" name="q10fSpongeForceps_1" id="q10fSpongeForceps_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10fComment_1" id="q10fComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10g. Needle holder
					</section>
					<section class="center">
						<input type="number" name="q10gNeedleHolder_1" id="q10gNeedleHolder_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10gComment_1" id="q10gComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10h. Dissecting forceps -toothed
					</section>
					<section class="center">
						<input type="number" name="q10hDissectingForceps_1" id="q10hDissectingForceps_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10hComment_1" id="q10hComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10i. Instrument tray
					</section>
					<section class="center">
						<input type="number" name="q10iInstrumentTray_1" id="q10iInstrumentTray_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10iComment_1" id="q10iComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						10j. Total number of delivery kits in the labour ward (calculated)
					</section>
					<section class="center">
						<input type="number" name="q10jDeliveryLabour_1" id="q10jDeliveryKits_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10jComment_1" id="q10jComment_1"/>
					</section>
				</section>

				<section class="row">
					<section class="left">
						10k. Total number of delivery kits with all required items above (17C) (calculated)
					</section>
					<section class="center">
						<input type="number" name="q10kDeliveryAvailable_1" id="q10kDeliveryAvailable_1"/>
					</section>
					<section class="right">
						<input type="text" name="q10kComment_1" id="q10kComment_1"/>
					</section>

				</section>
				<section class="row-title">
					<section class="left">
						<label class="dcah-label">11. Other Equipment and supplies</label>
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
						11a. Stethoscopes (Adult)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11aStethoscopesAdult_1" id="q11aStethoscopesAdult_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11aNumber_1" id="q11aNumber_1"/>
					</section>
					<section class="right">
						<select name="q11aYAD_1" id="q11aYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11b. Stethoscopes (Neonatal)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11bStethoscopesNeonatal_1" id="q11bStethoscopesNeonatal_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11bNumber_1" id="q11bNumber_1"/>
					</section>
					<section class="right">
						<select name="q11aYAD_1" id="q11aYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11c. BP machine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11cBPMachine_1" id="q11cBPMachine_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>
					<section class="right">
						<select name="q11cYAD_1" id="q11cYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>

				</section>
				<section class="row">
					<section class="left">
						11d. Clinical Thermometer
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11dClinicalThermometer_1" id="q11dClinicalThermometer_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11dNumber_1" id="q11dNumber_1"/>
					</section>
					<section class="right">
						<select name="q11dYAD_1" id="q11dYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>
				<section class="row">
					<section class="left">
						11e. Fetoscope
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11eFetoscope_1" id="q11eFetoscope_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11eNumber_1" id="q11eNumber_1"/>
					</section>
					<section class="right">
						<select name="q11eYAD_1" id="q11eYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>
				<section class="row">
					<section class="left">
						11f. Sonicaid
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11fFetoscope_1" id="q11fFetoscope_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11fNumber_1" id="q11fNumber_1"/>
					</section>
					<section class="right">
						<select name="q11fYAD_1" id="q11fYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>
				<section class="row">
					<section class="left">
						11g. Suction Machine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11gSuctionMachine_1" id="q11gSuctionMachine_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11gNumber_1" id="q11gNumber_1" />
					</section>
					<section class="right">
						<select name="q11gYAD_1" id="q11gYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11h. Weighing Scale for babies
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11hWeighingBabies_1" id="q11hWeighingBabies_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11hNumber_1" id="q11hNumber_1"/>
						<select name="q11hScaleType_1" id="q11hScaleType_1">
							<option>Digital</option>
							<option>Graduated</option>
						</select>
					</section>
					<section class="right">
						<select name="q11hYAD_1" id="q11hYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11i. Adult resuscitation tray
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11iAdultResuscitation_1" id="q11iAdultResuscitation_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11iNumber_1" id="q11iNumber_1"/>
					</section>
					<section class="right">
						<select name="q11iYAD_1" id="q11iYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11j. Sterilization
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11jSterilization_1" id="q11jSterilization_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11jNumber_1" id="q11jNumber_1"/>
						<p>
							Sterilization Methods
						</p>
						<select>
							<option>Autoclave</option>
							<option>HLD</option>

						</select>
						Others(specify)
						<input type="text" name="q11jOthers_1" id="q11jOthers_1"/>
					</section>
					<section class="right">
						<select name="q11iYAD_1" id="q11iYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11k. Manual Vacuum Aspiration kit (within facility)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11kManualVacuum_1" id="q11kManualVacuum_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="right">
						<select name="q11kYAD_1" id="q11kYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						11l. Ventouse
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11lVentouse_1" id="q11lVentouse_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="11lNumbera_1" id="11lNumbera_1"/>
					</section>
					<section class="right">
						<select name="q11lYAD_1" id="q11lYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="11lNumberb_1" id="11lNumberb_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						11m. Kiwi Vacuum Extractor
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11mKiwi_1" id="q11mKiwi_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="11mNumbera_1" id="11mNumbera_1"/>
					</section>
					<section class="right">
						<select name="q11mYAD_1" id="q11mYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="11mNumberb_1" id="11mNumberb_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						11n. Dilatation and curretage kit
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11nDilation_1" id="q11nDilation_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11nNumbera_1" id="q11nNumbera_1"/>
					</section>
					<section class="right">
						<select name="q11nYAD_1" id="q11nYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11nNumberb_1" id="q11nNumberb_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						11o. Sterile gauze
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11oSterileGauze_1" id="q11oSterileGauze_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11oNumbera_1" id="q11oNumbera_1"/>
					</section>
					<section class="right">
						<select name="q11oYAD_1" id="q11oYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11oNumberb_1" id="q11oNumberb_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						11p. Sanitary pads
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11pSanitaryPads_1" id="q11pSanitaryPads_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>

				</section>

				<section class="row">
					<section class="left">
						11q. Elbow length gloves
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11qElbowGloves_1" id="q11qElbowGloves_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11qNumbera_1" id="q11qNumbera_1"/>
					</section>
					<section class="right">
						<select name="q11qYAD_1" id="q11qYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11qNumberb_1" id="q11qNumberb_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						11r. Patellar Hammer
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11rPatellarHammer_1" id="q11rPatellarHammer_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>
					<section class="right">
						<select name="q11rYAD_1" id="q11rYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>

				</section>

				<section class="row">
					<section class="left">
						11s. Sutures
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q11qSutures_1" id="q11qSutures_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11sNumbera_1" id="q11sNumbera_1"/>
						<select>
							<option>Nylon</option>
						</select>
					</section>
					<section class="right">
						<select name="q11sYAD_1" id="q11sYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q11sNumberb_1"  id="q11sNumberb_1"/>
					</section>

				</section>

			</section>

			<section class="column-wide">

				<section class="row-title">
					<section class="left">
						<label class="dcah-label">12. Medications in the Maternity/Labour ward</label>
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
						12a. Intravenous solutions: either Ringers lactate, D5NS, or NS infusion
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12aIntravenousSolutions_1" id="q12aIntravenousSolutions_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12aNumber_1" id="q12aNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12aComment_1" id="q12aComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12b. Injectable ergometrine/ methergine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12bIntectableErgomtrine_1" id="q12bIntectableErgomtrine_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12bNumber_1" id="q12bNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12bComment_1" id="q12bComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12c. Injectable oxytocin/ syntocin
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12cInjectableOxytocin_1" id="q12cInjectableOxytocin_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12cNumber_1" id="q12cNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12cComment_1" id="q12cComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12d. Injectable Hydralazine or Apresoline
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12dInjectableHydralazine_1" id="q12dInjectableHydralazine_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12dNumber_1" id="q12dNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12dComment_1" id="q12dComment_1" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						12e. Injectable diazepam
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12eInjectableDiazepam_1" id="q12eInjectableDiazepam_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12eNumber_1" id="q12eNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12eComment_1" id="q12eComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12f. Injectable magnesium sulfate
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12fInjectableMagnesium_1" id="q12fInjectableMagnesium_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12fNumber_1" id="q12fNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12fComment_1" id="q12fComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12g. Injectable amoxicillin or ampicillin
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12gInjectableAmoxicillin_1" id="q12gInjectableAmoxicillin_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12gNumber_1" id="q12gNumber_1" />
					</section>
					<section class="right">
						<input type="text" name="q12Comment_1" id="q12Comment_1" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						12h. Injectable gentamicin
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12hInjectableGentamicin_1" id="q12hInjectableGentamicin_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12hNumber_1" id="q12hNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12hComment_1"  id="q12hComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12i. Calcium gluconate
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12iCalciumGluconate_1" id="q12iCalciumGluconate_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12iNumber_1" id="q12iNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12iComment_1" id="q12iComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12j. Methyldopa/Aldomet
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12jMethyldopa_1" id="q12jMethyldopa_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12jNumber_1" id="q12jNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12jComment_1" id="q12jComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12k. Lidocaine (lignocaine) or other local anesthetic
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12kLidocaine_1" id="q12kLidocaine_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12kNumber_1" id="q12kNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12kComment_1" id="q12kComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12l. Nifedipine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12lNifedipine_1" id="q12lNifedipine_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12lNumber_1" id="q12lNumber_1" />
					</section>
					<section class="right">
						<input type="text" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						12m. Vitamin A
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12mVitaminA_1" id="q12mVitaminA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12mNumber_1" id="q12mNumber_1" />
					</section>
					<section class="right">
						<input type="text" name="q12mComment_1" id="q12mComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12n. Vitamin K
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12nVitaminK_1" id="q12nVitaminK_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12nNumber_1" id="q12nNumber_1"/>
					</section>
					<section class="right">
						<input type="text" name="q12nComment_1" id="q12nComment_1"/>
					</section>

				</section>

				<section class="row">
					<section class="left">
						12o. Oxygen
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q12oOxygen_1" id="q12oOxygen_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q12oNumber_1" id="q12oNumber_1" />
					</section>
					<section class="right">
						<input type="text" name="q12oComment_1" id="q12oComment_1" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						12p. Other / specify
					</section>
					<section class="center">
						<input type="text" name="q12pOther_1" id="q12pOther_1" />
					</section>
					<input type="number" name="q12pNumber_1" id="q12pNumber_1" />
					<section class="right">
						<input type="text" name="q12pComment_1" id="q12pComment_1" />
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
					13a. Does this facility perform newborn resuscitation?
				</section>
				<section class="right">
					<select name="q13aYA_1" id="q13aYA_1">
						<option> Yes </option>
						<option> No </option>
					</select>
				</section>
				<section class="row">
					<section class="left">
						13b. Has this facility performed newborn resuscitation in the last 3 months with bag and mask?
					</section>
					<section class="right">
						<select name="q13bYAD_1" id="q13bYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>
				<section class="row-title">
					<section class="left">
						<label class="dcah-label">14. EQUIPMENT AND SUPPLIES FOR NEWBORN CARE</label>
					</section>
					<section class="center">
						<label class="dcah-label">Availability (a)</label>
					</section>
					<section class="center">
						<label class="dcah-label">Functioning (b)</label>
					</section>
					<section class="center">

					</section>
				</section>

				<section class="row">
					<section class="left">
						14a. Self inflating Neonatal Ambu bag ( 500 mls)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14aYA_1" id="q14aYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14aNumber_1" id="q14aNumber_1"/>
					</section>
					<section class="right">
						<select name="q14aYAD_1" id="q14aYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						14b. Infant masks
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14bYA_1" id="q14bYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14bNumber_1" id="q14bNumber_1"/>
						<select name="q14bMaskSize_1" id="q14bMaskSize_1">
							<option>Size 0</option>
							<option>Size 1</option>
							<option>Size 2</option>
						</select>
					</section>
					<section class="right">
						<select name="q14bYAD_1" id="q14bYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						14c. Clock  with seconds arm
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14cYA_1" id="q14cYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>
					<section class="right">
						<select name="q14cYAD_1" id="q14cYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>
				</section>

				<section class="row">
					<section class="left">
						14d. Neonatal Incubator
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14dYA_1" id="q14dYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q14dNumber_1" id="q14dNumber_1"/>
					</section>
					<section class="right">
						<select name="q14dYAD_1" id="q14dYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						14e. A Radiant Heater
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14eYA_1" id="q14eYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q14eNumber_1" id="q14eNumber_1"/>
					</section>
					<section class="right">
						<select name="q14eYAD_1" id="q14eYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						14f. Infant Scale
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14fYA_1" id="q14fYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<input type="number" name="q14fNumbera_1" id="q14fNumbera_1"/>
					</section>
					<section class="right">
						<select name="q14fYAD_1" id="q14fYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number"  name="q14fNumberb_1" id="q14fNumberb_1"/>

					</section>
				</section>

				<section class="row">
					<section class="left">
						14g. Suction bulb for mucus extraction
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14gYA_1" id="q14gYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14gNumbera_1" id="q14gNumbera_1"/>
						<section class="right">
							<select name="q14gYAD_1" id="q14gYAD_1">
								<option> Yes </option>
								<option> No </option>
								<option> Do Not Know </option>
							</select>
							<p>
								Quantity:
							<p/>
							<input type="number" name="q14gNumberb_1" id="q14gNumberb_1"/>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="left">
						14h. Suction apparatus for use with catheter
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14jYA_1" id="q14jYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14hNumbera_1" id="q14hNumbera_1"/>
					</section>
					<section class="right">
						<select name="q14jYAD_1" id="q14jYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14hNumberb_1" id="q14hNumberb_1"/>
					</section>
				</section>

				<section class="row">
					<section class="left">
						14i. A flat, clean, dry and warm newborn resuscitation surface
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14iYA_1" id="q14iYA_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>
					<section class="right">
						<select name="q14iYAD_1" id="q14iYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>
				</section>

				<section class="row">
					<section class="left">
						14j. Disposable cord ties or clamps
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14jDisposableCord_1" id="q14jDisposableCord_1">
							<option>Yes </option>
							<option>No </option>
						</select>

					</section>
					<section class="right">
						<select name="q14jNumber_1" id="q14jYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>

					</section>
				</section>

				<section class="row">
					<section class="left">
						14k. Clean and warm towels/cloths for drying / warming / wrapping baby
					</section>
					<section class="center">
						<select class="cloned left-combo" name="q14kCleanTowels_1" id="q14kCleanTowels_1">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14kNumbera_1" id="q14kNumbera_1"/>
					</section>
					<section class="right">
						<select name="q14kYAD_1" id="q14kYAD_1">
							<option> Yes </option>
							<option> No </option>
							<option> Do Not Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" name="q14kNumberb_1" id="q14kNumberb_1"/>
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
						15. Does this facility perform blood transfusions?
					</section>
					<section class="center">
						<select name="q15BloodTransfusions_1">
							<option>Yes</option>
							<option>No</option>
						</select>
					</section>
				</section>

				<section class="row">
					<section class="left">
						16. Is there a Blood Bank available?
					</section>
					<section class="center">
						<select name="q16BloodBank_1">
							<option>Yes</option>
							<option>No</option>
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
				<section class="row-title">
					For Level 4, 5 and 6 Facilities
				</section>
				<section class="row">
					<section class="left">
						18a. Operating Table
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>

				</section>

				<section class="row">
					<section class="left">
						18b. Operating Light
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18c. Anaesthetic machine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18d. Laryngoscopes
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18e. Endotracheal tubes
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18f. Anaesthetic drugs e.g ketamine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18g. Anaesthetic gases (halothane, NO2, Oxygen, etc)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18h. Drugs and supplies for spinal anesthesia (e.g. Spinal needle)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18i. Scrub area adjacent to or in the operating room
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18j. Running Water
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18k. Suction Machine
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18l. Standard Cesaerian section kit
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18m. Sterile operation gowns
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18n. Sterile Drapes
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18o. Sterile gloves in various sizes (6.5 -9)
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18p. IV canulas
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18q. Drip Stand
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18r. Blood transfusion set
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>

				<section class="row">
					<section class="left">
						18s. Recovery room/ recovery area
					</section>
					<section class="center">
						<select class="cloned left-combo" name="" id="">
							<option>Yes </option>
							<option>No </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
					<section class="center">
						<select>
							<option> Yes </option>
							<option> No </option>
							<option> Dont Know </option>
						</select>
						<p>
							Quantity:
						<p/>
						<input type="number" />
					</section>
				</section>
				<label class="dcah-label" style="text-align:center">End of Questionnaire</label>
			</section>

		</section>

</form>