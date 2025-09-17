
<div class="cta-buttons">
<div data-bs-toggle="modal" data-bs-target="#enquireNowPopUp" class="cta-btn cta-btn-1 gradient-bg" id="cta-btn-1">
<span class="cta-btn-label" style="writing-mode: vertical-lr;">Enquire Now </span>
</div>

<button data-bs-toggle="modal" data-bs-target="#downloadBrochurePopUp" class="cta-btn cta-btn-3 gradient-bg" id="cta-btn-3">
<span class="cta-btn-label"><i class="fa fa-download fa-flip-horizontal"
></i></span>
</button>

<div class="cta-btn cta-btn-2 gradient-bg" id="cta-btn-2"><a href="tel:8977526013">
<span class="cta-btn-label"><i class="fa fa-phone fa-flip-horizontal"
style="transform: rotate(10deg);"></i></span></a>
</div>
</div>

<script>
const ctaBtn2 = document.getElementById("cta-btn-2");
const ctaText2 = document.getElementById("cta-text-2");
ctaBtn2.addEventListener("mouseenter", () => {
ctaText2.classList.add("show");
});
ctaBtn2.addEventListener("mouseleave", () => {
ctaText2.classList.remove("show");
});
</script>

<!-- Modal -->
<div class="modal fade" id="enquireNowPopUp" tabindex="-1" aria-labelledby="enquireNowPopUp" aria-hidden="true" >
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header" style="background-color:#1e3058">

<h5 class="modal-title" style="color:#fff;">Enquire Now</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff;"></button>
</div>

<div class="modal-body" style="padding:20px 30px;">
    <h5 class="modal-title" style="font-weight: 600; color:#1e3058;font-family:'Mulish',sans-serif;">Possession On Dec 2025</h5>
<form class="pp-3" action="mail-files/mail.php" method="POST" id="enquiryFormBtn">
<div class="form-group py-2 position-relative">
<!--<label>Name <span class="text-danger">*</span> </label>-->
<i data-feather="user" class="fea icon-sm icons"></i>
<input pattern="[a-zA-z ]+" title="Enter valid Name, Max characters allowed are 30"
type="text" class="form-control" name="name" value="" placeholder="Your name" required>
</div>
<div class="form-group py-2 position-relative">
<!--<label>Email ID <span class="text-danger">*</span> </label>-->
<i data-feather="mail" class="fea icon-sm icons"></i>
<input type="email" title="Enter a valid Email ID" class="form-control" name="email"
value="" placeholder="Email address" required>
</div>
<div class="form-group py-2 ">
     <!--<label>Mobile no <span class="text-danger">*</span> </label>-->
