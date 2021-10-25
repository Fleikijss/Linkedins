<?php
header('Content-type: application/json');
include('../private/config.php');

$output = [
    'status' => false
];

if (isset($_GET['api-name']) && is_string($_GET['api-name'])) {
    include_once(PRIVATE_DIR . "/classes/DB.php");
    $project_db = new DB('posts');
    if ($_GET['api-name'] == 'new_post') {
        if (isset($_POST['new_post']) && is_string($_POST['new_post'])) {


        $project_db->add([
            'author_id' => 1,
            'post_message' => $_POST['new_post']
        ]);
        $output['status'] = true;
        }
    }
    elseif ($_GET['api-name'] == 'posts') {
        $data = $project_db->getAll();
        if ($data['status']) {
            $entries = [];
            foreach($data['entities'] as $post) {
                
                $template = [
                    'author' => 'Vitālijs',
                    'fallowers' => 0,
                    'created_at' => 0,
                    'content' => $post['post_message'],
                    'likes' => 0,
                    'comment_count' => 0
                ];
            }
            

            
            $entries[] = $template;   
            $output['status'] = true;
            $output['posts'] = $entries;
        }
    }
    elseif ($_GET['api-name'] == 'rand_post') {
        include_once(PRIVATE_DIR . "/classes/Random.php");
        $rand_generator = new Random();
        
        $template = [
            'author' => 'Vitālijs',
            'image_path' => 'images/IMG_2699.png',
            'fallowers' => 0,
            'created_at' => 0,
            'content' => "",
            'likes' => 0,
            'comment_count' => 0
        ];
        
        $entries = [];
        define('POSTS_COUNT', 10);
        
        $count = POSTS_COUNT;
        
        if (
            isset($_GET['count']) &&
            is_string($_GET['count']) &&
            (int)$_GET['count'] == $_GET['count']
        ) {
            $output['count'] = (int)$_GET['count'];
            $count = $output['count'];
        }
        
        for ($i = 0; $i < $count; $i++) {
            $template['fallowers'] = $rand_generator->getFollowerCount();
            $template['created_at'] = $rand_generator->getCreateAt();
            $template['likes'] = $rand_generator->getLikesCount();
            $template['comment_count'] = $rand_generator->getCommentCount();
        
            $template['content'] = $rand_generator->getContent();
            $template['image_path'] = $rand_generator->getImage();
        
            $template['author'] = $rand_generator->getName();
        
            $entries[] = $template;
        }
        
        
        $output['status'] = true;
        $output['posts'] = $entries;
    }
}



echo json_encode($output, JSON_PRETTY_PRINT);