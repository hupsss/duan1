<?php
    include "../../model/pdo.php";

    $sql = "SELECT * FROM comments ORDER BY date_comment DESC";

    $result = pdo_query($sql);

    $count = count($result);
    $output = '';
    if($count > 0) {
        foreach($result as $bl) {
            $output = '
                <li class="comment">
                    <div class="user-info"><img src="path_to_user_image.jpg" alt="User Image">
                        <div class="username">"'.$bl['id_account'].'"</div>
                    </div>
                    <div class="comment-text">"'.$bl['content'].'"</div>
                    <div class="comment-date">"'.$bl['date_comment'].'"</div>
                    <div class="actions">
                        <a href="" class="actions">Edit</a>
                        <div></div><a class="delete" href="">Delete</a>
                    </div>

                </li>
            ';
        }
    }
?>