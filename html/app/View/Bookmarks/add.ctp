<h1>Add Bookmark</h1>
<?php
echo $this->Form->create('Bookmark');
echo $this->Form->input('title', array('rows' => '1'));
echo $this->Form->input('url', array('rows' => '1'));
echo $this->Form->end('Save Bookmark');
?>