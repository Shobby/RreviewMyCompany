<?php

class OptFirst_ReviewMyCompany_Adminhtml_ReviewController extends Mage_Adminhtml_Controller_action
{
 
    public function indexAction() {
        $this->loadLayout();
                $this->renderLayout();               
    }
    
    public function gridAction()
    {
        $this->loadLayout();
         $this->renderLayout();
                
                $this->getResponse()->setBody(
                $this->getLayout()->createBlock('optfirst_reviewmycompany/adminhtml_review_grid')->toHtml()
                );
    }
 }