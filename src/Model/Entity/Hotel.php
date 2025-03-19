<?php
namespace Adamogris\WebtViewsInMvc\Model\Entity;
class Hotel
{

    public function __construct(protected string $name, protected string $description, protected string $imgPath)
    {
        $this->name = $name;
        $this->description = $description;
        $this->imgPath = $imgPath;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getImgPath(): string
    {
        return $this->imgPath;
    }

    public function setImgPath(string $imgPath): void
    {
        $this->imgPath = $imgPath;
    }


}