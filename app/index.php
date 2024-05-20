<?

    //structure
    $user= [
        'username' => 'johny777',
        'email'    => 'johny777@example.host',
        'password' => '1234567',
        'active'   => true,
        'rating'   => 4.5
    ];

    //behavior: functions
    function renderProfile(array $user): string {
        $template = "<div>" .
                        "<h2>{$user['username']}</h2>" .
                    "</div>";
        return $template;
    }


?>

<?

    $html = renderProfile($user);

?>

<? print($html)?>