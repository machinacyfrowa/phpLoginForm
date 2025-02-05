<?php
class Upload {
    private $name;
    private $path;
    private $tempName;
    public function __construct(array $files) {
        $this->name = $files['name'];
        $this->tempName = $files['tmp_name'];
        $this->path = "uploads/".$this->name; 
        move_uploaded_file($this->tempName, $this->path);
    }
}

?>