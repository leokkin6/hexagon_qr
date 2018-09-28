@extends('main')

@section('title','| User Registration')
@section('content_header','User Registration')
@section('content_subheader','User registration for QR Access')
@section('breadcrumb', 'User Registration')


@section('content')
<!-- Basic Inputs Validation start -->
<div class="card">
    <div class="card-header">
        <h5>Basic Inputs Validation</h5>
        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
        <div class="card-header-right">
            <i class="icofont icofont-rounded-down"></i>
            <i class="icofont icofont-refresh"></i>
            <i class="icofont icofont-close-circled"></i>
        </div>
    </div>
    <div class="card-block" style="">
        <div class="alpaca-field alpaca-field-object alpaca-optional alpaca-edit alpaca-top alpaca-field-valid" data-alpaca-field-id="alpaca1" data-alpaca-field-path="/" data-alpaca-field-name="">



        <div class="alpaca-container alpaca-horizontal form-horizontal alpaca-container-has-items" data-alpaca-container-item-count="4">


            <div class="alpaca-container-item alpaca-container-item-first" data-alpaca-container-item-index="0" data-alpaca-container-item-name="name" data-alpaca-container-item-parent-field-id="alpaca1">

        <div class="form-group alpaca-field alpaca-field-text alpaca-optional alpaca-autocomplete alpaca-field-valid" data-alpaca-field-id="alpaca3" data-alpaca-field-path="/name" data-alpaca-field-name="name">

        <label class="control-label alpaca-control-label col-sm-3" for="alpaca3">Name</label>

        <div class="col-sm-9"><input type="text" id="alpaca3" name="name" class="alpaca-control form-control" autocomplete="off"></div>



    <div style="clear:both;"></div></div>

    </div>


            <div class="alpaca-container-item" data-alpaca-container-item-index="1" data-alpaca-container-item-name="age" data-alpaca-container-item-parent-field-id="alpaca1">

        <div class="form-group alpaca-field alpaca-field-number alpaca-optional alpaca-autocomplete alpaca-field-valid" data-alpaca-field-id="alpaca4" data-alpaca-field-path="/age" data-alpaca-field-name="age">

        <label class="control-label alpaca-control-label col-sm-3" for="alpaca4">Age</label>

        <div class="col-sm-9"><input type="text" id="alpaca4" name="age" class="alpaca-control form-control" autocomplete="off"></div>



    <div style="clear:both;"></div></div>

    </div>


            <div class="alpaca-container-item" data-alpaca-container-item-index="2" data-alpaca-container-item-name="phone" data-alpaca-container-item-parent-field-id="alpaca1">

        <div class="form-group alpaca-field alpaca-field-phone alpaca-optional alpaca-autocomplete alpaca-field-valid" data-alpaca-field-id="alpaca5" data-alpaca-field-path="/phone" data-alpaca-field-name="phone">

        <label class="control-label alpaca-control-label col-sm-3" for="alpaca5">Phone</label>

        <div class="col-sm-9"><input type="tel" id="alpaca5" name="phone" class="alpaca-control form-control" autocomplete="off"></div>



    <div style="clear:both;"></div></div>

    </div>


            <div class="alpaca-container-item alpaca-container-item-last" data-alpaca-container-item-index="3" data-alpaca-container-item-name="country" data-alpaca-container-item-parent-field-id="alpaca1">

        <div class="form-group alpaca-field alpaca-field-country alpaca-required alpaca-field-valid" data-alpaca-field-id="alpaca6" data-alpaca-field-path="/country" data-alpaca-field-name="country">

        <label class="control-label alpaca-control-label col-sm-3" for="alpaca6"><span class="alpaca-icon-required glyphicon glyphicon-star"></span>Country</label>

        <div class="col-sm-9"><select id="alpaca6" name="country" class="alpaca-control form-control">



        <option value="afg">Afghanistan</option>
        <option value="ala">Aland Islands</option>
        <option value="alb">Albania</option>
        <option value="dza">Algeria</option>
        <option value="asm">American Samoa</option>
        <option value="and">Andorra</option>
        <option value="ago">Angola</option>
        <option value="aia">Anguilla</option>
        <option value="ata">Antarctica</option>
        <option value="atg">Antigua and Barbuda</option>
        <option value="arg">Argentina</option>
        <option value="arm">Armenia</option>
        <option value="abw">Aruba</option>
        <option value="aus">Australia</option>
        <option value="aut">Austria</option>
        <option value="aze">Azerbaijan</option>
        <option value="bhs">Bahamas</option>
        <option value="bhr">Bahrain</option>
        <option value="bgd">Bangladesh</option>
        <option value="brb">Barbados</option>
        <option value="blr">Belarus</option>
        <option value="bel">Belgium</option>
        <option value="blz">Belize</option>
        <option value="ben">Benin</option>
        <option value="bmu">Bermuda</option>
        <option value="btn">Bhutan</option>
        <option value="bol">Bolivia</option>
        <option value="bih">Bosnia and Herzegovina</option>
        <option value="bwa">Botswana</option>
        <option value="bvt">Bouvet Island</option>
        <option value="bra">Brazil</option>
        <option value="iot">British Indian Ocean Territory</option>
        <option value="brn">Brunei Darussalam</option>
        <option value="bgr">Bulgaria</option>
        <option value="bfa">Burkina Faso</option>
        <option value="bdi">Burundi</option>
        <option value="khm">Cambodia</option>
        <option value="cmr">Cameroon</option>
        <option value="can">Canada</option>
        <option value="cpv">Cape Verde</option>
        <option value="cym">Cayman Islands</option>
        <option value="caf">Central African Republic</option>
        <option value="tcd">Chad</option>
        <option value="chl">Chile</option>
        <option value="chn">China</option>
        <option value="cxr">Christmas Island</option>
        <option value="cck">Cocos (Keeling), Islands</option>
        <option value="col">Colombia</option>
        <option value="com">Comoros</option>
        <option value="cog">Congo</option>
        <option value="cod">Congo, the Democratic Republic of the</option>
        <option value="cok">Cook Islands</option>
        <option value="cri">Costa Rica</option>
        <option value="civ">Cote d'Ivoire</option>
        <option value="hrv">Croatia</option>
        <option value="cub">Cuba</option>
        <option value="cyp">Cyprus</option>
        <option value="cze">Czech Republic</option>
        <option value="dnk">Denmark</option>
        <option value="dji">Djibouti</option>
        <option value="dma">Dominica</option>
        <option value="dom">Dominican Republic</option>
        <option value="ecu">Ecuador</option>
        <option value="egy">Egypt</option>
        <option value="slv">El Salvador</option>
        <option value="gnq">Equatorial Guinea</option>
        <option value="eri">Eritrea</option>
        <option value="est">Estonia</option>
        <option value="eth">Ethiopia</option>
        <option value="flk">Falkland Islands (Malvinas),</option>
        <option value="fro">Faroe Islands</option>
        <option value="fji">Fiji</option>
        <option value="fin">Finland</option>
        <option value="fra">France</option>
        <option value="guf">French Guiana</option>
        <option value="pyf">French Polynesia</option>
        <option value="atf">French Southern Territories</option>
        <option value="gab">Gabon</option>
        <option value="gmb">Gambia</option>
        <option value="geo">Georgia</option>
        <option value="deu">Germany</option>
        <option value="gha">Ghana</option>
        <option value="gib">Gibraltar</option>
        <option value="grc">Greece</option>
        <option value="grl">Greenland</option>
        <option value="grd">Grenada</option>
        <option value="glp">Guadeloupe</option>
        <option value="gum">Guam</option>
        <option value="gtm">Guatemala</option>
        <option value="ggy">Guernsey</option>
        <option value="gin">Guinea</option>
        <option value="gnb">Guinea-Bissau</option>
        <option value="guy">Guyana</option>
        <option value="hti">Haiti</option>
        <option value="hmd">Heard Island and McDonald Islands</option>
        <option value="vat">Holy See (Vatican City State),</option>
        <option value="hnd">Honduras</option>
        <option value="hkg">Hong Kong</option>
        <option value="hun">Hungary</option>
        <option value="isl">Iceland</option>
        <option value="ind">India</option>
        <option value="idn">Indonesia</option>
        <option value="irn">Iran, Islamic Republic of</option>
        <option value="irq">Iraq</option>
        <option value="irl">Ireland</option>
        <option value="imn">Isle of Man</option>
        <option value="isr">Israel</option>
        <option value="ita">Italy</option>
        <option value="jam">Jamaica</option>
        <option value="jpn">Japan</option>
        <option value="jey">Jersey</option>
        <option value="jor">Jordan</option>
        <option value="kaz">Kazakhstan</option>
        <option value="ken">Kenya</option>
        <option value="kir">Kiribati</option>
        <option value="prk">Korea, Democratic People's Republic of</option>
        <option value="kor">Korea, Republic of</option>
        <option value="kwt">Kuwait</option>
        <option value="kgz">Kyrgyzstan</option>
        <option value="lao">Lao People's Democratic Republic</option>
        <option value="lva">Latvia</option>
        <option value="lbn">Lebanon</option>
        <option value="lso">Lesotho</option>
        <option value="lbr">Liberia</option>
        <option value="lby">Libyan Arab Jamahiriya</option>
        <option value="lie">Liechtenstein</option>
        <option value="ltu">Lithuania</option>
        <option value="lux">Luxembourg</option>
        <option value="mac">Macao</option>
        <option value="mkd">Macedonia, the former Yugoslav Republic of</option>
        <option value="mdg">Madagascar</option>
        <option value="mwi">Malawi</option>
        <option value="mys">Malaysia</option>
        <option value="mdv">Maldives</option>
        <option value="mli">Mali</option>
        <option value="mlt">Malta</option>
        <option value="mhl">Marshall Islands</option>
        <option value="mtq">Martinique</option>
        <option value="mrt">Mauritania</option>
        <option value="mus">Mauritius</option>
        <option value="myt">Mayotte</option>
        <option value="mex">Mexico</option>
        <option value="fsm">Micronesia, Federated States of</option>
        <option value="mda">Moldova, Republic of</option>
        <option value="mco">Monaco</option>
        <option value="mng">Mongolia</option>
        <option value="mne">Montenegro</option>
        <option value="msr">Montserrat</option>
        <option value="mar">Morocco</option>
        <option value="moz">Mozambique</option>
        <option value="mmr">Myanmar</option>
        <option value="nam">Namibia</option>
        <option value="nru">Nauru</option>
        <option value="npl">Nepal</option>
        <option value="nld">Netherlands</option>
        <option value="ant">Netherlands Antilles</option>
        <option value="ncl">New Caledonia</option>
        <option value="nzl">New Zealand</option>
        <option value="nic">Nicaragua</option>
        <option value="ner">Niger</option>
        <option value="nga">Nigeria</option>
        <option value="niu">Niue</option>
        <option value="nfk">Norfolk Island</option>
        <option value="mnp">Northern Mariana Islands</option>
        <option value="nor">Norway</option>
        <option value="omn">Oman</option>
        <option value="pak">Pakistan</option>
        <option value="plw">Palau</option>
        <option value="pse">Palestinian Territory, Occupied</option>
        <option value="pan">Panama</option>
        <option value="png">Papua New Guinea</option>
        <option value="pry">Paraguay</option>
        <option value="per">Peru</option>
        <option value="phl">Philippines</option>
        <option value="pcn">Pitcairn</option>
        <option value="pol">Poland</option>
        <option value="prt">Portugal</option>
        <option value="pri">Puerto Rico</option>
        <option value="qat">Qatar</option>
        <option value="reu">Reunion</option>
        <option value="rou">Romania</option>
        <option value="rus">Russian Federation</option>
        <option value="rwa">Rwanda</option>
        <option value="blm">Saint Barthelemy</option>
        <option value="shn">Saint Helena</option>
        <option value="kna">Saint Kitts and Nevis</option>
        <option value="lca">Saint Lucia</option>
        <option value="maf">Saint Martin (French part)</option>
        <option value="spm">Saint Pierre and Miquelon</option>
        <option value="vct">Saint Vincent and the Grenadines</option>
        <option value="wsm">Samoa</option>
        <option value="smr">San Marino</option>
        <option value="stp">Sao Tome and Principe</option>
        <option value="sau">Saudi Arabia</option>
        <option value="sen">Senegal</option>
        <option value="srb">Serbia</option>
        <option value="syc">Seychelles</option>
        <option value="sle">Sierra Leone</option>
        <option value="sgp">Singapore</option>
        <option value="svk">Slovakia</option>
        <option value="svn">Slovenia</option>
        <option value="slb">Solomon Islands</option>
        <option value="som">Somalia</option>
        <option value="zaf">South Africa</option>
        <option value="sgs">South Georgia and the South Sandwich Islands</option>
        <option value="esp">Spain</option>
        <option value="lka">Sri Lanka</option>
        <option value="sdn">Sudan</option>
        <option value="sur">Suriname</option>
        <option value="sjm">Svalbard and Jan Mayen</option>
        <option value="swz">Swaziland</option>
        <option value="swe">Sweden</option>
        <option value="che">Switzerland</option>
        <option value="syr">Syrian Arab Republic</option>
        <option value="twn">Taiwan, Province of China</option>
        <option value="tjk">Tajikistan</option>
        <option value="tza">Tanzania, United Republic of</option>
        <option value="tha">Thailand</option>
        <option value="tls">Timor-Leste</option>
        <option value="tgo">Togo</option>
        <option value="tkl">Tokelau</option>
        <option value="ton">Tonga</option>
        <option value="tto">Trinidad and Tobago</option>
        <option value="tun">Tunisia</option>
        <option value="tur">Turkey</option>
        <option value="tkm">Turkmenistan</option>
        <option value="tca">Turks and Caicos Islands</option>
        <option value="tuv">Tuvalu</option>
        <option value="uga">Uganda</option>
        <option value="ukr">Ukraine</option>
        <option value="are">United Arab Emirates</option>
        <option value="gbr">United Kingdom</option>
        <option value="usa" selected="selected">United States</option>
        <option value="umi">United States Minor Outlying Islands</option>
        <option value="ury">Uruguay</option>
        <option value="uzb">Uzbekistan</option>
        <option value="vut">Vanuatu</option>
        <option value="ven">Venezuela</option>
        <option value="vnm">Viet Nam</option>
        <option value="vgb">Virgin Islands, British</option>
        <option value="vir">Virgin Islands, U.S.</option>
        <option value="wlf">Wallis and Futuna</option>
        <option value="esh">Western Sahara</option>
        <option value="yem">Yemen</option>
        <option value="zmb">Zambia</option>
        <option value="zwe">Zimbabwe</option>


    </select></div>



    <div style="clear:both;"></div></div>

    </div>


    </div>

    </div>
    </div>
</div>
@endsection