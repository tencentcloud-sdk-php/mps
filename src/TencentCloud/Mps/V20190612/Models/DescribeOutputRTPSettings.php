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
 * 查询输出的RTP配置信息。
 *
 * @method array getDestinations() 获取转推RTP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinations(array $Destinations) 设置转推RTP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFEC() 获取是否FEC。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFEC(string $FEC) 设置是否FEC。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdleTimeout() 获取空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeOutputRTPSettings extends AbstractModel
{
    /**
     * @var array 转推RTP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destinations;

    /**
     * @var string 是否FEC。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FEC;

    /**
     * @var integer 空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdleTimeout;

    /**
     * @param array $Destinations 转推RTP的目标地址信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FEC 是否FEC。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdleTimeout 空闲超时时间。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new RTPAddressDestination();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = $param["FEC"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
