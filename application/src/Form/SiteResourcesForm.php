<?php
namespace Omeka\Form;

use Zend\Form\Form;

class SiteResourcesForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'o:assign_on_create',
            'type' => 'checkbox',
            'options' => [
                'label' => 'Assign items on create', // @translate
            ],
            'attributes' => [
                'id' => 'assign_on_create',
                'value' => true,
            ],
        ]);
        $this->add([
            'type' => 'select',
            'name' => 'item_assignment_action',
            'options' => [
                'label' => 'Assignment action',
                'empty_option' => '[No action]', // @translate
                'value_options' => [
                    'add' => 'Add - keep existing items and assign items from the following search', // @translate
                    'replace' => 'Replace - unassign all items and assign items from the following search', // @translate
                    'remove' => 'Remove - unassign items from the following search', // @translate
                    'remove_all' => 'Remove all - unassign all items', // @translate
                ],
            ],
        ]);
        $this->add([
            'type' => 'checkbox',
            'name' => 'save_search',
            'options' => [
                'label' => 'Save this search',
            ],
        ]);

        $inputFilter = $this->getInputFilter();
        $inputFilter->add([
            'name' => 'item_assignment_action',
            'allow_empty' => true,
        ]);
        $inputFilter->add([
            'name' => 'save_search',
            'allow_empty' => true,
        ]);
    }
}
