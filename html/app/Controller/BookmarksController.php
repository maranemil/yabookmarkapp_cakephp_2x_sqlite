<?php /** @noinspection PhpUndefinedFieldInspection */
/** @noinspection PhpUnused */

/** @noinspection PhpMultipleClassDeclarationsInspection */

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

    /**
     * @return void
     */


    public function index()
    {
        $bookmarks = $this->Bookmark->find('all');
        $this->set("bookmarks", $bookmarks);
    }

    public function display()
    {
        $bookmarks = $this->Bookmark->find('all');
        $this->set("bookmarks", $bookmarks);
    }


    public function view($id = null)
    {
        $data = $this->Bookmark->find('first', array(
            'conditions' => array('Bookmark.id' => $id)
        ));
        $this->set("data", $data);
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Bookmark->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Bookmark->id = $id;
            if ($this->Bookmark->save($this->request->data)) {
                $this->Flash->success(__('Your Bookmark has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your Bookmark.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Bookmark->delete($id)) {
            $this->Flash->success(
                __('The Bookmark with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The Bookmark with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Bookmark->create();
            if ($this->Bookmark->save($this->request->data)) {
                $this->Flash->success(__('Your Bookmark has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your Bookmark.'));
        }
    }

}
