<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Action_Email
 */
final class NF_Action_Email extends NF_Abstracts_Action
{
    /**
    * @var string
    */
    protected $_name  = '';

    /**
    * @var array
    */
    protected $_tags = array();

    /**
    * @var string
    */
    protected $_timing = 'normal';

    /**
    * @var int
    */
    protected $_priority = '10';

    public function __construct()
    {

    }

    /**
    * Constructor
    */
    public function register()
    {

    }

    /**
    * PUBLIC METHODS
    */
    public function process()
    {
        
    }
}