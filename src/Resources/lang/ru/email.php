<?php

return [
    'greeting' => 'Привет,',
    'clicks' => [
        'subject' => 'Ссылка нажата',
        'desc' => 'Получатель щелкнул ссылку в вашем письме, данные которого касаются этого письма ниже:'
    ],
    'delivered' => [
        'subject' => 'Сообщение доставлено',
        'desc' => 'Письмо было успешно доставлено получателю, данные о доставке которого приведены ниже:'
    ],
    'opened' => [
        'subject' => 'Сообщение открыто',
        'desc' => 'Письмо было успешно открыто получателем, данные о доставке которого приведены ниже:'
    ],
    'perm_failure' => [
        'subject' => 'Постоянная ошибка отправки',
        'desc' => 'Письмо окончательно не доставлено получателю, данные о доставке которого приведены ниже:'
    ],
    'spam' => [
        'subject' => 'Отчет о спаме',
        'desc' => 'К сожалению, кто-то сообщил о ваших электронных письмах как о спаме, данные о доставке которых приведены ниже:'
    ],
    'temp_failure' => [
        'subject' => 'Отправка временного сбоя',
        'desc' => 'Письмо временно не доставлено получателю, данные о доставке которого приведены ниже:'
    ],
    'unsubscribe' => [
        'subject' => 'Отписался',
        'desc' => 'К сожалению, кто-то отписался от вашего списка рассылки, данные о доставке которого приведены ниже:'
    ],
    'fields' => [
        'recipient' => 'Получатель',
        'msg' => 'Данные сообщения',
        'msg_to' => 'к',
        'msg_id' => 'ID сообщения',
        'msg_from' => 'От',
        'msg_subject' => 'Предмет',
        'tags' => 'Теги',
        'variables' => 'переменные'
    ]
];
