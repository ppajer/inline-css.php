<?php

class InlineCss {
    	
    	// Styles set to load in the <head> section of the page
	private $aboveFoldStyles;
	
	// Styles set to load after initial page load is finished
	private $belowFoldStyles;
    
	public function __construct($styles) {
		
		$this->aboveFoldStyles = isset($styles['aboveFold']) ? $styles['aboveFold'] : false;
		$this->belowFoldStyles = isset($styles['belowFold']) ? $styles['belowFold'] : false;
	}
	
	public function aboveFoldStyles() {
		
		foreach ($this->aboveFoldStyles as $style) {
			echo $this->printStyle($style);
		}
	}
	
	public function belowFoldStyles() {
		
		foreach ($this->belowFoldStyles as $style) {
			echo $this->linkStyle($style);
		}
	}

	public function inlineCSS($url) {
		echo $this->printStyle($url);
	}
	
	public function linkCSS($url) {
		echo $this->linkStyle($url);
	}
    	
    	private function printStyle($style) {
		
		$htmlStyleTag = '<style type="text/css">{style}</style>';
		$styleContent = $this->readStyle($style);
		
		if (!$styleContent) {
			return;
		} else {
			return str_replace('{style}', $styleContent, $htmlStyleTag);
		}
	}

	private function linkStyle($url) {
		return '<link rel="text/css" href="'.$url.'">';
	}

	private function readStyle($path) {
		return file_exists($path) ? file_get_contents($path) : false;
	}
}

?>
