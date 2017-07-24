<?php
namespace common\models\base;
use yii\db\ActiveRecord;

/**
* 基础模型
*/
class BaseModel extends ActiveRecord
{
	//获取分页数据
	public function getPages($query, $curPage = 1, $pageSize =10, $search = null)
	{
		if($search){
			$query = $query->andFilerWhere($search);
		}
		//获取项目条数
		$data['count'] = $query->count();
		if(!$data['count']){
			return ['count'=>0, 'curPage'=>curPage, 'pageSize'=>pageSize, 'start'=>0, 'end'=>0, 'data'=>[]];
		}
		//若超过实际页数，则取最大页数
		$curPage = (ceil($data['count']/$pageSize)<$curPage)?ceil($data['count']/$pageSize):$curPage;
		//当前页
		$data['curPage'] = $curPage;
		//每页显示条数
		$data['pageSize'] = $pageSize;
		//起始页
		$data['start'] = ($curPage-1)*$pageSize+1;
		//末页
		$data['end'] = (ceil($data['count']/$pageSize) == $curPage)?$data['count']:$curPage*$pageSize;
		//数据
		$data['data'] = $query->offset(($curPage-1)*$pageSize)->limit($pageSize)->asArray()->all();

		return $data;
	}
}