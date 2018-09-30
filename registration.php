<html>
<head>
<title>TED Speaker Nomination</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="DzSQbQAwOZybVYjt8iVC4Yd0r0jUz1TJbvkk727bUFZ6wZuGH8Yz9S1F0iy7lSGneHFkfnfyrC1qZPnHygd05Q==" />
<meta content='True' name='HandheldFriendly'>
<meta content='320' name='MobileOptimized'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" media="all" href="public/css/registration.css" data-turbolinks-track="true" />
<link rel="stylesheet" type="text/css" href="public/css/main.css">
<link rel="stylesheet" type="text/css" href="external/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">




<script src="assets/registration.js" data-turbolinks-track="true"></script>
</head>
<?php include "header.php"; ?>
<body>
  <div class='container main'>
  <div class='row'>
  <div class='col-md-9'>
  <div class='row main-heading'>
  <div class='col-md-12'>
  <h2>Speaker nomination form</h2>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <h3>
  <div class='intro'>
  Use this form to suggest a speaker for a future TED Conference.
  </br>
  <span>Before you get started, please see our</span>
  <a href="http://www.ted.com/about/conferences/speaking-at-ted">speaker nomination FAQ</a>.
  </div>
  </h3>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='flash'>
  </div>
  </div>
  </div>
  <form class="nomination" id="new_nomination" action="register.php" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="qXXhTfihSOKFhLoILatMFOmxB6SpaI7D5lFce9KQbXLcgOqm51dCizOU4MlkGy9SFrTMkgpVdifizIFTdkxJwQ==" /><div class='row'>
  <div class='col-md-12'>
  <h3 class='weight-normal'>Part 1: About you (the nominator)</h3>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominator_first_name">First name:
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control mirror-source has-validation required max-255" data-mirror="first-name" type="text" name="nomination[nominator_first_name]" id="nomination_nominator_first_name" />
  </div>
  </div>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominator_last_name">Last name:
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control mirror-source has-validation required max-255" data-mirror="last-name" type="text" name="nomination[nominator_last_name]" id="nomination_nominator_last_name" />
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominator_email">Email address:
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control mirror-source has-validation required email max-255" data-mirror="email" type="text" name="nomination[nominator_email]" id="nomination_nominator_email" />
  </div>
  </div>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominator_phone">Telephone:
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control mirror-source has-validation required intl-phone max-255" data-mirror="phone" type="text" name="nomination[nominator_phone]" id="nomination_nominator_phone" />
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <hr>
  <h3 class='weight-normal'>Part 2: About the nominee</h3>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <input name="nomination[is_self]" type="hidden" value="0" /><input class="self-nomination-checkbox" type="checkbox" value="1" name="nomination[is_self]" id="nomination_is_self" />
  <label for="nomination_is_self">I am nominating myself</label>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominee_first_name">First name of nominee:
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control mirror-target has-validation required max-255" data-mirror="first-name" type="text" name="nomination[nominee_first_name]" id="nomination_nominee_first_name" />
  </div>
  </div>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominee_last_name">Last name of nominee:
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control mirror-target has-validation required max-255" data-mirror="last-name" type="text" name="nomination[nominee_last_name]" id="nomination_nominee_last_name" />
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominee_email">Email address:</label>
  <input class="form-control mirror-target has-validation email max-255" data-mirror="email" type="text" name="nomination[nominee_email]" id="nomination_nominee_email" />
  </div>
  </div>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominee_phone">Telephone:</label>
  <input class="form-control mirror-target has-validation intl-phone max-255" data-mirror="phone" type="text" name="nomination[nominee_phone]" id="nomination_nominee_phone" />
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominee_city">City:</label>
  <input class="form-control max-255" type="text" name="nomination[nominee_city]" id="nomination_nominee_city" />
  </div>
  </div>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_country_id">Country:
  <i class="fa fa-star required-star"></i>
  </label><select class="form-control has-validation required" name="nomination[country_id]" id="nomination_country_id"><option value="">Please select</option>
  <option value="1">Afghanistan</option>
  <option value="239">Åland Islands</option>
  <option value="4">Albania</option>
  <option value="5">Algeria</option>
  <option value="6">American Samoa</option>
  <option value="7">Andorra</option>
  <option value="8">Angola</option>
  <option value="9">Anguilla</option>
  <option value="229">Antarctica</option>
  <option value="10">Antigua and Barbuda</option>
  <option value="12">Argentina</option>
  <option value="13">Armenia</option>
  <option value="14">Aruba</option>
  <option value="15">Australia</option>
  <option value="80">Austria</option>
  <option value="16">Azerbaijan</option>
  <option value="17">Bahamas</option>
  <option value="18">Bahrain</option>
  <option value="19">Bangladesh</option>
  <option value="20">Barbados</option>
  <option value="217">Belarus</option>
  <option value="21">Belgium</option>
  <option value="22">Belize</option>
  <option value="23">Benin</option>
  <option value="24">Bermuda</option>
  <option value="25">Bhutan</option>
  <option value="26">Bolivia</option>
  <option value="27">Bosnia and Herzegovina</option>
  <option value="28">Botswana</option>
  <option value="230">Bouvet Island</option>
  <option value="29">Brazil</option>
  <option value="231">British Indian Ocean Territory</option>
  <option value="32">Brunei</option>
  <option value="33">Bulgaria</option>
  <option value="34">Burkina Faso</option>
  <option value="35">Burundi</option>
  <option value="87">Cambodia</option>
  <option value="88">Cameroon</option>
  <option value="89">Canada</option>
  <option value="90">Cape Verde</option>
  <option value="36">Cayman Islands</option>
  <option value="93">Central African Republic</option>
  <option value="203">Chad</option>
  <option value="37">Chile</option>
  <option value="94">China</option>
  <option value="85">Christmas Island</option>
  <option value="100">Cocos (Keeling) Islands</option>
  <option value="97">Colombia</option>
  <option value="98">Comoros</option>
  <option value="99">Congo</option>
  <option value="241">Congo, the Democratic Republic of the</option>
  <option value="38">Cook Islands</option>
  <option value="39">Costa Rica</option>
  <option value="236">Cote d&#39;Ivoire (Ivory Coast)</option>
  <option value="104">Croatia</option>
  <option value="105">Cuba</option>
  <option value="250">Curaçao</option>
  <option value="107">Cyprus</option>
  <option value="204">Czech Republic</option>
  <option value="197">Denmark</option>
  <option value="40">Djibouti</option>
  <option value="41">Dominica</option>
  <option value="42">Dominican Republic</option>
  <option value="43">Ecuador</option>
  <option value="44">Egypt</option>
  <option value="45">El Salvador</option>
  <option value="160">Equatorial Guinea</option>
  <option value="46">Eritrea</option>
  <option value="224">Estonia</option>
  <option value="49">Ethiopia</option>
  <option value="50">Falkland Islands</option>
  <option value="53">Faroe Islands</option>
  <option value="51">Fiji Islands</option>
  <option value="189">Finland</option>
  <option value="162">France</option>
  <option value="163">French Guiana</option>
  <option value="164">French Polynesia</option>
  <option value="234">French Southern territories</option>
  <option value="54">Gabon</option>
  <option value="55">Gambia</option>
  <option value="56">Georgia</option>
  <option value="173">Germany</option>
  <option value="57">Ghana</option>
  <option value="58">Gibraltar</option>
  <option value="103">Greece</option>
  <option value="60">Greenland</option>
  <option value="59">Grenada</option>
  <option value="61">Guadeloupe</option>
  <option value="62">Guam</option>
  <option value="63">Guatemala</option>
  <option value="237">Guernsey</option>
  <option value="64">Guinea</option>
  <option value="65">Guinea-Bissau</option>
  <option value="66">Guyana</option>
  <option value="67">Haiti</option>
  <option value="233">Heard Island and McDonald Islands</option>
  <option value="220">Holy See (Vatican City State)</option>
  <option value="68">Honduras</option>
  <option value="69">Hong Kong</option>
  <option value="212">Hungary</option>
  <option value="76">Iceland</option>
  <option value="72">India</option>
  <option value="71">Indonesia</option>
  <option value="74">Iran</option>
  <option value="73">Iraq</option>
  <option value="75">Ireland</option>
  <option value="242">Isle of Man</option>
  <option value="77">Israel</option>
  <option value="78">Italy</option>
  <option value="81">Jamaica</option>
  <option value="82">Japan</option>
  <option value="238">Jersey</option>
  <option value="84">Jordan</option>
  <option value="91">Kazakhstan</option>
  <option value="92">Kenya</option>
  <option value="96">Kiribati</option>
  <option value="249">Kosovo</option>
  <option value="106">Kuwait</option>
  <option value="95">Kyrgyzstan</option>
  <option value="108">Laos</option>
  <option value="109">Latvia</option>
  <option value="111">Lebanon</option>
  <option value="110">Lesotho</option>
  <option value="112">Liberia</option>
  <option value="113">Libya</option>
  <option value="114">Liechtenstein</option>
  <option value="115">Lithuania</option>
  <option value="116">Luxembourg</option>
  <option value="118">Macao</option>
  <option value="120">Macedonia</option>
  <option value="119">Madagascar</option>
  <option value="121">Malawi</option>
  <option value="123">Malaysia</option>
  <option value="122">Maldives</option>
  <option value="124">Mali</option>
  <option value="125">Malta</option>
  <option value="127">Marshall Islands</option>
  <option value="128">Martinique</option>
  <option value="129">Mauritania</option>
  <option value="130">Mauritius</option>
  <option value="131">Mayotte</option>
  <option value="132">Mexico</option>
  <option value="133">Micronesia</option>
  <option value="134">Moldova</option>
  <option value="135">Monaco</option>
  <option value="136">Mongolia</option>
  <option value="243">Montenegro</option>
  <option value="137">Montserrat</option>
  <option value="126">Morocco</option>
  <option value="138">Mozambique</option>
  <option value="139">Myanmar</option>
  <option value="140">Namibia</option>
  <option value="141">Nauru</option>
  <option value="142">Nepal</option>
  <option value="2">Netherlands</option>
  <option value="3">Netherlands Antilles</option>
  <option value="214">New Caledonia</option>
  <option value="215">New Zealand</option>
  <option value="143">Nicaragua</option>
  <option value="144">Niger</option>
  <option value="145">Nigeria</option>
  <option value="146">Niue</option>
  <option value="147">Norfolk Island</option>
  <option value="101">North Korea</option>
  <option value="156">Northern Mariana Islands</option>
  <option value="148">Norway</option>
  <option value="149">Oman</option>
  <option value="150">Pakistan</option>
  <option value="151">Palau</option>
  <option value="228">Palestine</option>
  <option value="152">Panama</option>
  <option value="153">Papua New Guinea</option>
  <option value="154">Paraguay</option>
  <option value="155">Peru</option>
  <option value="52">Philippines</option>
  <option value="245">Pitcairn</option>
  <option value="159">Poland</option>
  <option value="157">Portugal</option>
  <option value="158">Puerto Rico</option>
  <option value="161">Qatar</option>
  <option value="246">Réunion</option>
  <option value="165">Romania</option>
  <option value="222">Russian Federation</option>
  <option value="166">Rwanda</option>
  <option value="240">Saint Barthélemy</option>
  <option value="168">Saint Helena</option>
  <option value="169">Saint Kitts and Nevis</option>
  <option value="170">Saint Lucia</option>
  <option value="244">Saint Martin (French part)</option>
  <option value="172">Saint Pierre and Miquelon</option>
  <option value="171">Saint Vincent and the Grenadines</option>
  <option value="176">Samoa</option>
  <option value="177">San Marino</option>
  <option value="178">Sao Tome and Principe</option>
  <option value="179">Saudi Arabia</option>
  <option value="180">Senegal</option>
  <option value="247">Serbia</option>
  <option value="181">Seychelles</option>
  <option value="182">Sierra Leone</option>
  <option value="183">Singapore</option>
  <option value="184">Slovakia</option>
  <option value="185">Slovenia</option>
  <option value="174">Solomon Islands</option>
  <option value="186">Somalia</option>
  <option value="48">South Africa</option>
  <option value="232">South Georgia and the South Sandwich Islands</option>
  <option value="102">South Korea</option>
  <option value="248">South Sudan</option>
  <option value="47">Spain</option>
  <option value="187">Sri Lanka</option>
  <option value="188">Sudan</option>
  <option value="190">Suriname</option>
  <option value="70">Svalbard and Jan Mayen</option>
  <option value="191">Swaziland</option>
  <option value="167">Sweden</option>
  <option value="192">Switzerland</option>
  <option value="193">Syria</option>
  <option value="195">Taiwan</option>
  <option value="194">Tajikistan</option>
  <option value="196">Tanzania</option>
  <option value="198">Thailand</option>
  <option value="79">Timor-Leste</option>
  <option value="199">Togo</option>
  <option value="200">Tokelau</option>
  <option value="201">Tonga</option>
  <option value="202">Trinidad and Tobago</option>
  <option value="205">Tunisia</option>
  <option value="206">Turkey</option>
  <option value="207">Turkmenistan</option>
  <option value="208">Turks and Caicos Islands</option>
  <option value="209">Tuvalu</option>
  <option value="210">Uganda</option>
  <option value="211">Ukraine</option>
  <option value="11">United Arab Emirates</option>
  <option value="30">United Kingdom</option>
  <option value="225">United States</option>
  <option value="235">United States Minor Outlying Islands</option>
  <option value="213">Uruguay</option>
  <option value="216">Uzbekistan</option>
  <option value="219">Vanuatu</option>
  <option value="221">Venezuela</option>
  <option value="223">Vietnam</option>
  <option value="31">Virgin Islands, British</option>
  <option value="226">Virgin Islands, U.S.</option>
  <option value="218">Wallis and Futuna</option>
  <option value="117">Western Sahara</option>
  <option value="83">Yemen</option>
  <option value="86">Yugoslavia</option>
  <option value="175">Zambia</option>
  <option value="227">Zimbabwe</option></select>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-6'>
  <div class='form-group'>
  <label for="nomination_nominee_gender">Gender:
  <i class="fa fa-star required-star"></i>
  </label><div class='row'>
  <div class='col-md-12'>
  <label class='radio-inline'>
  <input class="has-validation required max-255" type="radio" value="Male" name="nomination[nominee_gender]" id="nomination_nominee_gender_male" />
  Male
  </label>
  <label class='radio-inline'>
  <input class="has-validation required max-255" type="radio" value="Female" name="nomination[nominee_gender]" id="nomination_nominee_gender_female" />
  Female
  </label>
  <label class='radio-inline'>
  <input class="has-validation required max-255" type="radio" value="Other" name="nomination[nominee_gender]" id="nomination_nominee_gender_other" />
  Other
  </label>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_occupation">What is their occupation?
  <i class="fa fa-star required-star"></i>
  </label><input class="form-control has-validation required max-255" type="text" name="nomination[occupation]" id="nomination_occupation" />
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_about_the_nominee">Tell us more about the speaker. Why are you recommending them?
  <i class="fa fa-star required-star"></i>
  </label><textarea class="form-control has-validation required max-65535" name="nomination[about_the_nominee]" id="nomination_about_the_nominee">
  </textarea>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_talk_description">What might their TED talk be about?</label>
  <textarea class="form-control max-65535" name="nomination[talk_description]" id="nomination_talk_description">
  </textarea>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_categories">Under which of the following categories would this person fall?
  <i class="fa fa-star required-star"></i>
  </label><div class='row'>
  <div class='col-md-12'>
  <div class='text-muted'>(Please select up to 3 options)</div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Adventure/Exploration" name="nomination[category_list][]" id="nomination_category_list_adventureexploration" />
  Adventure/Exploration
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Food/Agriculture" name="nomination[category_list][]" id="nomination_category_list_foodagriculture" />
  Food/Agriculture
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Science/Medicine" name="nomination[category_list][]" id="nomination_category_list_sciencemedicine" />
  Science/Medicine
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Architecture" name="nomination[category_list][]" id="nomination_category_list_architecture" />
  Architecture
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Law/Human Rights" name="nomination[category_list][]" id="nomination_category_list_lawhuman_rights" />
  Law/Human Rights
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Social Sciences" name="nomination[category_list][]" id="nomination_category_list_social_sciences" />
  Social Sciences
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Art/Design/Literature" name="nomination[category_list][]" id="nomination_category_list_artdesignliterature" />
  Art/Design/Literature
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Media/Entertainment" name="nomination[category_list][]" id="nomination_category_list_mediaentertainment" />
  Media/Entertainment
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Sports" name="nomination[category_list][]" id="nomination_category_list_sports" />
  Sports
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Business/Economics" name="nomination[category_list][]" id="nomination_category_list_businesseconomics" />
  Business/Economics
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Music" name="nomination[category_list][]" id="nomination_category_list_music" />
  Music
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Technology" name="nomination[category_list][]" id="nomination_category_list_technology" />
  Technology
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Education" name="nomination[category_list][]" id="nomination_category_list_education" />
  Education
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Religion/Spirituality" name="nomination[category_list][]" id="nomination_category_list_religionspirituality" />
  Religion/Spirituality
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Other" name="nomination[category_list][]" id="nomination_category_list_other" />
  Other
  </div>
  <div class='col-md-4'>
  <input class="has-validation category-list required" type="checkbox" value="Environment" name="nomination[category_list][]" id="nomination_category_list_environment" />
  Environment
  </div>
  <input type="hidden" name="nomination[category_list][]" value="" /></div>
  </div>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_public_speaking">Has this person spoken publicly before? If so, where?</label>
  <textarea class="form-control max-65535" name="nomination[public_speaking]" id="nomination_public_speaking">
  </textarea>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='link-widget'>
  <label for="nomination_media_links">Please provide links to online video or audio featuring the proposed speaker.</label>
  <ul class='list-unstyled link-list media-links'>
  <li class='link-item' data-mode='new'>
  <div class='link-view-new'>
  <div class='form-group has-feedback'>
  <input value="media" type="hidden" name="nomination[media_links_attributes][0][type]" id="nomination_media_links_attributes_0_type" />
  <input class="form-control link-box new-url-input" type="url" name="nomination[media_links_attributes][0][url]" id="nomination_media_links_attributes_0_url" />
  <input type="text" name="new_media_link_0" id="new_media_link_0" value="" class="form-control link-box new-url-input-buffer has-validation flex-url hidden" />
  <span class='form-control-feedback link-feedback'><i class="fa fa-link link-icon fa-lg"></i></span>
  </div>
  <div class='form-group'>
  <button class='btn btn-default btn-sm add-link'>Add this link</button>
  </div>
  </div>
  <div class='link-view-rendered hidden'>
  <div class='form-group'>
  <span>
  <a class='link-anchor' target='_blank'></a>
  <a class='small edit-link' href='edit'>Edit</a>
  <span></span>
  |
  <a class='small remove-link' href='delete'>Delete</a>
  </span>
  </div>
  </div>
  <div class='link-view-edit hidden'>
  <div class='row'>
  <div class='col-md-10'>
  <div class='form-group has-feedback'>
  <div class='error_wrapper'>
  <input type="url" name="edit" id="edit" value="" class="form-control link-box edit-url-input has-validation flex-url" />
  </div>
  <span class='form-control-feedback link-feedback'><i class="fa fa-link link-icon fa-lg"></i></span>
  </div>
  </div>
  <div class='col-md-2'>
  <a class='small remove-link' href='delete'>Delete</a>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <button class='btn btn-default btn-sm update-link'>Update link</button>
  </div>
  </div>
  </div>
  </div>
  </li>

  </ul>
  <div class='form-group link-view hidden'>
  <button class='btn btn-default btn-sm link-create'>Add another link</button>
  </div>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='link-widget'>
  <label for="nomination_editorial_links">Please provide links to any articles or web pages about the speaker.</label>
  <ul class='list-unstyled link-list editorial-links'>
  <li class='link-item' data-mode='new'>
  <div class='link-view-new'>
  <div class='form-group has-feedback'>
  <input value="editorial" type="hidden" name="nomination[editorial_links_attributes][0][type]" id="nomination_editorial_links_attributes_0_type" />
  <input class="form-control link-box new-url-input" type="url" name="nomination[editorial_links_attributes][0][url]" id="nomination_editorial_links_attributes_0_url" />
  <input type="text" name="new_editorial_link_0" id="new_editorial_link_0" value="" class="form-control link-box new-url-input-buffer has-validation flex-url hidden" />
  <span class='form-control-feedback link-feedback'><i class="fa fa-link link-icon fa-lg"></i></span>
  </div>
  <div class='form-group'>
  <button class='btn btn-default btn-sm add-link'>Add this link</button>
  </div>
  </div>
  <div class='link-view-rendered hidden'>
  <div class='form-group'>
  <span>
  <a class='link-anchor' target='_blank'></a>
  <a class='small edit-link' href='edit'>Edit</a>
  <span></span>
  |
  <a class='small remove-link' href='delete'>Delete</a>
  </span>
  </div>
  </div>
  <div class='link-view-edit hidden'>
  <div class='row'>
  <div class='col-md-10'>
  <div class='form-group has-feedback'>
  <div class='error_wrapper'>
  <input type="url" name="edit" id="edit" value="" class="form-control link-box edit-url-input has-validation flex-url" />
  </div>
  <span class='form-control-feedback link-feedback'><i class="fa fa-link link-icon fa-lg"></i></span>
  </div>
  </div>
  <div class='col-md-2'>
  <a class='small remove-link' href='delete'>Delete</a>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <button class='btn btn-default btn-sm update-link'>Update link</button>
  </div>
  </div>
  </div>
  </div>
  </li>

  </ul>
  <div class='form-group link-view hidden'>
  <button class='btn btn-default btn-sm link-create'>Add another link</button>
  </div>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_is_personal_contact">Do you know this person personally?  - It’s okay if you do not.</label>
  <div class='row'>
  <div class='col-md-12'>
  <label class='radio-inline'>
  <input type="radio" value="true" name="nomination[is_personal_contact]" id="nomination_is_personal_contact_true" />
  Yes
  </label>
  <label class='radio-inline'>
  <input type="radio" value="false" name="nomination[is_personal_contact]" id="nomination_is_personal_contact_false" />
  No
  </label>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-12'>
  <div class='form-group'>
  <label for="nomination_has_gdpr_consent">Before submitting your nomination, please review how TED processes the personal information you provide to us:
  </label><ul>
  <li>We will evaluate your nomination and will share this information with staff members and third parties selected to review speaker nominations.</li>
  <li>There is no deadline for nominating a speaker. If you've submitted a nomination, it will stay in our database to be considered for future conferences.</li>
  <li>Due to volume, we are not able to respond personally to each suggestion, but someone from TED will be in touch if needed.</li>
  <li>Your information will be processed in accordance with TED's <a href="https://www.ted.com/about/our-organization/our-policies-terms/privacy-policy">privacy policy</a>.</li>
  <li>Please reach out to privacy@ted.com if you have any concerns with TED managing your data.</li>
  </ul>
  <div class='row'>
  <div class='col-md-12'>
  <input name="nomination[has_gdpr_consent]" type="hidden" value="0" /><input as="boolean" required="required" class="has-validation required" type="checkbox" value="1" name="nomination[has_gdpr_consent]" id="nomination_has_gdpr_consent" />
  By checking this box, I consent and agree to TED processing my information as defined above.
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class='row'>
  <div class='col-md-2 pull-right action-button'>
  <button class='btn btn-default form-control' style="background-color:rgb(52,58,64)">Submit</button>
  </div>
  <div class='col-md-2 pull-right action-button'>
  <a class="btn btn-default form-control" style="background-color:rgb(52,58,64);padding-top:11px" href="http://www.ted.com">Cancel</a>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  <?php include "includes/footer.php"; ?>



</body>
</html
