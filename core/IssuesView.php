<?php

Class IssuesView
{
    protected $issues;
    protected $pagination;

    public function __construct($model)
    {
        $this->issues = $model;

        $page = $this->issues->page;
        $total = $this->issues->totalPageCnt;

        $this->pagination = '<ul class="pagination justify-content-center">';
        $tag1 = '<li class="page-item"><a class="page-link" href= ./page?page=';
        $tag1close = '>';
        $tag2 = '</a> </li>';


        if ($page > 2) {
            $this->pagination .= $tag1 . '1' . $tag1close . '<<' . $tag2;
        }
        if ($page > 1) {
            $this->pagination .= $tag1 . ($page - 1) . $tag1close . '<' . $tag2;
        }
        $this->pagination .= $tag1 . $page . $tag1close . $page . $tag2;
        if ($page < $total) {
            $this->pagination .= $tag1 . ($page + 1) . $tag1close . '>' . $tag2;
        }
        if ($page + 1 < $total) {
            $this->pagination .= $tag1 . ($page + 2) . $tag1close . '>>' . $tag2;
        }
        $this->pagination .= '</ul>';

    }

    function output()
    {
    }
}