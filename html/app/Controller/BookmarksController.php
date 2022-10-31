<?php

class BookmarksController extends AppController
{

    /**
     * @var string[]
     */
    public $helpers = array('Html', 'Form', 'Flash');
    /**
     * @var string[]
     */
    public $components = array('Flash');


    public function index()
    {
        $data = $this->Bookmark->find('all');
        $this->set("data", $data);
    }


    public function view($id = null)
    {
        $data = $this->Bookmark->find('first', array(
            'conditions' => array('Bookmark.id' => $id)
        ));
        $this->set("data", $data);
    }

    # https://book.cakephp.org/2/en/models/retrieving-your-data.html
    public function edit($id = null)
    {
        $data = $this->Bookmark->find('first', array(
            'conditions' => array('Bookmark.id' => $id)
        ));
        $this->set("data", $data);
    }

    public function delete($id = null)
    {
        $data = $this->Bookmark->find($id);
        $this->set("data", $data);
    }

}