<div class="row">
    <div class="col-md-5">
        						<select name="countryCode" class="form-control">
	 
	<option data-countryCode="IN" value="+91" Selected>India (+91)</option>
		 
 
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="+213">Algeria (+213)</option>
		<option data-countryCode="AD" value="+376">Andorra (+376)</option>
		<option data-countryCode="AO" value="+244">Angola (+244)</option>
		<option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
		<option data-countryCode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
		<option data-countryCode="AR" value="+54">Argentina (+54)</option>
		<option data-countryCode="AM" value="+374">Armenia (+374)</option>
		<option data-countryCode="AW" value="+297">Aruba (+297)</option>
		<option data-countryCode="AU" value="+61">Australia (+61)</option>
		<option data-countryCode="AT" value="+43">Austria (+43)</option>
		<option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="+973">Bahrain (+973)</option>
		<option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
		<option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
		<option data-countryCode="BY" value="+375">Belarus (+375)</option>
		<option data-countryCode="BE" value="+32">Belgium (+32)</option>
		<option data-countryCode="BZ" value="+501">Belize (+501)</option>
		<option data-countryCode="BJ" value="+229">Benin (+229)</option>
		<option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
		<option data-countryCode="BT" value="+975">Bhutan (+975)</option>
		<option data-countryCode="BO" value="+591">Bolivia (+591)</option>
		<option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
		<option data-countryCode="BW" value="+267">Botswana (+267)</option>
		<option data-countryCode="BR" value="+55">Brazil (+55)</option>
		<option data-countryCode="BN" value="+673">Brunei (+673)</option>
		<option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
		<option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
		<option data-countryCode="BI" value="+257">Burundi (+257)</option>
		<option data-countryCode="KH" value="+855">Cambodia (+855)</option>
		<option data-countryCode="CM" value="+237">Cameroon (+237)</option>
		<option data-countryCode="CA" value="+1">Canada (+1)</option>
		<option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
		<option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
		<option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
		<option data-countryCode="CL" value="+56">Chile (+56)</option>
		<option data-countryCode="CN" value="+86">China (+86)</option>
		<option data-countryCode="CO" value="+57">Colombia (+57)</option>
		<option data-countryCode="KM" value="+269">Comoros (+269)</option>
		<option data-countryCode="CG" value="+242">Congo (+242)</option>
		<option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
		<option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
		<option data-countryCode="HR" value="+385">Croatia (+385)</option>
		<option data-countryCode="CU" value="+53">Cuba (+53)</option>
		<option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
		<option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
		<option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="+45">Denmark (+45)</option>
		<option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
		<option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
		<option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
		<option data-countryCode="EC" value="+593">Ecuador (+593)</option>
		<option data-countryCode="EG" value="+20">Egypt (+20)</option>
		<option data-countryCode="SV" value="+503">El Salvador (+503)</option>
		<option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
		<option data-countryCode="ER" value="+291">Eritrea (+291)</option>
		<option data-countryCode="EE" value="+372">Estonia (+372)</option>
		<option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
		<option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
		<option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
		<option data-countryCode="FJ" value="+679">Fiji (+679)</option>
		<option data-countryCode="FI" value="+358">Finland (+358)</option>
		<option data-countryCode="FR" value="+33">France (+33)</option>
		<option data-countryCode="GF" value="+594">French Guiana (+594)</option>
		<option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
		<option data-countryCode="GA" value="+241">Gabon (+241)</option>
		<option data-countryCode="GM" value="+220">Gambia (+220)</option>
		<option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
		<option data-countryCode="DE" value="+49">Germany (+49)</option>
		<option data-countryCode="GH" value="+233">Ghana (+233)</option>
		<option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
		<option data-countryCode="GR" value="+30">Greece (+30)</option>
		<option data-countryCode="GL" value="+299">Greenland (+299)</option>
		<option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
		<option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
		<option data-countryCode="GU" value="+671">Guam (+671)</option>
		<option data-countryCode="GT" value="+502">Guatemala (+502)</option>
		<option data-countryCode="GN" value="+224">Guinea (+224)</option>
		<option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
		<option data-countryCode="GY" value="+592">Guyana (+592)</option>
		<option data-countryCode="HT" value="+509">Haiti (+509)</option>
		<option data-countryCode="HN" value="+504">Honduras (+504)</option>
		<option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
		<option data-countryCode="HU" value="+36">Hungary (+36)</option>
		<option data-countryCode="IS" value="+354">Iceland (+354)</option>
		<option data-countryCode="IN" value="+91">India (+91)</option>
		<option data-countryCode="ID" value="+62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="+98">Iran (+98)</option>
		<option data-countryCode="IQ" value="+964">Iraq (+964)</option>
		<option data-countryCode="IE" value="+353">Ireland (+353)</option>
		<option data-countryCode="IL" value="+972">Israel (+972)</option>
		<option data-countryCode="IT" value="+39">Italy (+39)</option>
		<option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
		<option data-countryCode="JP" value="+81">Japan (+81)</option>
		<option data-countryCode="JO" value="+962">Jordan (+962)</option>
		<option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
		<option data-countryCode="KE" value="+254">Kenya (+254)</option>
		<option data-countryCode="KI" value="+686">Kiribati (+686)</option>
		<option data-countryCode="KP" value="+850">Korea North (+850)</option>
		<option data-countryCode="KR" value="+82">Korea South (+82)</option>
		<option data-countryCode="KW" value="+965">Kuwait (+965)</option>
		<option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
		<option data-countryCode="LA" value="+856">Laos (+856)</option>
		<option data-countryCode="LV" value="+371">Latvia (+371)</option>
		<option data-countryCode="LB" value="+961">Lebanon (+961)</option>
		<option data-countryCode="LS" value="+266">Lesotho (+266)</option>
		<option data-countryCode="LR" value="+231">Liberia (+231)</option>
		<option data-countryCode="LY" value="+218">Libya (+218)</option>
		<option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
		<option data-countryCode="LT" value="+370">Lithuania (+370)</option>
		<option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
		<option data-countryCode="MO" value="+853">Macao (+853)</option>
		<option data-countryCode="MK" value="+389">Macedonia (+389)</option>
		<option data-countryCode="MG" value="+261">Madagascar (+261)</option>
		<option data-countryCode="MW" value="+265">Malawi (+265)</option>
		<option data-countryCode="MY" value="+60">Malaysia (+60)</option>
		<option data-countryCode="MV" value="+960">Maldives (+960)</option>
		<option data-countryCode="ML" value="+223">Mali (+223)</option>
		<option data-countryCode="MT" value="+356">Malta (+356)</option>
		<option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
		<option data-countryCode="MQ" value="+596">Martinique (+596)</option>
		<option data-countryCode="MR" value="+222">Mauritania (+222)</option>
		<option data-countryCode="YT" value="+269">Mayotte (+269)</option>
		<option data-countryCode="MX" value="+52">Mexico (+52)</option>
		<option data-countryCode="FM" value="+691">Micronesia (+691)</option>
		<option data-countryCode="MD" value="+373">Moldova (+373)</option>
		<option data-countryCode="MC" value="+377">Monaco (+377)</option>
		<option data-countryCode="MN" value="+976">Mongolia (+976)</option>
		<option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
		<option data-countryCode="MA" value="+212">Morocco (+212)</option>
		<option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
		<option data-countryCode="MN" value="+95">Myanmar (+95)</option>
		<option data-countryCode="NA" value="+264">Namibia (+264)</option>
		<option data-countryCode="NR" value="+674">Nauru (+674)</option>
		<option data-countryCode="NP" value="+977">Nepal (+977)</option>
		<option data-countryCode="NL" value="+31">Netherlands (+31)</option>
		<option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
		<option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
		<option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
		<option data-countryCode="NE" value="+227">Niger (+227)</option>
		<option data-countryCode="NG" value="+234">Nigeria (+234)</option>
		<option data-countryCode="NU" value="+683">Niue (+683)</option>
		<option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
		<option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
		<option data-countryCode="NO" value="+47">Norway (+47)</option>
		<option data-countryCode="OM" value="+968">Oman (+968)</option>
		<option data-countryCode="PW" value="+680">Palau (+680)</option>
		<option data-countryCode="PA" value="+507">Panama (+507)</option>
		<option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
		<option data-countryCode="PY" value="+595">Paraguay (+595)</option>
		<option data-countryCode="PE" value="+51">Peru (+51)</option>
		<option data-countryCode="PH" value="+63">Philippines (+63)</option>
		<option data-countryCode="PL" value="+48">Poland (+48)</option>
		<option data-countryCode="PT" value="+351">Portugal (+351)</option>
		<option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
		<option data-countryCode="QA" value="+974">Qatar (+974)</option>
		<option data-countryCode="RE" value="+262">Reunion (+262)</option>
		<option data-countryCode="RO" value="+40">Romania (+40)</option>
		<option data-countryCode="RU" value="+7">Russia (+7)</option>
		<option data-countryCode="RW" value="+250">Rwanda (+250)</option>
		<option data-countryCode="SM" value="+378">San Marino (+378)</option>
		<option data-countryCode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
		<option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
		<option data-countryCode="SN" value="+221">Senegal (+221)</option>
		<option data-countryCode="CS" value="+381">Serbia (+381)</option>
		<option data-countryCode="SC" value="+248">Seychelles (+248)</option>
		<option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
		<option data-countryCode="SG" value="+65">Singapore (+65)</option>
		<option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
		<option data-countryCode="SI" value="+386">Slovenia (+386)</option>
		<option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
		<option data-countryCode="SO" value="+252">Somalia (+252)</option>
		<option data-countryCode="ZA" value="+27">South Africa (+27)</option>
		<option data-countryCode="ES" value="+34">Spain (+34)</option>
		<option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
		<option data-countryCode="SH" value="+290">St. Helena (+290)</option>
		<option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
		<option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
		<option data-countryCode="SD" value="+249">Sudan (+249)</option>
		<option data-countryCode="SR" value="+597">Suriname (+597)</option>
		<option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
		<option data-countryCode="SE" value="+46">Sweden (+46)</option>
		<option data-countryCode="CH" value="+41">Switzerland (+41)</option>
		<option data-countryCode="SI" value="+963">Syria (+963)</option>
		<option data-countryCode="TW" value="+886">Taiwan (+886)</option>
		<option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
		<option data-countryCode="TH" value="+66">Thailand (+66)</option>
		<option data-countryCode="TG" value="+228">Togo (+228)</option>
		<option data-countryCode="TO" value="+676">Tonga (+676)</option>
		<option data-countryCode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
		<option data-countryCode="TN" value="+216">Tunisia (+216)</option>
		<option data-countryCode="TR" value="+90">Turkey (+90)</option>
		<option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
		<option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
		<option data-countryCode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
		<option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
		<option data-countryCode="UG" value="+256">Uganda (+256)</option>
		 <option data-countryCode="GB" value="+44">UK (+44)</option> 
		<option data-countryCode="UA" value="+380">Ukraine (+380)</option>
		<option data-countryCode="AE" value="+971">United Arab Emirates (+971)</option>
		<option data-countryCode="UY" value="+598">Uruguay (+598)</option>
		 <option data-countryCode="US" value="+1">USA (+1)</option> 
		<option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
		<option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
		<option data-countryCode="VA" value="+379">Vatican City (+379)</option>
		<option data-countryCode="VE" value="+58">Venezuela (+58)</option>
		<option data-countryCode="VN" value="+84">Vietnam (+84)</option>
		<option data-countryCode="VG" value="+84">Virgin Islands - British (+1284)</option>
		<option data-countryCode="VI" value="+84">Virgin Islands - US (+1340)</option>
		<option data-countryCode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
		<option data-countryCode="YE" value="+969">Yemen (North)(+969)</option>
		<option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
		<option data-countryCode="ZM" value="+260">Zambia (+260)</option>
		<option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>
	</optgroup>
