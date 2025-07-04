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
 * 传输流媒体的视频数据。
 *
 * @method integer getFps() 获取帧率。
 * @method void setFps(integer $Fps) 设置帧率。
 * @method integer getRate() 获取码率，单位是bps。
 * @method void setRate(integer $Rate) 设置码率，单位是bps。
 * @method integer getPid() 获取视频Pid。
 * @method void setPid(integer $Pid) 设置视频Pid。
 * @method string getSessionId() 获取标志同一次推流。
 * @method void setSessionId(string $SessionId) 设置标志同一次推流。
 */
class FlowMediaVideo extends AbstractModel
{
    /**
     * @var integer 帧率。
     */
    public $Fps;

    /**
     * @var integer 码率，单位是bps。
     */
    public $Rate;

    /**
     * @var integer 视频Pid。
     */
    public $Pid;

    /**
     * @var string 标志同一次推流。
     */
    public $SessionId;

    /**
     * @param integer $Fps 帧率。
     * @param integer $Rate 码率，单位是bps。
     * @param integer $Pid 视频Pid。
     * @param string $SessionId 标志同一次推流。
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
        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
