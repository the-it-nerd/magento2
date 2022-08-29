dd<?xml version="1.0" encoding="UTF-8"?>
<!--
 /**
  * Copyright © Magento, Inc. All rights reserved.
  * See COPYING.txt for license details.
  */
-->

<actionGroups xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="urn:magento:mftf:Test/etc/actionGroupSchema.xsd">
    <actionGroup name="FilterAdminOrderGridByStatusActionGroup">
        <annotations>
            <description>Filters the Admin Orders grid based on the provided Order Status.</description>
        </annotations>
        <arguments>
            <argument name="orderStatus"/>
        </arguments>

        <conditionalClick selector="{{AdminDataGridHeaderSection.clearFilters}}" dependentSelector="{{AdminDataGridHeaderSection.clearFilters}}" visible="true" stepKey="clearExistingOrderFilters"/>
        <click selector="{{AdminDataGridHeaderSection.filters}}" stepKey="openOrderGridFilters"/>
        <selectOption selector="{{AdminDataGridHeaderSection.filterFieldSelect('status')}}" userInput="{{orderStatus}}" stepKey="fillOrderStatusFilter"/>
        <click selector="{{AdminDataGridHeaderSection.applyFilters}}" stepKey="clickApplyFilters"/>
    </actionGroup>
</actionGroups>
