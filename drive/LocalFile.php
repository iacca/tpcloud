<?php
class LocalFile {
    public $fileName;
    public $fileId;
    public $modifiedDate;
    public $permissions;
    
    public function __construct($fileName,$fileId,$dateLastModified){
        $this->fileName=$fileName;
        $this->fileId=$fileId;
        $this->modifiedDate=$dateLastModified;
    }
}
?>