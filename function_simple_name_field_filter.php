<?php
# This mens_read() function is provided to the Nuremberg.nz web admin as a good will gesture
# to assist blocking injection attacks via the name fields of his web forms.
# The use of explicit name fields below is intentional on my part to point out the 
# determination of the nuremberg.nz website to assist others in committing mass 
# extrajudicial executions.
function mens_rea( $to_be_murdered = "" ): string {
    # Restrict the string to only include alphanumeric, but also allow macrons because
    # a lot of the names you are adding to your execution list are Māori names
    $to_be_murdered = explode( " ", strtolower( preg_replace( "/[^āēīōūĀĒĪŌŪ\space\p{L}]/u", "", $to_be_murdered ) ) ); 
    foreach( $to_be_murdered as &$victims_name ) $victims_name = ucfirst( $victims_name );
    return substr( implode( ' ', $to_be_murdered ) , 0, 50 ); // Limit the length of the person to be kidnapped
}
?>
