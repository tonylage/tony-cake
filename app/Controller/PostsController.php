<?php
class PostsController extends AppController {

    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Post.created' => 'desc'
            )
        );
    

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $posts = $this->paginate('Post');
    $this->set('posts', $posts);
        //* $this->set('posts', $this->Post->find('all'));
    }

    public function view($id) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());

    }

    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }


    public function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }


public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
}