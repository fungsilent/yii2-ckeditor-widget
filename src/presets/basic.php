<?php

/**
 *
 * basic preset returns the basic toolbar configuration set for CKEditor.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */
return [
    // 'height' => 200,
    // 'toolbarGroups' => [
    //     ['name' => 'undo'],
    //     ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
    //     ['name' => 'colors'],
    // ],
    // 'removeButtons' => 'Subscript,Superscript,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe',
    // 'removePlugins' => 'elementspath',
    // 'resize_enabled' => false
    
    'height' => 200,
    'toolbarGroups' => [
        ['name' => 'undo'],
        ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
        ['name' => 'colors'],
        ['name' => 'styles'],
    ],
    'removeButtons' => 'Source,Save,Templates,NewPage,Preview,Print,Cut,Copy,Paste,About,Maximize,ShowBlocks,Styles,Image,Link,Unlink,Flash,Table,Anchor,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Language,JustifyRight,JustifyBlock,JustifyCenter,BidiRtl,BidiLtr,JustifyLeft,SelectAll,Scayt,Form,Find,Replace,PasteText,PasteFromWord,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Superscript,Subscript,Strike,CopyFormatting,BulletedList,CreateDiv,Indent,Blockquote,NumberedList,Outdent,Format,Font',
    'removePlugins' => 'elementspath',
    'extraPlugins' => 'font,colorbutton,colordialog',
    'resize_enabled' => false,
];