</select>
    </div>
    <div class="col-md-7">
       
<input type="tel" class="form-control" name="phone" value="" placeholder="Phone" required pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Mobile Number" minlength="10" maxlength="12">
    </div>
</div>
</div>
<div class="form-group py-2">
    <select name="location" class="form-control" required>
        <option value="">Are you interested in buying 3BHK property in Tellapur?</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>



    <!--<select name="flattype" class="form-control" required>-->
    <!--    <option value="">Are you interested in buying a 3BHK apartment starting from 1.25 crores?</option>-->
    <!--    <option value="Yes">Yes</option>-->
    <!--    <option value="No">No</option>-->
    <!--</select>-->


  <br>  
  
  <select name="budget" class="form-control" required>
        <option value="">Select your preferred flat type and preferred Budget?</option>
        <option value="3BHK | 1865 SFT | Price@1.33 Cr*">3BHK | 1865 SFT | Price@1.33 Cr*</option>
        <option value="3BHK | 1915 SFT | Price@1.36 Cr*">3BHK | 1915 SFT | Price@1.36 Cr*</option>
        <option value="3BHK | 1965 SFT | Price@1.39 Cr*">3BHK | 1965 SFT | Price@1.39 Cr*</option>
        <option value="3BHK | 2035 SFT | Price@1.44 Cr*">3BHK | 2035 SFT | Price@1.44 Cr*</option>
    </select>


