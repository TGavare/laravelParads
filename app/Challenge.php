<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

    protected $table = 'challenge';

    private $title;

    private $desc;

    private $keyword;

    private $date_start;

    private $date_end;

    private $image;

    public function __construct (
        $title,
        $desc,
        $keyword = null,
        $date_start = null,
        $date_end = null,
        $image = null,
        $attributes = []
    )
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->keyword = $keyword;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->image = $image;
        parent::__construct($attributes);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * @param mixed $date_start
     */
    public function setDateStart($date_start): void
    {
        $this->date_start = $date_start;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param mixed $date_end
     */
    public function setDateEnd($date_end): void
    {
        $this->date_end = $date_end;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

}
