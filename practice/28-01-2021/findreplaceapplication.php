<?php
    $offset = 0;

    if (isset($_POST['text']) && isset($_POST['find']) && isset($_POST['replace'])) {
        $text = $_POST['text'];
        $find = $_POST['find'];
        $replace = $_POST['replace'];

        $find_len = strlen($find);

        if (!empty($_POST['text']) && !empty($_POST['find']) && !empty($_POST['replace'])) {
            while ($string_pos = strpos($text, $find, $offset)) {
                $offset = $string_pos + $find_len;
                $text = substr_replace($text,$replace,$string_pos,$find_len);
            }
        }
    }

?>

<form action="#" method="POST">
    <textarea name="text" cols="30" rows="6"><?php echo $text; ?></textarea><br><br>
    Find For: <br>
    <input type="text" name="find"><br><br>
    Replace With : <br>
    <input type="text" name="replace"><br><br>
    <input type="submit" value="Find and Replace">
</form>