</div>
<div class="form-group">
<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="SRD_val" value="<?php echo $SRD_val ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">
</div>
<div class="button-box d-flex justify-content-center">
<button type="submit" onclick="disableBtnEnquiry()" class="btn enqbtn text-white modalenquirybtn">
<span id="staticEnquireNowSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
<span id="enquiryformButton">Submit Now</span>
</button>
</div>
<input type="hidden" name="token" id="token1" value="">
</form>

</div>

</div>
</div>
</div>
<script>
    let enquiryFormBtnEl = document.getElementById('enquiryFormBtn');
    enquiryFormBtnEl.addEventListener("submit", function() {
        let enquiryformButtonEl = document.getElementById('enquiryformButton');
        enquiryformButtonEl.textContent = "Submitting....";
    });
</script>
<!-- Main header end -->  


<!-- Download brochure Start -->
<div class="modal fade" id="downloadBrochurePopUp" tabindex="-1" aria-labelledby="downloadBrochurePopUp" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header" style="background-color:#1e3058">
<h5 class="modal-title" style="color:#fff;">Download Brochure</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:#fff;"></button>
</div>

<div class="modal-body">
<form id="brochureFormBtn" class="pp-3 " action="mail-files/brochure-mail.php" method="POST">
<div class="form-group py-2 position-relative">
<!--<label>Name <span class="text-danger">*</span> </label>-->
<i data-feather="user" class="fea icon-sm icons"></i>
<input pattern="[a-zA-z ]+" title="Enter valid Name, Max characters allowed are 30"
type="text" class="form-control" name="name" value="" placeholder="Your name" required>
</div>
<div class="form-group py-2 position-relative">
<!--<label>Email ID <span class="text-danger">*</span> </label>-->
<i data-feather="mail" class="fea icon-sm icons"></i>
<input type="email" title="Enter a valid Email ID" class="form-control" name="email"
value="" placeholder="Email address" required>
</div>
<div class="form-group py-2 ">
     <!--<label>Mobile no <span class="text-danger">*</span> </label>-->
