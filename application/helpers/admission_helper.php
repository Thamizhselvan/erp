<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getCourseDetails')){
   function getCourseDetails($user_id){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
       //get data from database
       //$query = $ci->db->get_where('news',array('id'=>$user_id));
       
       // if($query->num_rows() > 0){
       //     $result = $query->row_array();
       //     return $result;
       // }else{
       //     return false;
       // }
       $options = array(
              '  '      => '--Select Course--',
              'B.Sc'    => 'B.Sc',
              'BA'  => 'BA',
              'B.Com'  => 'B.Com',
              'BBA' => 'BBA',              
            );
       return $options;
   }
   function getAdmissionMode(){
       
       $options = array(
              '  '      => '--Select Admission Mode--',
              'direct'    => 'Direct',
              'reference'  => 'Reference',                           
            );
       return $options;
   }
   function getDepartment(){
       
       $options = array(
              '  '      => '--Select Department--',
              'physics'    => 'Physics',
              'cs'  => 'Computer Science',                           
            );
       return $options;
   }
   function getCourseMedium(){
       
       $options = array(
              '  '      => '--Select Department--',
              'tamil'    => 'Tamil',
              'english'  => 'English',   
              'hindi'  => 'Hindi',   
              'telugu'  => 'Telugu',                           
            );
       return $options;
   }
   function getTitle(){
       
       $options = array(
              '  '      => '--Select Title--',
              'mr'    => 'Mr',
              'mrs'  => 'Mrs',   
              'miss'  => 'Miss',   
                                        
            );
       return $options;
   }
   function getGender(){
       
       $options = array(
              '  '      => '--Select Gender--',
              'male'    => 'Male',
              'female'  => 'Female',
              'thirunangai'  => 'Thirunangai',          
            );
       return $options;
   }
   function getMotherTongue(){
       
       $options = array(
              '  '      => '--Select Mother Tongue--',
              'tamil'    => 'Tamil',
              'english'  => 'English',   
              'hindi'  => 'Hindi',   
              'telugu'  => 'Telugu',                           
            );
       return $options;
   }
   function getNationality(){
       
       $options = array(
              '  '      => '--Select Nationality--',
              'IN'    => 'India',
              'US'  => 'United States',   
              'JA'  => 'Jappan',                                          
            );
       return $options;
   }
   function getReligion(){
       
       $options = array(
              '  '      => '--Select Religion--',
              'hindu'    => 'Hindu',
              'musilium'  => 'Musilium',   
              'christen'  => 'Christen',                                          
            );
       return $options;
   }
   function getCategory(){
       
       $options = array(
              '  '      => '--Select Category--',
              'udaiyyar'    => 'Udaiyyar',
              'vannier'  => 'Vannier',   
              'yathavar'  => 'Yathavar',                                          
            );
       return $options;
   }
   function getCaste(){
       
       $options = array(
              '  '      => '--Select Caste--',
              'bc'    => 'BC',
              'obc'  => '0BC',   
              'mbc'  => 'MBC',                                          
            );
       return $options;
   }
   function getPassoutYear(){
       
       $options = array(
              '  '      => '--Select Year--',
              '2007'    => '2007',
              '2009'    => '2009',
              '2010'    => '2010',
              '2011'    => '2011',
              '2012'    => '2012',
              '2013'    => '2013',                                          
              '2014'    => '2014',
              '2015'    => '2015',
              '2016'    => '2016',
              '2017'    => '2017',
            );
       return $options;
   }
   function getOptions(){
      $options = array(
              '  '      => '--Select Options--',
              '1'    => 'Yes',
              '0'    => 'No',              
            );
       return $options;
   }
}
