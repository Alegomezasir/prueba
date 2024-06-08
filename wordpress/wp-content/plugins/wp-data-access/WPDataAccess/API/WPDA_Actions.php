<?php

namespace WPDataAccess\API {

	use WPDataAccess\Connection\WPDADB;

	class WPDA_Actions extends WPDA_API_Core {

		public function register_rest_routes() {

			register_rest_route(
				WPDA_API::WPDA_NAMESPACE,
				'action/rename',
				array(
					'methods'             => array( 'POST' ),
					'callback'            => array( $this, 'action_rename' ),
					'permission_callback' => '__return_true',
					'args'                => array(
						'dbs'      => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Local database name or remote connection string (does not accept system schemas)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'from_tbl' => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Source table name (does not rename WordPress tables)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'to_tbl'   => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Destination table name (cannot overwrite existing table)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
					),
				)
			);

			register_rest_route(
				WPDA_API::WPDA_NAMESPACE,
				'action/copy',
				array(
					'methods'             => array( 'POST' ),
					'callback'            => array( $this, 'action_copy' ),
					'permission_callback' => '__return_true',
					'args'                => array(
						'from_dbs'  => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Source database name or remote connection string', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'to_dbs'    => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Destination database name or remote connection string', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'from_tbl'  => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Source table name', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'to_tbl'    => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Destination table name', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'copy_data' => array(
							'required'          => true,
							'type'              => 'boolean',
							'description'       => __( 'Copy data from source to destination table', 'wp-data-access' ),
							'sanitize_callback' => 'sanitize_text_field',
							'validate_callback' => 'rest_validate_request_arg',
						),
					),
				)
			);

			register_rest_route(
				WPDA_API::WPDA_NAMESPACE,
				'action/truncate',
				array(
					'methods'             => array( 'POST' ),
					'callback'            => array( $this, 'action_truncate' ),
					'permission_callback' => '__return_true',
					'args'                => array(
						'dbs' => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Local database name or remote connection string (does not accept system schemas)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'tbl' => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Source table name (does not truncate WordPress tables)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
					),
				)
			);

			register_rest_route(
				WPDA_API::WPDA_NAMESPACE,
				'action/drop',
				array(
					'methods'             => array( 'POST' ),
					'callback'            => array( $this, 'action_drop' ),
					'permission_callback' => '__return_true',
					'args'                => array(
						'dbs' => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Local database name or remote connection string (does not accept system schemas)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
						'tbl' => array(
							'required'          => true,
							'type'              => 'string',
							'description'       => __( 'Source table name (does not drop WordPress tables)', 'wp-data-access' ),
							'sanitize_callback' => function ( $param ) {
								return $this->sanitize_db_identifier( $param );
							},
							'validate_callback' => function ( $param ) {
								return $this->validate_db_identifier( $param );
							},
						),
					),
				)
			);

		}

		public function action_drop( $request ) {

			if ( ! $this->current_user_can_access( true ) ) {
				return $this->unauthorized();
			}

			if ( ! $this->current_user_token_valid( $request, true ) ) {
				return $this->invalid_nonce();
			}

			$dbs = $request->get_param( 'dbs' );
			$tbl = $request->get_param( 'tbl' );

			if (
				'' === $dbs ||
				'' === $tbl
			) {
				return $this->bad_request();
			}

			global $wpdb;
			if (
				$wpdb->dbname === $dbs &&
				in_array( $tbl, $wpdb->tables() )
			) {
				return $this->unauthorized();
			}

			$msg = $this->drop( $dbs, $tbl );
			if ( '' === $msg ) {
				return $this->WPDA_Rest_Response( __( 'Table successfully dropped', 'wp-data-access' ) );
			} else {
				return new \WP_Error( 'error', $msg, array( 'status' => 403 ) );
			}

		}

		public function action_truncate( $request ) {

			if ( ! $this->current_user_can_access( true ) ) {
				return $this->unauthorized();
			}

			if ( ! $this->current_user_token_valid( $request, true ) ) {
				return $this->invalid_nonce();
			}

			$dbs = $request->get_param( 'dbs' );
			$tbl = $request->get_param( 'tbl' );

			if (
				'' === $dbs ||
				'' === $tbl
			) {
				return $this->bad_request();
			}

			global $wpdb;
			if (
				$wpdb->dbname === $dbs &&
				in_array( $tbl, $wpdb->tables() )
			) {
				return $this->unauthorized();
			}

			$msg = $this->truncate( $dbs, $tbl );
			if ( '' === $msg ) {
				return $this->WPDA_Rest_Response( __( 'Table successfully truncated', 'wp-data-access' ) );
			} else {
				return new \WP_Error( 'error', $msg, array( 'status' => 403 ) );
			}

		}

