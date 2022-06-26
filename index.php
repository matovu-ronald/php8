<?php

class Conversation
{
}

$object = new Conversation();

// switch (get_class($object)) {
//     case "Conversation":
//         $type = "started_conversation";
//         break;
//     case "Reply":
//         $type = "replied_to_conversation";
//         break;
//     case "Comment":
//         $type = "commented_on_lesson";
//         break;
// }

$type = match (get_class($object)) {
    'Conversation' => 'started_conversation',
    'Reply' => 'replied_to_conversation',
    'Comment' => 'commented_on_lesson'
};

echo $type;
