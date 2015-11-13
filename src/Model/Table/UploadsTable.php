<?php
namespace Fyluploader\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class UploadsTable extends Table {
	/**
	*	validation for file upload field.
	*   it checks that field should not be empty
	*/
	 public function validationDefault(Validator $validator) {
    
        $validator
            ->notEmpty('file')
            ->requirePresence('file');
            

        return $validator;
    }
	/**
	*	to upload the file.
	*/
	public function _processFile($req) {

	
		$file = $req['file'];
		if ($file['error'] == 0) {
			$name = $req['file']['name'];

		$path = WWW_ROOT . 'files' . DS . $name;
			if (is_uploaded_file($req['file']['tmp_name'])
				&& move_uploaded_file($req['file']['tmp_name'], $path)
			) {

				return true;
			}
	    }
		return false;
	}

}