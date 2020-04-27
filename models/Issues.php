<?php
include_once "../configDB.php";

class Issues
{
    private $numOfTask = 3;
    public $issueList;
    public $totalPageCnt;
    public $page;

    public function __construct($page)
    {
        global $connect;
        $this->page = $page;
        $result = $connect->query("SELECT COUNT(*) AS cnt FROM issues");
        $issueCnt = mysqli_fetch_object($result)->cnt;

        $this->totalPageCnt = intval(($issueCnt - 1) / $this->numOfTask) + 1;

        $page = intval($page);
        if ($page > $this->totalPageCnt) $page = $this->totalPageCnt;
        $start = ($page - 1) * $this->numOfTask;
        $query = "SELECT * FROM issues ORDER BY "
            . (isset($_SESSION['sortType']) ? $_SESSION['sortType'] : '`user name`') . ' ' . $_SESSION['priority']
            . " LIMIT $start, $this->numOfTask";

        $result = $connect->query($query);

        while ($issue = $result->fetch_assoc()) {
            $this->issueList[] = $issue;
        }
    }

}