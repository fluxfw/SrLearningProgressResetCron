<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrLearningProgressReset\DICTrait;
use srag\Plugins\SrLearningProgressReset\Utils\SrLearningProgressResetTrait;

/**
 * Class ilSrLearningProgressResetCronPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrLearningProgressResetCronPlugin extends ilCronHookPlugin
{

    use DICTrait;
    use SrLearningProgressResetTrait;

    const PLUGIN_ID = "srleprrecr";
    const PLUGIN_NAME = "SrLearningProgressResetCron";
    const PLUGIN_CLASS_NAME = ilSrLearningProgressResetPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * ilSrLearningProgressResetCronPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @inheritDoc
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }


    /**
     * @inheritDoc
     */
    public function getCronJobInstances() : array
    {
        return self::srLearningProgressReset()->jobs()->factory()->newInstances();
    }


    /**
     * @inheritDoc
     */
    public function getCronJobInstance(/*string*/ $a_job_id)/* : ?ilCronJob*/
    {
        return self::srLearningProgressReset()->jobs()->factory()->newInstanceById($a_job_id);
    }
}
