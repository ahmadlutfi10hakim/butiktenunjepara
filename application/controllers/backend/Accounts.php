<?php
class Accounts extends CI_Controller{
/**
* Description of Controller
*
* 
*/  
  function __construct(){
    parent::__construct();
    error_reporting(0);
    if($this->session->userdata('access') != "1"){
      $url=base_url('login_user');
            redirect($url);
    };
    $this->load->model('backend/Accounts_model');
    $this->load->model('backend/Statement_model');
    $this->load->model('backend/Crud_model');
    $this->load->model('Site_model','site_model');
  }


     // Accounts
     public function index()
     {
      $site = $this->site_model->get_site_data()->row_array();
        $x['site_title'] = $site['site_title'];
        $x['site_favicon'] = $site['site_favicon'];
        $x['images'] = $site['images'];
    $x['title'] = 'Daftar Akun';

       // DEFINES PAGE TITLE
    

      // DEFINES NAME OF TABLE HEADING
      $data['table_name'] = 'Daftar Akun :';

      // DEFINES WHICH PAGE TO RENDER
      $data['main_view'] = 'chart_of_accounts';

      // DEFINES THE TABLE HEAD
      $data['table_heading_names_of_coloums'] = array(
       'Nama Akun',
       'Kelompok',
       'Tipe',
       'Relasi',
       'Jenis Beban',
       'Tindakan'
      );

      // DEFINES TO LOAD THE CATEGORY LIST FROM DATABSE TABLE mp_Categoty
      $this->load->model('backend/Crud_model');
      $result = $this->Crud_model->fetch_record('mp_head', NULL);
      $data['chart_list'] = $result;

      // DEFINES GO TO MAIN FOLDER FOND INDEX.PHP  AND PASS THE ARRAY OF DATA TO THIS PAGE
      

    $this->load->view('backend/menu',$x);
    $this->load->view('backend/v_daftar_akun.php',$data,$x);
    $this->load->view('backend/_partials/templatejs');
     }

     //USED TO ADD CHART OF ACCOUNT
     //Accounts/chart_of_account
     public function chart_of_account()
     {
      $site = $this->site_model->get_site_data()->row_array();
        $x['site_title'] = $site['site_title'];
        $x['site_favicon'] = $site['site_favicon'];
        $x['images'] = $site['images'];
    $x['title'] = 'Daftar Akun';

      // DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
      $this->load->model('backend/Crud_model');

      // DEFINES READ MEDICINE details FORM MEDICINE FORM
      $name = html_escape($this->input->post('name'));
      $nature = html_escape($this->input->post('nature'));
      $type = html_escape($this->input->post('type'));
      $expense_type = html_escape($this->input->post('expense_type'));

      // ASSIGN THE VALUES OF TEXTBOX TO ASSOCIATIVE ARRAY
      $args = array(
       'name' => $name,
       'nature' => $nature,
       'type' => $type,
       //'relation_id' => $relation,
       'expense_type' => ($nature == 'Expense' ? $expense_type : '-')
      );

      // CHECK WEATHER EMAIL ADLREADY EXISTS OR NOT IN THE TABLE
      $result = $this->Crud_model->check_email_address('mp_head', 'name', $name);
      if ($result == NULL)
      {
          // DEFINES CALL THE FUNCTION OF insert_data FORM Crud_model CLASS
          $result = $this->Crud_model->insert_data('mp_head', $args);
         
          if ($result == 1)
          {
            $array_msg = array(
             'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Added Successfully',
             'alert' => 'info'
            );
            $this->session->set_flashdata('status', $array_msg);
          }
         else
         {
          $array_msg = array(
           'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Cannot be added',
           'alert' => 'danger'
          );
          $this->session->set_flashdata('status', $array_msg);
         }
       }
      else
      {
         $array_msg = array(
          'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i>Sorry already exists !',
          'alert' => 'danger'
         );
         $this->session->set_flashdata('status', $array_msg);
      }
      redirect('backend/accounts');
     }