<div class="row">
    <div class="col-md-5">
        						<select name="countryCode" class="form-control">
	 
	<option data-countryCode="IN" value="+91" Selected>India (+91)</option>
		 
 
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="+213">Algeria (+213)</option>
		<option data-countryCode="AD" value="+376">Andorra (+376)</option>
		<option data-countryCode="AO" value="+244">Angola (+244)</option>
		<option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
		<option data-countryCode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
		<option data-countryCode="AR" value="+54">Argentina (+54)</option>
		<option data-countryCode="AM" value="+374">Armenia (+374)</option>
		<option data-countryCode="AW" value="+297">Aruba (+297)</option>
		<option data-countryCode="AU" value="+61">Australia (+61)</option>
		<option data-countryCode="AT" value="+43">Austria (+43)</option>
		<option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="+973">Bahrain (+973)</option>
		<option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
		<option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
		<option data-countryCode="BY" value="+375">Belarus (+375)</option>
		<option data-countryCode="BE" value="+32">Belgium (+32)</option>
		<option data-countryCode="BZ" value="+501">Belize (+501)</option>
		<option data-countryCode="BJ" value="+229">Benin (+229)</option>
		<option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
		<option data-countryCode="BT" value="+975">Bhutan (+975)</option>
		<option data-countryCode="BO" value="+591">Bolivia (+591)</option>
		<option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
		<option data-countryCode="BW" value="+267">Botswana (+267)</option>
		<option data-countryCode="BR" value="+55">Brazil (+55)</option>
		<option data-countryCode="BN" value="+673">Brunei (+673)</option>
		<option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
		<option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
		<option data-countryCode="BI" value="+257">Burundi (+257)</option>
		<option data-countryCode="KH" value="+855">Cambodia (+855)</option>
		<option data-countryCode="CM" value="+237">Cameroon (+237)</option>
		<option data-countryCode="CA" value="+1">Canada (+1)</option>
		<option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
		<option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
		<option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
		<option data-countryCode="CL" value="+56">Chile (+56)</option>
		<option data-countryCode="CN" value="+86">China (+86)</option>
		<option data-countryCode="CO" value="+57">Colombia (+57)</option>
		<option data-countryCode="KM" value="+269">Comoros (+269)</option>
		<option data-countryCode="CG" value="+242">Congo (+242)</option>
		<option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
		<option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
		<option data-countryCode="HR" value="+385">Croatia (+385)</option>
		<option data-countryCode="CU" value="+53">Cuba (+53)</option>
		<option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
		<option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
		<option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="+45">Denmark (+45)</option>
		<option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
		<option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
		<option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
		<option data-countryCode="EC" value="+593">Ecuador (+593)</option>
		<option data-countryCode="EG" value="+20">Egypt (+20)</option>
		<option data-countryCode="SV" value="+503">El Salvador (+503)</option>
		<option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
		<option data-countryCode="ER" value="+291">Eritrea (+291)</option>
		<option data-countryCode="EE" value="+372">Estonia (+372)</option>
		<option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
		<option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
		<option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
		<option data-countryCode="FJ" value="+679">Fiji (+679)</option>
		<option data-countryCode="FI" value="+358">Finland (+358)</option>
		<option data-countryCode="FR" value="+33">France (+33)</option>
		<option data-countryCode="GF" value="+594">French Guiana (+594)</option>
		<option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
		<option data-countryCode="GA" value="+241">Gabon (+241)</option>
		<option data-countryCode="GM" value="+220">Gambia (+220)</option>
		<option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
		<option data-countryCode="DE" value="+49">Germany (+49)</option>
		<option data-countryCode="GH" value="+233">Ghana (+233)</option>
		<option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
		<option data-countryCode="GR" value="+30">Greece (+30)</option>
		<option data-countryCode="GL" value="+299">Greenland (+299)</option>
		<option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
		<option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
		<option data-countryCode="GU" value="+671">Guam (+671)</option>
		<option data-countryCode="GT" value="+502">Guatemala (+502)</option>
		<option data-countryCode="GN" value="+224">Guinea (+224)</option>
		<option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
		<option data-countryCode="GY" value="+592">Guyana (+592)</option>
		<option data-countryCode="HT" value="+509">Haiti (+509)</option>
		<option data-countryCode="HN" value="+504">Honduras (+504)</option>
		<option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
		<option data-countryCode="HU" value="+36">Hungary (+36)</option>
		<option data-countryCode="IS" value="+354">Iceland (+354)</option>
		<option data-countryCode="IN" value="+91">India (+91)</option>
		<option data-countryCode="ID" value="+62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="+98">Iran (+98)</option>
		<option data-countryCode="IQ" value="+964">Iraq (+964)</option>
		<option data-countryCode="IE" value="+353">Ireland (+353)</option>
		<option data-countryCode="IL" value="+972">Israel (+972)</option>
		<option data-countryCode="IT" value="+39">Italy (+39)</option>
		<option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
		<option data-countryCode="JP" value="+81">Japan (+81)</option>
		<option data-countryCode="JO" value="+962">Jordan (+962)</option>
		<option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
		<option data-countryCode="KE" value="+254">Kenya (+254)</option>
		<option data-countryCode="KI" value="+686">Kiribati (+686)</option>
		<option data-countryCode="KP" value="+850">Korea North (+850)</option>
		<option data-countryCode="KR" value="+82">Korea South (+82)</option>
		<option data-countryCode="KW" value="+965">Kuwait (+965)</option>
		<option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
		<option data-countryCode="LA" value="+856">Laos (+856)</option>
		<option data-countryCode="LV" value="+371">Latvia (+371)</option>
		<option data-countryCode="LB" value="+961">Lebanon (+961)</option>
		<option data-countryCode="LS" value="+266">Lesotho (+266)</option>
		<option data-countryCode="LR" value="+231">Liberia (+231)</option>
		<option data-countryCode="LY" value="+218">Libya (+218)</option>
		<option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
		<option data-countryCode="LT" value="+370">Lithuania (+370)</option>
		<option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
		<option data-countryCode="MO" value="+853">Macao (+853)</option>
		<option data-countryCode="MK" value="+389">Macedonia (+389)</option>
		<option data-countryCode="MG" value="+261">Madagascar (+261)</option>
		<option data-countryCode="MW" value="+265">Malawi (+265)</option>
		<option data-countryCode="MY" value="+60">Malaysia (+60)</option>
		<option data-countryCode="MV" value="+960">Maldives (+960)</option>
		<option data-countryCode="ML" value="+223">Mali (+223)</option>
		<option data-countryCode="MT" value="+356">Malta (+356)</option>
		<option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
		<option data-countryCode="MQ" value="+596">Martinique (+596)</option>
		<option data-countryCode="MR" value="+222">Mauritania (+222)</option>
		<option data-countryCode="YT" value="+269">Mayotte (+269)</option>
		<option data-countryCode="MX" value="+52">Mexico (+52)</option>
		<option data-countryCode="FM" value="+691">Micronesia (+691)</option>
		<option data-countryCode="MD" value="+373">Moldova (+373)</option>
		<option data-countryCode="MC" value="+377">Monaco (+377)</option>
		<option data-countryCode="MN" value="+976">Mongolia (+976)</option>
		<option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
		<option data-countryCode="MA" value="+212">Morocco (+212)</option>
		<option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
		<option data-countryCode="MN" value="+95">Myanmar (+95)</option>
		<option data-countryCode="NA" value="+264">Namibia (+264)</option>
		<option data-countryCode="NR" value="+674">Nauru (+674)</option>
		<option data-countryCode="NP" value="+977">Nepal (+977)</option>
		<option data-countryCode="NL" value="+31">Netherlands (+31)</option>
		<option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
		<option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
		<option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
		<option data-countryCode="NE" value="+227">Niger (+227)</option>
		<option data-countryCode="NG" value="+234">Nigeria (+234)</option>
		<option data-countryCode="NU" value="+683">Niue (+683)</option>
		<option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
		<option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
		<option data-countryCode="NO" value="+47">Norway (+47)</option>
		<option data-countryCode="OM" value="+968">Oman (+968)</option>
		<option data-countryCode="PW" value="+680">Palau (+680)</option>
		<option data-countryCode="PA" value="+507">Panama (+507)</option>
		<option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
		<option data-countryCode="PY" value="+595">Paraguay (+595)</option>
		<option data-countryCode="PE" value="+51">Peru (+51)</option>
		<option data-countryCode="PH" value="+63">Philippines (+63)</option>
		<option data-countryCode="PL" value="+48">Poland (+48)</option>
		<option data-countryCode="PT" value="+351">Portugal (+351)</option>
		<option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
		<option data-countryCode="QA" value="+974">Qatar (+974)</option>
		<option data-countryCode="RE" value="+262">Reunion (+262)</option>
		<option data-countryCode="RO" value="+40">Romania (+40)</option>
		<option data-countryCode="RU" value="+7">Russia (+7)</option>
		<option data-countryCode="RW" value="+250">Rwanda (+250)</option>
		<option data-countryCode="SM" value="+378">San Marino (+378)</option>
		<option data-countryCode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
		<option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
		<option data-countryCode="SN" value="+221">Senegal (+221)</option>
		<option data-countryCode="CS" value="+381">Serbia (+381)</option>
		<option data-countryCode="SC" value="+248">Seychelles (+248)</option>
		<option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
		<option data-countryCode="SG" value="+65">Singapore (+65)</option>
		<option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
		<option data-countryCode="SI" value="+386">Slovenia (+386)</option>
		<option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
		<option data-countryCode="SO" value="+252">Somalia (+252)</option>
		<option data-countryCode="ZA" value="+27">South Africa (+27)</option>
		<option data-countryCode="ES" value="+34">Spain (+34)</option>
		<option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
		<option data-countryCode="SH" value="+290">St. Helena (+290)</option>
		<option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
		<option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
		<option data-countryCode="SD" value="+249">Sudan (+249)</option>
		<option data-countryCode="SR" value="+597">Suriname (+597)</option>
		<option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
		<option data-countryCode="SE" value="+46">Sweden (+46)</option>
		<option data-countryCode="CH" value="+41">Switzerland (+41)</option>
		<option data-countryCode="SI" value="+963">Syria (+963)</option>
		<option data-countryCode="TW" value="+886">Taiwan (+886)</option>
		<option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
		<option data-countryCode="TH" value="+66">Thailand (+66)</option>
		<option data-countryCode="TG" value="+228">Togo (+228)</option>
		<option data-countryCode="TO" value="+676">Tonga (+676)</option>
		<option data-countryCode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
		<option data-countryCode="TN" value="+216">Tunisia (+216)</option>
		<option data-countryCode="TR" value="+90">Turkey (+90)</option>
		<option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
		<option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
		<option data-countryCode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
		<option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
		<option data-countryCode="UG" value="+256">Uganda (+256)</option>
		 <option data-countryCode="GB" value="+44">UK (+44)</option> 
		<option data-countryCode="UA" value="+380">Ukraine (+380)</option>
		<option data-countryCode="AE" value="+971">United Arab Emirates (+971)</option>
		<option data-countryCode="UY" value="+598">Uruguay (+598)</option>
		 <option data-countryCode="US" value="+1">USA (+1)</option> 
		<option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
		<option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
		<option data-countryCode="VA" value="+379">Vatican City (+379)</option>
		<option data-countryCode="VE" value="+58">Venezuela (+58)</option>
		<option data-countryCode="VN" value="+84">Vietnam (+84)</option>
		<option data-countryCode="VG" value="+84">Virgin Islands - British (+1284)</option>
		<option data-countryCode="VI" value="+84">Virgin Islands - US (+1340)</option>
		<option data-countryCode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
		<option data-countryCode="YE" value="+969">Yemen (North)(+969)</option>
		<option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
		<option data-countryCode="ZM" value="+260">Zambia (+260)</option>
		<option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>
	</optgroup>
