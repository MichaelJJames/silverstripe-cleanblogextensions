<?php
class CustomSiteConfig extends DataExtension {
	private static $db = array(
		'Facebook' => 'Varchar(255)',
		'Twitter' => 'Varchar(255)',
		'Github' => 'Varchar(255)',
	);
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Social', TextField::create('Facebook','Facebook'));
		$fields->addFieldToTab('Root.Social', TextField::create('Twitter','Twitter'));
		$fields->addFieldToTab('Root.Social', TextField::create('Github','Github'));
	}
}
