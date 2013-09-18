<?php
namespace Tests\Zend\Validate;

class AclTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Filter',
        '\Zend_Filter_Alnum',
        '\Zend_Filter_Alpha',
        '\Zend_Filter_BaseName',
        '\Zend_Filter_Boolean',
        '\Zend_Filter_Callback',
        '\Zend_Filter_Compress',
        '\Zend_Filter_Decompress',
        '\Zend_Filter_Decrypt',
        '\Zend_Filter_Digits',
        '\Zend_Filter_Dir',
        '\Zend_Filter_Encrypt',
        '\Zend_Filter_Exception',
        '\Zend_Filter_HtmlEntities',
        '\Zend_Filter_Inflector',
        '\Zend_Filter_Input',
        '\Zend_Filter_Int',
        '\Zend_Filter_Interface',
        '\Zend_Filter_LocalizedToNormalized',
        '\Zend_Filter_NormalizedToLocalized',
        '\Zend_Filter_Null',
        '\Zend_Filter_PregReplace',
        '\Zend_Filter_RealPath',
        '\Zend_Filter_StringToLower',
        '\Zend_Filter_StringToUpper',
        '\Zend_Filter_StringTrim',
        '\Zend_Filter_StripNewlines',
        '\Zend_Filter_StripTags',
        '\Zend_Filter_Compress_Bz2',
        '\Zend_Filter_Compress_CompressAbstract',
        '\Zend_Filter_Compress_CompressInterface',
        '\Zend_Filter_Compress_Gz',
        '\Zend_Filter_Compress_Lzf',
        '\Zend_Filter_Compress_Rar',
        '\Zend_Filter_Compress_Tar',
        '\Zend_Filter_Compress_Zip',
        '\Zend_Filter_Encrypt_Interface',
        '\Zend_Filter_Encrypt_Mcrypt',
        '\Zend_Filter_Encrypt_Openssl',
        '\Zend_Filter_File_Decrypt',
        '\Zend_Filter_File_Encrypt',
        '\Zend_Filter_File_LowerCase',
        '\Zend_Filter_File_Rename',
        '\Zend_Filter_File_UpperCase',
        '\Zend_Filter_Word_CamelCaseToDash',
        '\Zend_Filter_Word_CamelCaseToSeparator',
        '\Zend_Filter_Word_CamelCaseToUnderscore',
        '\Zend_Filter_Word_DashToCamelCase',
        '\Zend_Filter_Word_DashToSeparator',
        '\Zend_Filter_Word_DashToUnderscore',
        '\Zend_Filter_Word_SeparatorToCamelCase',
        '\Zend_Filter_Word_SeparatorToDash',
        '\Zend_Filter_Word_SeparatorToSeparator',
        '\Zend_Filter_Word_UnderscoreToCamelCase',
        '\Zend_Filter_Word_UnderscoreToDash',
        '\Zend_Filter_Word_UnderscoreToSeparator',
        '\Zend_Filter_Word_Separator_Abstract',
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}