</select>
    </div>
    <div class="col-md-7">
       
<input type="tel" class="form-control" name="phone" value="" placeholder="Phone" required pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Mobile Number" minlength="10" maxlength="12">
    </div>
</div>
</div>
<div class="form-group">
    <select name="location" class="form-control" required>
        <option value="">Are you interested in buying 3BHK property in Tellapur?</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>
        
  
  <!--<select name="flattype" class="form-control" required>-->
  <!--      <option value="">Are you interested in buying a 3BHK apartment starting from 1.25 crores?</option>-->
  <!--      <option value="Yes">Yes</option>-->
  <!--      <option value="No">No</option>-->
  <!--  </select>-->


  <br> 
  
  <select name="budget" class="form-control" required>
        <option value="">Select your preferred flat type and preferred Budget?</option>
        <option value="3BHK | 1865 SFT | Price@1.33 Cr*">3BHK | 1865 SFT | Price@1.33 Cr*</option>
        <option value="3BHK | 1865 SFT | Price@1.33 Cr*">3BHK | 1915 SFT | Price@1.36 Cr*</option>
        <option value="3BHK | 1965 SFT | Price@1.39 Cr*">3BHK | 1965 SFT | Price@1.39 Cr*</option>
        <option value="3BHK | 2035 SFT | Price@1.44 Cr*">3BHK | 2035 SFT | Price@1.44 Cr*</option>
    </select>

