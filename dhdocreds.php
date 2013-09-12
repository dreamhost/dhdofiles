<?php return array(
    'includes' => array('_aws'),
    'services' => array(
        'DreamObjects' => array(
            'extends' => 's3',
            'params' => array(
                'key'   => 'Your_Access_Key',
                'secret'    => 'Your_Secret_Key',
                'base_url'  => 'https://objects.dreamhost.com'
            )
        )
    )
);
?>
