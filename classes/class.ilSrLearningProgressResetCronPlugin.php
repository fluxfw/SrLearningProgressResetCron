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

    const PLUGIN_CLASS_NAME = ilSrLearningProgressResetPlugin::class;
    const PLUGIN_ID = "srleprrecr";
    const PLUGIN_NAME = "SrLearningProgressResetCron";
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * ilSrLearningProgressResetCronPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


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
     * @inheritDoc
     */
    public function getCronJobInstance(/*string*/ $a_job_id)/* : ?ilCronJob*/
    {
        return self::srLearningProgressReset()->jobs()->factory()->newInstanceById($a_job_id);
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
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }
}
