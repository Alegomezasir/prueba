<?php

namespace WPDataAccess\Plugin_Table_Models {

	use WPDataAccess\WPDA;

	class WPDA_App_Container_Model extends WPDA_Plugin_Table_Base_Model {

		const BASE_TABLE_NAME = 'wpda_app_container';

		public static function select( $app_id, $cnt_seq_nr ) {

			global $wpdb;
			return $wpdb->get_results(
				$wpdb->prepare(
					'SELECT * FROM `%1s` WHERE app_id = %d and cnt_seq_nr = %d order by cnt_id', // phpcs:ignore WordPress.DB.PreparedSQLPlaceholders
					array(
						WPDA::remove_backticks( self::get_base_table_name() ),
						$app_id,
						$cnt_seq_nr,
					)
				), // db call ok; no-cache ok.
				'ARRAY_A'
			); // phpcs:ignore Standard.Category.SniffName.ErrorCode

		}

		public static function get_container( $cnt_id ) {

			global $wpdb;
			return $wpdb->get_results(
				$wpdb->prepare(
					'SELECT * FROM `%1s` WHERE cnt_id = %d', // phpcs:ignore WordPress.DB.PreparedSQLPlaceholders
					array(
						WPDA::remove_backticks( self::get_base_table_name() ),
						$cnt_id,
					)
				), // db call ok; no-cache ok.
				'ARRAY_A'
			); // phpcs:ignore Standard.Category.SniffName.ErrorCode

		}

		public static function create(
			$app_id,
			$app_dbs,
			$app_tbl,
			$app_cls,
			$cnt_title,
			$cnt_seq_nr,
			$cnt_table,
			$cnt_relation = null
		) {

			global $wpdb;
			if ( 1 === $wpdb->insert(
					static::get_base_table_name(),
					array(
						'cnt_dbs'      => $app_dbs,
						'cnt_tbl'      => $app_tbl,
						'cnt_cls'      => $app_cls,
						'cnt_title'    => $cnt_title,
						'app_id'       => $app_id,
						'cnt_seq_nr'   => $cnt_seq_nr,
						'cnt_table'    => $cnt_table,
						'cnt_relation' => $cnt_relation,
					)
				)
			) {
				// Return new container
				$cnt_id = $wpdb->insert_id;
				return array(
					'cnt_id' => $wpdb->insert_id,
					'msg'    => '',
				);
			} else {
				return array(
					'cnt_id' => false,
					'msg'    => $wpdb->last_error,
				);
			}

		}

		public static function update(
			$app_id,
			$app_cnt,
			$app_dbs,
			$app_tbl,
			$app_cls,
			$cnt_title,
			$cnt_seq_nr,
			$cnt_table,
			$cnt_relation = null
		) {

			global $wpdb;
			$wpdb->update(
				static::get_base_table_name(),
				array(
					'cnt_dbs'      => $app_dbs,
					'cnt_tbl'      => $app_tbl,
					'cnt_cls'      => $app_cls,
					'cnt_title'    => $cnt_title,
					'cnt_seq_nr'   => $cnt_seq_nr,
					'cnt_table'    => $cnt_table,
					'cnt_relation' => $cnt_relation,
				),
				array(
					'app_id'       => $app_id,
					'cnt_id'       => $app_cnt,
				)
			);

			return $wpdb->last_error;

		}

		public static function delete( $app_id ) {

			global $wpdb;
			return $wpdb->delete(
				static::get_base_table_name(),
				array(
					'app_id' => $app_id,
				)
			);

		}

		public static function delete_container( $cnt_id ) {

			global $wpdb;
			return $wpdb->delete(
				static::get_base_table_name(),
				array(
					'cnt_id' => $cnt_id,
				)
			);

		}

		public static function update_master(
			$app_id,
			$app_dbs,
			$app_tbl,
			$app_cls
		) {

			global $wpdb;
			$wpdb->update(
				static::get_base_table_name(),
				array(
					'cnt_dbs' => $app_dbs,
					'cnt_tbl' => $app_tbl,
					'cnt_cls' => $app_cls,
				),
				array(
					'app_id'     => $app_id,
					'cnt_seq_nr' => 0,
				)
			);

			return $wpdb->last_error;

		}

		public static function update_table_settings(
			$cnt_id,
			$cnt_table_settings
		) {

			global $wpdb;
			$wpdb->update(
				static::get_base_table_name(),
				array(
					'cnt_table' => $cnt_table_settings,
				),
				array(
					'cnt_id' => $cnt_id,
				)
			);

			return $wpdb->last_error;

		}

		public static function update_form_settings(
			$cnt_id,
			$cnt_form_settings
		) {

			global $wpdb;
			$wpdb->update(
				static::get_base_table_name(),
				array(
					'cnt_form' => $cnt_form_settings,
				),
				array(
					'cnt_id' => $cnt_id,
				)
			);

			return $wpdb->last_error;

		}

	}

}