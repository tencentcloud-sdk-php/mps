<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DeleteStreamLinkEvent请求参数结构体
 *
 * @method string getEventId() 获取媒体传输事件Id，删除前需要保证该Event关联的所有Flow都已经删除。
 * @method void setEventId(string $EventId) 设置媒体传输事件Id，删除前需要保证该Event关联的所有Flow都已经删除。
 */
class DeleteStreamLinkEventRequest extends AbstractModel
{
    /**
     * @var string 媒体传输事件Id，删除前需要保证该Event关联的所有Flow都已经删除。
     */
    public $EventId;

    /**
     * @param string $EventId 媒体传输事件Id，删除前需要保证该Event关联的所有Flow都已经删除。
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
