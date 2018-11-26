<?php

namespace File;

class File
{
    private $name;
    private $type;
    private $size;
    private $tempName;
    private $error;

    public function __construct(array $fileData)
    {
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
        $this->size = $fileData['size'];
        $this->tempName = $fileData['tmp_name'];
        $this->error = $fileData['error'];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getError(): int
    {
        return $this->error;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getTempName(): string
    {
        return $this->tempName;
    }

    public function save(): string
    {
        $newName = time() . $this->name;
        move_uploaded_file($this->tempName, $_SERVER["DOCUMENT_ROOT"] . "/img/" . $newName);
        return $newName;
    }

    public static function new($file)
    {
        return new File($file);
    }
}