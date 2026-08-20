<?php

class Course
{
    public $cid;

    function __construct($cid)
    {
        $this->cid=$cid;
    }
}

class Lesson extends Course
{
    public $lid;

    function __construct($lid, Course $cid)
    {
        $this->lid=$lid;
        $this->cid=$cid->cid;
    }

}

class Quiz extends Lesson
{
    public $qid;
    
    function __construct($qid, Course $cid, Lesson $lid)
    {
        $this->qid=$qid;
        $this->cid=$cid->cid;
        $this->lid=$lid->lid;
    }
}

$cij = new Course(1);
$lij = new Lesson(100,$cij);

$qij = new Quiz(5,$cij,$lij);

//Serialising the objects

//Object serialization in PHP is the process of converting a live,
// in-memory object into a storable byte-stream string format.
$c=serialize($cij);

$l=serialize($lij);

$q=serialize($qij);

echo $c."<br><br>";
echo $l."<br><br>";
echo $q."<br><br>";
?>