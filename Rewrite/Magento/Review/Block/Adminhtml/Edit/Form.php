<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Unimix\ReviewEdit\Rewrite\Magento\Review\Block\Adminhtml\Edit;

class Form extends \Magento\Review\Block\Adminhtml\Edit\Form
{

    function _prepareForm() {

        parent::_prepareForm();
        $review = $this->_coreRegistry->registry('review_data');

        $form = $this->getForm();

        $fieldset = $form->getElements()->searchById('review_details', ['legend' => __('Date')]);

        $fieldset->addField(
            'created_at',
            'date',
            [
                'name' => 'created_at',
                'label' => __('Date'),
                'value' => $review->getCreatedAt(),
                'title' => __('Date'),
                'required' => true,
                'date_format' => 'yyyy-MM-dd',
                'time_format' => 'hh:mm:ss'
            ]
        );

        $this->setForm($form);
    }
}

