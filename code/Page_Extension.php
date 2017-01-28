<?php
class Page_Extension extends DataExtension {
	private static $db = array(
		'Subtitle' => 'Varchar(255)'
	);
	private static $has_one = array(
		'Hero' => 'Image'
	);
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldsToTab("Root.Main", TextField::Create('Subtitle', 'Subtitle'),'Content');
		$fields->addFieldsToTab("Root.Main", UploadField::Create('Hero', 'Hero Image'),'Content');
		return $fields;
	}
}
