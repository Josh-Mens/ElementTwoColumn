<?php

namespace JoshMens\Elements\TwoColumn\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\FieldType\DBField;

/**
 * Class ElementImage.
 */
class ElementTwoColumn extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'font-icon-columns';

    /**
     * @return string
     */
    private static $singular_name = 'Two Column';

    /**
     * @return string
     */
    private static $plural_name = 'Two Column Elements';

    /**
     * @var string
     */
    private static $table_name = 'ElementTwoColumn';

    /**
     * @var array
     */
    private static $db = [
        'ColOne' => 'HTMLText',
        'ColTwo' => 'HTMLText'
    ];

    // /**
    //  * @var array
    //  */
    // private static $has_one = [
        
    // ];

    // /**
    //  * @var array
    //  */
    // private static $owns = [
        
    // ];

    /**
     * @return \SilverStripe\Forms\FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $ColOne = $fields->fieldByName('Root.Main.ColOne');
        $ColTwo = $fields->fieldByName('Root.Main.ColTwo');

        return $fields;
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();

        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'TwoColumn');
    }
}
