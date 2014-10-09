<?php

  $installer = $this;
  $installer->startSetup();
  $installer->run("
      INSERT INTO {$this->getTable('cms_page')}
          (
              `title`,
              `root_template`,
              `identifier`,
              `content_heading`,
              `content`
          )
          VALUES
              (
                  'Contact Thank you page',
                  'one_column',
                  'contact-thankyou',
                  'Thank you page',
                  'Thank you page with suggestions for products'
              )");

  $read = Mage::getSingleton('core/resource')->getConnection('core_read');
  $page_id = array_pop($read->fetchCol("SELECT page_id FROM {$this->getTable('cms_page')} ORDER BY page_id DESC LIMIT 1"));

  $installer->run("
      INSERT INTO {$this->getTable('core_config_data')}
          (
              `scope`,
              `path`,
              `value`
          )
          VALUES (
              'default',
              'formredirect/general/urlkey',
              'contact-thankyou'
          )");
  $installer->run("
      INSERT INTO {$this->getTable('cms_page_store')}
          (
              `page_id`,
              `store_id`
        )
        VALUES (
            '{$page_id}',
            '0'
        )");

$installer->endSetup();

Mage::app()->cleanCache();