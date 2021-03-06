<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
class Report extends CIUIS_Controller {

	public

	function index() {
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb( 'Dashboard', 'panel' );
		$this->breadcrumb->add_crumb( 'Reports', 'report' );
		$this->breadcrumb->add_crumb( 'All Reports' );
		$data[ 'title' ] = 'Ciuis™ CRM Reports';
		$data[ 'tbs' ] = $this->db->count_all( 'notifications', array( 'markread' => ( '0' ) ) );
		$data[ 'bkt' ] = $this->Report_Model->bkt();
		$data[ 'bht' ] = $this->Report_Model->bht();
		$data[ 'ycr' ] = $this->Report_Model->ycr();
		$data[ 'oyc' ] = $this->Report_Model->oyc();
		$data[ 'oft' ] = $this->Report_Model->oft();
		$data[ 'tef' ] = $this->Report_Model->tef();
		$data[ 'vgf' ] = $this->Report_Model->vgf();
		$data[ 'tbs' ] = $this->Report_Model->tbs();
		$data[ 'akt' ] = $this->Report_Model->akt();
		$data[ 'oak' ] = $this->Report_Model->oak();
		$data[ 'tfa' ] = $this->Report_Model->tfa();
		$data[ 'yms' ] = $this->Report_Model->yms();
		$data[ 'ofy' ] = ( $data[ 'tfa' ] > 0 ? number_format( ( $data[ 'tef' ] * 100 ) / $data[ 'tfa' ] ) : 0 );
		$data[ 'weekly_sales_chart_report' ] = json_encode( $this->Report_Model->weekly_sales_chart_report() );
		$data[ 'monthly_sales_graph' ] = $this->Report_Model->monthly_sales_graph();
		$data[ 'monthly_expense_graph' ] = $this->Report_Model->a1();
		$data[ 'invoice_chart_by_status' ] = json_encode( $this->Report_Model->invoice_chart_by_status() );
		$data[ 'top_selling_staff_chart' ] = json_encode( $this->Report_Model->top_selling_staff_chart() );
		$data[ 'incomings_vs_outgoins' ] = json_encode( $this->Report_Model->incomings_vs_outgoins() );
		$data[ 'expenses_by_categories' ] = json_encode( $this->Report_Model->expenses_by_categories() );
		$data[ 'events' ] = $this->Events_Model->get_all_events();
		$data[ 'overdueinvoices' ] = $this->Invoices_Model->overdueinvoices();
		$data[ 'todaypayments' ] = $this->Payments_Model->todaypayments();
		$data[ 'logs' ] = $this->Logs_Model->panel_last_logs();
		$data[ 'newnotification' ] = $this->Notifications_Model->newnotification();
		$data[ 'readnotification' ] = $this->Notifications_Model->readnotification();
		$data[ 'notifications' ] = $this->Notifications_Model->get_all_notifications();
		$data[ 'settings' ] = $this->Settings_Model->get_settings_ciuis();
		$this->load->view( get_template_directory() . '/crm/report/index', $data );
	}
	public

	function customer_monthly_increase_chart( $month ) {
		echo json_encode( $this->Report_Model->customer_monthly_increase_chart( $month ) );
	}

	function test() {
		echo json_encode( $this->Report_Model->a1() );
	}
}