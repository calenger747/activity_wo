<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends CI_Controller {

    private function load($title = '', $datapath = '')
	{
		$page = array(
			"head" => $this->load->view('documentation/template/head', array("title" => $title), true),
			"header" => $this->load->view('documentation/template/header', false, true),
			"sidebar" => $this->load->view('documentation/template/sidebar', false, true),
			"main_js" => $this->load->view('documentation/template/main_js', false, true),
			"footer" => $this->load->view('documentation/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Dashboard", $path) ,
            "content" => $this
            ->load
            ->view('documentation/index', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function layout_blank()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Blank", $path) ,
            "content" => $this
            ->load
            ->view('documentation/layout-blank', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function layout_one_column()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout One Column", $path) ,
            "content" => $this
            ->load
            ->view('documentation/layout-one-column', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function layout_two_column()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Two Column", $path) ,
            "content" => $this
            ->load
            ->view('documentation/layout-two-column', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function layout_compact_nav()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Compact Nav", $path)
           );

        $this
        ->load
        ->view('documentation/layout-compact-nav', $data);
	}

	public function layout_vertical()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Vertical", $path)
           );

        $this
        ->load
        ->view('documentation/layout-vertical', $data);
	}

	public function layout_horizontal()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Horizontal", $path)
           );

        $this
        ->load
        ->view('documentation/layout-horizontal', $data);
	}

	public function layout_boxed()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Boxed", $path)
           );

        $this
        ->load
        ->view('documentation/layout-boxed', $data);
	}

	public function layout_wide()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Wide", $path)
           );

        $this
        ->load
        ->view('documentation/layout-wide', $data);
	}

	public function layout_fixed_header()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Fixed Header", $path)
           );

        $this
        ->load
        ->view('documentation/layout-fixed-header', $data);
	}

	public function layout_fixed_sidebar()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Layout Fixed Sidebar", $path)
           );

        $this
        ->load
        ->view('documentation/layout-fixed-sidebar', $data);
	}

	public function email_inbox()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Email Inbox", $path) ,
            "content" => $this
            ->load
            ->view('documentation/email-inbox', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function email_read()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Email Read", $path) ,
            "content" => $this
            ->load
            ->view('documentation/email-read', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function email_compose()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Email Compose", $path) ,
            "content" => $this
            ->load
            ->view('documentation/email-compose', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function app_profile()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Profile", $path) ,
            "content" => $this
            ->load
            ->view('documentation/app-profile', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function app_calender()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Calendar", $path) ,
            "content" => $this
            ->load
            ->view('documentation/app-calendar', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function chart_flot()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Chart Flot", $path) ,
            "content" => $this
            ->load
            ->view('documentation/chart-flot', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function chart_morris()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Chart Morris", $path) ,
            "content" => $this
            ->load
            ->view('documentation/chart-morris', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function chart_chartjs()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Chart JS", $path) ,
            "content" => $this
            ->load
            ->view('documentation/chart-chartjs', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function chart_chartist()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Chart Chartist", $path) ,
            "content" => $this
            ->load
            ->view('documentation/chart-chartist', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function chart_sparkline()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Chart Sparkline", $path) ,
            "content" => $this
            ->load
            ->view('documentation/chart-sparkline', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function chart_peity()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Chart Peity", $path) ,
            "content" => $this
            ->load
            ->view('documentation/chart-peity', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function widgets()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Widgets", $path) ,
            "content" => $this
            ->load
            ->view('documentation/widgets', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function table_basic()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Table Basic", $path) ,
            "content" => $this
            ->load
            ->view('documentation/table-basic', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function table_datatable()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Table Datatable", $path) ,
            "content" => $this
            ->load
            ->view('documentation/table-datatable', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_accordion()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Accordion", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-accordion', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_alert()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Alert", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-alert', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_badge()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Badge", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-badge', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_button()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Button", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-button', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_button_group()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Button Group", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-button-group', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_cards()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Cards", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-cards', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_carousel()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Carousel", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-carousel', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_dropdown()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Dropdown", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-dropdown', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_list_group()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui List Group", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-list-group', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_media_object()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Media Object", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-media-object', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_modal()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Modal", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-modal', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_pagination()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Pagination", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-pagination', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_popover()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Pupover", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-popover', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_progressbar()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Progressbar", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-progressbar', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_tab()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Tab", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-tab', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function ui_typography()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Ui Typography", $path) ,
            "content" => $this
            ->load
            ->view('documentation/ui-typography', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function uc_nestedable()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Uc Nestedable", $path) ,
            "content" => $this
            ->load
            ->view('documentation/uc-nestedable', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function uc_noui_slider()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Uc Noui Slider", $path) ,
            "content" => $this
            ->load
            ->view('documentation/uc-noui-slider', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function uc_sweetalert()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Uc Sweet Alert", $path) ,
            "content" => $this
            ->load
            ->view('documentation/uc-sweet-alert', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function uc_toastr()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Uc Toastr", $path) ,
            "content" => $this
            ->load
            ->view('documentation/uc-toastr', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function form_basic()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Form Basic", $path) ,
            "content" => $this
            ->load
            ->view('documentation/form-basic', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function form_validation()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Form Validation", $path) ,
            "content" => $this
            ->load
            ->view('documentation/form-validation', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function form_step()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Form Step", $path) ,
            "content" => $this
            ->load
            ->view('documentation/form-step', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function form_editor()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Form Editor", $path) ,
            "content" => $this
            ->load
            ->view('documentation/form-editor', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function form_picker()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Form Picker", $path) ,
            "content" => $this
            ->load
            ->view('documentation/form-picker', '', true)
           );

        $this
        ->load
        ->view('documentation/template/default_template', $data);
	}

	public function page_login()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Page Login", $path)
           );

        $this
        ->load
        ->view('documentation/page-login', $data);
	}

	public function page_register()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Page Register", $path)
           );

        $this
        ->load
        ->view('documentation/page-register', $data);
	}

	public function page_lock()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Page Lock", $path)
           );

        $this
        ->load
        ->view('documentation/page-lock', $data);
	}

	public function page_error_404()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Error 404", $path)
           );

        $this
        ->load
        ->view('documentation/page-error-404', $data);
	}

	public function page_error_403()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Error 403", $path)
           );

        $this
        ->load
        ->view('documentation/page-error-403', $data);
	}

	public function page_error_400()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Error 400", $path)
           );

        $this
        ->load
        ->view('documentation/page-error-400', $data);
	}

	public function page_error_500()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Error 500", $path)
           );

        $this
        ->load
        ->view('documentation/page-error-500', $data);
	}

	public function page_error_503()
	{
		$path = "";
        $data = array(
            "page" => $this->load("Error 503", $path)
           );

        $this
        ->load
        ->view('documentation/page-error-503', $data);
	}
}
