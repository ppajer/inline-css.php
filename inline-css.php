<?php

class InlineCss {
    
    private $criticalStyles;
    private $deferredStyles;
    
    public function __construct($styles) {
        
        if (isset($styles['critical'])) {
            
            $this->criticalStyles = $styles['critical'];
            
        } else {
            
            $this->criticalStyles = NULL;
            
        }
        
        if (isset($styles['deferred'])) {
            
            $this->deferredStyles = $styles['deferred'];
            
        } else {
            
            $this->deferredStyles = NULL;
            
        }
        
    }
    
    private function printStyles() {}
    
    private function linkStyles() {}
    
    
    
}

?>