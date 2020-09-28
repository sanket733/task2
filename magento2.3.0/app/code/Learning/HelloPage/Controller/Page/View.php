<?php 

namespace Learning\HelloPage\Controller\Page;

class View extends \Magento\Framework\App\Action\Action
{
    
    protected $resultJsonFactory;
    
    public function __construct(
       Context $context,
       JsonFactory $resultJsonFactory)
    {
       $this->resultJsonFactory = $resultJsonFactory;
       parent::__construct($context);
    }
    
    public function execute()
    {
       $result = $this->resultJsonFactory->create();
       $data = ['message' => 'Hello world!'];


       return $result->setData($data);
    } 
}
