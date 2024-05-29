<?
       //behavior: functions
      function render(array $user): string {
        $template = "<div>" .
                        "<h2>{$user['username']}</h2>" .
                    "</div>";
        return $template;
    }

?>