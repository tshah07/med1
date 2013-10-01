<!--<ul class="nav nav-pills">-->
<!--	<li class='--><?php //echo Arr::get($subnav, "personal" ); ?><!--'>--><?php //echo Html::anchor('patient\info/personal','Personal');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "spouce" ); ?><!--'>--><?php //echo Html::anchor('patient\info/spouce','Spouce');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "emergency_contact" ); ?><!--'>--><?php //echo Html::anchor('patient\info/emergency_contact','Emergency contact');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "insurance" ); ?><!--'>--><?php //echo Html::anchor('patient\info/insurance','Insurance');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "financial_responsibility" ); ?><!--'>--><?php //echo Html::anchor('patient\info/financial_responsibility','Financial responsibility');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "pharmacy_info" ); ?><!--'>--><?php //echo Html::anchor('patient\info/pharmacy_info','Pharmacy info');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "health" ); ?><!--'>--><?php //echo Html::anchor('patient\info/health','Health');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "allergies" ); ?><!--'>--><?php //echo Html::anchor('patient\info/allergies','Allergies');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "medications" ); ?><!--'>--><?php //echo Html::anchor('patient\info/medications','Medications');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "past_sergical_history" ); ?><!--'>--><?php //echo Html::anchor('patient\info/past_sergical_history','Past sergical history');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "height_and_weight" ); ?><!--'>--><?php //echo Html::anchor('patient\info/height_and_weight','Height and weight');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "social_history" ); ?><!--'>--><?php //echo Html::anchor('patient\info/social_history','Social history');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "family_medical_history" ); ?><!--'>--><?php //echo Html::anchor('patient\info/family_medical_history','Family medical history');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "personal_review_of_systems" ); ?><!--'>--><?php //echo Html::anchor('patient\info/personal_review_of_systems','Personal review of systems');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "gynecological_review" ); ?><!--'>--><?php //echo Html::anchor('patient\info/gynecological_review','Gynecological review');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "authorization" ); ?><!--'>--><?php //echo Html::anchor('patient\info/authorization','Authorization');?><!--</li>-->
<!--	<li class='--><?php //echo Arr::get($subnav, "additonal_comments" ); ?><!--'>--><?php //echo Html::anchor('patient\info/additonal_comments','Additonal comments');?><!--</li>-->
<!---->
<!--</ul>-->


<!-- Start body-->
<script> 
        // prepare the form when the DOM is ready 
        $(document).ready(function() { 

            

            // bind form using ajaxForm 
            $('#basic_info').ajaxForm({ 
                target : "#form_display",
                beforeSubmit : showLoader,
                success: function(responseText, statusText, xhr, $form) { 
                    $('#form_display').fadeIn('slow');
                    $.gritter.add({
                                    // (string | mandatory) the heading of the notification
                                    title: 'Notification',
                                    // (string | mandatory) the text inside the notification
                                    text: responseText,
                                    sticky: true, 
                                });
                } 
            }); 

             // pre-submit callback 
        function showLoader(formData, jqForm, options) { 
            
            $("#form_display").html('<div class="box  box-color box-bordered box-condensed nopadding"><div class="box-title"><h3> Basic Info </h3></div><div class="box-content"><div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div></div>');
            return true; 
        } 
        });
</script> 

