<?php
/**
 * Sub method class
 *
 * @package Mofsy/WC_Robokassa/Submethods
 */
defined('ABSPATH') || exit;

class Wc_Robokassa_Emoney_Qiwi_Wallet_Method extends Wc_Robokassa_Sub_Method
{
	/**
	 * Wc_Robokassa_Emoney_Qiwi_Wallet_Method constructor
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
		$this->id = $this->get_parent_id() . '_emoney_qiwi_wallet';

		/**
		 * Alias currency for child method
		 */
		$this->set_current_currency_alias('QiwiWallet');

		/**
		 * Admin title
		 */
		$this->title = __('QIWI Wallet', 'wc-robokassa');

		/**
		 * Псевдо конструктор
		 */
		$this->init_child_method();
	}
}