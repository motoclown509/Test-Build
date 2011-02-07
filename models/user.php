<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = array(
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must enter your first name.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must enter your last name.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'You must enter a valid email address.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Username cannot be blank.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Password cannot be blank.',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'password_confirm' => array(
                        'compare' => array(
                            'rule' => array('passwordMatch', 'password', true),
                            'message' => 'The passwords you entered do not match.',
                            'required' => true,
                        ),
                        'length' => array(
                            'rule' => array('between', 6, 20),
                            'message' => 'Password must be between 6 and 20 characters.',
                        ),
                        'empty' => array(
                            'rule' => 'notEmpty',
                            'message' => 'Password cannot be blank.'
                        ),
                ),
	);

        var $validateChangePassword = array(
            '_import' => array('password', 'password_confirm'),
            'password_old' => array(
                'correct' => array(
                    'rule' => 'password_old',
                    'message' => 'The password you entered does not match your current password.',
                    'required' => true,
                ),
                'empty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Password cannot be blank.',
                ),
            ),
        );

        /*
         * Dynamically adjust our validation behavior.
         *
         * Look for an _import key in new ruleset, and import
         * those rules from the base validation ruleset.
         *
         * @param   string  array key of the validation ruleset
         *
         */
        function useValidationRules($key) {
            $variable = 'validate' . $key;
            $rules = $this->$variable;

            if (isset($rules['_import'])) {
                foreach($rules['_import'] as $key) {
                    $rules[$key] = $this->validate[$key];
                }
                unset($rules['_import']);
            }
            $this->validate = $rules;
        }

        /*
         * Ensure password matches the user session
         *
         * @param   array   data provided by the controller
         *
         */
        function password_old($data) {
            $password = $this->field('password', array('User.id' => $this->id));
            return $password === Security::hash($data['password_old'], null, true);
        }

        /*
         * Ensure the two password field match
         *
         * @param   array   data provided by the controller
         * @param   string  the original (already hashed) password fieldname
         * @param   bool    whether the password field has been hashed,
         *                  only hashed when a username input is present
         */
        function passwordMatch($data, $password_field, $hashed = true) {
            $password = $this->data[$this->alias][$password_field];
            $keys = array_keys($data);
            $password_confirm = $hashed ? Security::hash($data[$keys[0]], null, true) : $data[$keys[0]];
            return $password === $password_confirm;
        }

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

        /**
        * Generate a random pronounceable password
        */
        function generatePassword($length = 10) {
            // Seed
            srand((double) microtime()*1000000);

            $vowels = array('a', 'e', 'i', 'o', 'u');
            $cons = array('b', 'c', 'd', 'g', 'h', 'j', 'k', 'l', 'm', 'n',
                'p', 'r', 's', 't', 'u', 'v', 'w', 'tr',
                'cr', 'br', 'fr', 'th', 'dr', 'ch', 'ph',
                'wr', 'st', 'sp', 'sw', 'pr', 'sl', 'cl');

            $num_vowels = count($vowels);
            $num_cons = count($cons);

            $password = '';
            for ($i = 0; $i < $length; $i++){
                $password .= $cons[rand(0, $num_cons - 1)] . $vowels[rand(0, $num_vowels - 1)];
            }

            return substr($password, 0, $length);
        }

}
?>