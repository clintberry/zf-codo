<?php
	class QQN {
		/**
		 * @return QQNodeModel_Graphic
		 */
		static public function Model_Graphic() {
			return new QQNodeModel_Graphic('graphic', null, null);
		}
		/**
		 * @return QQNodeModel_Login
		 */
		static public function Model_Login() {
			return new QQNodeModel_Login('login', null, null);
		}
		/**
		 * @return QQNodeModel_Order
		 */
		static public function Model_Order() {
			return new QQNodeModel_Order('order', null, null);
		}
		/**
		 * @return QQNodeModel_OrderItem
		 */
		static public function Model_OrderItem() {
			return new QQNodeModel_OrderItem('order_item', null, null);
		}
		/**
		 * @return QQNodeModel_Product
		 */
		static public function Model_Product() {
			return new QQNodeModel_Product('product', null, null);
		}
	}
?>