</div>
<div class="form-group">
<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="SRD_val" value="<?php echo $SRD_val ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">
</div>
<div class="button-box d-flex justify-content-center">
    <button type="submit" onclick="disableBtnBrochure()" class="btn enqbtn text-white brochurebtn">
        <span id="staticEnquireNowSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
        <span id="brochureenquiryformButton">Submit Now</span>
    </button>
</div>

<input type="hidden" name="token" id="token2" value="">
</form>

</div>

</div>
</div>
</div>
<script>
    let brochureFormBtnEl = document.getElementById('brochureFormBtn');
    brochureFormBtnEl.addEventListener("submit", function() {
        let brochureenquiryformButtonEl = document.getElementById('brochureenquiryformButton');
        brochureenquiryformButtonEl.textContent = "Submitting....";
    });
</script>
<script>

setTimeout(function(){
$("#enquireNowPopUp").modal('show'); 
  }, 10000);

setTimeout(function(){
$("#enquireNowPopUp").modal('show'); 
  }, 70000);

</script>


<script>

// let enquireNowForm = document.getElementById("enquireNowForm");
// let enquireNowSpinnerEl = document.getElementById("enquireNowSpinner");
// let enquireNowSubmitTextEl = document.getElementById("enquireNowSubmitText");

// enquireNowForm.addEventListener("submit", function(event){
// enquireNowSpinnerEl.classList.toggle("d-none");
// enquireNowSubmitTextEl.textContent = "Submitting";
// });

// popup Download Brochure form Action
// let downloadBrochureFormEl = document.getElementById("downloadBrochureForm");
// let downloadBrochureSpinnerEl = document.getElementById("downloadBrochureSpinner");
// let downloadBrochureTextEl = document.getElementById("downloadBrochureText");

// downloadBrochureFormEl.addEventListener("submit", function(event){
// downloadBrochureSpinnerEl.classList.toggle("d-none");
// downloadBrochureTextEl.textContent = "Submitting";
// });

