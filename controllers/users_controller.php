<?php
class UsersController extends AppController {

	var $name = 'Users';
        var $components = array('Auth', 'Email');

        function beforeFilter() {
            $this->Auth->allow('register', 'recover', 'verify');
            parent::beforeFilter();
        }

        /*
         * Registration page for new users
         */
        function register() {
            if (!empty($this->data)) {
                $this->User->create();
                if ($this->User->save($this->data)) {
                    $this->Session->setFlash(__('Your account has been created.', true));
                    $this->redirect('/');
                } else {
                    $this->Session->setFlash(__('There was an error creating your account.  Please try again.', true));
                }
            }
        }

        /*
         * Allows the user to email themselves a password redemption token
         */
        function recover() {
            if ($this->Auth->user()) {
                $this->redirect(array('controller' => 'users', 'action' => 'account'));
            }

            if (!empty($this->data['User']['email'])) {
                $Token = ClassRegistry::init('Token');
                $user = $this->User->findByEmail($this->data['User']['email']);
            }

            if ($user === false) {
                $this->Session->setFlash('No matching user found for this email address.');
                return false;
            }

            $token = $Token->generate(array('User' => $user['User']));
            $this->Session->setFlash('An email has been sent to your account.  Please follow the instructions in the email to recover your password.');
            $this->Email->to = $user['User']['email'];
            $this->Email->subject = 'Password recovery instructions';
            $this->Email->from = 'support@bikelogs.com';
            $this->Email->template = 'recover';
            $this->set('user', $user);
            $this->set('token', $token);
            $this->Email->send();
        }

        /*
         * Accepts a valid token and resets the user's password
         */
        function verify($token_str = null) {
            if ($this->Auth->user()) {
                $this->redirect(array('controller' => 'users', 'action' => 'account'));
            }

            $Token = ClassRegistry::init('Token');

            $res = $Token->get($token_str);
            if ($res) {
                // Update the users password
                $password = $this->User->generatePassword();
                $this->User->id = $res['User']['id'];
                $this->User->saveField('password', $this->Auth->password($password));
                $this->set('success', true);

                // Send email with new password
                $this->Email->to = $res['User']['email'];
                $this->Email->subject = 'Password changed';
                $this->Email->from = 'support@bikelogs.com';
                $this->Email->template = 'verify';
                $this->set('user', $res);
                $this->set('password', $password);
                $this->Email->send();
            }
        }

        /*
         * Ran directly after the Auth component is executed.
         */
        function login() {
            // Check for a successful login
            if (!empty($this->data) && $id = $this->Auth->user('id')) {

                // Set last login time
                $fields = array('lastlogin' => date('Y-m-d H:i:s'), 'modified' => false);
                $this->User->id = $id;
                $this->User->save($fields, false, array('lastlogin'));

                // Redirect the user
                $url = array('controller' => 'users', 'action' => 'home');
                if ($this->Session->check('Auth.redirect')) {
                    $url = $this->Session->read('Auth.redirect');
                }
                $this->redirect($url);
            }
        }

        function logout() {
            return $this->redirect($this->Auth->logout());
        }

        function home() {
            // Set User's ID in model which is needed for validation
            $this->User->id = $this->Auth->user('id');

            // Load the user (avoid populating $this->data)
            $current_user = $this->User->findById($this->User->id);
            $this->set('current_user', $current_user);

            $this->User->useValidationRules('ChangePassword');
            $this->User->validate['password_confirm']['compare']['rule'] = array('password_match', 'password', false);

            $this->User->set($this->data);
            if (!empty($this->data) && $this->User->validates()) {
                $this->redirect(array('action' => 'home'));
            }
        }

        function change_pw() {
            // Set User's ID in model which is needed for validation
            $this->User->id = $this->Auth->user('id');

            // Load the user (avoid populating $this->data
            $current_user = $this->User->findById($this->User->id);
            $this->set('current_user', $current_user);

            $this->User->useValidationRules('ChangePassword');
            $this->User->validate['password_confirm']['compare']['rule'] = array('password_match', 'password', false);

            $this->User->set($this->data);
            if (!empty($this->data) && $this->User->validates()) {
                $password = $this->Auth->password($this->data['User']['password']);
                $this->User->saveField('password', $password);

                $this->Session->setFlash('Your password has been updated.');
                $this->redirect(array('action' => 'change_pw'));
            }
        }

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function test() {
            $this->render('test');
        }
}
?>