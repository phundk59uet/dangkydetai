<?php
class generate_form{
    function ckeditor($titleControl, $id, $value ="", $basePath='ckeditor/', $width='100%', $height='1000'){
        require_once($basePath . "ckeditor.php");
        $CKEditor = new CKEditor();
        $config = array();
        $config['toolbar'] = array(
          array( 'Source','-','Preview' ),
          array( 'Bold','Italic','Underline','Strike','-','Subscript','Superscript'),
          array( 'Styles','Format','Font','FontSize'),
          array( 'TextColor','BGColor'),
          array( 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
          array( 'Cut','Copy','Paste','PasteText','PasteFromWord','-', 'SpellChecker' ),
          array( 'NumberedList','BulletedList','-','Outdent','Indent'),
          array( 'Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'),
          array( 'Form', 'Checkbox', 'Radio' ),
          array( 'Link','Unlink','Anchor'),
          array( 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe')
        );
        $events['instanceReady'] = 'function (ev) {
          alert("Loaded: " + ev.editor.name);
        }';
        $CKEditor->editor($id, $value, $config, $events);
	}    
}
?>