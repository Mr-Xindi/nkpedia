<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PediaUserGroup]].
 *
 * @see PediaUserGroup
 */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
class PediaUserGroupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaUserGroup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserGroup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
