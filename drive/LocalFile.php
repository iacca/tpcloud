<?php
class LocalFile {
    public $fileName;
    public $fileId;
    public $dateLastModified;
    public $permissions;
    
    public function __construct($fileName,$fileId,$dateLastModified){
        $this->fileName=$fileName;
        $this->fileId=$fileId;
        $this->dateLastModified=$dateLastModified;
    }
}
?>