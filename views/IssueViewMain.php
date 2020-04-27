<?php


class IssueViewMain extends IssuesView
{
    public function output()
    {
        echo '<div class="container">';
        foreach ($this->issues->issueList as $issue) {
            echo '<div class="mx-auto my-2 my-sm-3 my-lg-4 p-3">';
            echo '<div class="row">'
                . '<div class="col">' . 'Имя пользователя: ' . $issue['user name'] . '</div>'
                . (($issue['performed']) ? '<span class="badge badge-success">Выполнено</span>'
                    : '<span class="badge badge-dark">Не выполнено</span>')
                . (($issue['adminEdited']) ? '<span class="badge badge-danger">Отредактировано администратором</span>' : '')
                . '</div>';
            echo '<div class="row">'
                . '<div class="col">' . 'Email: ' . $issue['email'] . '</div>'
                . '</div>';
            echo '<div class="row">'
                . '<div class="col">' . 'Текст: ' . $issue['text'] . '</div>'
                . '</div>';
            echo '</div>';
        }
        echo '</div>';

        echo $this->pagination;
    }
}