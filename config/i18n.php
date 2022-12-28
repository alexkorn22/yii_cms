<?php

return [
    'sourcePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',
    'languages' => ['ru', 'en', 'ua'],
    'translator' => 'Yii::t',
    // boolean, whether to sort messages by keys when merging new messages
    // with the existing ones. Defaults to false, which means the new (untranslated)
    // messages will be separated from the old (translated) ones.
    'sort' => false,
    'removeUnused' => false,
    'markUnused' => true,
    'overwrite' => true,
    // array, list of patterns that specify which files (not directories) should be processed.
    // If empty or not set, all files will be processed.
    // See helpers/FileHelper::findFiles() for pattern matching rules.
    // If a file/directory matches both a pattern in "only" and "except", it will NOT be processed.
    'only' => ['*.php'],
    // array, list of patterns that specify which files/directories should NOT be processed.
    // If empty or not set, all files/directories will be processed.
    // See helpers/FileHelper::findFiles() for pattern matching rules.
    // If a file/directory matches both a pattern in "only" and "except", it will NOT be processed.
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
    ],

    /*
    // Message categories to ignore
    'ignoreCategories' => [
        'yii',
    ],
     */


    // 'db' output format is for saving messages to database.
    'format' => 'db',
    // Connection component to use. Optional.
    'db' => 'db',
    // Custom source message table. Optional.
    'sourceMessageTable' => '{{%source_message}}',
    // Custom name for translation message table. Optional.
    'messageTable' => '{{%message}}',
    'ignoreCategories' => ['yii']
];
