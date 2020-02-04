<?php


interface MenuChild
{
function  setTitle($title);
function  getTitle();
function getId();
function setLink($url);
function getLink();
function setMeta($key,$val);
function getMeta($key);
function getType();
function getChilds();
function setChild(MenuChild $child);
}

interface Menu{

}

interface MenuRipo{
    function Save(Menu $menu);
    function Get     ($id);
    function delet   ($id);
    function getAll  ();
};


class  MainBtn implements  MenuChild{
    private $title;
    private $id;
    private $link;
    private $meta=[];
    private $type;
    private $child=[];

    function setTitle($title)
    {
        $this->title=$title;
    }

    function getTitle()
    {
        return  $this->title;
    }

    function getId()
    {
       $this->id;
    }

    function setLink($url)
    {
        $this->link=$url;
    }

    function getLink()
    {
      return   $this->link;
    }

    function setMeta($key,$val)
    {
        $this->meta[$key]=$val;
    }

    function getMeta($key)
    {
     return  $this->meta[$key];
    }

    function getType()
    {
        return $this->type;
    }

    function getChilds()
    {
       return $this->child;
    }

    function setChild(MenuChild $child)
    {
        $this->child[]=$child;
    }
}




$mai=new MainBtn();
$mai->setMeta("hi","this is test for meta");


