<?php
/**
 * Sub method class
 *
 * @package Mofsy/WC_Robokassa/Submethods
 */
defined('ABSPATH') || exit;

class Wc_Robokassa_Bankcard_Bank_Card_Method extends Wc_Robokassa_Sub_Method
{
	/**
	 * Wc_Robokassa_Bankcard_Bank_Card_Method constructor
	 */
	public function __construct()
	{
		/**
		 * Main constructor
		 */
		parent::__construct();

		/**
		 * Child method id
		 */
		$this->id = $this->get_parent_id() . '_bank_card';

		/**
		 * Alias currency for child method
		 */
		$this->set_current_currency_alias('BankCard');

		/**
		 * Admin title
		 */
		$this->title = __('Bank Card', 'wc-robokassa');

		/**
		 * Initializing child method
		 */
		$this->init_child_method();
	}
}