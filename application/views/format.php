<!-- begin facility  td --->
<h3 align="center">FACILITY REGISTRATION</h3>
<table id="facilityReg">

	<tr>
		<td class="row-title"> Facility Information</td>
		<td></td>
	</tr>

	<tr>
		<td><label>Facility Name:</label></td>
		<td>
		<input type="text" name="facilityName" class="cloned" readonly="readonly" id="facilityName"/>
		</td>
	</tr>
	<tr>
		<td><label>Facility Type:</label></td><td>
		<select name="facilityType" id="facilityType" class="cloned">
			<option value="" selected="selected">Select One</option>

		</select></td>
	</tr>
	<tr>
		<td><label>Facility Level:</label></td><td>
		<select name="facilityLevel" id="facilityLevel" class="cloned">
			<option value="" selected="selected">Select One</option>

		</select></td>
	</tr>
	<tr>
		<td><label>Owned By:</label></td><td>
		<select name="facilityOwner" id="facilityOwner" class="cloned">
			<option value="" selected="selected">Select One</option>

		</select></td>
	</tr>
	<tr>
		<td><label>Province:</label></td><td>
		<select name="facilityProvince" id="facilityProvince" class="cloned">
			<option value="" selected="selected">Select One</option>

		</select></td>
	</tr>
	<tr>
		<td><label>District:</label></td><td>
		<select name="facilityDistrict" id="facilityDistrict" class="cloned">
			<option value="" selected="selected">Select One</option>

		</select></td>
	</tr>
	<tr>
		<td><label>County:</label></td><td>
		<select name="facilityCounty" id="facilityCounty" class="cloned">
			<option value="" selected="selected">Select One</option>

		</select></td>
		</td>
	</tr>
	<tr>
		<td class="row-title"> In Charge Contact Information</td>
	</tr>
	<tr>
		<td><label>Name:</label></td><td>
		<input type="text" name="facilityContactPerson" id="facilityContactPerson" class="cloned"/>
		</td>
	</tr>
	<tr>
		<td><label>Telephone:</label></td><td></td>
	</tr>
	<tr>
		<td><label>Cell 1:</label></td><td>
		<input type="text" name="facilityTelephone" id="facilityTelephone" maxlength="14" class="cloned numbers"/>
		</td>

	</tr>
	<tr>
		<td><label>Cell 2:</label></td><td>
		<input type="text" name="facilityAltTelephone" id="facilityAltTelephone" maxlength="14" class="numbers"/>
		</td>

	</tr>
	<tr>
		<td><label>Email:</label></td><td>
		<input type="email" name="facilityEmail" id="facilityEmail" maxlength="90" class="cloned"/>
		<input type="hidden"  name="facilityMFC" id="facilityMFC"/>
		</td>
		</td>
	</tr>
	<tr>
		<td class="row-title"> MCH Contact</td>
	</tr>
	<tr>
		<td><label>Name:</label></td><td>
		<input type="text" name="MCHContactPerson" id="MCHContactPerson" class="cloned" />
		</td>
	</tr>
	<tr>
		<td><label>Telephone:</label></td>
		<td></td>

	</tr>
	<tr>
		<td><label>Cell 1:</label></td>
		<td>
		<input type="text" name="MCHTelephone" id="MCHTelephone" maxlength="14" class="cloned numbers"/>
		</td>

	</tr>
	<tr>
		<td><label>Cell 2:</label></td>
		<td>
		<input type="text" name="MCHAltTelephone" id="MCHAltTelephone" maxlength="14" class="numbers"/>
		</td>

	</tr>
	<tr>
		<td><label>Email:</label></td>
		<td>
		<input type="email" name="MCHEmail" id="MCHEmail" maxlength="90" class="cloned"/>
		</td>
	</tr>
	<tr>
		<td class="row-title"> Maternity Contact </td>
	</tr>

	<tr>
		<td><label><b>Tick the box on the right if no Maternity Contact Information is available</b></label></td>
		<td class="center">
		<input type="checkbox" name="noMaternityContact" id="noMaternityContact"di title="check this box if Maternity Contact Information is not available"/>
		</td>

	</tr>

	<tr>
		<td><label>Name:</label></td>
		<td>
		<input type="text" name="MaternityContactPerson" id="MaternityContactPerson" class="cloned"/>
		</td>
	</tr>
	<tr>
		<td><label>Telephone:</label></td>
		<td></td>

	</tr>

	<tr>
		<td><label>Cell 1:</label></td>
		<td>
		<input type="text" name="MaternityTelephone" id="MaternityTelephone" maxlength="14" class="cloned numbers"/>
		</td>

	</tr>

	<tr>
		<td><label>Cell 2:</label></td>
		<td>
		<input type="text" name="MaternityAltTelephone" id="MaternityAltTelephone" maxlength="14" class="numbers"/>
		</td>

	</tr>

	<tr>
		<td><label>Email:</label></td>
		<td>
		<input type="email" name="MaternityEmail" id="MaternityEmail" maxlength="90" class="cloned"/>
		</td>
	</tr>

</table>
<!--end facility table-->