<?php
/**
 * Sub method class
 *
 * @package Mofsy/WC_Robokassa/Submethods
 */
defined('ABSPATH') || exit;

class Wc_Robokassa_Bank_Bank_Inteza_Method extends Wc_Robokassa_Sub_Method
{
	/**
	 * Wc_Robokassa_Bank_Bank_Inteza_Method constructor
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
		$this->id = $this->get_parent_id() . '_bank_bank_inteza';

		/**
		 * Alias currency for child method
		 */
		$this->set_current_currency_alias('BankInteza');

		/**
		 * Admin title
		 */
		$this->title = __('Banca Intesa', 'wc-robokassa');

		/**
		 * Псевдо конструктор
		 */
		$this->init_child_method();
	}
}