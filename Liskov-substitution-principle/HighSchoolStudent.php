<?php
/**
 * Class HighSchoolStudent
 */
class HighSchoolStudent extends Student implements ApplyableInterface {
    /**
     * @inheritdoc
     */
    public function apply(): string
    {
       return 'Apply for HighSchoolStudent';
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
    	return 'HighSchoolStudent';
    }
}