		public function action_copy( $request ) {

			if ( ! $this->current_user_can_access( true ) ) {
				return $this->unauthorized();
			}

			if ( ! $this->current_user_token_valid( $request, true ) ) {
				return $this->invalid_nonce();
			}

			$from_dbs  = $request->get_param( 'from_dbs' );
			$to_dbs    = $request->get_param( 'to_dbs' );
			$from_tbl  = $request->get_param( 'from_tbl' );
			$to_tbl    = $request->get_param( 'to_tbl' );
			$copy_data = $request->get_param( 'copy_data' );

			if (
				'' === $from_dbs ||
				'' === $to_dbs ||
				'' === $from_tbl ||
				'' === $to_tbl
			) {
				return $this->bad_request();
			}

			$msg = $this->copy( $from_dbs, $to_dbs, $from_tbl, $to_tbl, $copy_data );
			if ( '' === $msg ) {
				return $this->WPDA_Rest_Response( __( 'Table successfully copied', 'wp-data-access' ) );
			} else {
				return new \WP_Error( 'error', $msg, array( 'status' => 403 ) );
			}

		}

		public function action_rename( $request ) {

			if ( ! $this->current_user_can_access( true ) ) {
				return $this->unauthorized();
			}

			if ( ! $this->current_user_token_valid( $request, true ) ) {
				return $this->invalid_nonce();
			}

			$dbs      = $request->get_param( 'dbs' );
			$from_tbl = $request->get_param( 'from_tbl' );
			$to_tbl   = $request->get_param( 'to_tbl' );

			if (
				'' ===  $dbs ||
				'' === $from_tbl ||
				'' === $to_tbl
			) {
				return $this->bad_request();
			}

			if (
				'information_schema' === $dbs ||
				'mysql' === $dbs ||
				'performance_schema' === $dbs ||
				'sys' === $dbs ||
				'' === $dbs
			) {
				return $this->unauthorized();
			}

			global $wpdb;
			if (
				$wpdb->dbname === $dbs &&
				in_array( $from_tbl, $wpdb->tables() )
			) {
				return $this->unauthorized();
			}

			$msg = $this->rename( $dbs, $from_tbl, $to_tbl );
			if ( '' === $msg ) {
				return $this->WPDA_Rest_Response( __( 'Table successfully renamed', 'wp-data-access' ) );
			} else {
				return new \WP_Error( 'error', $msg, array( 'status' => 403 ) );
			}

		}

		private function rename(
			$dbs,
			$from_tbl,
			$to_tbl
		) {

			// All values have already been validated and sanitized in the rest route registration.

			if ( ! current_user_can( 'manage_options' ) ) {
				return 'Unauthorized';
			}

			$wpdadb = WPDADB::get_db_connection( $dbs );
			if ( null === $wpdadb ) {
				return sprintf( __( 'Remote database %s not available', 'wp-data-access' ), esc_attr( $dbs ) );
			}

			$suppress_errors = $wpdadb->suppress_errors;
			$wpdadb->suppress_errors = true;

			$wpdadb->query(
				$wpdadb->prepare(
					'rename table `%1s` to `%1s`',
					array(
						$from_tbl,
						$to_tbl,
					)
				)
			);

			$wpdadb->suppress_errors = $suppress_errors;

			return $wpdadb->last_error;

		}

