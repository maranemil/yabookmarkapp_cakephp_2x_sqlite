<?php
class Bookmark extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'url' => array(
            'rule' => 'notBlank'
        )
    );
}