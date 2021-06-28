<?php
App::uses('AppController', 'Controller');
/**
 * TwitterTrends Controller
 *
 * @property TwitterTrend $TwitterTrend
 * @property PaginatorComponent $Paginator
 */
class TwitterTrendsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TwitterTrend->recursive = 0;
		$this->set('twitterTrends', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TwitterTrend->exists($id)) {
			throw new NotFoundException(__('Invalid twitter trend'));
		}
		$options = array('conditions' => array('TwitterTrend.' . $this->TwitterTrend->primaryKey => $id));
		$this->set('twitterTrend', $this->TwitterTrend->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TwitterTrend->create();
			if ($this->TwitterTrend->save($this->request->data)) {
				$this->Flash->success(__('The twitter trend has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The twitter trend could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TwitterTrend->exists($id)) {
			throw new NotFoundException(__('Invalid twitter trend'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TwitterTrend->save($this->request->data)) {
				$this->Flash->success(__('The twitter trend has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The twitter trend could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TwitterTrend.' . $this->TwitterTrend->primaryKey => $id));
			$this->request->data = $this->TwitterTrend->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->TwitterTrend->exists($id)) {
			throw new NotFoundException(__('Invalid twitter trend'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TwitterTrend->delete($id)) {
			$this->Flash->success(__('The twitter trend has been deleted.'));
		} else {
			$this->Flash->error(__('The twitter trend could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