		private function copy(
			$from_dbs,
			$to_dbs,
			$from_tbl,
			$to_tbl,
			$copy_data
		) {

			// All values have already been validated and sanitized in the rest route registration.

			if ( ! current_user_can( 'manage_options' ) ) {
				return 'Unauthorized';
			}

			$wpdadb_from = WPDADB::get_db_connection( $from_dbs );
			if ( null === $wpdadb_from ) {
				return sprintf( __( 'Remote database %s not available', 'wp-data-access' ), esc_attr( $from_dbs ) );
			}

			$wpdadb_to = WPDADB::get_db_connection( $to_dbs );
			if ( null === $wpdadb_to ) {
				return sprintf( __( 'Remote database %s not available', 'wp-data-access' ), esc_attr( $to_dbs ) );
			}

			$suppress_errors_from = $wpdadb_from->suppress_errors;
			$wpdadb_from->suppress_errors = true;

			$suppress_errors_to = $wpdadb_to->suppress_errors;
			$wpdadb_to->suppress_errors = true;

			// Get create table statement.
			$wpdadb_from->query( "SET sql_mode = 'NO_TABLE_OPTIONS'" );
			$sql_cmd = $wpdadb_from->get_results(
				$wpdadb_from->prepare(
					'show create table `%1s`',
					array(
						$from_tbl
					)
				),
				'ARRAY_A'
			);

			// Check for errors.
			if ( '' !== $wpdadb_from->last_error ) {
				$wpdadb_from->suppress_errors = $suppress_errors_from;
				$wpdadb_to->suppress_errors   = $suppress_errors_to;

				return $wpdadb_from->last_error;
			}

			if ( ! isset( $sql_cmd[0]['Create Table'] ) ) {
				$wpdadb_from->suppress_errors = $suppress_errors_from;
				$wpdadb_to->suppress_errors   = $suppress_errors_to;

				return 'Create command table failed';
			}

			// Update destination table name if applicable.
			$create_table_statement = $sql_cmd[0]['Create Table'];
			if ( $from_tbl !== $to_tbl ) {
				// Modify create table statement
				$pos = strpos( $create_table_statement, $from_tbl );
				if ($pos !== false) {
					$create_table_statement = substr_replace( $create_table_statement, $to_tbl, $pos, strlen( $from_tbl ) );
				}
			}

			// Create new table.
			$wpdadb_to->query( $create_table_statement );

			// Check for errors.
			if ( '' !== $wpdadb_to->last_error ) {
				$wpdadb_from->suppress_errors = $suppress_errors_from;
				$wpdadb_to->suppress_errors   = $suppress_errors_to;

				return $wpdadb_to->last_error;
			}

			if ( '1' === $copy_data ) {
				// Copy data from source to destination table.
				set_time_limit( 0 ); // Prevent time out.
				// Use a cursor to process all rows and prevent exhausting memory.
				// Process 100 rows per batch to prevent exhausting memory.
				$buffer_size = 100;
				$index       = 0;
				$loop_done   = false;
				while ( ! $loop_done ) {
					// Get rows.
					$rows = $wpdadb_from->get_results(
						$wpdadb_from->prepare(
							'select * from `%1s` limit %1s offset %1s',
							array(
								$from_tbl,
								$buffer_size,
								$index * $buffer_size
							)
						),
						'ARRAY_A'
					);

					// Process rows.
					foreach ( $rows as $row ) {
						$wpdadb_to->insert(
							$to_tbl,
							$row
						);
					}

					if ( 100 > count( $rows ) ) {
						// No more rows to process.
						$loop_done = true;
					}

					$index++;
				}
			}

			$wpdadb_from->suppress_errors = $suppress_errors_from;
			$wpdadb_to->suppress_errors   = $suppress_errors_to;

			return '';

		}

		private function truncate(
			$dbs,
			$tbl
		) {

			// All values have already been validated and sanitized in the rest route registration.

			if ( ! current_user_can( 'manage_options' ) ) {
				return 'Unauthorized';
			}

			$wpdadb = WPDADB::get_db_connection( $dbs );
			if ( null === $wpdadb ) {
				return sprintf( __( 'Remote database %s not available', 'wp-data-access' ), esc_attr( $dbs ) );
			}

			$suppress_errors = $wpdadb->suppress_errors;
			$wpdadb->suppress_errors = true;

			$wpdadb->query(
				$wpdadb->prepare(
					'truncate table `%1s`',
					array(
						$tbl,
					)
				)
			);

			$wpdadb->suppress_errors = $suppress_errors;

			return $wpdadb->last_error;

		}

		private function drop(
			$dbs,
			$tbl
		) {

			// All values have already been validated and sanitized in the rest route registration.

			if ( ! current_user_can( 'manage_options' ) ) {
				return 'Unauthorized';
			}

			$wpdadb = WPDADB::get_db_connection( $dbs );
			if ( null === $wpdadb ) {
				return sprintf( __( 'Remote database %s not available', 'wp-data-access' ), esc_attr( $dbs ) );
			}

			$suppress_errors = $wpdadb->suppress_errors;
			$wpdadb->suppress_errors = true;

			$wpdadb->query(
				$wpdadb->prepare(
					'drop table `%1s`',
					array(
						$tbl,
					)
				)
			);

			$wpdadb->suppress_errors = $suppress_errors;

			return $wpdadb->last_error;

		}

	}

}