<?php
return [
    'client_id'=> env('PAYPAL_CLIENT_ID',''),
    'SECRET'=> env('PAYPAL_SECRET',''),
    'setting'=> array(
        'mode'=>env ('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut'=>30,
       'log.LogEnabed'=>30,
      'log.FileName'=>storage_path().'/logs/paypal.log',
      'log.LogLevel'=>'ERROR'
    ),
    

];