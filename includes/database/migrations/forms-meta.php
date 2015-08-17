<?php if ( ! defined( 'ABSPATH' ) ) exit;

class NF_Database_Migrations_FormsMeta extends NF_Database_Migration
{
    public function __construct()
    {
        parent::__construct(
            'nf_forms_meta',
            'nf_migration_create_table_forms_meta'
        );
    }

    public function run()
    {
        $query = "CREATE TABLE IF NOT EXISTS $this->table_name (
            `id` int NOT NULL AUTO_INCREMENT,
            `form_id` int NOT NULL,
            `key` tinytext NOT NULL,
            `value` tinytext,
            UNIQUE KEY (`id`)
        ) $this->charset_collate;";

        dbDelta( $query );
    }

}