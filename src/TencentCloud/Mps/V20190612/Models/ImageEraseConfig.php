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
 * 图片擦除参数
 *
 * @method ImageEraseLogoConfig getImageEraseLogo() 获取图标擦除配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageEraseLogo(ImageEraseLogoConfig $ImageEraseLogo) 设置图标擦除配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageEraseConfig extends AbstractModel
{
    /**
     * @var ImageEraseLogoConfig 图标擦除配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageEraseLogo;

    /**
     * @param ImageEraseLogoConfig $ImageEraseLogo 图标擦除配置。
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
        if (array_key_exists("ImageEraseLogo",$param) and $param["ImageEraseLogo"] !== null) {
            $this->ImageEraseLogo = new ImageEraseLogoConfig();
            $this->ImageEraseLogo->deserialize($param["ImageEraseLogo"]);
        }
    }
}
