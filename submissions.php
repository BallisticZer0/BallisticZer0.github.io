<?php
  $text_result = "Suggestions.html";

  if ($_TEXT["Suggestions"] ["error"] > 0)
  {
    $text_result .="No text found or invalid text";
    $text_result .="Error code: " .$_TEXT["Suggestions"]["error"] . "<br>";
  } else{

    $text_result .=
    "Submit: " . $_TEXT["Suggestions"]["name"] . "<br>" .
    "Type: "   .$_TEXT["Suggestions"]["type"] . "<br>" .
    "Temp text: " .$_TEXT["Suggestions"]["temp_name"] . "<br>";

    move_submited_text($_TEXT["Suggestions"]["tmp_name"],
    "/Desktop/Youtube website/Suggestions/" . $_TEXT["Suggestions"]["name"]);

    $text_result .= "Thanks for the suggestion!";
  }
?>
