<?php


class IssueViewAdmin extends IssuesView
{
    public function output()
    {
        echo '<div class="container">';
        foreach ($this->issues->issueList as $issue) {
            echo '<div class="mx-auto my-2 my-sm-3 my-lg-4 p-3">';
            echo '<div class="row">'
                . '<div class="col">' . 'Имя пользователя: ' . $issue['user name'] . '</div>'
                . (($issue['performed']) ? '<span class="badge badge-success">Выполнено</span>'
                    : '<form method="post" action="../models/changePerformed.php">
                        <input type="hidden" name="id" value="' . $issue['id'] . '" />
                        <button type="submit" name="submit">Выполнить</button></form>')
                . (($issue['adminEdited']) ? '<span class="badge badge-danger">Отредактировано администратором</span>' : '')
                . '</div>';
            echo '<div class="row">'
                . '<div class="col">' . 'Email: ' . $issue['email'] . '</div>'
                . '</div>';
            echo '<div class="row">'
                . '<div class="col">' . '<form method="post" action="../models/changeText.php">
                                              <input name="textarea" class="col-md-auto" type="text" value=\'' . $issue['text'] . '\'>
                                              <input type="hidden" name="id" value="' . $issue['id'] . '" />
                                              <button type="submit" name="button">Сохранить изменения</button>                                    
                                            </form>'
                . '</div></div>';
            echo '</div>';
        }
        echo '</div>';

        echo $this->pagination;
    }
}