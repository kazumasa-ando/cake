<?php
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout');
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->SetFlash(__('新規登録しました'));
				$this->redirect(array('controller' => 'posts', 'action' => 'index'));
			} else {
				$this->Session->SetFlash(__('登録できませんでした'));
			}
		}
	}
	//ログインアクション(認証が不要なページ)
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('名前かパスワードが違います'), 'default', array(), 'auth');
			}
		}
	}
	//ログアウトアクション
	public function logout() {
		$this->Auth->logout();
		$this->redirect(array('controller' => 'posts', 'action' => 'index'));
	}
}
