<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'jxtools',
    'title'        => 'jxTools - Collection of Development Tools',
    'description'  => array(
                        'de' => 'Eine Sammlung von Entwicklungstools.',
                        'en' => 'A Collection of Development Tools.'
                        ),
    'thumbnail'    => 'jxtools.png',
    'version'      => '0.1.0',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxTools',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
                        'jxtgenuid'     => 'jxmods/jxtools/application/controllers/admin/jxtgenuid.php'
                        ),
    'templates'    => array(
                        'jxtgenuid.tpl' => 'jxmods/jxtools/application/views/admin/tpl/jxtgenuid.tpl'
                        ),
    'events'       => array(
                        ),
    'settings' => array(
                        )
);