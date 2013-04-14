<?php
/**
 * Description of TagApplicationBehavior
 *
 */
class TimestampBehavior extends CActiveRecordBehavior
{
    /**
     * Sets date_created and date_updated fields before saving record
     * 
     * @param CModelEvent $event event parameter
     * 
     * @return void
     */
    public function beforeSave($event)
    {
        if ($this->owner->isNewRecord) {
            $this->owner->create_time = date('Y-m-d H:i:s');
        }
        $this->owner->update_time = date('Y-m-d H:i:s');
    }
}