<?php

class Controller_Patient_Info extends Controller_base
{

    public function action_personal()
    {

    	
        //If input is for add new patient then..
        if (Input::post() && (Input::get('add')==1)) {

            $patient = Model_Patientinfo::forge();
            $view = 'Error';
            
            $checkForDuplicate = Model_Patientinfo::query()
											            ->where('firstName', Input::post('firstName'))
											            ->where('lastName', Input::post('lastName'))
											            ->where('date_of_birth',Input::post('date_of_birth'))
											            ->where('gender',Input::post('gender'))
											            ->where('postal_code',Input::post('postal_code'))
											            ->get();

            if(!empty($checkForDuplicate)){
                $view = "Patient Already Exist.";
            }

            if (empty($checkForDuplicate)) {

			    ////////////////FIle upload start ///////////////////////////////////
            	// Custom configuration for this upload
			    $config = array(
			        'path' => DOCROOT.DS.'patient_photos/',
			        'randomize' => false,
			        'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
			    );
                
                Upload::process($config);
			    

			    // if a valid file is passed than the fucntion will save, or if its not empty
			    if (Upload::is_valid())
			    {
			        // save them according to the config
			        Upload::save();

			       //if you want to save to tha database lets grab the file name
			        $value = Upload::get_files();  
			        $patient->imgUrl = $value[0]['saved_as'];
			     } 

			    ////////////////FIle upload End ///////////////////////////////////


                $patient->imagefile = Input::post("imagefile");
                $patient->firstName = Input::post("firstName");
                $patient->middleName = Input::post("middleName");
                $patient->lastName = Input::post("lastName");
                $patient->date_of_birth = Input::post("date_of_birth");
                $patient->gender = Input::post("gender");
                $patient->address_line = Input::post("address_line");
                $patient->city = Input::post("city");
                $patient->state = Input::post("state");
                $patient->postal_code = Input::post("postal_code");
                $patient->email = Input::post("email");
                $patient->cell_phone = Input::post("cell_phone");
                $patient->home_phone = Input::post("home_phone");
                $patient->work_phone = Input::post("work_phone");
                $patient->SSN = Input::post("SSN");
                $patient->race = Input::post("race");
                $patient->ethinicity = Input::post("ethinicity");
                $patient->language = Input::post("language");
                $patient->maritial_status = Input::post("maritial_status");
                $patient->occupation = Input::post("occupation");
                $patient->employer = Input::post("employer");
                $patient->employer_address_line = Input::post("employer_address_line");
                $patient->employer_city = Input::post("employer_city");
                $patient->employer_state = Input::post("employer_state");
                $patient->employer_postal_code = Input::post("employer_postal_code");
                $patient->employer_phone = Input::post("employer_phone");

                if ($patient->save()) {

                    $view = "New Patient Added successfully !";
                    return new Response($view);
                } else {
                    
                    $view ="Error : There is a problem with Input. Please try again.";
                    return new Response($view);
                }


            }

            return new Response($view);
        }

        //If ajax request then only send view without template
        if (Input::is_ajax()) {
            return new Response(View::forge('patient/info/personal'));
        }


        //$data["subnav"] = array('personal'=> 'active' );
        $this->template->title = 'Patient info &raquo; Personal';
        $this->template->content = View::forge('patient/info/personal');
    }

    public function action_spouce()
    {
        $data["subnav"] = array('spouce' => 'active');
        $this->template->title = 'Patient info &raquo; Spouce';
        $this->template->content = View::forge('patient/info/spouce', $data);
    }

    public function action_emergency_contact()
    {
        $data["subnav"] = array('emergency_contact' => 'active');
        $this->template->title = 'Patient info &raquo; Emergency contact';
        $this->template->content = View::forge('patient/info/emergency_contact', $data);
    }

    public function action_insurance()
    {
        $data["subnav"] = array('insurance' => 'active');
        $this->template->title = 'Patient info &raquo; Insurance';
        $this->template->content = View::forge('patient/info/insurance', $data);
    }

    public function action_financial_responsibility()
    {
        $data["subnav"] = array('financial_responsibility' => 'active');
        $this->template->title = 'Patient info &raquo; Financial responsibility';
        $this->template->content = View::forge('patient/info/financial_responsibility', $data);
    }

    public function action_pharmacy_info()
    {
        $data["subnav"] = array('pharmacy_info' => 'active');
        $this->template->title = 'Patient info &raquo; Pharmacy info';
        $this->template->content = View::forge('patient/info/pharmacy_info', $data);
    }

    public function action_health()
    {
        $data["subnav"] = array('health' => 'active');
        $this->template->title = 'Patient info &raquo; Health';
        $this->template->content = View::forge('patient/info/health', $data);
    }

    public function action_allergies()
    {
        $data["subnav"] = array('allergies' => 'active');
        $this->template->title = 'Patient info &raquo; Allergies';
        $this->template->content = View::forge('patient/info/allergies', $data);
    }

    public function action_medications()
    {
        $data["subnav"] = array('medications' => 'active');
        $this->template->title = 'Patient info &raquo; Medications';
        $this->template->content = View::forge('patient/info/medications', $data);
    }

    public function action_past_sergical_history()
    {
        $data["subnav"] = array('past_sergical_history' => 'active');
        $this->template->title = 'Patient info &raquo; Past sergical history';
        $this->template->content = View::forge('patient/info/past_sergical_history', $data);
    }

    public function action_height_and_weight()
    {
        $data["subnav"] = array('height_and_weight' => 'active');
        $this->template->title = 'Patient info &raquo; Height and weight';
        $this->template->content = View::forge('patient/info/height_and_weight', $data);
    }

    public function action_social_history()
    {
        $data["subnav"] = array('social_history' => 'active');
        $this->template->title = 'Patient info &raquo; Social history';
        $this->template->content = View::forge('patient/info/social_history', $data);
    }

    public function action_family_medical_history()
    {
        $data["subnav"] = array('family_medical_history' => 'active');
        $this->template->title = 'Patient info &raquo; Family medical history';
        $this->template->content = View::forge('patient/info/family_medical_history', $data);
    }

    public function action_personal_review_of_systems()
    {
        $data["subnav"] = array('personal_review_of_systems' => 'active');
        $this->template->title = 'Patient info &raquo; Personal review of systems';
        $this->template->content = View::forge('patient/info/personal_review_of_systems', $data);
    }

    public function action_gynecological_review()
    {
        $data["subnav"] = array('gynecological_review' => 'active');
        $this->template->title = 'Patient info &raquo; Gynecological review';
        $this->template->content = View::forge('patient/info/gynecological_review', $data);
    }

    public function action_authorization()
    {
        $data["subnav"] = array('authorization' => 'active');
        $this->template->title = 'Patient info &raquo; Authorization';
        $this->template->content = View::forge('patient/info/authorization', $data);
    }

    public function action_additonal_comments()
    {
        $data["subnav"] = array('additonal_comments' => 'active');
        $this->template->title = 'Patient info &raquo; Additonal comments';
        $this->template->content = View::forge('patient/info/additonal_comments', $data);
    }

}
