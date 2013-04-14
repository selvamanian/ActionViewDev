<?php
/**
 * BlameableBehavior class file.
 *
 * @link http://www.yiiframework.com/forum/index.php/topic/31042-auto-timestamp-and-user-on-record-modification/
 */

 /**
 * BlameableBehavior will automatically fill date and time related atributes when the active record
 * is created and/or upadated.
 */


class BlameableBehavior extends CActiveRecordBehavior {

    function beforeSave( $event ) {
        $owner = $this->getOwner();
        $user = Yii::app()->user;
        if( $owner->getIsNewRecord() ) {
            $owner->create_time = date( 'Y-m-d H:i:s' );
            $owner->create_user_id = $user !== null ? intval( $user->id ) : 0;
        }else{
            $owner->create_time = DateTime::createFromFormat('d-m-Y', $owner->create_time)->format('Y-m-d H:i:s');          
        }
        $owner->update_time = date( 'Y-m-d H:i:s' );
        $owner->update_user_id = $user !== null ? intval( $user->id ) : 0;
    }

    function afterFind( $event )
    {
        // convert to display format
        $owner = $this->getOwner();

        if($owner->create_time == '' || $owner->create_time == null){
            $owner->create_time = null;
        } else {
            $owner->create_time = DateTime::createFromFormat('Y-m-d H:i:s', $owner->create_time)->format('d-m-Y');          
        }

        if($owner->update_time == '' || $owner->update_time == null){
            $owner->update_time = null;
        } else {
            $owner->update_time = DateTime::createFromFormat('Y-m-d H:i:s', $owner->update_time)->format('d-m-Y');          
        }

    }


}


?>