<div id="form_display">
<div class="box  box-color box-bordered box-condensed nopadding">
    <div class="box-title">
        <h3> Basic Info </h3>
    </div>
    <div class="box-content" >
        <form id="basic_info" action="<?php echo Uri::create('patient/info/personal');?>?add=1" method="post" class="form-inline form-horizontal form-striped form-validate">
            <div class="row-fluid">

                <div class="span6">
                    <div class="control-group">
                        <label for"imageFile" class="control-label">Photo</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="imagefile">
                                <div class="fileupload-new thumbnail" style="width: 100px; height: 80px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 80px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name=""></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>


                        <label for="firstName" class="control-label">First Name *</label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="firstName" data-rule-required="true" data-rule-minlength="2">
                        </div>

                        <label for="middleName" class="control-label">Middle Name </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="middleName">
                        </div>

                        <label for="lastName" class="control-label">Last Name *</label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="lastName" data-rule-required="true" data-rule-minlength="2">
                        </div>
                    </div>


                    <div class="control-group">
                        <label for="date_of_birth" class="control-label">Date Of Birth *</label>

                        <div class="controls">
                            <input type="text" class="input-small datepick" name="date_of_birth" data-rule-required="true" data-rule-minlength="8">
                        </div>


                        <label for="gender" class="control-label">Gender *</label>

                        <div class="controls">
                            <select class="input-medium select2" name="gender" data-rule-required="true" >
                                <option value="null"></option>
                                <option value="male">Male</option>
                                <option value="male">Female</option>
                                <option value="dont_want_to_specify">I don't want to specify</option>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label for="address_line" class="control-label">Address Line </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="address_line">
                        </div>

                        <label for="city" class="control-label">City </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="city">
                        </div>

                        <label for="state" class="control-label">State </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="state">
                        </div>

                        <label for="postal_code" class="control-label">Postal Code *</label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="postal_code" data-rule-required="true" data-rule-minlength="4">
                        </div>
                    </div>


                </div>


                <!--           Second Coloumn start  -->
                <div class="span6">
                    <div class="control-group">
                        <label for="email" class="control-label">Email </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="email">
                        </div>

                        <label for="cell_phone" class="control-label">Phone *</label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="cell_phone" data-rule-required="true" data-rule-minlength="8" data-rule-number="true">
                        </div>

                        <label for="home_phone" class="control-label">Home Phone </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="home_phone">
                        </div>

                        <label for="work_phone" class="control-label">Work Phone </label>

                        <div class="controls">
                            <input type="text" class="input-medium" name="work_phone">
                        </div>
                    </div>


                    <div class="control-group">

                        <div><label class="control-label" id="label_SSN" for="form_SSN">SSN</label></div>
                        <div class='controls'><input class="input-medium" type="text" id="form_SSN" name="SSN"
                                                     value=""/></div>

                        <div><label class="control-label" id="label_race" for="form_race">Race</label></div>
                        <div class='controls'><input class="input-medium" type="text" id="form_race" name="race"
                                                     value=""/></div>

                        <div><label class="control-label" id="label_ethinicity" for="form_ethinicity">Ethinicity</label>
                        </div>
                        <div class='controls'><input class="input-medium" type="text" id="form_ethinicity"
                                                     name="ethinicity" value=""/></div>

                        <div><label class="control-label" id="label_language" for="form_language">Language</label></div>
                        <div class='controls'><input class="input-medium " type="text" id="form_language" name="language"
                                                     value=""/></div>

                        <div><label class="control-label" id="label_maritial_status" for="form_maritial_status">Maritial Status</label>
                        </div>
                        <div class='controls'>

                            <select class="input-medium select2" name="maritial_status">
                                <option value="null"></option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="dont_want_to_specify">I don't want to specify</option>
                            </select>
                        
                        </div>

                    </div>

                    <div class="control-group">

                        <div><label class="control-label" id="label_occupation" for="form_occupation">Occupation</label>
                        </div>
                        <div class='controls'><input class="input-medium" type="text" id="form_occupation"
                                                     name="occupation" value=""/></div>

                        <div><label class="control-label" id="label_employer" for="form_employer">Employer</label></div>
                        <div class='controls'><input class="input-medium" type="text" id="form_employer" name="employer"
                                                     value=""/></div>

                        <div><label class="control-label" id="label_employer_address_line"
                                    for="form_employer_address_line">Employer Address Line</label></div>
                        <div class='controls'><input class="input-medium" type="text" id="form_employer_address_line"
                                                     name="employer_address_line" value=""/></div>

                        <div><label class="control-label" id="label_employer_city" for="form_employer_city">Employer city</label>
                        </div>
                        <div class='controls'><input class="input-medium" type="text" id="form_employer_city"
                                                     name="employer_city" value=""/></div>

                        <div><label class="control-label" id="label_employer_state" for="form_employer_state">Employer State</label>
                        </div>
                        <div class='controls'><input class="input-medium" type="text" id="form_employer_state"
                                                     name="employer_state" value=""/></div>

                        <div><label class="control-label" id="label_employer_postal_code"
                                    for="form_employer_postal_code">Employer Postal Code</label></div>
                        <div class='controls'><input class="input-medium" type="text" id="form_employer_postal_code"
                                                     name="employer_postal_code" value=""/></div>

                        <div><label class="control-label" id="label_employer_phone" for="form_employer_phone">Employer Phone</label>
                        </div>
                        <div class='controls'><input class="input-medium" type="text" id="form_employer_phone"
                                                     name="employer_phone" value=""/></div>


                    </div>

                    


                </div>

                <!--            Second Coloumn End  -->

                
                
            </div>
            <div class="form-actions">
                    <button data-loading-text="Saving..." type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
        </form>
    </div>
</div>



</div>