     // Accounts/delete
     function delete($args)
     {

      // DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
      $site = $this->site_model->get_site_data()->row_array();
        $x['site_title'] = $site['site_title'];
        $x['site_favicon'] = $site['site_favicon'];
        $x['images'] = $site['images'];
      $this->load->model('Crud_model');

      // DEFINES TO DELETE THE ROW FROM TABLE AGAINST ID
      $result = $this->Crud_model->delete_record('mp_head', $args);
      if ($result == 1)
      {
       $array_msg = array(
        'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i> Record removed',
        'alert' => 'info'
       );
       $this->session->set_flashdata('status', $array_msg);
      }
      else
      {
       $array_msg = array(
        'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Record cannot be changed',
        'alert' => 'danger'
       );
       $this->session->set_flashdata('status', $array_msg);
      }

      redirect('backend/accounts');

     }

     // Accounts/Edit
     function edit_charts()
     {

      // DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
      $site = $this->site_model->get_site_data()->row_array();
        $x['site_title'] = $site['site_title'];
        $x['site_favicon'] = $site['site_favicon'];
        $x['images'] = $site['images'];
      $this->load->model('backend/Crud_model');

      // RETRIEVING UPDATED VALUES FROM FORM MEDICINE FORM
      $head_id = html_escape($this->input->post('head_id'));
      $name = html_escape($this->input->post('name'));
      $edit_nature = html_escape($this->input->post('edit_nature'));
      $edit_type = html_escape($this->input->post('edit_type'));
      $relation = html_escape($this->input->post('relation'));
      $expense_type = html_escape($this->input->post('expense_type'));

      // TABLENAME AND ID FOR DATABASE Actions
      $args = array(
       'table_name' => 'mp_head',
       'id' => $head_id
      );

      
       // DEFINES IF  IMAGES IS SELECTED SO UPDATE PRIVIOUS PICTURE
       $data = array(
        'name' => $name,
        'nature' => $edit_nature,
        'type' => $edit_type,
         'expense_type' => ($edit_nature == 'Expense' ? $expense_type : '-')
       );

      // CALL THE METHOD FROM Crud_model CLASS FIRST ARG CONTAINES TABLENAME AND OTHER CONTAINS DATA
      $result = $this->Crud_model->edit_record_id($args, $data);
      if ($result == 1)
      {
       $array_msg = array(
        'msg' => '<i style="color:#fff" class="fa fa-pencil-square-o" aria-hidden="true"></i> Head editted',
        'alert' => 'info'
       );
       $this->session->set_flashdata('status', $array_msg);
      }
      else
      {
       $array_msg = array(
        'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Head cannot be editted',
        'alert' => 'danger'
       );
       $this->session->set_flashdata('status', $array_msg);
      }
      redirect('backend/accounts');
     }

     //Customer/popup
     //DEFINES A POPUP MODEL OG GIVEN PARAMETER
     function popup($page_name = '',$param = '')
     {
      $site = $this->site_model->get_site_data()->row_array();
        $x['site_title'] = $site['site_title'];
        $x['site_favicon'] = $site['site_favicon'];
        $x['images'] = $site['images'];
      $this->load->model('backend/Crud_model');

      if($page_name  == 'edit_customer_model')
      {
       $data['single_customer'] = $this->Crud_model->fetch_record_by_id('mp_customer',$param);
       //model name available in admin models folder
       $this->load->view( 'admin_models/edit_models/edit_customer_model.php',$data);
      } 
      else if($page_name  == 'add_chart_of_accounts')
      {
       //USED TO REDIRECT LINK
       $data['link'] = 'backend/Accounts/chart_of_account';

       //model name available in admin models folder
       $this->load->view( 'admin_models/add_models/add_chart_of_account_model.php',$data,$x);
      }
      else if($page_name  == 'edit_chart_of_accounts')
      {
       
        $data['head_data'] = $this->Crud_model->fetch_record_by_id('mp_head',$param );
        $this->load->view( 'admin_models/edit_models/edit_chart_of_accounts',$data);
      }  
      else if($page_name  == 'edit_customer_payment_model')
      {
       
       $data['customer_list'] = $this->Crud_model->fetch_record('mp_customer', NULL);

       $data['customer_payments'] = $this->Crud_model->fetch_record_by_id('mp_customer_payments',$param );
       
       $this->load->view( 'admin_models/edit_models/edit_customer_payment_model.php',$data);
      }
      
     }

     
}