// static Enqurie now Form Action
// let staticEnquireNowFormEl = document.getElementById("staticEnquireNowForm");
// let staticEnquireNowSpinnerEl = document.getElementById("staticEnquireNowSpinner");
// let staticEnquireNowTextEl = document.getElementById("staticEnquireNowText");

// staticEnquireNowFormEl.addEventListener("submit", function(event){
// staticEnquireNowSpinnerEl.classList.toggle("d-none");
// staticEnquireNowTextEl.textContent = "Submitting";
// });

// to disable the button on submiting the form
// function disableBtn() {
// var button = document.querySelector(".enqbtn");
// button.style.display = 'none';
// }

</script>

<!--disable brochure submit btn-->
<script>
//     function disableBtnBrochure() {
//     var button = document.querySelector(".brochurebtn");
//         button.style.display = 'none';
// }
</script>


<!--disable modal enquiry btn-->
<script>
//     function disableBtnEnquiry() {
//     var button = document.querySelector(".modalenquirybtn");
//         button.style.display = 'none'; 
// }
</script>




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-submenu.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/leaflet-providers.js"></script>
<script src="js/leaflet.markercluster.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/maps.js"></script>
<script src="js/sidebar.js?v=2"></script>
<script src="js/app.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js'></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="js/ie10-viewport-bug-workaround.js"></script>


<script>
$(document).ready(function () {
$('.banner-slider').slick({
infinite: true, slidesToShow: 1, arrows: false,
slidesToScroll: 1, autoplay: false, autoplaySpeed: 2000,
});
});
</script>


<script>
$(document).ready(function () {
$('.gallery-slider').slick({
infinite: true, slidesToShow: 3, arrows: true, speed: 900,
slidesToScroll: 3, autoplay: false, autoplaySpeed: 2000,
prevArrow: '<button class="slide-arrow prev-arrow"></button>',
nextArrow: '<button class="slide-arrow next-arrow"></button>',
responsive: [{
breakpoint: 425,
settings: {
slidesToScroll: 1, arrows: true,
slidesToShow: 1, infinite: true,
}

}]
});
});
</script>


<script>
$(document).ready(function () {
$('.highlights-slider').slick({
infinite: true, slidesToShow: 1, arrows: true, speed: 900,
slidesToScroll: 1, autoplay: false, autoplaySpeed: 1200,
prevArrow: '<button class="slide-arrow prev-arrow"></button>',
nextArrow: '<button class="slide-arrow next-arrow"></button>',

responsive: [
// {
//     breakpoint: 699,
//     settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         infinite: true,

//     }
// },

{
breakpoint: 425,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
infinite: true,

}
}

]
});
});
</script>

<script>
$(document).ready(function () {
$('.youtube-slider').slick({
infinite: true,
slidesToShow: 2,
arrows: true,
speed: 900,
slidesToScroll: 2,
autoplay: false,
autoplaySpeed: 1200,
prevArrow: '<button class="slide-arrow prev-arrow"></button>',
nextArrow: '<button class="slide-arrow next-arrow"></button>',
responsive: [
{
breakpoint: 768,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
});
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {
window.addEventListener('scroll', function () {
if (window.scrollY > 50) {
document.getElementById('main-header-2').classList.add('fixed-top');
// add padding top to show content behind navbar
navbar_height = document.querySelector('.navbar').offsetHeight;
document.body.style.paddingTop = navbar_height + 'px';
} else {
document.getElementById('main-header-2').classList.remove('fixed-top');
// remove padding top from body
document.body.style.paddingTop = '0';
}
});
});

// Add active class to the current button in nav-bar (highlight it)
var header = document.getElementById("main-header-2");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function () {
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", " ");
this.className += " active";
});
}
</script>

<script>
$(document).ready(function () {
$(".accordion-items").on("click", ".accordion-heading", function () {
$(this).toggleClass("active").next().slideToggle();
$(".accordion-content").not($(this).next()).slideUp(300);
$(this).siblings().removeClass("active");
});
});
</script>



<!--crm code-->

<!--crm code-->
<!--captch code-->
<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdJe9YpAAAAAEUlKpB8PvHTKa7IeZCn45I8WP0H', {action: 'homepage'}).then(function(token) {
          console.log(token);
          document.getElementById("token").value = token;
      });
  });
</script>
<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdJe9YpAAAAAEUlKpB8PvHTKa7IeZCn45I8WP0H', {action: 'homepage'}).then(function(token) {
          console.log(token);
          document.getElementById("token1").value = token;
      });
  });
</script>
<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdJe9YpAAAAAEUlKpB8PvHTKa7IeZCn45I8WP0H', {action: 'homepage'}).then(function(token) {
          console.log(token);
          document.getElementById("token2").value = token;
      });
  });
</script>
<!--captcha code end-->

