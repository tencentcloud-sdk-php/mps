<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoSearchTaskDetail返回参数结构体
 *
 * @method string getTaskId() 获取查询的任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置查询的任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取查询的任务的状态，可能为WAITING、PROCESSING、FAIL、SUCCESS。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置查询的任务的状态，可能为WAITING、PROCESSING、FAIL、SUCCESS。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSearchTaskResults() 获取查询的任务的结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchTaskResults(array $SearchTaskResults) 设置查询的任务的结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoSearchTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 查询的任务Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 查询的任务的状态，可能为WAITING、PROCESSING、FAIL、SUCCESS。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 查询的任务的结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchTaskResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 查询的任务Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 查询的任务的状态，可能为WAITING、PROCESSING、FAIL、SUCCESS。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SearchTaskResults 查询的任务的结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SearchTaskResults",$param) and $param["SearchTaskResults"] !== null) {
            $this->SearchTaskResults = [];
            foreach ($param["SearchTaskResults"] as $key => $value){
                $obj = new SearchTaskResult();
                $obj->deserialize($value);
                array_push($this->SearchTaskResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
