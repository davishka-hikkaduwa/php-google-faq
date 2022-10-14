<style>
    li{
        list-style: none;
    }
</style>


<?php
/*
    Riscrivere questa pagina del sito google
    https://policies.google.com/faq.
    Ci sono diverse domande con relative risposte.
    Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
*/

$db = [
    'How are you implementing the recent Court of Justice of the European Union (CJEU)
     decision on the right to be forgotten?' => [
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ],
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ],
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ]
    ],
     'How does Google protect my privacy and keep my information secure?' => [
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ],
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ]
    ],
    'Why is my account associated with a country?' => [
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ]
    ],
    'Determining the country associated with your account' => [
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ],
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ],
        [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, tempora eaque corporis nemo eveniet, 
            doloremque cum nisi enim distinctio libero alias vel quam quia excepturi non dignissimos! Maiores, 
            necessitatibus nam.'
        ],
    ]
];

foreach ($db as $question => $section) {
    ?>
        <div>
            <h3><?= $question ?></h3>
        </div>
    <?php
    foreach($section as $answers){
        ?>
        <ul>
            <?php
                foreach($answers as $answer){
                    echo '<li>' . $answer . '</li>';
                }
            ?>
        </ul>
        <?php
    }
}


?>

